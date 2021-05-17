  
  <?php 
  $subjectid =0;

 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['subject'] != '' && $_POST['subjectcode'] != '' && $_POST['subjecttype'] != '' )
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $subjectupdatedetails = $userObj->updatesubject($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>subject&msc=2';</script>
    <?php	}
    else{
   
	
		$subjectadddetails = $userObj->addsubject($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>subject&msc=1';</script>
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
	$subjectdeletedetails = $userObj->deletesubject($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>subject&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$subjectdetails = $userObj->getsubject($mysqli,$idupd); 
	
	if (sizeof($subjectdetails)>0) {
        for($isubject=0;$isubject<sizeof($subjectdetails);$isubject++)  {			
			$subjectid                   = $subjectdetails['subjectid'];
			$subject            		 = $subjectdetails['subject'];
			$subjectcode        		 = $subjectdetails['subjectcode'];
			$subjecttype         		 = $subjectdetails['subjecttype'];			
			$status          			 = $subjectdetails['status'];
						
		}
	}
}

  ?>
  
  
  <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Subject Information</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">									
                                    <form id="Subjectform" name="Subjectform" action="" method="post">
                                    <input type="hidden" class="form-control" value="<?php if(isset($subjectid)) echo $subjectid; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter The Subjectid">
                                      
                                      
                                    <div class="row clearfix"> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Subject <span class="text-danger">*</span></label>
                                            <input tabindex="1" type="text" value="<?php if(isset($subject)) echo $subject; ?>" id="subject" name="subject" placeholder="Enter The Subject" class="form-control">
                                            <label><span id="subjectcheck" class="text-danger">Enter The Subject</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Subject Code<span class="text-danger">*</span></label>
                                            <input tabindex="2" type="text" value="<?php if(isset($subjectcode)) echo $subjectcode; ?>" id="subjectcode" name="subjectcode" placeholder="Enter The Subject Code" class="form-control">
                                            <label><span id="subjectcodecheck" class="text-danger">Enter The Subject Code</span></label> 
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input tabindex="3" type="radio" class="custom-control-input" name="subjecttype" id="subjecttype" value="Theory" <?php if(isset($subjecttype) && $subjecttype=="Theory"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Theory</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input tabindex="4" type="radio" class="custom-control-input" name="subjecttype" id="subjecttype" value="Practical" <?php if(isset($subjecttype)&& $subjecttype=="Practical"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Practical</span>
                        </label><br/><br/>
</div>
                                    <div class="col-lg-12">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="5" id="subjectactive" name="subjectactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
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