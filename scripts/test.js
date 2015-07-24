var data = [1,2,3,4,4,3,2,1];
var total = data.reduce(function(prev, cur) {
  return prev + cur;
});
var n = 0;
var left = 0;
var right = total;
for (var i = 0; i < data.length; i++) {
  left += data[i];
  right -= data[i];
  var parcialTotal = Math.abs(left - right);
  if (parcialTotal < total) {
    total = parcialTotal;
    n = i + 1;
    console.log('Update', total, n);
  }
}

console.log('N:', n, 'Diff:', total);
