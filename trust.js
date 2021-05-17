// Document is ready
$(document).ready(function () {

// Validate Trustname
	$('#Trustnamecheck').hide();	
	let trustnameError = true;
	$('#Trustname').keyup(function () {	
	validatetrustname();
	});
	
	function validatetrustname() {
	let trustnameValue = $('#Trustname').val();
	if (trustnameValue.length == '') {
	$('#Trustnamecheck').show();
	    trustnameError = false;
		return false;
	}
	else {
		$('#Trustnamecheck').hide();
		trustnameError = true;	
	}
	}
// Validate Pannumber
    $('#Pannumbercheck').hide();	
	let PannumberError = true;
	$('#Pannumber').keyup(function () {			
		validatePannumber();
	});
	function validatePannumber() {
		let PannumberValue = $('#Pannumber').val();
		if (PannumberValue.length == '') {
		$('#Pannumbercheck').show();
	    	PannumberError = false;
			return false;
		}	
		else {
			$('#Pannumbercheck').hide();
			PannumberError = true;	
		}
		}
// Validate Flatno
$('#Flatnocheck').hide();	
let FlatnoError = true;
$('#Flatno').keyup(function () {			
	validateFlatno();
});
function validateFlatno() {
	let FlatnoValue = $('#Flatno').val();
	if (FlatnoValue.length == '') {
	$('#Flatnocheck').show();
	     FlatnoError = false;
		return false;
	}	
	else {
		$('#Flatnocheck').hide();
		FlatnoError = true;	
	}
	}

	// Validate Street
$('#Streetcheck').hide();	
let StreetError = true;
$('#Street').keyup(function () {			
	validateStreet();
});
function validateStreet() {
	let StreetValue = $('#Street').val();
	if (StreetValue.length == '') {
	$('#Streetcheck').show();
	    StreetError = false;
		return false;
	}	
	else {
		$('#Streetcheck').hide();
		StreetError = true;	
	}
	}
	// Validate Area
$('#Areacheck').hide();	
let AreaError = true;
$('#Area').keyup(function () {			
	validateArea();
});
function validateArea() {
	let AreaValue = $('#Area').val();
	if (AreaValue.length == '') {
	$('#Areacheck').show();
	AreaError = false;
		return false;
	}	
	else {
		$('#Areacheck').hide();
		AreaError = true;	
	}
	}

	// Validate district
$('#Districtcheck').hide();	
let districtError = true;
$('#district').keyup(function () {			
	validatedistrict();
});
function validatedistrict() {
	let districtValue = $('#District').val();
	if (districtValue.length == '') {
	$('#Districtcheck').show();
    	districtError = false;
		return false;
	}	
	else {
		$('#Districtcheck').hide();
		districtError = true;	
	}
	}

	
// Validate Pincode
$('#Pincodecheck').hide();	
let PincodeError = true;
$('#Pincode').keyup(function () {			
	validatePincode();
});
function validatePincode() {
	let PincodeValue = $('#Pincode').val();
	if (PincodeValue.length == '') {
	$('#Pincodecheck').show();
	    PincodeError = false;
		return false;
	}	
	else {
		$('#Pincodecheck').hide();
		PincodeError = true;	
	}
	}

	


	$('#submitbtn').click(function () {	
		
		validatetrustname();	 
		validatePannumber();  
		validateFlatno();
		validateStreet();
		validateArea();
		validatedistrict();		
		validatePincode();
	

		if (trustnameError == true && PannumberError == true && FlatnoError == true && StreetError == true  && AreaError == true
			&& districtError == true && PincodeError == true  )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
