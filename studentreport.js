

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
    
 

      // Section check

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
    


          // Reportfrom check

    $('#reportfromcheck').hide();	
    let reportfromerror = true;
    $('#reportfrom').keyup(function () {			
        reportfrom();
    });
    
    function reportfrom() {
        let reportfromValue = $('#reportfrom').val();
        if (reportfromValue.length == '') {
        $('#reportfromcheck').show();
        reportfromerror = false;
            return false;
        }	
        else {
            $('#reportfromcheck').hide();
            reportfromerror = true;	
        
    }

}


              // reportto check

    $('#reporttocheck').hide();	
    let reporttoerror = true;
    $('#reportto').keyup(function () {			
        reportto();
    });
    
    function reportto() {
        let reporttoValue = $('#reportto').val();
        if (reporttoValue.length == '') {
        $('#reporttocheck').show();
        reporttoerror = false;
            return false;
        }	
        else {
            $('#reporttocheck').hide();
            reporttoerror = true;	
        }
        }




    
              // Workingdays check

    $('#workingdayscheck').hide();	
    let workingdayserror = true;
    $('#workingdays').keyup(function () {			
        workingdays();
    });
    
    function workingdays() {
        let workingdaysValue = $('#workingdays').val();
        if (workingdaysValue.length == '') {
        $('#workingdayscheck').show();
        workingdayserror = false;
            return false;
        }	
        else {
            $('#workingdayscheck').hide();
            workingdayserror = true;	
        }
        }
    


       
              // Absent check

    $('#absentcheck').hide();	
    let absenterror = true;
    $('#absent').keyup(function () {			
        absent();
    });
    
    function absent() {
        let absentValue = $('#absent').val();
        if (absentValue.length == '') {
        $('#absentcheck').show();
        absenterror = false;
            return false;
        }	
        else {
            $('#absentcheck').hide();
            absenterror = true;	
        }
        }
    


         // Attendancepercent check
   
            $('#attendancepercentcheck').hide();	
            let attendancepercenterror = true;
            $('#attendancepercent').keyup(function () {			
                attendancepercent();
            });
            
            function attendancepercent() {
                let attendancepercentValue = $('#attendancepercent').val();
                if (attendancepercentValue ==='') {
                $('#attendancepercentcheck').show();
                attendancepercenterror = false;
                    return false;
                }	
                else {
                    $('#attendancepercentcheck').hide();
                    attendancepercenterror = true;	
                }
                }
         
    

    // Perattendance check
    
        $('#perattendancecheck').hide();	
        let perattendanceerror = true;
        $('#perattendance').keyup(function () {			
            perattendance();
        });
        
        function perattendance() {
            let perattendanceValue = $('#perattendance').val();
            if (perattendanceValue === '') {
            $('#perattendancecheck').show();
            perattendanceerror = false;
                return false;
            }	
            else {
                $('#perattendancecheck').hide();
                perattendanceerror = true;	
            }
            }
        
  

    // perpunctuality check

    $('#perpunctualitycheck').hide();	
    let perpunctualityerror = true;
    $('#perpunctuality').keyup(function () {			
        perpunctuality();
    });
    
    function perpunctuality() {
        let perpunctualityValue = $('#perpunctuality').val();
        if (perpunctualityValue.length == '') {
        $('#perpunctualitycheck').show();
        perpunctualityerror = false;
            return false;
        }	
        else {
            $('#perpunctualitycheck').hide();
            perpunctualityerror = true;	
        }
        }
    



    // perdiscipline check
 
        $('#perdisciplinecheck').hide();	
        let perdisciplineerror = true;
        $('#perdiscipline').keyup(function () {			
            perdiscipline();
        });
        
        function perdiscipline() {
            let perdisciplineValue = $('#perdiscipline').val();
            if (perdisciplineValue.length == '') {
            $('#perdisciplinecheck').show();
            perdisciplineerror = false;
                return false;
            }	
            else {
                $('#perdisciplinecheck').hide();
                perdisciplineerror = true;	
            }
            }
        
       


  // perattitude check

    $('#perattitudecheck').hide();	
    let perattitudeerror = true;
    $('#perattitude').keyup(function () {			
        perattitude();
    });
    
    function perattitude() {
        let perattitudeValue = $('#perattitude').val();
        if (perattitudeValue.length == '') {
        $('#perattitudecheck').show();
        perattitudeerror = false;
            return false;
        }	
        else {
            $('#perattitudecheck').hide();
            perattitudeerror = true;	
        }
        }
    
    


 // percommunication check

    $('#percommunicationcheck').hide();	
    let percommunicationerror = true;
    $('#percommunication').keyup(function () {			
        percommunication();
    });
    
    function percommunication() {
        let percommunicationValue = $('#percommunication').val();
        if (percommunicationValue.length == '') {
        $('#percommunicationcheck').show();
        percommunicationerror = false;
            return false;
        }	
        else {
            $('#percommunicationcheck').hide();
            percommunicationerror = true;	
        }
        }
    
 



 // perclassparticipation check

    $('#perparticipationcheck').hide();	
    let perclassparticipationerror = true;
    $('#perclassparticipation').keyup(function () {			
        perclassparticipation();
    });
    
    function perclassparticipation() {
        let perclassparticipationValue = $('#perclassparticipation').val();
        if (perclassparticipationValue.length == '') {
        $('#perparticipationcheck').show();
        perclassparticipationerror = false;
            return false;
        }	
        else {
            $('#perparticipationcheck').hide();
            perclassparticipationerror = true;	
        }
        }
    
 

 // percapability check

    $('#percapabilitycheck').hide();	
    let percapabilityerror = true;
    $('#percapability').keyup(function () {			
        percapability();
    });
    
    function percapability() {
        let percapabilityValue = $('#percapability').val();
        if (percapabilityValue.length == '') {
        $('#percapabilitycheck').show();
        percapabilityerror = false;
            return false;
        }	
        else {
            $('#percapabilitycheck').hide();
            percapabilityerror = true;	
        }
        }
    
  


 // perskill check

    $('#perskillcheck').hide();	
    let perskillerror = true;
    $('#perskill').keyup(function () {			
        perskill();
    });
    
    function perskill() {
        let perskillValue = $('#perskill').val();
        if (perskillValue.length == '') {
        $('#perskillcheck').show();
        perskillerror = false;
            return false;
        }	
        else {
            $('#perskillcheck').hide();
            perskillerror = true;	
        }
        }



 // test1name check

    $('#test1namecheck').hide();	
    let test1nameerror = true;
    $('#test1name').keyup(function () {			
        test1name();
    });
    
    function test1name() {
        let test1nameValue = $('#test1name').val();
        if (test1nameValue.length == '') {
        $('#test1namecheck').show();
        test1nameerror = false;
            return false;
        }	
        else {
            $('#test1namecheck').hide();
            test1nameerror = true;	
        }
        }
    
  


// test1marks check

    $('#test1markscheck').hide();	
    let test1markserror = true;
    $('#test1marks').keyup(function () {			
        test1marks();
    });
    
    function test1marks() {
        let test1marksValue = $('#test1marks').val();
        if (test1marksValue.length == '') {
        $('#test1markscheck').show();
        test1markserror = false;
            return false;
        }	
        else {
            $('#test1markscheck').hide();
            test1markserror = true;	
        }
        }
    
 

// test2name check

    $('#test2namecheck').hide();	
    let test2nameerror = true;
    $('#test2name').keyup(function () {			
        test2name();
    });
    
    function test2name() {
        let test2nameValue = $('#test2name').val();
        if (test2nameValue.length == '') {
        $('#test2namecheck').show();
        test2nameerror = false;
            return false;
        }	
        else {
            $('#test2namecheck').hide();
            test2nameerror = true;	
        }
        }
    


// test2marks check

    $('#test2markscheck').hide();	
    let test2markserror = true;
    $('#test2marks').keyup(function () {			
        test2marks();
    });
    
    function test2marks() {
        let test2marksValue = $('#test2marks').val();
        if (test2marksValue.length == '') {
        $('#test2markscheck').show();
        test2markserror = false;
            return false;
        }	
        else {
            $('#test2markscheck').hide();
            test2markserror = true;	
        }
        }
    
 

    // test3name check

    $('#test3namecheck').hide();	
    let test3nameerror = true;
    $('#test3name').keyup(function () {			
        test3name();
    });
    
    function test3name() {
        let test3nameValue = $('#test3name').val();
        if (test3nameValue.length == '') {
        $('#test3namecheck').show();
            test3nameerror = false;
            return false;
        }	
        else {
            $('#test3namecheck').hide();
            test3nameerror = true;	
        }
        }
    
    


       // test3marks check

    $('#test3markscheck').hide();	
    let test3markserror = true;
    $('#test3marks').keyup(function () {			
        test3marks();
    });
    
    function test3marks() {
        let test3marksValue = $('#test3marks').val();
        if (test3marksValue.length == '') {
        $('#test3markscheck').show();
        test3markserror = false;
            return false;
        }	
        else {
            $('#test3markscheck').hide();
            test3markserror = true;	
        }
        }
    
    


         // test4name check

    $('#test4namecheck').hide();	
    let test4nameerror = true;
    $('#test4name').keyup(function () {			
        test4name();
    });
    
    function test4name() {
        let test4nameValue = $('#test4name').val();
        if (test4nameValue.length == '') {
        $('#test4namecheck').show();
        test4nameerror = false;
            return false;
        }	
        else {
            $('#test4namecheck').hide();
            test4nameerror = true;	
        }
        }
    
    
         // test4marks check

            $('#test4markscheck').hide();	
            let test4markserror = true;
            $('#test4marks').keyup(function () {			
                test4marks();
            });
            
            function test4marks() {
                let test4marksValue = $('#test4marks').val();
                if (test4marksValue.length == '') {
                $('#test4markscheck').show();
                test4markserror = false;
                    return false;
                }	
                else {
                    $('#test4markscheck').hide();
                    test4markserror = true;	
                }
                }
            
       


        // reportcomments check

    $('#reportcommentcheck').hide();	
    let reportcommentserror = true;
    $('#reportcomments').keyup(function () {			
        reportcomments();
    });
    
    function reportcomments() {
        let reportcommentsValue = $('#reportcomments').val();
        if (reportcommentsValue.length == '') {
        $('#reportcommentcheck').show();
        reportcommentserror = false;
            return false;
        }	
        else {
            $('#reportcommentcheck').hide();
            reportcommentserror = true;	
        }
        }


        $('#submitbtn').click(function () {	
			studentname();
			rollnumber();
			standard();
		    section();
			reportfrom();
            reportto();
            workingdays();
            absent();
            attendancepercent();
            perattendance();
            perpunctuality();
            perdiscipline();
            perattitude();
            percommunication();
            perclassparticipation();
            percapability();
            perskill();
            test1name();
            test1marks();
            test2name();
            test2marks();
            test3name();
            test3marks();
            test4name();
            test4marks();
            reportcomments();
  

		if ( studentnameerror = true && rollnumbererror == true
			&& standarderror == true && sectionerror == true
            && reportfromerror == true&& reporttoerror == true 
            && workingdayserror == true && absenterror == true
            && attendancepercenterror == true && perattendanceerror == true 
            && perpunctualityerror == true && perdisciplineerror == true 
            && perattitudeerror == true&& percommunicationerror == true
            && perclassparticipationerror == true && percapabilityerror == true 
            && perskillerror == true 
            && test1nameerror == true && test1markserror == true && test2nameerror == true
            && test2markserror == true && test3nameerror == true && test3markserror == true
            &&test4nameerror == true
            &&test4markserror == true
            && reportcommentserror == true
            
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