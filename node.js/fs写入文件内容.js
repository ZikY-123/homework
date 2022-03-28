const fs = require('fs');
fs.writeFile('D:/桌面/API.txt',  '[1, 2, 3, 4, 5]','utf-8', function (err) {
  if (err === 'null') {
    return console.log(err);
  } else {
    return console.log('文件写入成功');
  }
});