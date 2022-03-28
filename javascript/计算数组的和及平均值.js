var a = [1 , 2 , 3];
var sum = 0;
var b = 0;
for (var i = 0 ; i < a.length ; i ++) {
    sum += i;
}
b = sum / a.length;
console.log(sum , b);