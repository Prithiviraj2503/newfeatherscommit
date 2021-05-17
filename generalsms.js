
// name check
$(document).ready(function () {
$('#namecheck').hide();	
let nameerror = true;
$('#name').keyup(function () {			
	name();
});

function name() {
	let nameValue = $('#name').val();
	if (nameValue.length == '') {
	$('#namecheck').show();
	    nameerror = false;
		return false;
	}	
	else {
		$('#namecheck').hide();
		nameerror = true;	
	}
	}



	// contact check

$('#contactcheck').hide();	
$('#invalidcontact').hide();
let contacterror = true;
$('#contact').keyup(function () {			
	contact();
});


function contact() {
	let contactValue = $('#contact').val();
	var numbers = /^[0-9]+$/;
	
	if(!(contactValue.match(numbers)) ){
		$('#invalidcontact').show();
		$('#contactcheck').hide();
		return false;
	}else if (contactValue.length == '' || contactValue.length != 10) {
		$('#contactcheck').show();
		$('#invalidcontact').hide();
			contacterror = false;
			return false;
		}
	else {
		$('#contactcheck').hide();
		$('#invalidcontact').hide();
		contacterror = true;	
	}
	}




// email check


$('#emailcheck').hide();
$('#invalid').hide();	
let emailerror = true;
$('#email').keyup(function () {			
	email();
});

function email() {
	let emailValue = $('#email').val();
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+(?:\.[a-zA-Z0-9-]+)*$/;

	if (emailValue.length == '') {
	$('#emailcheck').show();
	$('#invalid').hide();
	    emailerror = false;
		return false;
	}	
	else if(!(emailValue.match(mailformat))) {
		$('#invalid').show();
		$('#emailcheck').hide();
		emailerror = false;
		return false;
			 }else{ 
				$('#emailcheck').hide();
				$('#invalid').hide();
				emailerror = true;
			 }
			}
		



	// Subject check

$('#subjectcheck').hide();	
let subjecterror = true;
$('#subject').keyup(function () {			
	subject();
});


function subject() {
	let subjectValue = $('#subject').val();
	if (subjectValue.length == '') {
	$('#subjectcheck').show();
	    subjecterror = false;
		return false;
	}	
	else {
		$('#subjectcheck').hide();
		subjecterror = true;	
	}
	}




// meaasge check

$('#generalmessagecheck').hide();	
let generalmessageerror = true;
$('#generalmessage').keyup(function () {			
	generalmessage();
});


function generalmessage() {
	let generalmessageValue = $('#generalmessage').val();
	if (generalmessageValue.length == '') {
	$('#generalmessagecheck').show();
	    generalmessageerror = false;
		return false;
	}	
	else {
		$('#generalmessagecheck').hide();
		generalmessageerror = true;	
	}
	}



$('#submitbtn').click(function () {	
			name();
			contact();
			email();
		    subject();
			generalmessage();

		if ( generalmessageerror = true && nameerror == true
			&& contacterror == true && emailerror == true && subjecterror == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }

});

});








