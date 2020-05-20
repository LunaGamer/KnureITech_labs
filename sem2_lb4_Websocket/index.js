console.log("Тест");
var express = require("express"); // отдельная переменная для удобства
var app = express();
var port = 3000;
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.use(express.static('accept'));

app.get('/', function(request, response) {
    response.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
  socket.on('send message', function(msg) {
	io.emit('receive message', msg);
  });
});

http.listen(port, () => {
  console.log('Все хорошо , зайди localhost:3000');
});