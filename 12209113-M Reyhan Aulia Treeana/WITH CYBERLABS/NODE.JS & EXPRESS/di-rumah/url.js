let http = require('http');
let url = require('url');

let server = http.createServer(function (req, res){
    res.writeHead(200, {'Content-Type': 'text/html'});
    let q = url.parse(req.url, true).query;
    let txt = 'Kata kunci: ' + q.keyword;
    res.end(txt);
}).listen(9000);

console.log("server run on http://localhost:9000");