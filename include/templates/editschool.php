   

  
   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">School Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">School updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">School Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="school_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>School Name</th>
                        <th>Address1</th>
                        <th>Address2</th>
                        <th>pincode</th>
                        <th>landmark</th>
                        <th>district</th>
						<th>state</th>
                        <th>email</th>                                         
						<th>website</th>
                        <th>phonenumber</th>
						<th>landlinecode</th>
						<th>landlinenumber</th>	                      
						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>
						
                                </table>
								
								