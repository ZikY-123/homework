const http = require('http');
const server = http.createServer();
server.on('request', (req, res) => {
  console.log('Someone visit our web server');
})
server.listen(9090, () => {
  console.log('http server running at http://127.0.0.1');
})