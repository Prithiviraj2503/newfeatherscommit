
// admissionnumber check
$(document).ready(function () {
    $('#admissionnumbercheck').hide();	
    let admissionerror = true;
    $('#admissionnumber').keyup(function () {			
        admissionnumber();
    });
   
    
    function admissionnumber() {
        let admissionValue = $('#admissionnumber').val();
        if (admissionValue.length == '') {
        $('#admissionnumbercheck').show();
        admissionerror = false;
            return false;
        }	
        else {
            $('#admissionnumbercheck').hide();
            admissionerror = true;	
        }
        }
    
    
    
        // payamount check

     
            $('#payamountcheck').hide();	
            $('#invalidamount').hide();
            let payamounterror = true;
            $('#payamount').keyup(function () {			
                payamount();
            });
      
            
        function payamount() {
            let payamountValue = $('#payamount').val();
            var numbers = /^[0-9]+$/;
            if (payamountValue.length == '') {
                $('#payamountcheck').show();
                $('#invalidamount').hide();
                payamounterror = false;
                    return false;
                }
                
           
            else {
                $('#payamountcheck').hide();
                $('#invalidamount').hide();
                payamounterror = true;	
            }
            }
    
    
    // duedate check
  
    $('#duedatecheck').hide();	
    let duedateerror = true;
    $('#duedate').keyup(function () {			
        duedate();
    });
 
    
    function duedate() {
        let duedateValue = $('#duedate').val();
        if (duedateValue == '') {
        $('#duedatecheck').show();
            duedateerror = false;
            return false;
        }	
        else {
            $('#duedatecheck').hide();
            duedateerror = true;	
        }
        }
    
    
    
        // remindermessage check
  
    $('#remindercheck').hide();	
    let messageerror = true;
    $('#remindermessage').keyup(function () {			
        remindermessage();
    });
  
    
    function remindermessage() {
        let messageValue = $('#remindermessage').val();
        if (messageValue.length == '') {
        $('#remindercheck').show();
        messageerror = false;
            return false;
        }	
        else {
            $('#remindercheck').hide();
            messageerror = true;	
        }
        }
    

    $('#submitbtn').click(function () {	
        admissionnumber();
        payamount();
        duedate();
        remindermessage();
                
    
            if ( admissionerror = true && payamounterror == true
                && duedateerror == true && messageerror == true )
              {
                return true;
              } 
              else 
              {
                return false;
              }
    
    });
    
    
    
});
    
    
    
    
    
    
    