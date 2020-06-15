var ip = 'http://192.168.89.115:8088';
var webSocketIp = "ws://localhost:8091/websocket"; //ws://localhost:9998/echo  wss://localhost:9998/echo
var scene, camera, render, stat, webglRender,
    controls, raycaster, intersects = [], mouse, lod, clock,
    podGeometry, loading = null, floor = '1001', group = [],
    socket, message = '';
