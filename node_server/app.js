var express = require('express');
var app = express();
var path = require('path');
var mysql = require('mysql');


var port = 81;

var server = app.listen(port, function() {
    console.log('Listening on port: ' + port);
});
var io = require('socket.io').listen(server);


io.on('connection', function(socket){
        console.log('a user connected');
    socket.on('disconnect', function(){
        console.log('user disconnected');
    });

    socket.on('chat', function(msg){
       io.emit('chat',msg);
       console.log(msg);
    });
});

