

$(document).ready(function() {
// begin Ready

	//...................................................
	// When the form changes
	$('#mapForm').change(function() {
	
		var selectedSpace = $('#mapForm option:selected').val();
		if (selectedSpace == 'ALL'){
			$('a.dot').slideDown(1000);
		}else{
			$('a.dot[type = "'+selectedSpace+'"]').slideDown(1000);
			$('a.dot[type != "'+selectedSpace+'"]').slideUp(1000);
		}
		
	});
	
	//...................................................

// When a dotvacant is clicked
	$('a.dotvacant').click(function(){

		//alert( $(this).attr('number'));
		
		$('a.dotvacant').removeClass('selected');
		$(this).addClass('selected');
		
		var number = '.office_detail#'+$(this).attr('number');
		var htmlCode = $(number).html();
		
		$('.detail_container').fadeOut(500, function(){
			$('.detail_container .office_detail').html(htmlCode);
			$('.detail_container').fadeIn(500);

	});
	
});



// end Ready
});