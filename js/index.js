
function courseSave() {
		
		var inTxt = document.getElementById('val').value.replace(/\n/g, "#");
		var e = document.getElementById("credit");
		var fgt = e.options[e.selectedIndex].value;
		var c = val.value;
		var str = course.value;
		var len = inTxt.search('#');
		var len2 = len.length;
		var count = (inTxt.match(/#/g) || []).length;
		var reg ="";
		var check ="";
		var estr = inTxt.split("#");

		
		if(count >= 0){
			for(i=0 ;i<estr.length;i++){

			 reg = estr[i].match(/^(Mo|Tu|We|Th|Fr|Sa|Su)[0-9]{2}[:]{1}[0-9]{2}[-]{1}[0-9]{2}[:]{1}[0-9]{2}./);

			}
		}

		var my_array = new Array(str,fgt,inTxt);
		
		if(str == "")
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "<font size='6'>โอ๊ะโอ </font>",

				message: "<font size='6'> โปรดระบุ วิชา ! </font>"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "bottom",
					

				},

				animate: 
				{
					enter: 'animated shake',
					exit: 'animated bounceOutRight'
				},
				


			});
		}
		else if(fgt == 0)
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "<font size='6'>โอ๊ะโอ </font>",

				message: "<font size='6'>โปรดเลือก หน่วยกิต !</font>"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "bottom",
					

				},

				animate: 
				{
					enter: 'animated shake',
					exit: 'animated bounceOutRight'
				},
				


			});
			
		}
		else if(c == "")
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "<font size='6'>โอ๊ะโอ </font>",

				message: "<font size='6'>โปรดระบุ วันเวลาเรียน !</font>"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "bottom",
					

				},

				animate: 
				{
					enter: 'animated shake',
					exit: 'animated bounceOutRight'
				},
				


			});

		}else if(reg == null){

			$.notify({
				icon: "img/warningNotify.png",
				title: "<font size='6'>โอ๊ะโอ </font>",

				message: "<font size='6'>รูปแบบเวลาไม่ถูกต้อง</font>"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "bottom",
					

				},

				animate: 
				{
					enter: 'animated shake',
					exit: 'animated bounceOutRight'
				},
				


			});

		}

		else
		{
			

			$.ajax({
			url : 'checkTime.php',
			data : {
				val : inTxt,
				course : str,
				credit : fgt,
			},
			success : function(data) {

				for(i = 0 ; i < estr.length ; i++){

		 $.notify({

				icon: "img/checkNotify.png",
	// options
				message: "<font size='6'>บันทึกข้อมูลสำเร็จ วิชา : "+str+"  เวลา: "+estr[i] +"</font"},

				{
	// settings
	
				icon_type: 'image',
				placement: 
				{
				from: "bottom",	
				},
				animate: 
				{
				enter: 'animated flipInY',
				exit: 'animated flipOutX'
				}

				}); 

			}
				
			}
				});
			}
   
}

$('.close').on('click', function() {
  $('.container').sbottom().removeClass('active');
});


$(document).on('click', '.alert', function(e) {
        	var x = ($(this).attr('id'));
            e.preventDefault();

        bootbox.confirm(
        { 
    	size: 'small',
    	message: "Your message here…", 
    	title : "แจ้งเตือน",
    	callback: function(result){ /* your callback code */ 
		
			if(result)
			{
			 	$.ajax(
		  		{
				url : 'delete.php',
				data : 
				{
					id : x,
				
				},
			success : function(data) 
			{
				window.location.replace("courseList.php");
			}
		  });


		}
		}

		})

        });


function saveSuccess(){

	 $.notify({

				icon: "img/checkNotify.png",
	// options
				message: "<font size='6'>บันทึกข้อมูลสำเร็จ วิชา : "+str+"  เวลา: "+estr[i] +"</font"},

				{
	// settings
	
				icon_type: 'image',
				placement: 
				{
				from: "bottom",	
				},
				animate: 
				{
				enter: 'animated flipInY',
				exit: 'animated flipOutX'
				}

				});


}