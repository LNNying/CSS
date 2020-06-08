
let onProgress = function (xhr) {
    if (xhr.lengthComputable) {
        var percentComplete = xhr.loaded / xhr.total * 100;
        console.log(Math.round(percentComplete, 2) + '% downloaded');
    }
};
let onError = function (xhr) {};
$(function() {
    // 下拉框选择
    /**
     * 两种加载层
     * */
    // loading = layer.load(1, {
    //     shade: [0.3,'#a9a9a9'],
    //     content: '数据加载中..',
    //     success: function (layero) {
    //         layero.find('.layui-layer-content').css({
    //             'padding-top': '6px',
    //             'width': '150px',
    //             'padding-left': '40px'
    //         });
    //         layero.find('.layui-layer-ico16, .layui-layer-loading .layui-layer-loading2').css({
    //             'width': '150px !important',
    //             'background-position': '2px 0 !important'
    //         });
    //     }
    // });
    loading = layer.msg('数据加载中。。。', {
        icon: 16,
        time: false,
        shade : [0.5 , '#000' , true],
        skin: 'load-class'
    });
    // /** 生成场景对象 */
    scene = new THREE.Scene();
    clock = new THREE.Clock();
    lod = new THREE.LOD();
    podGeometry = new THREE.BufferGeometry();

    THREE.Loader.Handlers.add( /\.dds$/i, new THREE.DDSLoader() );
    let pallet = new Promise((resolve,reject) => {
        // 托盘
        let podMtl = new THREE.MTLLoader();
        podMtl.load('./obj/mtl/tuopan.mtl', function (materail) {
            materail.preload();
            let podObj = new THREE.OBJLoader();
            podObj.setMaterials(materail);
            podObj.load('./obj/tuopan.obj', function (obj) {
                obj.traverse(function (child) {
                    if (child instanceof THREE.Mesh) {
                        child.material.side = THREE.DoubleSide;  // 添加子项双面
                        child.material.receiveShadow = true; // 添加物体接收光
                        child.material.map = THREE.ImageUtils.loadTexture( 'img/tuo2.jpg');
                        child.material.needsUpdate = true;
                    }
                });
                obj.rotateY(Math.PI / 2);
                window.objPallet = obj;
                console.log('加载托盘完成');
                resolve("托盘成功")
            }, onProgress, onError)
        })
    });
    let car = new Promise((resolve, reject) => {
        // 加载小车
        let carMtl = new THREE.MTLLoader();
        carMtl.load('./obj/mtl/小车.mtl', function (materail) {
            materail.preload();
            let carObj = new THREE.OBJLoader();
            carObj.setMaterials(materail);
            carObj.load('./obj/小车.obj', function (obj) {
                obj.traverse(function (child) {
                    if (child instanceof THREE.Mesh) {
                        child.material.side = THREE.DoubleSide;  // 添加子项双面
                        child.material.receiveShadow = true; // 添加物体接收光
                    }

                });
                obj.rotation.y = Math.PI / 2;
                window.objCar = obj;
                console.log('加载小车完成');
                resolve("小车成功")
            }, onProgress, onError)
        })
    })
    // 箱子 货物
    let boxP = new Promise((resolve, reject) => {
        let boxMtl = new THREE.MTLLoader();
        boxMtl.load('./obj/mtl/box.mtl', function (materail) {
            materail.preload();
            let boxObj = new THREE.OBJLoader();
            boxObj.setMaterials(materail);
            boxObj.load('./obj/box.obj', function (obj) {
                obj.traverse(function (child) {
                    if (child instanceof THREE.Mesh) {
                        child.material.side = THREE.DoubleSide;  // 添加子项双面
                        child.material.receiveShadow = true; // 添加物体接收光
                        child.material.map = THREE.ImageUtils.loadTexture( 'img/box.jpg');
                        child.material.needsUpdate = true;
                    }
                });
                window.box = obj;
                console.log('加载货物完成');
                resolve("货物成功")
            }, onProgress, onError)
        })
    });
    let pod = new Promise((resolve, reject) => {
        // 加载饼图
        stock();
        stockNum(floor);
        createPod();
        // getPodModal();
        console.log("加载整体仓库完成");
        resolve("加载整体仓库完成")
    }, onProgress, onError);
    Promise.all([pod, pallet, car, boxP]).then((result) => {
        init();
    }).catch(error => {
        console.log(error);
    })
});


function init() {
    window.palletList = [];
    window.carList = [];
    window.boxList = [];

    /** 加载统计对象 */
    initStat();
    /** 加载渲染器 */
    initRender();
    /** 加载相机 */
    initCamera();
    /** 加载鼠标控制器 */
    initControls();
    createAmbientLight();
    initRay();
    renderScene();
    getStorageInfo();
}

/** 测试*/
function testData() {
    let z1 = 0;
    setInterval(function () {
        if (window.carList.length !== 0 && window.palletList.length !== 0 && window.boxList.length !== 0) {
            if (window.palletList[0].position.z !== -70) {
                window.carList[0].position.z -= 1;
                window.palletList[0].position.z -= 1;
                window.boxList[0].position.z -= 1;
            } else {
                // 旋转角度
                z1++;
                if (z1 <= 90) {
                    window.carList[0].rotation.y = -Math.PI * (z1 / 180.0);
                    // window.carList[0].position.x = -z1
                }

                console.log(window.carList[0].rotation.y);
            }
        }
        // if (window.palletList[0].position.z === -70) {
        //     window.palletList[0].position.z = 5;
        //     window.boxList[0].position.z = 45;
        //     window.carList[0].position.z = 10;
        // }
    }, 100)
}

/** 加载全库货架模型 */
function createPod() {
    let carMtl = new THREE.MTLLoader();
    carMtl.load('./obj/mtl/全库一体.mtl', function (materail) {
        materail.preload();
        let carObj = new THREE.OBJLoader();
        carObj.setMaterials(materail);
        carObj.load('./obj/全库一体.obj', function (obj) {
            obj.traverse(function (child) {
                if (child instanceof THREE.Mesh) {
                    child.material.side = THREE.DoubleSide;  // 添加子项双面
                    child.material.receiveShadow = true; // 添加物体接收光
                    if (child.name !== 'Plane.007') {
                        child.material.map = THREE.ImageUtils.loadTexture('img/5.jpg');
                        child.material.needsUpdate = true;
                    }
                }
            });
            obj.rotation.y = Math.PI / 2;
            obj.position.z = -150;
            obj.position.x = 100;
            obj.position.y = 5;
            scene.add(obj);
            layer.close(loading);
            console.log('加载货架完成');
        }, onProgress, onError)
    })
}

/** 小车*/
function createCar(car) {
    let obj = null
    obj = window.objCar.clone();
    obj.position.x = car.x;
    obj.position.y = car.y;
    obj.position.z = car.z - 0.3;
    car.id = window.carList.length;
    window.carList[car.id] = obj;
    scene.add(obj);
}

/** 托盘 */
function createPallet(pallet) {
    let obj = null
    obj = window.objPallet.clone();
    obj.position.x = pallet.x;
    obj.position.y = pallet.y;
    obj.position.z = pallet.z;
    window.palletList[pallet.id] = obj;
    scene.add(obj);
}

/** 箱子货物 */
function createBox(box) {
    let obj = null
    obj = window.box.clone();
    obj.position.x = box.x;
    obj.position.y = box.y + 1.5;
    obj.position.z = box.z;
    window.boxList[box.id] = obj;
    scene.add(obj);
}

/**
 * 获取3d货架模型
 * */
function getPodModal() {
    let podModal = null;
    $.ajax({
        type: 'post',
        url: ip + '/api/base-map/getPodModal',
        async: false,
        dataType: 'json',
        success: function (data) {
            if (data.returnCode === 200) {
                if (data.returnData) {
                    podModal = JSON.parse(data.returnData.content);
                    scene.add(podModal);
                } else {
                    createPod();
                }
            } else {
                console.log(data.returnMsg);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}

/**
 * 保存模型
 * */
function savePodModal(data) {
    let body = {
        content: "1"
    };
    $.ajax({
        type: 'post',
        url: ip + '/api/base-map/savePodModal',
        contentType: "application/json;charset=utf-8",
        data: body,
        dataType: 'json',
        success: function (data) {
            if (data.returnCode === 200) {
                console.log('货架模型保存成功');
            } else {
                console.log(data.returnMsg);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}

/** 获取点位信息*/
/**
 * x对应数据库中y 模型横向间距为10 对应模型原点为-115.5   -115.5 + (10 * 43)
 * z对应数据库中x,模型纵向间距为10 对应模型原点为105.5    105.3 - (10 * 51)
 * y对应数据库中z,模型3Dz轴方向18  对应模型原点为12.5  但是模型的三楼偏低需要减个0.5 最好判断一下楼层
 */
function getStorageInfo() {
    $.ajax({
        type: 'post',
        url: ip + '/api/wms_storage_loc/getMapInfoBy3D',
        async: false,
        dataType: 'json',
        success: function (data) {
            if (data.returnCode === 200) {
                let list = data.returnData;
                if (list.length !== 0) {
                    // 倒叙循环 比正序稍微好一点
                    /**
                     * x:51  y: 43
                     **/
                    for (let i = list.length - 1; i >= 0; i--) {
                        let offsetY = 0;
                        if (list[i].cooZ === 2.000) {
                            offsetY = 18
                        } else if (list[i].cooZ === 3.000) {
                            offsetY = 35.5
                        } else {
                            offsetY = 0
                        }
                        let x = -115.5 + (10 * list[i].cooY);
                        let y = 12.5 + offsetY;
                        let z = 105.3 - (10 * list[i].cooX);
                        let dataList = {
                            code: list[i].locCode,
                            x: x,
                            y: y,
                            z: z,
                            id: i,
                            type: list[i].locTypCode,
                            type3d: list[i].way3dType,
                            indEmp: list[i].indEmp
                        }
                        createModal(dataList);
                    }
                } else {
                    console.log('获取数据为空');
                }
            } else {
                console.log(data.returnMsg);
            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}

/** 总生成模型 */
function createModal(data) {
    createPallet(data);
    createCar(data);
    createBox(data);
    // createTrack(data);
    // createAisle(data);
}


/** 初始化 Raycaster 光线投射 */
function initRay() {
    raycaster = new THREE.Raycaster();
    mouse = new THREE.Vector2();
}

/** 初始化 stats 统计对象 */
function initStat() {
    stat = new Stats();
    stat.setMode(0);
    console.log(stat.domElement);
    stat.domElement.style.position = 'absolute';
    stat.domElement.style.right = '0px';
    stat.domElement.style.top = '0px';
    $('#stat').append(stat.domElement);
}

/** 初始化渲染器 */
function initRender() {
    // 辅助坐标系
    // let axisHelper = new THREE.AxisHelper(10000)
    // scene.add(axisHelper)
    webglRender = new THREE.WebGLRenderer({antialias: true, alpha: true}); // antialias 抗锯齿
    webglRender.setSize(window.innerWidth, window.innerHeight);
    webglRender.setClearColor("#394570", 1.0); // 0xeeeeee
    render = webglRender;
    render.shadowMap.enabled = true; // 允许阴影投射
    document.body.appendChild(render.domElement);
    // 页面重置
    window.addEventListener('resize', onWindowResize, false);
    // 鼠标点击
    // window.addEventListener('mousedown', onMouseDown, false);
}

/** 初始化相机 */
function initCamera() {
    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 2000);
    camera.position.x = -400;
    camera.position.y = 250;
    camera.position.z = 600;
    let target = new THREE.Vector3(0, 0, 0);
    camera.lookAt(scene.position);

}

/** 创建一个 DirectionalLight 半球光 */
function createAmbientLight() {
    // 半球光
    let light = new THREE.HemisphereLight(0xffffbb, 0x080820, 1);
    scene.add(light);
    var ambient = new THREE.AmbientLight('#86827c');
    scene.add(ambient);
}


/** 初始化鼠标控制器 */
function initControls() {
    controls = new THREE.OrbitControls(camera, render.domElement);
}

/** 鼠标点击事件 */
function onMouseDown(event) {
    event.preventDefault();
    // 将鼠标位置归一化为设备坐标。x 和 y 方向的取值范围是 (-1 to +1)
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
}

/** 当浏览器窗口大小变化时触发 */
function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    render.setSize(window.innerWidth, window.innerHeight);
}

/** 渲染场景 */
function renderScene() {
    update();
    intersects = raycaster.intersectObjects(scene.children);
    raycaster.setFromCamera(mouse, camera);
    render.render(scene, camera);
    requestAnimationFrame(renderScene);
}

/** 所有更新*/
function update() {
    stat.update();
    controls.update(clock.getDelta());
}

$(function () {
    // 顶部点击事件
    $('#dataClick').click(() => {
        $('#libraryName').text('数字库区')
    });
    $('#orderClick').click(() => {
        $('#libraryName').text('订单任务')
    });
    $('#libraryClick').click(() => {
        $('#libraryName').text('库存管理')
    });
    $('#equipClick').click(() => {
        $('#libraryName').text('设备维护')
    });
// 底部点击事件
    $('#oneFloor').click(() => {
        console.log('一区仓库');
    });
    $('#twoFloor').click(() => {
        console.log('二区仓库');
    });
    $('#threeFloor').click(() => {
        console.log('三区仓库');
    });
})
