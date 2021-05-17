// Document is ready
$(document).ready(function () {

// Validate Standard
	$('#standardcheck').hide();	
	let standardError = true;
	$('#standard').keyup(function () {	
	validatestandard();
	});
	
	function validatestandard() {
	let standardValue = $('#standard').val();	
	if (standardValue.length == '') {
	$('#standardcheck').show();
	standardError = false;
		return false;
	}
	else {
		$('#standardcheck').hide();
		standardError = true;	
	}
	}


// Validate Section
$('#mediumcheck').hide();	
let mediumError = true;
$('#medium').keyup(function () {	
validatemedium();
});

function validatemedium() {
let mediumValue = $('#medium').val();	
if (mediumValue.length == '') {
$('#mediumcheck').show();
mediumError = false;
	return false;
}
else {
	$('#mediumcheck').hide();
	mediumError = true;	
}
}

// Validate Academicyear
$('#academicyearcheck').hide();	
let academicyearError = true;
$('#academicyear').keyup(function () {	
validateacademicyear();
});

function validateacademicyear() {
let academicyearValue = $('#academicyear').val();	
if (academicyearValue.length == '') {
$('#academicyearcheck').show();
academicyearError = false;
	return false;
}
else {
	$('#academicyearcheck').hide();
	academicyearError = true;	
}
}

//Validate Course Feescheck
$('#coursefeescheck').hide();	
let coursefeesError = true;
$('#coursefees').keyup(function () {	
validatecoursefees();
});

//Submit Button Onclick

	$('#submitbtn').click(function () {	
	
		validatestandard();
		validatemedium();
		validateacademicyear();

		if (standardError == true && mediumError == true && academicyearError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
