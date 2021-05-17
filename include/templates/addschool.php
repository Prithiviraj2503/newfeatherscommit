  



  <?php 
   $id=0;
 
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

    
if($_POST['schoolname'] != '' && $_POST['address1'] != '' && $_POST['pincode'] != '' && $_POST['landmark'] != '' && $_POST['district'] != '' &&
$_POST['state'] != '' && $_POST['email'] != '' && $_POST['website'] != '' && $_POST['phonenumber'] != '' && $_POST['landlinecode'] != '' 
&& $_POST['landlinenumber'] != '' )
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $schoolupdatedetails = $userObj->updateschool($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>school&msc=2';</script>
    <?php	}
    else{
   
	
		$schooladddetails = $userObj->addschool($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>school&msc=1';</script>
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
	$schooldeletedetails = $userObj->deleteschool($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>school&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$schooldetails = $userObj->getschool($mysqli,$idupd); 
	
	if (sizeof($schooldetails)>0) {
        for($ischool=0;$ischool<sizeof($schooldetails);$ischool++)  {			
			$id                			 = $schooldetails['id'];
			$schoolname          		 = $schooldetails['schoolname'];
			$address1      			     = $schooldetails['address1'];
			$address2       			 = $schooldetails['address2'];
			$pincode                	 = $schooldetails['pincode'];
			$landmark       			 = $schooldetails['landmark'];
			$district     			     = $schooldetails['district'];
			$state     		       	     = $schooldetails['state'];
			$email     			         = $schooldetails['email'];
			$website        		     = $schooldetails['website'];
			$phonenumber	    		 = $schooldetails['phonenumber'];
			$landlinecode                = $schooldetails['landlinecode'];
            $landlinenumber              = $schooldetails['landlinenumber'];        
            $status                      = $schooldetails['status'];  
		}
	}
}

  ?>
  
  
  <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="School-add">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">School Information</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">									
                                    <form id="schoolform" name="schoolform" action="" method="post">
                                    <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter id">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>School Name <span class="text-danger">*</span></label>
                                                    <input type="text" tabindex="1" class="form-control" id="schoolname" name="schoolname"  value="<?php if(isset($schoolname)) echo $schoolname; ?>" placeholder="Enter The School Name"   placeholder="Enter the School Name">                                                    
                                                	   <label><span id="schoolnamecheck" class="text-danger">Enter The School Name</span></label>  
												</div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                </div>
                                            </div>

											<div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Address1 <span class="text-danger">*</span></label>
                                                    <input type="text" tabindex="2" class="form-control"  id="address1" name="address1" value="<?php if(isset($address1)) echo $address1; ?>" placeholder="Enter The Address1" >                                              
                                                    <label><span id="Address1check" class="text-danger">Enter The Address1</span></label>  
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Address2</label>
                                                    <input type="text" tabindex="3" class="form-control" id="address2" name="address2" value="<?php if(isset($address2)) echo $address2; ?>" placeholder="Enter The Address2">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Pincode <span class="text-danger">*</span></label>
                                                    <input type="number"  tabindex="4" class="form-control" id="pincode" name="pincode" value="<?php if(isset($pincode)) echo $pincode; ?>"  placeholder="Enter The Pincode" >                                                 
                                                    <label><span id="pincodecheck" class="text-danger">Enter The Pincode</span></label> 
                                                </div>
                                            </div>   
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label>Landmark <span class="text-danger">*</span></label>
                                                <input type="text" tabindex="5" class="form-control"  id="landmark" name="landmark"  value="<?php if(isset($landmark)) echo $landmark; ?>" placeholder="Enter The Landmark" >
                                                <label><span id="landmarkcheck" class="text-danger">Enter The Landmark</span></label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label>District <span class="text-danger">*</span></label>
                                               <input type="text" tabindex="6" class="form-control"  id="district" name="district"  value="<?php if(isset($district)) echo $district; ?>"  placeholder="Enter The District"  >                                               
                                               <label><span id="districtcheck" class="text-danger">Enter The District</span></label> 
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>State <span class="text-danger">*</span></label>
                                                    <input type="text" tabindex="7" class="form-control" id="state" name="state" value="<?php if(isset($state)) echo $state; ?>"   placeholder="Enter The State"  >                                                 
                                                    <label><span id="statecheck" class="text-danger">Enter The State</span></label> 
                                                </div>
                                            </div>                                                
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <input type="email" tabindex="8" class="form-control" id="email" name="email"  value="<?php if(isset($email)) echo $email; ?>"  placeholder="Enter The Email" >                                              
                                                    <label><span id="emailcheck" class="text-danger">Enter The Email</span></label> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Website <span class="text-danger">*</span></label>
                                                    <input type="text" tabindex="9" class="form-control" id="website" name="website"  value="<?php if(isset($website)) echo $website; ?>"   placeholder="Enter The Website"  >                                              
                                                    <label><span id="websitecheck" class="text-danger">Enter The Website</span></label> 
                                                </div>
                                            </div>                                           

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone Number <span class="text-danger">*</span></label>
                                                    <input type="number" tabindex="10" class="form-control"  id="phonenumber" name="phonenumber" value="<?php if(isset($phonenumber)) echo $phonenumber; ?>"   placeholder="Enter The Phone Number"  >                                              
                                                    <label><span id="phonenumbercheck" class="text-danger">Enter The Phone Number</span></label> 
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label>Landline Number <span class="text-danger">*</span></label>
                                               
                                                    <select tabindex="11" class="form-control show-tick"  id="landlinecode"  name="landlinecode"  >
                                                    <option value="">-- STD Code --</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04634" ) echo 'selected'; }  ?> value="04634">04634</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04253" ) echo 'selected'; }  ?> value="04253">04253</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04153" ) echo 'selected'; }  ?> value="04153">04153</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04177" ) echo 'selected'; }  ?> value="04177">04177</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04253" ) echo 'selected'; }  ?> value="04253">04253</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04371" ) echo 'selected'; }  ?> value="04371">04371</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04320" ) echo 'selected'; }  ?> value="04320">04320</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04329" ) echo 'selected'; }  ?> value="04329">04329</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04173" ) echo 'selected'; }  ?> value="04173">04173</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04566" ) echo 'selected'; }  ?> value="04566">04566</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04282" ) echo 'selected'; }  ?> value="04282">04282</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04296" ) echo 'selected'; }  ?> value="04296">04296	</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04543" ) echo 'selected'; }  ?> value="04543">04543</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04256" ) echo 'selected'; }  ?> value="04256">04256</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04114" ) echo 'selected'; }  ?> value="04114">04114</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04188" ) echo 'selected'; }  ?> value="04188">04188</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "044" ) echo 'selected'; }  ?> value="044">044</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04182" ) echo 'selected'; }  ?> value="04182">04182</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04144" ) echo 'selected'; }  ?> value="04144">04144</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "0422" ) echo 'selected'; }  ?> value="0422">0422</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04142" ) echo 'selected'; }  ?> value="04142">04142</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04554" ) echo 'selected'; }  ?> value="04554">04554</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04347" ) echo 'selected'; }  ?> value="04347">04347</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04561" ) echo 'selected'; }  ?> value="04561">04561</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04258" ) echo 'selected'; }  ?> value="04258">04258</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04342" ) echo 'selected'; }  ?> value="04342">04342</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "0451" ) echo 'selected'; }  ?> value="0451">0451</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "0424" ) echo 'selected'; }  ?> value="0424">0424</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04145" ) echo 'selected'; }  ?> value="04145">04145</option>
                                                    <option <?php if(isset($landlinecode)) { if($landlinecode == "04285" ) echo 'selected'; }  ?> value="04285">04285</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04262" ) echo 'selected'; }  ?> value="04262">04262</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04171" ) echo 'selected'; }  ?> value="04171">04171</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04346" ) echo 'selected'; }  ?> value="04346">04346</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04344" ) echo 'selected'; }  ?> value="04344">04344</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04331" ) echo 'selected'; }  ?> value="04331">04331</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04151" ) echo 'selected'; }  ?> value="04151">04151</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04112" ) echo 'selected'; }  ?> value="04112">04112</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04257" ) echo 'selected'; }  ?> value="04257">04257</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04565" ) echo 'selected'; }  ?> value="04565">04565</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04324" ) echo 'selected'; }  ?> value="04324">04324</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04339" ) echo 'selected'; }  ?> value="04339">04339</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04542" ) echo 'selected'; }  ?> value="04542">04542</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04204" ) echo 'selected'; }  ?> value="04204">04204</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04266" ) echo 'selected'; }  ?> value="04266">04266</option>													
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04632" ) echo 'selected'; }  ?> value="04632">04632</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04343" ) echo 'selected'; }  ?> value="04343">04343</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04323" ) echo 'selected'; }  ?> value="04323">04323</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "0435" ) echo 'selected'; }  ?> value="0435">0435</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04651" ) echo 'selected'; }  ?> value="04651">04651</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "0452" ) echo 'selected'; }  ?> value="0452">0452</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04115" ) echo 'selected'; }  ?> value="04115">04115</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04574" ) echo 'selected'; }  ?> value="04574">04574</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04332" ) echo 'selected'; }  ?> value="04332">04332</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04367" ) echo 'selected'; }  ?> value="04367">04367</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04364" ) echo 'selected'; }  ?> value="04364">04364</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04254" ) echo 'selected'; }  ?> value="04254">04254</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04298" ) echo 'selected'; }  ?> value="04298">04298</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04576" ) echo 'selected'; }  ?> value="04576">04576</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04202" ) echo 'selected'; }  ?> value="04202">04202</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04365" ) echo 'selected'; }  ?> value="04365">04365</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04652" ) echo 'selected'; }  ?> value="04652">04652</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04286" ) echo 'selected'; }  ?> value="04286">04286</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04635" ) echo 'selected'; }  ?> value="04635">04635</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04544" ) echo 'selected'; }  ?> value="04544">04544</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04553" ) echo 'selected'; }  ?> value="04553">04553</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04290" ) echo 'selected'; }  ?> value="04290">04290</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04372" ) echo 'selected'; }  ?> value="04372">04372</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04348" ) echo 'selected'; }  ?> value="04348">04348</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04545" ) echo 'selected'; }  ?> value="04545">04545</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04255" ) echo 'selected'; }  ?> value="04255">04255</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04374" ) echo 'selected'; }  ?> value="04374">04374</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04564" ) echo 'selected'; }  ?> value="04564">04564</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04373" ) echo 'selected'; }  ?> value="04373">04373</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04328" ) echo 'selected'; }  ?> value="04328">04328</option>
													<option <?php if(isset($landlinecode)) { if($landlinecode == "04294" ) echo 'selected'; }  ?> value="04294">04294</option>
													</select>
                                               
                                                    <label><span id="landlinecodecheck" class="text-danger">Select The Landline Number</span></label> 
                                               
                                                                                               
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-8">
                                            <label> .</label>
                                                <input type="number" tabindex="12" class="form-control" value="<?php if(isset($landlinenumber)) echo $landlinenumber; ?>" id="landlinenumber" name="landlinenumber"  placeholder="Enter the Landline"  >   
                                                <label><span id="landlinenumbercheck" class="text-danger">Enter The Landline</span></label> 
                                                </div>

                                                <div class="row">
							<div class="col-lg-12">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="13" id="schoolactive" name="schoolactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
							</div></div></div>

                                            <div class="col-md-12 col-sm-12">    
                                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                                            </div>                      

                                          <div class="col-sm-12">
                                          <div class="text-right">
                                                <input  tabindex="14" type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button tabindex="15" type="reset" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                            </div>
                        </div>