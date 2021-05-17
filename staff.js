// Document is ready
$(document).ready(function () {

// Validate firstname
	$('#firstnamecheck').hide();	
	let firstnameError = true;
	$('#firstname').keyup(function () {	
	validatefirstname();
	});
	
	function validatefirstname() {
	let firstnameValue = $('#firstname').val();	
	if (firstnameValue.length == '') {
	$('#firstnamecheck').show();
	     firstnameError = false;
		return false;
	}
	else {
		$('#firstnamecheck').hide();
		firstnameError = true;	
	}
	}
// Validate lastname
    $('#lastnamecheck').hide();	
	let lastnameError = true;
	$('#lastname').keyup(function () {			
		validatelastname();
	});
	function validatelastname() {
		let lastnameValue = $('#lastname').val();
		if (lastnameValue.length == '') {
		$('#lastnamecheck').show();
		    lastnameError = false;
			return false;
		}	
		else {
			$('#lastnamecheck').hide();
			lastnameError = true;
		}
		}
// Validate Staffnumber
$('#staffnumbercheck').hide();	
let staffnumberError = true;
$('#staffnumber').keyup(function () {			
	validatestaffnumber();
});
function validatestaffnumber() {
	let staffnumberValue = $('#staffnumber').val();
	if (staffnumberValue.length == '') {
	$('#staffnumbercheck').show();
	    staffnumberError = false;
		return false;
	}	
	else {
		$('#staffnumbercheck').hide();
		staffnumberError = true;
	}
	}

	// Validate staffroll
$('#staffrollcheck').hide();	
let staffrollError = true;
$('#staffroll').keyup(function () {			
	validatestaffroll();
});
function validatestaffroll() {
	let staffrollValue = $('#staffroll').val();
	if (staffrollValue.length == '') {
	$('#staffrollcheck').show();
	    staffrollError = false;
		return false;
	}	
	else {
		$('#staffrollcheck').hide();
		staffrollError = true;
	}
	}

	// Validate qualification
$('#qualificationcheck').hide();	
let qualificationError = true;
$('#qualification').keyup(function () {			
	validatequalification();
});
function validatequalification() {
	let qualificationValue = $('#qualification').val();
	if (qualificationValue.length == '') {
	$('#qualificationcheck').show();
	    qualificationError = false;
		return false;
	}	
	else {
		$('#qualificationcheck').hide();
		qualificationError = true;
	}
	}




var email=document.getElementById('email').value;
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+(?:\.[a-zA-Z0-9-]+)*$/;

	
// Validate email
$('#emailcheck').hide();	
let emailError = true;
$('#email').keyup(function () {			
	validateemail();
});
function validateemail() {

var $email = $('form input[name="email'); //change form to id or containment selector
var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if ($email.val() == '' || !re.test($email.val()))
{

	$('#emailcheck').show();
	emailError = false;
	return false;
}
else
{
	$('#emailcheck').hide();
	emailError = true;
}	
}
	
	


// Validate pan
$('#pancheck').hide();	
let panError = true;
$('#pan').keyup(function () {			
	validatepan();
});
function validatepan() {
	let panValue = $('#pan').val();
	var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

	if (!(panValue.match(regpan))) {
	$('#pancheck').show();
	panError = false;
		return false;
	}	
	else {
		$('#pancheck').hide();
		panError = true;
	}
	}

	// Validate pfnumber
$('#pfnumbercheck').hide();	
let pfnumberError = true;
$('#pfnumber').keyup(function () {			
	validatepfnumber();
});
function validatepfnumber() {
	let pfnumberValue = $('#pfnumber').val();
	if (pfnumberValue.length == '') {
	$('#pfnumbercheck').show();
	pfnumberError = false;
		return false;
	}	
	else {
		$('#pfnumbercheck').hide();
		pfnumberError = true;
	}
	}

	// Validate contactnumber
$('#contactnumbercheck').hide();	
let contactnumberError = true;
$('#contactnumber').keyup(function () {			
	validatecontactnumber();
});
function validatecontactnumber() {
	let contactnumberValue = $('#contactnumber').val();

	var letters = /^[0-9]+$/;
	if(!(contactnumberValue.match(letters)) || contactnumberValue.length>10 || contactnumberValue.length<10)
	{
	
			$('#contactnumbercheck').show();
			contactnumberError = false;
				return false;
	}	
	else {
		$('#contactnumbercheck').hide();
		contactnumberError = true;
	
	}
}
	// Validate dateofjoining
$('#dateofjoiningcheck').hide();	
let dateofjoiningError = true;
$('#dateofjoining').keyup(function () {			
	validatedateofjoining();
});
function validatedateofjoining() {
	let dateofjoiningValue = $('#dateofjoining').val();
	if (dateofjoiningValue.length == '') {
	$('#dateofjoiningcheck').show();
	dateofjoiningError = false;
		return false;
	}	
	else {
		$('#dateofjoiningcheck').hide();
		dateofjoiningError = true;
	}
	}

	// Validate aadharnumber
$('#aadharnumbercheck').hide();	
let aadharnumberError = true;
$('#aadharnumber').keyup(function () {			
	validateaadharnumber();
});
function validateaadharnumber() {
	let aadharnumberValue = $('#aadharnumber').val();
		var letters = /^[0-9]+$/;
	if(!(aadharnumberValue.match(letters)) || aadharnumberValue.length>12 || aadharnumberValue.length<12)
	{	
	$('#aadharnumbercheck').show();
	aadharnumberError = false;
		return false;
	}	
	else {
		$('#aadharnumbercheck').hide();
		aadharnumberError = true;
	}
	}

	
	// Validate bankname
$('#banknamecheck').hide();	
let banknameError = true;
$('#bankname').keyup(function () {			
	validatebankname();
});
function validatebankname() {
	let banknameValue = $('#bankname').val();
	if (banknameValue.length == '') {
	$('#banknamecheck').show();
	banknameError = false;
		return false;
	}	
	else {
		$('#banknamecheck').hide();
		banknameError = true;
	}
	}


// Validate accountnumber
$('#accountnumbercheck').hide();	
let accountnumberError = true;
$('#accountnumber').keyup(function () {			
	validateaccountnumber();
});
function validateaccountnumber() {
	let accountnumberValue = $('#accountnumber').val();
	if (accountnumberValue.length == '') {
	$('#accountnumbercheck').show();
	accountnumberError = false;
		return false;
	}	
	else {
		$('#accountnumbercheck').hide();
		accountnumberError = true;
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


	// Validate branch
$('#branchcheck').hide();	
let branchError = true;
$('#branch').keyup(function () {			
	validatebranch();
});
function validatebranch() {
	let branchValue = $('#branch').val();
	if (branchValue.length == '') {
	$('#branchcheck').show();
	branchError = false;
		return false;
	}	
	else {
		$('#branchcheck').hide();
		branchError = true;
	}
	}

// Validate pincode
$('#pincodecheck').hide();	
let pincodeError = true;
$('#pincode').keyup(function () {			
	validatepincode();
});
function validatepincode() {
	let pincodeValue = $('#pincode').val();
	var letters = /^[0-9]+$/;
	if(!(pincodeValue.match(letters)) || pincodeValue.length>6 || pincodeValue.length<6)
	{
	
			$('#pincodecheck').show();
			pincodeError = false;
				return false;
	}	
	else {
		$('#pincodecheck').hide();
		pincodeError = true;
	}
}

	// Validate ifsccode
$('#ifsccodecheck').hide();	
let ifsccodeError = true;
$('#ifsccode').keyup(function () {			
	validateifsccode();
});
function validateifsccode() {
	let ifsccodeValue = $('#ifsccode').val();
	if (ifsccodeValue.length == '') {
	$('#ifsccodecheck').show();
	ifsccodeError = false;
		return false;
	}	
	else {
		$('#ifsccodecheck').hide();
		ifsccodeError = true;
	}
	}



	$('#submitbtn').click(function () {	

		validatefirstname();
		validatelastname();
		validatestaffnumber();
		validatestaffroll();
		validatequalification();
		validateemail();
		validatepan();
		validatepfnumber();
		validatecontactnumber();
		validatedateofjoining();
		validateaadharnumber();
		validatebankname();
		validateaccountnumber();
		validatedistrict();
		validatebranch();
		validatepincode();
		validateifsccode();
	
			

		if (firstnameError == true && lastnameError == true && staffnumberError == true 
			&& staffrollError == true  && qualificationError == true
			&& emailError == true && panError == true && pfnumberError == true  
			&& contactnumberError == true   && dateofjoiningError == true 
			&& aadharnumberError == true && banknameError == true
			&& accountnumberError == true && districtError == true
			&& branchError == true && pincodeError == true
			&& ifsccodeError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
