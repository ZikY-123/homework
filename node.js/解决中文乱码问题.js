const http = require('http');
const server = http.createServer();
server.on('request', (req, res) => {
  const str = `您请求的URL地址是 ${req.url}，请求的类型是 ${req.method}`;
  res.setHeader('Content-Type', 'text/html; charset=utf-8');
  res.end(str);
});
server.listen(9090, () => {
  console.log('http server running at http://127.0.0.1')
})