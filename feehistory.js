
// medium  check
$(document).ready(function () {
    $('#mediumcheck').hide();	
    let mediumerror = true;
    $('#medium').keyup(function () {			
        medium();
    });
    
    function medium() {
        let mediumValue = $('#medium').val();
        if (mediumValue == '') {
        $('#mediumcheck').show();
        mediumerror = false;
            return false;
        }	
        else {
            $('#mediumcheck').hide();
            mediumerror = true;	
        }
        }


        // standard  check

    $('#standardcheck').hide();	
    let standarderror = true;
    $('#standard').keyup(function () {			
        standard();
    });
    
    function standard() {
        let standardValue = $('#standard').val();
        if (standardValue == '') {
        $('#standardcheck').show();
        studentnameerror = false;
            return false;
        }	
        else {
            $('#standardcheck').hide();
            standarderror = true;	
        }
        }

               // section  check

    $('#sectioncheck').hide();	
    let sectionerror = true;
    $('#section').keyup(function () {			
        section();
    });
    
    function section() {
        let sectionValue = $('#section').val();
        if (sectionValue == '') {
        $('#sectioncheck').show();
        sectionerror = false;
            return false;
        }	
        else {
            $('#sectioncheck').hide();
            sectionerror = true;	
        }
        }

          // studentname  check

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


             // studentname  check

    $('#selectstudentcheck').hide();	
    let selectstudenterror = true;
    $('#selectstudent').keyup(function () {			
        selectstudent();
    });
    
    function selectstudent() {
        let selectstudentValue = $('#selectstudent').val();
        if (selectstudentValue == '') {
        $('#selectstudentcheck').show();
        selectstudenterror = false;
            return false;
        }	
        else {
            $('#selectstudentcheck').hide();
            selectstudenterror = true;	
        }
        }


        $('#submitbtn').click(function () {	
            medium();
			standard();
            section();

			studentname();
            selectstudent();
          

		if ( studentnameerror = true && selectstudenterror == true
			&& standarderror == true && mediumerror == true && sectionerror == true
          )
		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }

});
    });