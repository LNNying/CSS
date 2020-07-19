function msg(title, msg) {
    layer.open({
        title: title,
        icon: 2,
        content: msg,
    });
}

function testPhone(data) {
    var phoneReg = /^1[345789]\d{9}$/;
    if (!phoneReg.test(data)) {
        msg('格式错误', '手机号格式错误！');
    }
    return;
}

function testEmail(data) {
    var reg = /^\w+\@+[0-9a-zA-Z]+\.(com|com.cn|edu|hk|cn|net)$/;
    if (!reg.test(data)) {
        msg('格式错误', '邮箱格式错误！');
    }
    return;
}

function require(data, msg) {
    if (data.length <= 0 || data.trim() == '') {
        layer.open({
            title: '错误',
            icon: 2,
            content: msg,
        });
        return false;
    }
}

function getBrowserInfo() {
    var Sys = {};
    var ua = navigator.userAgent.toLowerCase();
    var re = /(msie|firefox|chrome|opera|version).*?([\d.]+)/;
    var m = ua.match(re);
    Sys.browser = m[1].replace(/version/, "'safari");
    Sys.ver = m[2];
    return Sys;
}
system();
function system() {
    var sys = getBrowserInfo();
    if (sys.browser != 'chrome') {
        layer.open({
            title: '警告',
            icon: 3,
            content: '建议使用谷歌浏览器',
        });
    } else {
        var version = sys.ver.substring(0,2);
        if (sys.ver < version) {
            layer.open({
                title: '警告',
                icon: 3,
                content: '建议使用70版本以上的谷歌',
            });
        }
    }
}
