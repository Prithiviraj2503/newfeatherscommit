   <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2021.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                           
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/dropify/js/dropify.min.js"></script>
<script src="assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
<script src="assets/js/page/summernote.js"></script>



<script src="dist/js/jquery.min.js" ></script>

<script src="dist/js/popper.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>




<script type="text/javascript" src="assets/jsd/datatables.min.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {

     
        var school_info = $('#school_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxschoolfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
	
        var trust_info = $('#trust_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxtrustfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
  
    var student_info = $('#student_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxstudentfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

    var holiday_info = $('#holiday_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxholidayfetch.php',
			'data': function(data){
             var search = $('#search').val();	// Append to data                           
		  	data.search      = search;
			}
		},		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
    var subject_info = $('#subject_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxsubjectfetch.php',
			'data': function(data){
             var search = $('#search').val();	// Append to data                           
		  	data.search      = search;
			}
		},		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

    var subjectgroup_info = $('#subjectgroup_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxsubjectgroupfetch.php',
			'data': function(data){
             var search = $('#search').val();	// Append to data                           
		  	data.search      = search;
			}
		},		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});
var birthdaysms_info = $('#birthdaysms_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxbirthdaysmsfetch.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
    });

 var generalsms_info = $('#generalsms_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxgeneralsmsfetch.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
    });


    
 var remindersms_info = $('#remindersms_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxremindersmsfetch.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });

 var castereport_info = $('#castereport_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxcastereport.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });

 var feecollectionreport_info = $('#feecollectionreport_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxfeecollectionreport.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });


 var studenteport_info = $('#studenteport_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxstudentreport.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });

 var studentrollback_info = $('#studentrollback_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxstudentrollback.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });


 var pendingfee_info = $('#pendingfee_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxpendingfee.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
 });




        var staff_info = $('#staff_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxstafffetch.php',
			'data': function(data){
             var search = $('#search').val();	// Append to data                           
		  	data.search      = search;
			}
		},		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

        var feecollection_info = $('#feecollection_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxfeecollectionfetch.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
    });

    var subjectgroup_info = $('#subjectgroup_info').DataTable({
        "order": [[ 0, "desc" ]],
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxsubjectgroupfetch.php',
            'data': function(data){
             var search = $('#search').val();   // Append to data                           
            data.search      = search;
            }
        },      
    dom: 'lBfrtip',
    buttons: [
        'excel', 'csv', {
                          extend: 'pdf',
                          
                        },'copy', 'print', 'colvis',
    ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
    });


	 var feemaster_info = $('#feemaster_info').DataTable({
			"order": [[ 0, "desc" ]],
			'processing': true,
			'serverSide': true,
			'serverMethod': 'post',
			//'searching': false, // Remove default Search Control
			'ajax': {
				'url':'ajaxfeemasterfetch.php',
				'data': function(data){
				 var search = $('#search').val();	// Append to data                           
				data.search      = search;
				}
			},		
		dom: 'lBfrtip',
		buttons: [
			'excel', 'csv', {
							  extend: 'pdf',
							  
							},'copy', 'print', 'colvis',
		],
		"lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
		]
		});
        $('#search').change(function(){
        subject_info.draw();
        subjectgroup_info.draw();
        birthdaysms_info.draw();
        generalsms_info.draw();
        remindersms_info.draw();
       
        holiday_info.draw();
        student_info.draw();
        trust_info.draw();
        school_info.draw();

        staff_info.draw();
        feemaster_info.draw();
        pendingfee_info.draw();
            });
       
    });
	
	
</script>




<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript" src="dist/js/jquery.smartWizard.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        // Step show event
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
           //alert("You are on step "+stepNumber+" now");
           if(stepPosition === 'first'){
               $("#prev-btn").addClass('disabled');
           }else if(stepPosition === 'final'){
               $("#next-btn").addClass('disabled');
           }else{
               $("#prev-btn").removeClass('disabled');
               $("#next-btn").removeClass('disabled');
           }
        });

    
        // Smart Wizard
        $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'default',
                transitionEffect:'fade',
                showStepURLhash: true,
                toolbarSettings: {toolbarPosition: 'both',
                                  toolbarButtonPosition: 'end'
                                
                                }
        });


        // External Button Events
        $("#reset-btn").on("click", function() {
            // Reset wizard
            $('#smartwizard').smartWizard("reset");
            return true;
        });

        $("#prev-btn").on("click", function() {
            // Navigate previous
            $('#smartwizard').smartWizard("prev");
            return true;
        });

        $("#next-btn").on("click", function() {
            // Navigate next
            $('#smartwizard').smartWizard("next");
            return true;
        });

        $("#theme_selector").on("change", function() {
            // Change theme
            $('#smartwizard').smartWizard("theme", $(this).val());
            return true;
        });

        // Set selected theme on page refresh
        $("#theme_selector").change();
    });
     $(document).ready(function() {  
            $("body").on("click","#addCourseFee", function() {  
            var field=$("#coursefee").html();
            $("#crsFeeFields").append(field);  
            });  

            $("body").on("click","#removeCourseFee", function() {  
            $("#crsFeeFields").children().last().remove();
            }); 
        }); 

    $(document).ready(function() {  
            $("body").on("click","#addExCurFee" ,function() {  
            var field=$("#extra_cur_fee").html();
            $("#exCurField").append(field);  
            });  

            $("body").on("click","#removeExCurFee", function() {  
            $("#exCurField").children().last().remove();
            }); 
        }); 

  $(document).ready(function() {  
            $("body").on("click","#addAmField" ,function() {  
            var field=$("#amenityfee").html();
            $("#amenityField").append(field);  
            });  

            $("body").on("click","#removeAmField", function() {  
            $("#amenityField").children().last().remove();
            }); 
        }); 

   $(document).ready(function() {  
            $("body").on("click","#addfeescollection", function() {  
            var field=$("#groupfeescollection").html();
            $("#feescollectionfield").append(field);  
            });  

            $("body").on("click","#removefeescollection", function() {  
            $("#feescollectionfield").children().last().remove();
            }); 
        }); 

      $(document).ready(function() {  
            $("body").on("click","#addpayamount", function() {  
            var field=$("#payamountcollection").html();
            $("#payamountfield").append(field);  
            });  

            $("body").on("click","#removepayamount", function() {  
            $("#payamountfield").children().last().remove();
            }); 
        }); 

</script>

<?php
if($current_page == 'feecollectionreport') { ?>              
<script type="text/javascript" src="jss/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jss/ajax-loading.js"></script>
<script>
function collectionreport(){
var academicyear = $("#academicyear").val();
$.ajax({
 url: 'ajaxfeecollectionreport.php',
 type: 'post',
 data: { academicyear:academicyear},   
 success: function(html){       
    $("#feecollectioncontent").html(html);
 }
});
}
</script>
<?php } ?>

<?php
if($current_page == 'feecollection') { ?>              
<script type="text/javascript" src="jss/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jss/ajax-loading.js"></script>
<script>
function getname(){
var regnum= document.getElementById("registernumber").value;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if (this.readyState == 4 && this.status == 200) {
var myObj = JSON.parse(this.responseText); 
document.getElementById("studentid").value = myObj[0];     
document.getElementById("studentname").value = myObj[1];
}
};
xmlhttp.open("GET", "ajaxgetname.php?regnum=" + regnum, true);
xmlhttp.send();
}
</script>
<?php } ?>

<?php
if($current_page == 'castereport' || $current_page == 'feehistory' ) { ?>              
<script type="text/javascript" src="jss/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jss/ajax-loading.js"></script>
<script>
function bcFunction() {
var bc_status = $("#bc").prop('checked');  
if (bc_status)  
{  
    bc=1;
}
else
{
    bc=0;
}
var mbc_status = $("#mbc").prop('checked');  
if (mbc_status)  
{  
    mbc=1;
}
else
{
    mbc=0;
}
var sc_status = $("#sc").prop('checked');  
if (sc_status)  
{  
    sc=1;
}
else
{
    sc=0;
}
var st_status = $("#st").prop('checked');  
if (st_status)  
{  
    st=1;
}
else
{
    st=0;
}
var obc_status = $("#obc").prop('checked');  
if (obc_status)  
{  
    obc=1;
}
else
{
    obc=0;
}
var dnc_status = $("#dnc").prop('checked');  
if (dnc_status)  
{  
    dnc=1;
}
else
{
    dnc=0;
}
var others_status = $("#others").prop('checked');  
if (others_status)  
{  
    others=1;
}
else
{
    others=0;
}



$.ajax({
 url: 'ajaxcastefetch.php',
 type: 'post',
 data: { Bc:bc,Mbc:mbc,Sc:sc,St:st,Obc:obc,Dnc:dnc,Others:others},   
 success: function(html){       
    $("#confirmContent").html(html);
 }

});
}
</script>
<?php } ?>

<?php
if($current_page == 'studentrollback') { ?>              
<script type="text/javascript" src="jss/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jss/ajax-loading.js"></script>
<script>
function getrollbackdata(){
var standard = $("#standard").val();
var section = $("#section").val();
$.ajax({
 url: 'ajaxstudentrollback.php',
 type: 'post',
 data: { standard:standard, section:section},   
 success: function(html){       
    $("#studentrollbackfield").html(html);
 }
});
}
</script>
<?php } ?>