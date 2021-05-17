// standard Name check
$(document).ready(function () {
    $('#standardcheck').hide();	
    let standarderror = true;
    $('#studentname').keyup(function () {			
        standard();
    });
    
    function standard() {
        let standardValue = $('#standard').val();
        if (standardValue == '') {
        $('#standardcheck').show();
        standarderror = false;
            return false;
        }	
        else {
            $('#standardcheck').hide();
            standardeerror = true;	
        }
        }


        // section Name check

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


        $('#submitbtn').click(function () {	
			
            standard();
            section();
           

		if ( standarderror == true &&  sectionerror == true	)		  {
			return true;
		  } 
		  else 
		  {
			return false;
		  }

});
});