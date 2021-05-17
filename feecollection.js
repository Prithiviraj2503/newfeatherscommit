$(document).ready(function () {

//recieptnumbercheck
$('#receiptnumbercheck').hide();	
let receiptnumberError = true;
$('#receiptnumber').keyup(function () {			
	validatereceiptnumber();
});

function validatereceiptnumber() {
	let receiptnumberValue = $('#receiptnumber').val();
	if (receiptnumberValue.length == '') {
	$('#receiptnumbercheck').show();
	    receiptnumberError = false;
		return false;
	}	
	else {
		$('#receiptnumbercheck').hide();
		receiptnumberError = true;	
	}
	}

//registernumbercheck
$('#registernumbercheck').hide();	
let registernumberError = true;
$('#registernumber').keyup(function () {			
	validateregisternumber();
});

function validateregisternumber() {
	let registernumberValue = $('#registernumber').val();
	if (registernumberValue.length == '') {
	$('#registernumbercheck').show();
	    registernumberError = false;
		return false;
	}	
	else {
		$('#registernumbercheck').hide();
		registernumberError = true;	
	}
	}

//Studentidcheck
$('#studentidcheck').hide();	
let studentidError = true;
$('#studentid').keyup(function () {			
	validatestudentid();
});

function validatestudentid() {
	let studentidValue = $('#studentid').val();
	if (studentidValue.length == '') {
	$('#studentidcheck').show();
	    studentidError = false;
		return false;
	}	
	else {
		$('#studentidcheck').hide();
		studentidError = true;	
	}
	}

//recieptdatecheck
$('#receiptdatecheck').hide();	
let receiptdateError = true;
$('#receiptdate').keyup(function () {			
	validatereceiptdate();
});

function validatereceiptdate() {
	let receiptdateValue = $('#receiptdate').val();
	if (receiptdateValue.length == '' || receiptdateValue=="0000-00-00") {
	$('#receiptdatecheck').show();
	    receiptdateError = false;
		return false;
	}	
	else {
		$('#receiptdatecheck').hide();
		receiptdateError = true;	
	}
	}

//academicyearcheck
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

//standardcheck
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

//totalfeecollectedcheck
$('#totalfeecollectedcheck').hide();	
let totalfeecollectedError = true;
$('#totalfeecollected').keyup(function () {			
	validatetotalfeecollected();
});

function validatetotalfeecollected() {
	let totalfeecollectedValue = $('#totalfeecollected').val();
	if (totalfeecollectedValue.length == '') {
	$('#totalfeecollectedcheck').show();
	    totalfeecollectedError = false;
		return false;
	}	
	else {
		$('#totalfeecollectedcheck').hide();
		totalfeecollectedError = true;	
	}
	}

//finalfeecollectedcheck
$('#finalfeecollectedcheck').hide();	
let finalfeecollectedError = true;
$('#finalfeecollected').keyup(function () {			
	validatefinalfeecollected();
});

function validatefinalfeecollected() {
	let finalfeecollectedValue = $('#finalfeecollected').val();
	if (finalfeecollectedValue.length == '') {
	$('#finalfeecollectedcheck').show();
	    finalfeecollectedError = false;
		return false;
	}	
	else {
		$('#finalfeecollectedcheck').hide();
		finalfeecollectedError = true;	
	}
	}

//feecollectedcheck
$('#feecollectedcheck').hide();	
let feecollectedError = true;
$('#feecollected').keyup(function () {			
	validatefeecollected();
});

function validatefeecollected() {
	let feecollectedValue = $('#feecollected').val();
	if (feecollectedValue.length == '') {
	$('#feecollectedcheck').show();
	    feecollectedError = false;
		return false;
	}	
	else {
		$('#feecollectedcheck').hide();
		feecollectedError = true;	
	}
	}


//balancefeecollectcheck
$('#balancefeecollectcheck').hide();	
let balancefeecollectError = true;
$('#feecollected').keyup(function () {			
	validatebalancefeecollect();
});

function validatebalancefeecollect() {
	let balancefeecollectValue = $('#feecollected').val();
	if (balancefeecollectValue.length == '') {
	$('#balancefeecollectcheck').show();
	    balancefeecollectError = false;
		return false;
	}	
	else {
		$('#balancefeecollectcheck').hide();
		balancefeecollectError = true;	
	}
	}

$('#submitbtn').click(function () {	
		validatereceiptnumber();	
		validateregisternumber(); 
		validatestudentid();
		validatereceiptdate();
		validateacademicyear();
		validatestandard();
		validatetotalfeecollected();
		validatefinalfeecollected();
		validatefeecollected();
		validatebalancefeecollect();
		
		    if (receiptnumberError == true && registernumberError == true &&  receiptdateError == true && studentidError == true 
			&& academicyearError == true && standardError == true && totalfeecollectedError == true && finalfeecollectedError == true 
			&& feecollectedError == true && balancefeecollectError == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

});