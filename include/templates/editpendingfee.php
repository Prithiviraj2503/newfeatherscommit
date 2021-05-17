<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Pending Fee Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div  class="alert-text" >Pending Fee updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Pending Fee Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
<table id="pendingfee_info" class="table table-bordered table-striped">
<thead>
<tr class="text-light bg-azure">
                        <th>Roll Number</th>
                        <th>Student Name</th>
                        <th>Medium</th>
                        <th>Standard</th> 
                        <th>Section</th>
                        <th>Academic Year</th>  
                        <th>Total Fee</th>
                        <th>Pending Amount</th>
                        <th>status</th>
                        <th>action</th>
                      
</tr>
</thead>		
</table>
