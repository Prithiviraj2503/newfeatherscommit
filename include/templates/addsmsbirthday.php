<?php 
$status =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
   if($_POST['birthdaymessage'] != '' && $_POST['charcount'] != '' )
  {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){   
    $id = $_POST['id'];   


    $updatesmsbirthdaydetails = $userObj->updatesmsbirthday($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>smsbirthday&msc=2';</script>
    <?php }

    else{
  $birthdayinsert = $userObj-> addbirthdaymessage($mysqli);
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>smsbirthday&msc=1';</script>
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
  $birthdaydetails = $userObj->getbirthdaysms($mysqli,$idupd); 
  
  if (sizeof($birthdaydetails)>0) {
        for($ibirthday=0;$ibirthday<sizeof($birthdaydetails);$ibirthday++){ 
      $id                       = $birthdaydetails['id'];
      $birthdaymessage          = $birthdaydetails['birthdaymessage'];
      $charcount                = $birthdaydetails['charcount'];
      $messagecount             = $birthdaydetails['messagecount'];
      $status                   = $birthdaydetails['status'];
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
  $deletebirthdaysms = $userObj->deletebirthdaysms($mysqli,$del); 
  //die;
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>smsbirthday&msc=3';</script>
<?php 
}
?>

  <script>
  function clicks(obj) {

    let msglength = obj.value.length;
    document.getElementById('charcount').value= msglength;
    let rounds=Math.round(msglength/50);
    document.getElementById('messagecount').value = rounds;

}
  </script>

  
  <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                               
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Birthday Wishes</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">	
                                       <div class="container-fluid">
                                       <form id="birthdaydaysmsform" name="birthdaydaysmsform" action="" method="post">

                                        <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter The id">

                                        <div class="row">
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Enter Birth Day Wishes <span class="text-danger">*</span></label>
                                            <textarea id="birthdaymessage" name="birthdaymessage" tabindex="1" rows="4" cols="30" class="form-control no-resize"  onkeyup="clicks(this)" value="" placeholder="Enter the Birthday Message"><?php if(isset($birthdaymessage)) echo $birthdaymessage; ?></textarea>
                                            <label><span id="birthdaymessagecheck" class="text-danger">Enter The Birthday Message</span></label>
                                        </div>
                                    </div>
                                             
                                        </div>
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <label>SMS Character Count </label>
                                                    <input tabindex="2" readonly type="text" value="<?php if(isset($charcount)) echo $charcount; ?>" id="charcount"  name="charcount" placeholder="Enter The Charcount" class="form-control">
                                                    <span id="count"></span>
                                                </div>
                                               
                                               
                                                <div class="col-md-4">
                                                    <label>Message Count </label>
                                                    <input tabindex="3" readonly type="text" value="<?php if(isset($messagecount)) echo $messagecount; ?>" id="messagecount" name="messagecount" placeholder="Enter The Messagecount" class="form-control">
                                                   
                                                    <span id="count"></span>
                                                </div>
                                               
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group">
                                                           <div class="kt-checkbox-inline">
                                                                <label class="kt-checkbox">
                                                                        <input tabindex="4" id="status" name="status" type="checkbox" value="Yes"   <?php if($status==0){echo'checked';}?> > Is Active?
                                                                        <span></span>
                                                                </label>
											                 </div>
                                                        </div>
                                                </div>
                                              <div class="row">
                                           
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              <input type="submit" tabindex="5" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 " />
                                               <button type="reset" tabindex="6" class="btn btn-outline-secondary">Cancel</button><br/>
                                              </div>
                                           </div>
                                           </form>   
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>   
                      </div>
                       