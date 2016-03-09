$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});

function myFunction() {
    var str = val.value;
    var res = str.split("1");
    document.getElementById("demo").innerHTML = res;
}



function courseSave() {
		var e = document.getElementById("credit");
		var fgt = e.options[e.selectedIndex].value;
		var c = val.value;
		var str = course.value;
		
		
		if(str == "")
		{
			alert("โปรดระบุ ชื่อวิชา");
		}
		else if(fgt == 0)
		{
			alert("โปรดเลือก หน่วยกิต");
		}
		else if(c == "")
		{
			alert("โปรดระบุ วันเวลาเรียน");
		}

        
    

	
}

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