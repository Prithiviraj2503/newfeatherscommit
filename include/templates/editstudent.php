   


   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Student Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Student updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Student Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="student_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Admissionno</th>
                        <th>Studentname</th>
                        <th>Surname</th>   

                        <th>Dateofbirth</th>
                        <th>Gender</th>
                        <th>Mothertongue</th> 

                        <th>Aadhaarcard</th>
                        <th>Bloodgroup</th>
                        <th>Category</th> 

                        <th>Caste</th>
                        <th>Subcaste</th>
                        <th>Nationality</th> 

                        <th>Region</th>
                        <th>Currentflatno</th>
                        <th>Currentstreet</th> 

                        <th>Currentarealocality</th>
                        <th>Currentdistrict</th>
                        <th>Currentpincode</th> 

                        <th>Permanentflatno</th>
						<th>Permanentstreet</th>
                        <th>Permanentarealocality</th>
                        <th>Permanentdistrict</th> 

                        <th>Permanentpincode</th>
						
                        <th>Standard</th>
                        <th>Medium</th> 

                        <th>Section</th>
                        <th>Rollnumber</th>
                        <th>Concessiontype</th> 

                        <th>Concessionpercentage</th>
                        <th>Facility</th>
                        <th>Areaofstudent</th> 

                        <th>Fathername</th>
                        <th>Fatheraadhaarnumber</th>
                        <th>Fatheroccupation</th> 

                        <th>Natureofjob</th>
                        <th>Telephone</th>
                        <th>Fathermobile</th> 

                        <th>Fatheremailid</th>
                        <th>Mothername</th>
                        <th>Motheraadhaarnumber</th> 

                        <th>Monthlyincome</th>
                        <th>Positionheld</th>                       

                        <th>Mothermobile</th>
                        <th>Smssentno</th>
                        <th>Siblingname</th> 
                        <th>Siblingrefno</th> 
						
						<th>Siblingschoolname</th> 
                        <th>Siblingstd</th> 
                        <th>Extracurricular</th> 
						
						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>		
            </table>
								
								