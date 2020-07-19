function msg(title,msg) {
    layer.open({
        title: title,
        icon: 0,
        content: msg,
    });
}
function judgeBrowser() {
    var userAgent = navigator.userAgent;
    var ifChrome = userAgent.indexOf("Chrome") > -1;
    var ifFirefox = userAgent.indexOf("Firefox") > -1;
    if (!ifChrome) {
        if (!ifFirefox) {
            msg('警告','系统兼容Chrome和Firefox内核,请选择该内核浏览器！');
        }
    } else {
        return;
    }
}
judgeBrowser();