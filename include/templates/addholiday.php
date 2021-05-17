  
  <?php 
  $holidayid =0;

 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['Holidaytype'] != '' && $_POST['Holidaystartdate'] != '' && $_POST['Holidayenddate'] != '' )
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $holidayupdatedetails = $userObj->updateholiday($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>holiday&msc=2';</script>
    <?php	}
    else{
   
	
		$holidayadddetails = $userObj->addholiday($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>holiday&msc=1';</script>
        <?php
    }
 }  
 
}
$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
	$holidaydeletedetails = $userObj->deleteholiday($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>holiday&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$holidaydetails = $userObj->getholiday($mysqli,$idupd); 
	
	if (sizeof($holidaydetails)>0) {
        for($iholiday=0;$iholiday<sizeof($holidaydetails);$iholiday++)  {			
			$holidayid                   = $holidaydetails['holidayid'];
			$holidaytype          		 = $holidaydetails['holidaytype'];
			$holidaystartdate      		 = $holidaydetails['holidaystartdate'];
			$holidayenddate       		 = $holidaydetails['holidayenddate'];
			$description               	 = $holidaydetails['description'];
			$status          			 = $holidaydetails['status'];
						
		}
	}
}

  ?>
  
  
  <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Holiday Information</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">									
                                    <form id="Holidayform" name="Holidayform" action="" method="post">
                                    <input type="hidden" class="form-control" value="<?php if(isset($holidayid)) echo $holidayid; ?>"  id="id" name="id" aria-describedby="Holidayid" placeholder="Enter Holidayid">
                                      
                                      
                                    <div class="row clearfix"> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Holiday Type <span class="text-danger">*</span></label>
                                            <input tabindex="1" type="text" value="<?php if(isset($holidaytype)) echo $holidaytype; ?>" id="Holidaytype" name="Holidaytype" placeholder="Holiday Type" class="form-control">
                                            <label><span id="holidaytypecheck" class="text-danger">Enter The Holiday Type</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Holiday Start Date <span class="text-danger">*</span></label>
                                            <input tabindex="2" data-provide="datepicker" value="<?php if(isset($holidaystartdate)) echo $holidaystartdate; ?>" data-date-autoclose="true" readonly id="Holidaystartdate" name="Holidaystartdate"  class="form-control" placeholder="Holiday Start Date">
                                            <label><span id="holidaystartdatecheck" class="text-danger">Select The Holiday Start Date</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Holiday End Date <span class="text-danger">*</span></label>
                                            <input tabindex="3" data-provide="datepicker" value="<?php if(isset($holidayenddate)) echo $holidayenddate; ?>" readonly data-date-autoclose="true"  id="Holidayenddate" name="Holidayenddate" class="form-control" placeholder="Holiday End Date">
                                            <label><span id="holidayenddatecheck" class="text-danger">Select The Holiday End Date</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Description </label>
                                            <textarea tabindex="4" rows="4" class="form-control no-resize" value="" id="Description" name="Description" placeholder="Enter the Description"><?php if(isset($description)) echo $description;?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input  tabindex="5" id="Holidayactive" name="Holidayactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
							</div></div></div>
                                    

                                            <div class="col-md-12 col-sm-12">    
                                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                                            </div>                      

                                          <div class="col-sm-12">
                                          <div class="text-right">
                                                <input  tabindex="6" type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button tabindex="7" type="reset" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                            </div>
                        </div>