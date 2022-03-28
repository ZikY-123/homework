const fs = require('fs');
fs.readFile('D:/桌面/API.txt', 'utf-8', function(err, dataStr) {
  if (err === 'null') {
    return console.log(err);
  } else {
    return console.log(dataStr);
  }
})
