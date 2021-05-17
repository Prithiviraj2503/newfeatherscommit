<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Birthday Wishes Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Birthday Wishes updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Birthday Wishes Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="birthdaysms_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Birthday Wishes</th>
                        <th>Character Count</th>
                        <th>SMS Count</th>                        
						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>		
            </table>
								
								