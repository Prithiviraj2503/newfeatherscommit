$(document).ready(function () {
$('#birthdaymessagecheck').hide();	
let birthdayError = true;
$('#birthdaymessage').keyup(function () {			
	validateBirthdaySms();
});


function validateBirthdaySms() {
	let birthdaymessageValue = $('#birthdaymessage').val();
	if (birthdaymessageValue.length == '') {
	$('#birthdaymessagecheck').show();
	    birthdayError = false;
		return false;
	}	
	else {
		$('#birthdaymessagecheck').hide();
		birthdayError = true;	
	}
	}

$('#submitbtn').click(function () {	
		validateBirthdaySms();	 
		if (birthdayError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

});