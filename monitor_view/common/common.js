var ip = 'http://49.4.123.99:36880';
var webSocketIp = "ws://localhost:8091/websocket"; //ws://localhost:9998/echo  wss://localhost:9998/echo
var scene, camera, render, stat, webglRender,
    controls, raycaster, intersects = [], mouse, lod, clock, loading = null, floor = '1001', group = [],
    socket, message = '';
