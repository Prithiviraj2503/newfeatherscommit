<?php

$status =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
   if($_POST['remindermessage'] != '' && $_POST['admissionnumber'] != '' )
  {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){   
    $id = $_POST['id'];   


    $updateremindermessagedetails = $userObj->updateremindermessagedetails($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>remindersms&msc=2';</script>
    <?php }

    else{
  $addremindermessage = $userObj-> addremindermessage($mysqli);
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>remindersms&msc=1';</script>
        <?php
    }
 }  
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
  $remindersmsdetails = $userObj->remindersmsdetails($mysqli,$idupd); 
  
  if (sizeof($remindersmsdetails)>0) {
        for($iremindersms=0;$iremindersms<sizeof($remindersmsdetails);$iremindersms++){ 
      $id                        = $remindersmsdetails['id'];
      $admissionnumber           = $remindersmsdetails['admissionnumber'];
      $payamount                 = $remindersmsdetails['payamount'];
      $duedate                   = $remindersmsdetails['duedate'];
      $generalmessage            = $remindersmsdetails['remindermessage'];
      $status                    = $remindersmsdetails['status'];
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
  $deleteremindersms = $userObj->deleteremindersms($mysqli,$del); 
  //die;
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>remindersms&msc=3';</script>
<?php 
}

?>

<div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">                            <div class="col-lg-8 col-md-12 col-sm-12">
                               
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Payment Reminder</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">	
                                       <div class="container-fluid">
                                       <form id="generalsmsform" name="generalsmsform" action="" method="post">

                                        <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter The id">

                                    
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <label>Admission Number <span class="text-danger">*</span></label>
                                                    <input tabindex="1"  type="text" value="<?php if(isset($admissionnumber)) echo $admissionnumber; ?>" id="admissionnumber"  name="admissionnumber" placeholder="Enter The Admission Number" class="form-control">
                                                    
                                                    <span id="admissionnumbercheck" class="text-danger">Enter The Admission number</span></label> 
                                                </div>
                                               
                                               
                                                <div class="col-md-6">
                                                    <label>Pay Amount <span class="text-danger">*</span></label>
                                                    <input tabindex="2"  type="number" value="<?php if(isset($payamount)) echo $payamount; ?>" id="payamount" name="payamount" placeholder="Enter The Pay Amount" class="form-control">
                                                    <span id="payamountcheck" class="text-danger">Enter The pay Amount</span></label> 
                                                </div>
                                               
                                                </div>

                                                <div class="row">
                                                <div class="col-md-6">
                                                    <label>Due Date <span class="text-danger">*</span></label>                                                  
                                                    <input tabindex="3" data-provide="datepicker"  value="<?php if(isset($duedate)) echo $duedate; ?>"   data-date-autoclose="true" readonly id="duedate" name="duedate"  class="form-control" placeholder="Enter The Due Date">
                                                    <span id="duedatecheck" class="text-danger">Enter The Due Date</span></label> 
                                                </div>
                                               
                                               
                                               
                                                </div>

                                      <div class="row">
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Message <span class="text-danger">*</span></label>
                                            <textarea id="remindermessage" name="remindermessage" tabindex="4" rows="4" cols="30" class="form-control no-resize"  onkeyup="clicks(this)" value="" placeholder="Enter the Message"><?php if(isset($generalmessage)) echo $generalmessage; ?></textarea>
                                            <label><span id="remindercheck" class="text-danger">Enter The Message</span></label>
                                        </div>
                                    </div>   
                                        </div>
                                           
                                              <div class="row">
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                           <div class="kt-checkbox-inline">
                                                                <label class="kt-checkbox">
                                                                        <input tabindex="5" id="status" name="status" type="checkbox" value="Yes"   <?php if($status==0){echo'checked';}?> > Is Active?
                                                                        <span></span>
                                                                </label>
                                       </div>
                                                        </div>
                                              </div>
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              <input tabindex="6" type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 " />
                                              <button tabindex="7" type="reset" class="btn btn-outline-secondary">Cancel</button><br/>
                                              </div>
                                           </div>

                                           </form>   
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>   
                      </div>
                       