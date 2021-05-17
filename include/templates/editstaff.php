   


   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Staff Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Staff updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Staff Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="staff_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>   

                        <th>Employee Number</th>
                        <th>Gender</th>
                        <th>Bloodgroup</th> 

                        <th>Staffroll</th>
                        <th>Qualification</th>
                        <th>Email</th> 

                        <th>Pan</th>
                        <th>Pfnumber</th>
                        <th>Contactnumber</th> 

                        <th>Dateofjoining</th>
                        <th>Appointmentletter</th>
                        <th>Aadhaarnumber</th> 

                        <th>Emergencycontactperson</th>
                        <th>Emergencycontactnumber</th>
                        <th>Transportation</th> 

                        <th>Flatno</th>
                        <th>Area</th>
                        <th>District</th> 

                        <th>Pincode</th>
                        <th>Bankname</th>
                        <th>Accountnumber</th> 

                        <th>Branch</th>
                        <th>Ifsccode</th>
                        <th>Staffpath</th> 

                        <th>Basicpay</th>
                        <th>Detection</th>
                        <th>Detectionamount</th> 

                        <th>Hra</th>
                        <th>Grosspay</th>
                        <th>Netamount</th> 

                        <th>Transportallowance</th>
                        <th>Medicalallowance</th>
                        <th>Specialpay</th> 

                        <th>Title1</th>
                        <th>Name1</th>
                        <th>Issuedby1</th> 

                        <th>Title2</th>
                        <th>Name2</th>
                        <th>Issuedby2</th> 

                        <th>Title3</th>
                        <th>Name3</th>
                        <th>Issuedby3</th> 
                        <th>Document</th> 

						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>		
            </table>
								
								