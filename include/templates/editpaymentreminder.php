<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text"> Payment Reminder Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Payment Reminder updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Payment Reminder Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="remindersms_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Admission Number</th>
                        <th>Payment Amount</th>
                        <th>Due Date</th>                        
						<th>Message</th>	
                        <th>Status</th>    
                        <th>Action</th>    				
                    </tr>
                </thead>		
            </table>
								
								