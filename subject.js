// Document is ready
$(document).ready(function () {


	
// Validate Subject
$('#subjectcheck').hide();	
let subjectError = true;
$('#subject').keyup(function () {			
	validatesubject();
});
function validatesubject() {
	let subjectValue = $('#subject').val();
	if (subjectValue.length == '') {
	$('#subjectcheck').show();
	subjectError = false;
		return false;
	}	
	else {
		$('#subjectcheck').hide();
		subjectError = true;	
	}
	}


	// Validate Subjectcode
	$('#subjectcodecheck').hide();	
	let startdateError = true;
	$('#subjectcode').keyup(function () {			
		validatesubjectcode();
	});
	function validatesubjectcode() {
		let subjectValue = $('#subjectcode').val();
		if (subjectValue.length == '') {
		$('#subjectcodecheck').show();
		subjectcodeError = false;
			return false;
		}	
		else {
			$('#subjectcodecheck').hide();
			subjectcodeError = true;	
		}
		}
	
	
	$('#submitbtn').click(function () {	
		
		validatesubject();	 
		validatesubjectcode();  	

		if (subjectError == true && subjectcodeError == true )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
