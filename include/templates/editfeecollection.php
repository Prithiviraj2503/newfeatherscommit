<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Fee Collection Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Fee Collection Updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Fee Collection Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="feecollection_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                      <th>Receipt Number</th>	
                       <th>Register Number</th>    
                        <th>Student ID</th>   
                         <th>Receipt Date</th>  
                          <th>Academic Year</th> 
                           <th>Standard</th>    
                            <th>Other Changes</th>   
                             <th>Other Fees Received</th>  
                              <th>Total Fee Collected</th> 
                               <th>Final Fee Collected</th>    
                                <th>Fee Collected</th>   
                                 <th>Balance Fee To Collect</th>  
                                 <th>Status</th>		
                                 <th>Action</th>	
                    </tr>
                </thead>		
            </table>
								
								