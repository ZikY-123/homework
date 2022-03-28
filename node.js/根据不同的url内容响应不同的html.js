const http = require('http');
const server = http.createServer();
server.on('request', (req, res) => {
  const url = req.url;
  let content = '<h4>404 Not Found!</h4>';
  if (url === '/' || url === '/index.html') {
    content = '<h4>首页</h4>';
  } else if (url === '/about.html') {
    content = '<h4>关于</h4>'
  }
  res.end(content);
})
server.listen(9090, () => {
  console.log('http server running at http://127.0.0.1')
})