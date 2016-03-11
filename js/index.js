$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});


function courseSave() {
		
		var inTxt = document.getElementById('val').value.replace(/\n/g, "*");
		var e = document.getElementById("credit");
		var fgt = e.options[e.selectedIndex].value;
		var c = val.value;
		var str = course.value;

		var estr = inTxt.split("*");
		var i ;
	

		var my_array = new Array(str,fgt,inTxt);
		
		if(str == "")
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "โอ๊ะโอ !",

				message: "โปรดระบุ วิชา !"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "top",
					

				},

				animate: 
				{
					enter: 'animated zoomInDown',
					exit: 'animated zoomOutUp'
				},
				


			});
		}
		else if(fgt == 0)
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "โอ๊ะโอ !",

				message: "โปรดเลือก หน่วยกิต !"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "top",
					

				},

				animate: 
				{
					enter: 'animated zoomInDown',
					exit: 'animated zoomOutUp'
				},
				


			});
			
		}
		else if(c == "")
		{
			$.notify({
				icon: "img/warningNotify.png",
				title: "โอ๊ะโอ !",

				message: "โปรดระบุ วันเวลาเรียน !"},


			{
				type: 'danger',
				icon_type: 'image',
				placement: {
					from: "top",
					

				},

				animate: 
				{
					enter: 'animated zoomInDown',
					exit: 'animated zoomOutUp'
				},
				


			});

		}

		else
		{
			


			for(i = 0 ; i < estr.length ; i++){

			 $.notify({

	icon: "img/checkNotify.png",
	// options
	message: 'บันทึกข้อมูลสำเร็จ วิชา : '+str +"  เวลา: "+estr[i] },

	{
	// settings
	
	icon_type: 'image',
	placement: {
		from: "top",	
	},
	animate: {
		enter: 'animated flipInY',
		exit: 'animated flipOutX'
	}

});

}
			

			$.ajax({
			url : 'checkTime.php',
			data : {
				val : inTxt,
				course : str,
				credit : fgt,
			},
			success : function(data) {
				slide(data);
				$('#course').val('');
				
			}
		});
			}
   
}




function deleteCourse() {
		
		var x = "<?php echo $strUserId ; ?>";
		
			$.notify({

	icon: "img/checkNotify.png",
	// options
	message: 'vvs'+x },

	{
	// settings
	
	icon_type: 'image',
	placement: {
		from: "top",	
	},
	animate: {
		enter: 'animated flipInY',
		exit: 'animated flipOutX'
	}

});

			$.ajax({
			url : 'delete.php',
			data : {
				id : x,
				
			},
			success : function(data) {
				
				
			}
		});

}