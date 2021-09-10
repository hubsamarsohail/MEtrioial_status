var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http, {
    cors: {
        origin: '*'
    }
});
var Redis = require('ioredis');
var redis = new Redis();
var users = [];

http.listen(8005, function () {
    console.log('Listening to port 8005');
});

redis.subscribe('private-channel', function () {
    console.log('Subscribed to private channel');
});

redis.on('message', function (channel, message) {
    message = JSON.parse(message);
    if(channel == 'private-channel'){
        let data = message.data.data;
        let receiver_id = data.receiver_id;
        let event = message.event;

        io.to(`${users[receiver_id]}`).emit(channel + ':' + message.event, data);
    }
    console.log(message);
});

io.on('connection', function (socket) {
    socket.on('user_connected', function (user_id) {
        users[user_id] = socket.id;
        io.emit('userUpdateStatus', users);
        console.log('User Connected' + user_id);
    });

    socket.on('disconnected', function () {
        var i = users.indexOf(socket.id);
        users.splice(i, 1, 0);
        io.emit('userUpdateStatus', users);
        console.log('users');
    });
});
