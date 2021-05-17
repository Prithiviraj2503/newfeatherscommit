// Document is ready
$(document).ready(function () {

// Validate Schoolname
	$('#schoolnamecheck').hide();	
	let schoolnameError = true;
	$('#schoolname').keyup(function () {	
	validateschoolname();
	});
	
	function validateschoolname() {
	let schoolnameValue = $('#schoolname').val();	
	if (schoolnameValue.length == '') {
	$('#schoolnamecheck').show();
     	schoolnameError = false;
		return false;
	}
	else {
		$('#schoolnamecheck').hide();
		schoolnameError = true;	
	}
	}
// Validate Address1
    $('#Address1check').hide();	
	let Address1Error = true;
	$('#address1').keyup(function () {			
		validateaddress1();
	});
	function validateaddress1() {
		let address1Value = $('#address1').val();
		if (address1Value.length == '') {
		$('#Address1check').show();
			Address1Error = false;
			return false;
		}	
		else {
			$('#Address1check').hide();
			Address1Error = true;
		}
		}
// Validate Pincode
$('#pincodecheck').hide();	
let pincodeError = true;
$('#pincode').keyup(function () {			
	validatepincode();
});
function validatepincode() {
	let pincodeValue = $('#pincode').val();
	if (pincodeValue.length == '') {
	$('#pincodecheck').show();
	    pincodeError = false;
		return false;
	}	
	else {
		$('#pincodecheck').hide();
		pincodeError = true;
	}
	}

	// Validate landmark
$('#landmarkcheck').hide();	
let landmarkError = true;
$('#landmark').keyup(function () {			
	validatelandmark();
});
function validatelandmark() {
	let landmarkValue = $('#landmark').val();
	if (landmarkValue.length == '') {
	$('#landmarkcheck').show();
    	landmarkError = false;
		return false;
	}	
	else {
		$('#landmarkcheck').hide();
		landmarkError = true;
	}
	}

	// Validate district
$('#districtcheck').hide();	
let districtError = true;
$('#district').keyup(function () {			
	validatedistrict();
});
function validatedistrict() {
	let districtValue = $('#district').val();
	if (districtValue.length == '') {
	$('#districtcheck').show();
    	districtError = false;
		return false;
	}	
	else {
		$('#districtcheck').hide();
		districtError = true;
	}
	}

		// Validate state
$('#statecheck').hide();	
let stateError = true;
$('#state').keyup(function () {			
	validatestate();
});
function validatestate() {
	let stateValue = $('#state').val();
	if (stateValue.length == '') {
	$('#statecheck').show();
	    stateError = false;
		return false;
	}	
	else {
		$('#statecheck').hide();
		stateError = true;
	}
	}

// Validate Email
$('#emailcheck').hide();	
let emailError = true;
$('#email').keyup(function () {			
	validateemail();
});
function validateemail() {
	let emailValue = $('#email').val();
	if (emailValue.length == '') {
	$('#emailcheck').show();
     	emailError = false;
		return false;
	}	
	else {
		$('#emailcheck').hide();
		emailError = true;
	}
	}

	// Validate website
$('#websitecheck').hide();	
let websiteError = true;
$('#website').keyup(function () {			
	validatewebsite();
});
function validatewebsite() {
	let websiteValue = $('#website').val();
	if (websiteValue.length == '') {
	$('#websitecheck').show();
	websiteError = false;
		return false;
	}	
	else {
		$('#websitecheck').hide();
		websiteError = true;
	}
	}

	// Validate phonenumber
$('#phonenumbercheck').hide();	
let phonenumberError = true;
$('#phonenumber').keyup(function () {			
	validatephonenumber();
});
function validatephonenumber() {
	let phonenumberValue = $('#phonenumber').val();
	if (phonenumberValue.length == '') {
	$('#phonenumbercheck').show();
	phonenumberError = false;
		return false;
	}	
	else {
		$('#phonenumbercheck').hide();
		phonenumberError = true;
	}
	}

	// Validate landlinecode
$('#landlinecodecheck').hide();	
let landlinecodeError = true;
$('#landlinecode').keyup(function () {			
	validatelandlinecode();
});
function validatelandlinecode() {
	let landlinecodeValue = $('#landlinecode').val();
	if (landlinecodeValue.length == '') {
	$('#landlinecodecheck').show();
	landlinecodeError = false;
		return false;
	}	
	else {
		$('#landlinecodecheck').hide();
		landlinecodeError = true;
	}
	}

	// Validate landlinenumber
$('#landlinenumbercheck').hide();	
let landlinenumberError = true;
$('#landlinenumber').keyup(function () {			
	validatelandlinenumber();
});
function validatelandlinenumber() {
	let landlinenumberValue = $('#landlinenumber').val();
	if (landlinenumberValue.length == '') {
	$('#landlinenumbercheck').show();
	landlinenumberError = false;
		return false;
	}	
	else {
		$('#landlinenumbercheck').hide();
		landlinenumberError = true;
	}
	}


	$('#submitbtn').click(function () {	
	
		validateschoolname();	 
		validateaddress1();  
		validatepincode();
		validatelandmark();
		validatedistrict();
		validatestate();
		validateemail();
		validatewebsite();
		validatephonenumber();
		validatelandlinecode();
		validatelandlinenumber();

		

		if (schoolnameError == true && Address1Error == true && pincodeError == true && landmarkError == true  && districtError == true
			&& stateError == true && emailError == true && websiteError == true  && phonenumberError == true   && landlinecodeError == true 
			&& landlinenumberError == true  )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
