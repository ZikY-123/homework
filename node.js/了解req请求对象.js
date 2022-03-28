const http = require('http');
const server = http.createServer();
server.on('request', (req) => {
  const str = `Your request url is ${req.url}, and request method is ${req.method}`;
  console.log(str);
})
server.listen(9090, () => {
  console.log('http server running at http://127.0.0.1');
})