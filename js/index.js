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

$(document).ready(function () {
    if ($.trim($("val").val()) != "") {
        alert($("val").val());
    }
});

function courseSave() {
	var course = $('#course').val();
	var credit = $('#credit').val();
	var val = $('#val').val();
	
	if(course == '') {
		$.messager.alert('แจ้งเตือน', 'กรุณาใส่ชื่อหรือรหัสวิชา', 'warning');
	} else if(credit == 0) {
		$.messager.alert('แจ้งเตือน', 'กรุณาเลือก หน่วยกิต', 'warning');
	} else if(val == ''){
		$.messager.alert('แจ้งเตือน', 'กรุณาใส่ วัน - เวลาเรียน', 'warning');
	} else {
		$.ajax({
			url : 'index.php?r=Course/SaveCourse',
			data : {
				val : val,
				course : course,
				credit : credit,
			},
			success : function(data) {
				slide(data);
				$('#course').val('');
				$('#credit').val('');
				$('#val').val('');
			}
		});
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