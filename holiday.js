// Document is ready
$(document).ready(function () {


	
// Validate Holiday
$('#holidaytypecheck').hide();	
let holidayError = true;
$('#Holidaytype').keyup(function () {			
	validateHolidaytype();
});
function validateHolidaytype() {
	let holidayValue = $('#Holidaytype').val();
	if (holidayValue.length == '') {
	$('#holidaytypecheck').show();
	    holidayError = false;
		return false;
	}	
	else {
		$('#holidaytypecheck').hide();
		holidayError = true;	
	}
	}


	// Validate Startdate
	$('#holidaystartdatecheck').hide();	
	let startdateError = true;
	$('#Holidaystartdate').keyup(function () {			
		validateStartdate();
	});
	function validateStartdate() {
		let startdateValue = $('#Holidaystartdate').val();
		if (startdateValue.length == '') {
		$('#holidaystartdatecheck').show();
		startdateError = false;
			return false;
		}	
		else {
			$('#holidaystartdatecheck').hide();
			startdateError = true;	
		}
		}
	
		// Validate Enddate
	$('#holidayenddatecheck').hide();	
	let enddateError = true;
	$('#Holidayenddate').keyup(function () {			
		validateEnddate();
	});
	function validateEnddate() {
		let enddateValue = $('#Holidayenddate').val();
		if (enddateValue.length == '') {
		$('#holidayenddatecheck').show();
	    	enddateError = false;
			return false;
		}	
		else {
			$('#holidayenddatecheck').hide();
			enddateError = true;	
		}
		}
	

		$('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
	$('#submitbtn').click(function () {	
		
		validateHolidaytype();	 
		validateStartdate();  
		validateEnddate();
	

		if (holidayError == true && startdateError == true && enddateError == true  )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }
	});

	
});
