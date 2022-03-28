const express = require('express');
const app = express();
app.get('/', (req, res) => {
  console.log(req.query.name);
  console.log(req.query.age);
  res.send({name: req.query.name, age: req.query.age});
});
app.get('/:id', (req, res) => {
  console.log(req.params);
  res.send(req.params);
});
app.listen(9090, () => {
  console.log('http server running at http://127.0.0.1');
})