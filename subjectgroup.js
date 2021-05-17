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


	// Validate Groupname
	$('#groupnamecheck').hide();	
	let groupnameError = true;
	$('#groupname').keyup(function () {			
		validategroupcode();
	});
	function validategroupcode() {
		let groupValue = $('#groupname').val();
		if (groupValue.length == '') {
		$('#groupnamecheck').show();
		groupnameError = false;
			return false;
		}	
		else {
			$('#groupnamecheck').hide();
			groupnameError = true;	
		}
		}
	
	
	
	$('#submitbtn').click(function () {	
		
		validatestandard();	 
		validategroupcode();  	
	 

		if (standardError == true && groupnameError == true )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
