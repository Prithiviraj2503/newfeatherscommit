  
  <?php 
  $trustid =0;
  $idupd =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['Trustname'] != '' && $_POST['Pannumber'] != '' && $_POST['Flatno'] != '' && $_POST['Street'] != '' && $_POST['Area'] != '' &&
$_POST['District'] != '' && $_POST['Pincode'] != '' )
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $trustupdatedetails = $userObj->updatetrust($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>trust&msc=2';</script>
    <?php	}
    else{
   
	
		$trustadddetails = $userObj->addtrust($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>trust&msc=1';</script>
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
	$trustdeletedetails = $userObj->deletetrust($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>trust&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$trustdetails = $userObj->gettrust($mysqli,$idupd); 
	
	if (sizeof($trustdetails)>0) {
        for($itrust=0;$itrust<sizeof($trustdetails);$itrust++)  {			
			$trustid                     = $trustdetails['trustid'];
			$trustname          		 = $trustdetails['trustname'];
			$pannumber      			 = $trustdetails['pannumber'];
			$tannumber       			 = $trustdetails['tannumber'];
			$flatno                 	 = $trustdetails['flatno'];
			$street          			 = $trustdetails['street'];
			$area       			     = $trustdetails['area'];
			$district     		         = $trustdetails['district'];
			$pincode     			     = $trustdetails['pincode'];
			$status        		         = $trustdetails['status'];
			
		}
	}
}

  ?>
  
  
  <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Trust Information</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">									
                                    <form id="Trustform" name="Trustform" action="" method="post">
                                    <input type="hidden" class="form-control" value="<?php if(isset($trustid)) echo $trustid; ?>"  id="id" name="id" aria-describedby="Trustid" placeholder="Enter Trustid">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Trust Name <span class="text-danger">*</span></label>
                                                    <input tabindex="1" type="text" class="form-control" id="Trustname" name="Trustname"  value="<?php if(isset($trustname)) echo $trustname; ?>" placeholder="Enter the Trust Name"   placeholder="Enter the Trust Name">                                                    
                                                	   <label><span id="Trustnamecheck" class="text-danger">Enter The Trust Name</span></label>  
												</div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                </div>
                                            </div>

											<div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Pan Number <span class="text-danger">*</span></label>
                                                    <input tabindex="2" type="text" class="form-control"  id="Pannumber" name="Pannumber" value="<?php if(isset($pannumber)) echo $pannumber; ?>" placeholder="Enter The Pan Number" >                                              
                                                    <label><span id="Pannumbercheck" class="text-danger">Enter The Pan Number</span></label>  
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Tan Number</label>
                                                    <input tabindex="3" type="text" class="form-control" id="Tannumber" name="Tannumber" value="<?php if(isset($tannumber)) echo $tannumber; ?>" placeholder="Enter The Tan Number">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label>Flat No <span class="text-danger">*</span></label>
                                                <input  tabindex="4" type="number" class="form-control"  id="Flatno" name="Flatno"  value="<?php if(isset($flatno)) echo $flatno; ?>" placeholder="Enter The Flat No">
                                                <label><span id="Flatnocheck" class="text-danger">Enter The Flat No</span></label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label>Street <span class="text-danger">*</span></label>
                                               <input  tabindex="5" type="text" class="form-control"  id="Street" name="Street"  value="<?php if(isset($street)) echo $street; ?>"  placeholder="Enter The Street"  >                                               
                                               <label><span id="Streetcheck" class="text-danger">Enter The Street</span></label> 
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Area <span class="text-danger">*</span></label>
                                                    <input tabindex="6" type="text" class="form-control" id="Area" name="Area" value="<?php if(isset($area)) echo $area; ?>"   placeholder="Enter The Area"  >                                                 
                                                    <label><span id="Areacheck" class="text-danger">Enter The Area</span></label> 
                                                </div>
                                            </div>                                                
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>District <span class="text-danger">*</span></label>
                                                    <input tabindex="7" type="text" class="form-control" id="District" name="District"  value="<?php if(isset($district)) echo $district; ?>"  placeholder="Enter The District" >                                              
                                                    <label><span id="Districtcheck" class="text-danger">Enter The District</span></label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Pincode <span class="text-danger">*</span></label>
                                                    <input tabindex="8" type="number" class="form-control" id="Pincode" name="Pincode"  value="<?php if(isset($pincode)) echo $pincode; ?>"   placeholder="Enter The Pincode"  >                                              
                                                    <label><span id="Pincodecheck" class="text-danger">Enter The Pincode</span></label> 
                                                </div>
                                            </div>                                           
                                            <div class="col-md-6 col-sm-12">
                                            </div> 
                                                <div class="row">
							<div class="col-lg-12">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="9" id="trustactive" name="trustactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
							</div></div></div>

                                            <div class="col-md-12 col-sm-12">    
                                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                                            </div>                      
                                           <?php if($idupd >0){?>
                                          <div class="col-sm-12">
                                          <div class="text-right">
                                                <input  tabindex="10" type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button tabindex="11" type="reset" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                            <?php }?>

                                        </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                            </div>
                        </div>