
// Student Name check
$(document).ready(function () {
    $('#studentnamecheck').hide();	
    let studentnameerror = true;
    $('#studentname').keyup(function () {			
        studentname();
    });
    
    function studentname() {
        let studentnameValue = $('#studentname').val();
        if (studentnameValue == '') {
        $('#studentnamecheck').show();
        studentnameerror = false;
            return false;
        }	
        else {
            $('#studentnamecheck').hide();
            studentnameerror = true;	
        }
        }
    

// Roll No check

    $('#rollnumbercheck').hide();	
    let rollnumbererror = true;
    $('#rollnumber').keyup(function () {			
        rollnumber();
    });
    
    function rollnumber() {
        let rollnumberValue = $('#rollnumber').val();
        if (rollnumberValue.length == '') {
        $('#rollnumbercheck').show();
        rollnumbererror = false;
            return false;
        }	
        else {
            $('#rollnumbercheck').hide();
            rollnumbererror = true;	
        }
        }
   

        // Standard check

    $('#standardcheck').hide();	
    let standarderror = true;
    $('#standard').keyup(function () {			
        standard();
    });
    
    function standard() {
        let standardValue = $('#standard').val();
        if (standardValue.length == '') {
        $('#standardcheck').show();
        standarderror = false;
            return false;
        }	
        else {
            $('#standardcheck').hide();
            standarderror = true;	
        }
        }
    
        
        // medium check

    $('#mediumcheck').hide();	
    let mediumerror = true;
    $('#medium').keyup(function () {			
        medium();
    });
    
    function medium() {
        let mediumValue = $('#medium').val();
        if (mediumValue.length == '') {
        $('#mediumcheck').show();
        mediumerror = false;
            return false;
        }	
        else {
            $('#mediumcheck').hide();
            mediumerror = true;	
        }
        }
    

             // standard check

    $('#sectioncheck').hide();	
    let sectionerror = true;
    $('#section').keyup(function () {			
        section();
    });
    
    function section() {
        let sectionValue = $('#section').val();
        if (sectionValue.length == '') {
        $('#sectioncheck').show();
        sectionerror = false;
            return false;
        }	
        else {
            $('#sectioncheck').hide();
            sectionerror = true;	
        }
        }
    

        
             // academicyear check

    $('#academicyearcheck').hide();	
    let academicyearerror = true;
    $('#academicyear').keyup(function () {			
        academicyear();
    });
    
    function academicyear() {
        let academicyearValue = $('#academicyear').val();
        if (academicyearValue.length == '') {
        $('#academicyearcheck').show();
        academicyearerror = false;
            return false;
        }	
        else {
            $('#academicyearcheck').hide();
            academicyearerror = true;	
        }
        }
       

        
             // totalfee check

    $('#totalfeecheck').hide();	
    let totalfeeerror = true;
    $('#totalfee').keyup(function () {			
        totalfee();
    });
    
    function totalfee() {
        let totalfeeValue = $('#totalfee').val();
        if (totalfeeValue.length == '') {
        $('#totalfeecheck').show();
        totalfeeerror = false;
            return false;
        }	
        else {
            $('#totalfeecheck').hide();
            totalfeeerror = true;	
        }
        }
    // }); 
               

        
             // pendingfee check

    $('#pendingfeecheck').hide();	
    let pendingfeeerror = true;
    $('#pendingfee').keyup(function () {			
        pendingfee();
    });
    
    function pendingfee() {
        let pendingfeeValue = $('#pendingfee').val();
        if (pendingfeeValue.length == '') {
        $('#pendingfeecheck').show();
        pendingfeeerror = false;
            return false;
        }	
        else {
            $('#pendingfeecheck').hide();
            pendingfeeerror = true;	
        }
        }



        $('#submitbtn').click(function () {	
			studentname();
			rollnumber();
            standard();
            section();
            medium();
			academicyear();
            totalfee();
            pendingfee();

		if ( studentnameerror = true && rollnumbererror == true
			&& standarderror == true && mediumerror == true && sectionerror == true
            && academicyearerror == true
            && totalfeeerror == true
            
            && pendingfeeerror == true)
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }

});
});
