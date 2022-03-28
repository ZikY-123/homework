function animate(obj, target, time) {
  clearInterval(obj.timer);
  obj.style.left = 0;
  obj.timer = setInterval(function() {
    if(obj.offsetLeft >= target) {
      clearInterval(obj.timer);
    }
    obj.style.left = obj.offsetLeft + 5 + 'px';
  }, time);
}