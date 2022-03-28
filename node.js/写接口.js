const express = require("express");
const app = express();
app.use(express.urlencoded({extended: false}));
const router = require('./apiRouter.js');
app.use('/api', router);
app.listen(9090, () => {
  console.log('http server running at http://127.0.0.1');
})