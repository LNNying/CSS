let onProgress = function (xhr) {
    if (xhr.lengthComputable) {
        var percentComplete = xhr.loaded / xhr.total * 100;
        console.log(Math.round(percentComplete, 2) + '% downloaded');
    }
};
let onError = function (xhr) {
};
$(function () {
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
        shade: [0.5, '#000', true],
        skin: 'load-class'
    });
    // /** 生成场景对象 */
    scene = new THREE.Scene();
    clock = new THREE.Clock();
    podGeometry = new THREE.BufferGeometry();


    THREE.Loader.Handlers.add(/\.dds$/i, new THREE.DDSLoader());
    let pallet = new Promise((resolve, reject) => {
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
                        child.material.map = THREE.ImageUtils.loadTexture('img/tuo2.jpg');
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
                        child.material.map = THREE.ImageUtils.loadTexture('img/box.jpg');
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
        // getPodModal();
        createPod();
        console.log("加载整体仓库完成");
        resolve("加载整体仓库完成")
    }, onProgress, onError);
    Promise.all([pod, pallet, car, boxP]).then((result) => {
        init();
        // createCarList();
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

/** 加载全库货架模型 */
function createPod() {
    let carMtl = new THREE.MTLLoader();
    carMtl.load('./obj/mtl/全库一体终.mtl', function (materail) {
        materail.preload();
        let carObj = new THREE.OBJLoader();
        carObj.setMaterials(materail);
        carObj.load('./obj/全库一体终.obj', function (obj) {
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
            obj.name = '货架模型'
            scene.add(obj);
            layer.close(loading);
            // 连接socket 开始跑车
            buildWebSocket()
            // testData();
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
    obj.name = '小车';
    window.carList[car.id] = obj;
    for (let i = 0, len = obj.children.length; i < len; i++) {
        obj.children[i].name = '小车1'
        group.push(obj.children[i])
    }
    scene.add(obj);
}

/** 托盘 */
function createPallet(pallet) {
    let obj = null
    obj = window.objPallet.clone();
    obj.position.x = pallet.x;
    obj.position.y = pallet.y;
    obj.position.z = pallet.z;
    obj.name = '托盘';
    window.palletList[pallet.id] = obj;
    for (let i = 0, len = obj.children.length; i < len; i++) {
        obj.children[i].name = '托盘1'
        group.push(obj.children[i])
    }
    scene.add(obj);
}

/** 箱子货物 */
function createBox(box) {
    let obj = null
    obj = window.box.clone();
    obj.position.x = box.x;
    obj.position.y = box.y + 1.5;
    obj.position.z = box.z;
    obj.name = '货物';
    window.boxList[box.id] = obj;
    for (let i = 0, len = obj.children.length; i < len; i++) {
        obj.children[i].name = '货物1'
        group.push(obj.children[i])
    }
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
 * x:51  y: 43
 * x对应数据库中y 模型横向间距为10 对应模型原点为315.5    315.5 - (10 * 43)
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
                    for (let i = list.length - 1; i >= 0; i--) {
                        let offsetY = 0;
                        if (list[i].cooZ === 2) {
                            offsetY = 18
                        } else if (list[i].cooZ === 3) {
                            offsetY = 35.5
                        } else {
                            offsetY = 0
                        }
                        let x = 315.5 - (10 * list[i].cooY);
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
    createBox(data);
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
    window.addEventListener('mousedown', onMouseDown, false);
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
    let ambient = new THREE.AmbientLight('#86827c');
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
    // console.log(scene);
    mouse.x = (event.clientX / render.domElement.clientWidth) * 2 - 1;
    mouse.y = -(event.clientY / render.domElement.clientHeight) * 2 + 1;
    raycaster.setFromCamera(mouse, camera);
    for (var i in scene.children) {
        if (scene.children[i] instanceof THREE.Group) {
            intersects = raycaster.intersectObjects(scene.children[i].children);
        } else if (scene.children[i] instanceof THREE.Mesh) {
            // intersects.push(raycaster.intersectObject(scene.children[i]));
        }
    }
    // console.log(group);
    // intersects = raycaster.intersectObjects(group, true);
    // console.log(intersects);
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
    render.render(scene, camera);
    TWEEN.update();
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
        $('#floorName').text('一楼')
        new TWEEN.Tween(camera.position).to({
            x: -200,
            y: 20,
            z: -400
        }, 2000).easing(TWEEN.Easing.Sinusoidal.InOut).start()
    });
    $('#twoFloor').click(() => {
        console.log('二区仓库');
        $('#floorName').text('二楼')
        new TWEEN.Tween(camera.position).to({
            x: -200,
            y: 50,
            z: -250
        }, 2000).easing(TWEEN.Easing.Sinusoidal.InOut).start()
    });
    $('#threeFloor').click(() => {
        console.log('三区仓库');
        $('#floorName').text('三楼')
        // let x = random(0, 20)
        // let info = {
        //     x: 315.5 - (10 * x),
        //     y: window.carList[0].position.y,
        //     z: window.carList[0].position.z
        // };
        // new TWEEN.Tween(window.carList[0].position).to(info, 1000).easing(TWEEN.Easing.Sinusoidal.InOut).start();
        new TWEEN.Tween(camera.position).to({
            x: 500,
            y: 120,
            z: 200
        }, 2000).easing(TWEEN.Easing.Sinusoidal.InOut).start()
    });
});

function createCarList() {
    for (let i = 0; i < 4; i++) {
        let info = {}
        let offsetY = 0;
        let y1 = random(1, 3)
        let x1 = random(0, 41) > 21 ? random(23, 40) : random(0, 20)
        if (y1 === 2) {
            offsetY = 18
        } else if (y1 === 3) {
            offsetY = 35.5
        } else {
            offsetY = 0
        }
        let x = 315.5 - (10 * x1);
        let y = 12.5 + offsetY;
        let z = 105.3 - (10 * random(0, 30));
        info = {
            x: x,
            z: z,
            y: y,
            id: i
        }
        createCar(info);
    }
}

function random(lower, upper) {
    return Math.floor(Math.random() * (upper - lower + 1)) + lower;
}

/** 测试
 * x => -  315.5  315.5 - (51 * 10)
 * z => -  105.5  105.5 - (43 * 10)
 * y => +  12.5
 * */
function testData() {
    let j = 1;
    setInterval(function () {
        j++;
        if (window.carList.length !== 0) {
            for (let i = 0, len = window.carList.length; i < len; i++) {
                // window.carList[i].position.x -= 1;
                let info = {
                    x: 315.5 - (10 * j),
                    y: window.carList[i].position.y,
                    z: window.carList[i].position.z
                };
                new TWEEN.Tween(window.carList[i].position).to(info, 100).easing(TWEEN.Easing.Sinusoidal.InOut).start();
            }
        }
    }, 100)
}


/**
 * websocket 通信连接后端 实时接收数据
 * */
function buildWebSocket() {
    if ('WebSocket' in window) {
        console.log('当前浏览器支持WebSocket');
        socket = new WebSocket(webSocketIp);
        // 判断连接状态
        switch (socket.readyState) {
            case WebSocket.CONNECTING:
                console.log('正在连接');
                break;
            case WebSocket.OPEN:
                console.log('连接成功');
                break;
            case WebSocket.CLOSING:
                console.log('正在关闭');
                break;
            case WebSocket.CLOSED:
                console.log('连接关闭或连接失败');
                break;
            default:
                console.log('无法判断的状态');
                break;
        }
        // 连接成功回调
        socket.onopen = function (e) {
            console.log('连接成功');
        };
        // 接收信息
        socket.onmessage = function (e) {
            message = e.data;
            handleData(message)
        };
        // 连接关闭回调
        socket.onclose = function (e) {
            console.log('连接被关闭');
            console.log(e);
        };
        // 连接失败回调
        socket.onerror = function (ev) {
            console.log('建立连接失败');
        };
    } else {
        console.log('当前浏览器不支持WebSocket');
    }
}

// 发送消息
function sendMessage(data) {
    if (!socket) {
        socket = new WebSocket(webSocketIp);
    }
    socket.send(data);
}

// 操作方法
/**
 * 在这里创建小车对象
 * 如果存在添加小车，没有改变当前小车的位置
 */
function handleData(data) {
    let msg = JSON.parse(data);
    console.log(msg);
    for (let i =0, len = msg.length; i < len; i++) {
        let carId = msg[i].deviceNO;
        let info = {};
        let allLoc = msg[i].location.split(',')
        let y1 = Number(allLoc[2]);
        let x1 = Number(allLoc[0]);
        let z1 = Number(allLoc[1]);
        let offsetY = 0;
        if (y1 == 2) {
            offsetY = 18
        } else if (y1 == 3) {
            offsetY = 35.5
        } else {
            offsetY = 0
        }
        if (window.carList[carId] === undefined) {
            let x = 315.5 - (10 * x1);
            let y = 12.5 + offsetY;
            let z = 105.3 - (10 * random(0, 30));
            info = {
                x: x,
                z: z,
                y: y,
                id: carId
            };
            createCar(info);
        } else {
            new TWEEN.Tween(window.carList[carId].position).to({
                x: 315.5 - (10 * x1),
                y: 12.5 + offsetY,
                z: 105.3 - (10 * z1)
            }, 1000).easing(TWEEN.Easing.Sinusoidal.InOut).start();
        }
    }
}
