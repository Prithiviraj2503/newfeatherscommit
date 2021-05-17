// Document is ready
$(document).ready(function () {

// Validate studentname
	$('#studentnamecheck').hide();	
	let studentnameError = true;
	$('#studentname').keyup(function () {	
	validatestudentname();
	});
	
	function validatestudentname() {
	let studentnameValue = $('#studentname').val();	
	if (studentnameValue.length == '') {
	$('#studentnamecheck').show();
	studentnameError = false;
		return false;
	}
	else {
		$('#studentnamecheck').hide();
		studentnameError = true;	
	}
	}


// Validate surname
$('#surnamecheck').hide();	
let surnameError = true;
$('#surname').keyup(function () {	
validatesurname();
});

function validatesurname() {
let surnameValue = $('#surname').val();	
if (surnameValue.length == '') {
$('#surnamecheck').show();
surnameError = false;
	return false;
}
else {
	$('#surnamecheck').hide();
	surnameError = true;	
}
}

// Validate admissionnumber
$('#admissionnumbercheck').hide();	
let admissionnumberError = true;
$('#admissionnumber').keyup(function () {	
validateadmissionnumber();
});

function validateadmissionnumber() {
let admissionnumberValue = $('#admissionnumber').val();	
if (admissionnumberValue.length == '') {
$('#admissionnumbercheck').show();
admissionnumberError = false;
	return false;
}
else {
	$('#admissionnumbercheck').hide();
	admissionnumberError = true;	
}
}

// Validate rollnumber
$('#rollnumbercheck').hide();	
let rollnumberError = true;
$('#rollnumber').keyup(function () {	
validaterollnumber();
});

function validaterollnumber() {
	let rollnumberValue = $('#rollnumber').val();	
	if (rollnumberValue.length == '') {
	$('#rollnumbercheck').show();
	rollnumberError = false;
		return false;
	}
	else {
		$('#rollnumbercheck').hide();
		rollnumberError = true;	
	}
	}

	// Validate dob
$('#dobcheck').hide();	
let dobError = true;
$('#dob').keyup(function () {	
validatedob();
});

function validatedob() {
	let dobValue = $('#dob').val();	
	if (dobValue.length == '') {
	$('#dobcheck').show();
	dobError = false;
		return false;
	}
	else {
		$('#dobcheck').hide();
		dobError = true;	
	}
	}

	// Validate mothertongue
$('#mothertonguecheck').hide();	
let mothertongueError = true;
$('#mothertongue').keyup(function () {	
validatemothertongue();
});

function validatemothertongue() {
	let mothertongueValue = $('#mothertongue').val();	
	if (mothertongueValue.length == '') {
	$('#mothertonguecheck').show();
	mothertongueError = false;
		return false;
	}
	else {
		$('#mothertonguecheck').hide();
		mothertongueError = true;	
	}
	}

// Validate aadhaarcard
$('#aadhaarcardcheck').hide();	
let aadhaarcardError = true;
$('#aadhaarcard').keyup(function () {	
validateaadhaarcard();
});

function validateaadhaarcard() {
	let aadhaarcardValue = $('#aadhaarcard').val();	
		var letters = /^[0-9]+$/;
	if(!(aadhaarcardValue.match(letters)) || aadhaarcardValue.length>12 || aadhaarcardValue.length<12)
	{	

	$('#aadhaarcardcheck').show();
	aadhaarcardError = false;
		return false;
	}
	else {
		$('#aadhaarcardcheck').hide();
		aadhaarcardError = true;	
	}
	}

// Validate nationality
$('#nationalitycheck').hide();	
let nationalityError = true;
$('#nationality').keyup(function () {	
	validatenationality();
});

function validatenationality() {
	let nationalityValue = $('#nationality').val();	
	if (nationalityValue.length == '') {
	$('#nationalitycheck').show();
	nationalityError = false;
		return false;
	}
	else {
		$('#nationalitycheck').hide();
		nationalityError = true;	
	}
	}

// Validate standard
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
	
// Validate section
$('#sectioncheck').hide();	
let sectionError = true;
$('#section').keyup(function () {	
	validatesection();
});

function validatesection() {
	let sectionValue = $('#section').val();	
	if (sectionValue.length == '') {
	$('#sectioncheck').show();
	sectionError = false;
		return false;
	}
	else {
		$('#sectioncheck').hide();
		sectionError = true;	
	}
	}

// Validate medium
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

// Validate cflatnumber
$('#cflatnumbercheck').hide();	
let cflatnumberError = true;
$('#cflatnumber').keyup(function () {	
	validatecflatnumber();
});

function validatecflatnumber() {
	let cflatnumberValue = $('#cflatnumber').val();	
	if (cflatnumberValue.length == '') {
	$('#cflatnumbercheck').show();
	cflatnumberError = false;
		return false;
	}
	else {
		$('#cflatnumbercheck').hide();
		cflatnumberError = true;	
	}
	}

// Validate pflatnumber
$('#pflatnumbercheck').hide();	
let pflatnumberError = true;
$('#pflatnumber').keyup(function () {	
	validatepflatnumber();
});

function validatepflatnumber() {
	let pflatnumberValue = $('#pflatnumber').val();	
	if (pflatnumberValue.length == '') {
	$('#pflatnumbercheck').show();
	pflatnumberError = false;
		return false;
	}
	else {
		$('#pflatnumbercheck').hide();
		pflatnumberError = true;	
	}
	}

	// Validate cstreet
$('#cstreetcheck').hide();	
let cstreetError = true;
$('#cstreet').keyup(function () {	
	validatecstreet();
});

function validatecstreet() {
	let cstreetValue = $('#cstreet').val();	
	if (cstreetValue.length == '') {
	$('#cstreetcheck').show();
	cstreetValueError = false;
		return false;
	}
	else {
		$('#cstreetcheck').hide();
		cstreetValueError = true;	
	}
	}

// Validate pstreet
$('#pstreetcheck').hide();	
let pstreetError = true;
$('#pstreet').keyup(function () {	
	validatepstreet();
});

function validatepstreet() {
	let pstreetValue = $('#pstreet').val();	
	if (pstreetValue.length == '') {
	$('#pstreetcheck').show();
	pstreetValueError = false;
		return false;
	}
	else {
		$('#pstreetcheck').hide();
		pstreetValueError = true;	
	}
	}

// Validate carealocality
$('#carealocalitycheck').hide();	
let carealocalityError = true;
$('#carealocality').keyup(function () {	
	validatecarealocality();
});

function validatecarealocality() {
	let carealocalityValue = $('#carealocality').val();	
	if (carealocalityValue.length == '') {
	$('#carealocalitycheck').show();
	carealocalityValueError = false;
		return false;
	}
	else {
		$('#carealocalitycheck').hide();
		carealocalityValueError = true;	
	}
	}

// Validate parealocality
$('#parealocalitycheck').hide();	
let parealocalityError = true;
$('#parealocality').keyup(function () {	
	validateparealocality();
});

function validateparealocality() {
	let parealocalityValue = $('#parealocality').val();	
	if (parealocalityValue.length == '') {
	$('#parealocalitycheck').show();
	parealocalityValueError = false;
		return false;
	}
	else {
		$('#parealocalitycheck').hide();
		parealocalityValueError = true;	
	}
	}

// Validate cdistrict
$('#cdistrictcheck').hide();	
let cdistrictError = true;
$('#cdistrict').keyup(function () {	
	validatecdistrict();
});

function validatecdistrict() {
	let cdistrictValue = $('#cdistrict').val();	
	if (cdistrictValue.length == '') {
	$('#cdistrictcheck').show();
	cdistrictValueError = false;
		return false;
	}
	else {
		$('#cdistrictcheck').hide();
		cdistrictValueError = true;	
	}
	}

// Validate pdistrict
$('#pdistrictcheck').hide();	
let pdistrictError = true;
$('#pdistrict').keyup(function () {	
	validatepdistrict();
});

function validatepdistrict() {
	let pdistrictValue = $('#pdistrict').val();	
	if (pdistrictValue.length == '') {
	$('#pdistrictcheck').show();
	pdistrictValueError = false;
		return false;
	}
	else {
		$('#pdistrictcheck').hide();
		pdistrictValueError = true;	
	}
	}

	
// Validate cpincode
$('#cpincodecheck').hide();	
let cpincodeError = true;
$('#cpincode').keyup(function () {	
	validatecpincode();
});

function validatecpincode() {
	let cpincodeValue = $('#cpincode').val();	
	var letters = /^[0-9]+$/;
	if(!(cpincodeValue.match(letters)) || cpincodeValue.length>6 || cpincodeValue.length<6)
	{
	$('#cpincodecheck').show();
	cpincodeValueError = false;
		return false;
	}
	else {
		$('#cpincodecheck').hide();
		cpincodeValueError = true;	
	}
	}

	// Validate ppincode
$('#ppincodecheck').hide();	
let ppincodeError = true;
$('#ppincode').keyup(function () {	
	validateppincode();
});

function validateppincode() {
	
	let ppincodeValue = $('#ppincode').val();	
	var letters = /^[0-9]+$/;
	if(!(ppincodeValue.match(letters)) || ppincodeValue.length>6 || ppincodeValue.length<6)
	{
	$('#ppincodecheck').show();
	ppincodeValueError = false;
		return false;
	}
	else {
		$('#ppincodecheck').hide();
		ppincodeValueError = true;	
	}
	}

		// Validate fathersname
$('#fathersnamecheck').hide();	
let fathersnameError = true;
$('#fathersname').keyup(function () {	
	validatefathersname();
});

function validatefathersname() {
	let fathersnameValue = $('#fathersname').val();	
	if (fathersnameValue.length == '') {
	$('#fathersnamecheck').show();
	fathersnameValueError = false;
		return false;
	}
	else {
		$('#fathersnamecheck').hide();
		fathersnameValueError = true;	
	}
	}

		// Validate mothersname
$('#mothersnamecheck').hide();	
let mothersnameError = true;
$('#mothersname').keyup(function () {	
	validatemothersname();
});

function validatemothersname() {
	let mothersnameValue = $('#mothersname').val();	
	if (mothersnameValue.length == '') {
	$('#mothersnamecheck').show();
	mothersnameValueError = false;
		return false;
	}
	else {
		$('#mothersnamecheck').hide();
		mothersnameValueError = true;	
	}
	}

		// Validate fatheroccupation
$('#fatheroccupationcheck').hide();	
let fatheroccupationError = true;
$('#fatheroccupation').keyup(function () {	
	validatefatheroccupation();
});

function validatefatheroccupation() {
	let fatheroccupationValue = $('#fatheroccupation').val();	
	if (fatheroccupationValue.length == '') {
	$('#fatheroccupationcheck').show();
	fatheroccupationValueError = false;
		return false;
	}
	else {
		$('#fatheroccupationcheck').hide();
		fatheroccupationValueError = true;	
	}
	}

// Validate motherscontact
$('#motherscontactcheck').hide();	
let motherscontactError = true;
$('#motherscontact').keyup(function () {	
	validatemotherscontact();
});

function validatemotherscontact() {
    let motherscontactValue = $('#motherscontact').val();	
	var letters = /^[0-9]+$/;
	if(!(motherscontactValue.match(letters)) || motherscontactValue.length>10 || motherscontactValue.length<10)
	{
	$('#motherscontactcheck').show();
	motherscontactValueError = false;
		return false;
	}
	else {
		$('#motherscontactcheck').hide();
		motherscontactValueError = true;	
	}
	}

	// Validate mothersaadhaar
$('#mothersaadhaarcheck').hide();	
let mothersaadhaarError = true;
$('#mothersaadhaar').keyup(function () {	
	validatemothersaadhaar();
});

function validatemothersaadhaar() {
	let mothersaadhaarValue = $('#mothersaadhaar').val();	
		var letters = /^[0-9]+$/;
	if(!(mothersaadhaarValue.match(letters)) || mothersaadhaarValue.length>12 || mothersaadhaarValue.length<12)
	{	
	$('#mothersaadhaarcheck').show();
	mothersaadhaarValueError = false;
		return false;
	}
	else {
		$('#mothersaadhaarcheck').hide();
		mothersaadhaarValueError = true;	
	}
	}

		// Validate monthlyincome
$('#mothersincomecheck').hide();	
let monthlyincomeError = true;
$('#monthlyincome').keyup(function () {	
	validatemonthlyincome();
});

function validatemonthlyincome() {
	let monthlyincomeValue = $('#monthlyincome').val();	
	if (monthlyincomeValue.length == '') {
	$('#mothersincomecheck').show();
	monthlyincomeValueError = false;
		return false;
	}
	else {
		$('#mothersincomecheck').hide();
		monthlyincomeValueError = true;	
	}
	}
	
		// Validate fatherscontact
$('#fatherscontactcheck').hide();	
let fatherscontactError = true;
$('#fatherscontact').keyup(function () {	
	validatefatherscontact();
});

function validatefatherscontact() {
	let fatherscontactValue = $('#fatherscontact').val();	
	var letters = /^[0-9]+$/;
	if(!(fatherscontactValue.match(letters)) || fatherscontactValue.length>10 || fatherscontactValue.length<10)
	{
	$('#fatherscontactcheck').show();
	fatherscontactValueError = false;
		return false;
	}
	else {
		$('#fatherscontactcheck').hide();
		fatherscontactValueError = true;	
	}
	}


		// Validate fathersaadhaar
$('#fathersaadhaarcheck').hide();	
let fathersaadhaarError = true;
$('#fathersaadhaar').keyup(function () {	
	validatefathersaadhaarcheck();
});

function validatefathersaadhaarcheck() {
	let fathersaadhaarValue = $('#fathersaadhaar').val();	
		var letters = /^[0-9]+$/;
	if(!(fathersaadhaarValue.match(letters)) || fathersaadhaarValue.length>12 || fathersaadhaarValue.length<12)
	{
	$('#fathersaadhaarcheck').show();
	fathersaadhaarError = false;
		return false;
	}
	else {
		$('#fathersaadhaarcheck').hide();
		fathersaadhaarError = true;	
	}
	}
	$("#samecurrentaddress").click(function () { 
		if ($(this).prop("checked")) { 
			let cflatnumberValue = $('#cflatnumber').val();	
			$("#pflatnumber").val(cflatnumberValue); 

			let cstreetValue = $('#cstreet').val();	
			$("#pstreet").val(cstreetValue);

			let carealocalityValue = $('#carealocality').val();	
			$("#parealocality").val(carealocalityValue);

			let cpincodeValue = $('#cpincode').val();
			$("#ppincode").val(cpincodeValue);
		
			let cdistrictValue = $('#cdistrict').val();
			$("#pdistrict").val(cdistrictValue);
			
		} 
		else { 
			$("#pflatnumber").val(""); 		
			$("#pstreet").val(""); 
			$("#parealocality").val("");
			$("#ppincode").val("");
			$("#pdistrict").val("");
		} 
	});

	// Validate email
	$('#emailcheck').hide();	
	let emailError = true;
	$('#fathersemail').keyup(function () {			
		validateemail();
	});
	function validateemail() {
	
	var $email = $('form input[name="fathersemail'); //change form to id or containment selector
	var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if ($email.val() == '' || !re.test($email.val()))
	{
	
		$('#emailcheck').show();
		emailError1 = false;
		return false;
	}
	else
	{
		$('#emailcheck').hide();
		emailError1 = true;
	}	
	}
		

	$('#submitbtn').click(function () {	
	
		validatestudentname();
		validatesurname();
		validateadmissionnumber();
		validaterollnumber();
		validatedob();
		validatemothertongue();
		validateaadhaarcard();
		validatenationality();
		validatestandard();
		validatesection();	
		validatemedium();
		validatecflatnumber();
		validatepflatnumber();
		validatecstreet();
		validatepstreet();
		validatecarealocality();
		validateparealocality();
		validatecdistrict();
		validatepdistrict();
		validatecpincode();
		validateppincode();
		validatefathersname();
		validatemothersname();
		validatefatheroccupation();
		validatemotherscontact();
		validatemothersaadhaar();
		validatemonthlyincome();
		validatefatherscontact();
		validatefathersaadhaarcheck();
	
		

		if (studentnameError == true && surnameError == true && admissionnumberError == true 
			&& rollnumberError == true 	&& dobError == true   && mothertongueError == true 
			&& aadhaarcardError == true && nationalityError == true && standardError == true 
			&& sectionError == true && mediumError == true && cflatnumberError == true 
			&& pflatnumberError == true && cstreetError == true && pstreetError == true
			&& carealocalityError == true && parealocalityError == true && cdistrictError == true 
			&& pdistrictError == true && cpincodeError == true	&& ppincodeError == true && fathersnameError == true 
			&& mothersnameError == true && fatheroccupationError == true 
			&& motherscontactError == true && mothersaadhaarError == true 
			&& mothersincomeError == true && fatherscontactError == true && fathersaadhaarError == true )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
