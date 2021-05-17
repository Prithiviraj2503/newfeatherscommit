<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text"> General Message Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">General Message updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">General Message Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="generalsms_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>                        
						<th>Subject</th>	
                        <th>General Message</th>
                        <th>Status</th>    
                        <th>Action</th>    				
                    </tr>
                </thead>		
            </table>
								
								