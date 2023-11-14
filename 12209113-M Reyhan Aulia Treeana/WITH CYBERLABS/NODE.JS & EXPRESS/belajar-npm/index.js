let http = require('http');

http.createServer(function (req, res) {
    res.end("hello dunia");
}).listen(9090);

console.log("server running on 'http://localhost:9090'");