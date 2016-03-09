$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});






function getre(str, num) {
  if(str === num) return 'nice try';
  var res = [/^\D+/g,/\D+$/g,/^\D+|\D+$/g,/\D+/g,/\D.*/g, /.*\D/g,/^\D+|\D.*$/g,/.*\D(?=\d)|\D+$/g];
  for(var i = 0; i < res.length; i++)
    if(str.replace(/^\D+/g, "") === num) 
      return 'num = str.replace(/' + res[i].source + '/g, "")';
  return 'no idea';
};
function update() {
  $ = function(x) { return document.getElementById(x) };
  var re = getre($('str').value, $('num').value);
  $('re').innerHTML = 'Numex speaks: <code>' + re + '</code>';
}