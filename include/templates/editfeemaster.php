   

  
   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Fee Master Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Fee Master updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Fee Master Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="feemaster_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Standardlist</th>
                        <th>Medium</th>
                        <th>Academicyear</th>                                        
						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>
						
                                </table>
								
								