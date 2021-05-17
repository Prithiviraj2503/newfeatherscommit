<?php 
  $staffid =0;
  $id =0;
  $idupd=0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['staffnumber'] != ''
&& $_POST['staffroll'] != '' && $_POST['qualification'] != '' && $_POST['email'] != ''
&& $_POST['pan'] != '' && $_POST['contactnumber'] != '' && $_POST['dateofjoining'] != ''
&& $_POST['aadharnumber'] != '' && $_POST['bankname'] != '' && $_POST['accountnumber'] != '' 
&& $_POST['district'] != '' && $_POST['branch'] != '' && $_POST['pincode'] != ''
&& $_POST['ifsccode'] != '')
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
         $id= $_POST['id']; 	
    $staffupdatedetails = $userObj->updatestaff($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>staff&msc=2';</script>
    <?php	}
    else{
   
	
		$staffadddetails = $userObj->addstaff($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>staff&msc=1';</script>
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
	$staffdeletedetails = $userObj->deletestaff($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>staff&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];

}
$status =0;
if($idupd>0)
{
	$staffdetails = $userObj->getstaff($mysqli,$idupd); 
	
	if (sizeof($staffdetails)>0) {
        for($istaff=0;$istaff<sizeof($staffdetails);$istaff++)  {			
			$staffid                     = $staffdetails['staffid'];
			$firstname            		 = $staffdetails['firstname'];
			$middlename        		     = $staffdetails['middlename'];
			$lastname            		 = $staffdetails['lastname'];			
			$employeenumber          	 = $staffdetails['employeenumber'];

            $gender                      = $staffdetails['gender'];
			$bloodgroup            		 = $staffdetails['bloodgroup'];
			$staffroll        		     = $staffdetails['staffroll'];
			$qualification               = $staffdetails['qualification'];			
			$email          	         = $staffdetails['email'];

            $pan                         = $staffdetails['pan'];
            $pfnumber                    = $staffdetails['pfnumber'];
			$contactnumber            	 = $staffdetails['contactnumber'];
			$dateofjoining        		 = $staffdetails['dateofjoining'];
			$appointmentletter           = $staffdetails['appointmentletter'];			
			$aadhaarnumber          	 = $staffdetails['aadhaarnumber'];

            $emergencycontactperson      = $staffdetails['emergencycontactperson'];
			$emergencycontactnumber      = $staffdetails['emergencycontactnumber'];
			$transportation        		 = $staffdetails['transportation'];
			$flatno            		     = $staffdetails['flatno'];			
			$area          	             = $staffdetails['area'];

            $district                    = $staffdetails['district'];
			$pincode                     = $staffdetails['pincode'];
			$bankname	        		 = $staffdetails['bankname'];
			$accountnumber            	 = $staffdetails['accountnumber'];			
			$branch          	         = $staffdetails['branch'];

            $ifsccode                    = $staffdetails['ifsccode'];
			$staffpath                   = $staffdetails['staffpath'];
			$basicpay	        		 = $staffdetails['basicpay'];
			$detection              	 = $staffdetails['detection'];			
			$detectionamount             = $staffdetails['detectionamount'];

            $hra                         = $staffdetails['hra'];
			$grosspay                    = $staffdetails['grosspay'];
			$netamount	        		 = $staffdetails['netamount'];
			$transportallowance          = $staffdetails['transportallowance'];			
			$medicalallowance            = $staffdetails['medicalallowance'];

            $specialpay                  = $staffdetails['specialpay'];
			$title1                      = $staffdetails['title1'];
			$name1	        		     = $staffdetails['name1'];
			$issuedby1              	 = $staffdetails['issuedby1'];	

			$title2                      = $staffdetails['title2'];
            $name2	        		     = $staffdetails['name2'];
			$issuedby2              	 = $staffdetails['issuedby2'];	

            $title3                      = $staffdetails['title3'];
            $name3	        		     = $staffdetails['name3'];
			$issuedby3              	 = $staffdetails['issuedby3'];	
			$documentpath                = $staffdetails['documentpath'];	
            $status                      = $staffdetails['status'];				
		}
	}
}

  ?>
   <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="Staff-add">
  <div class="container">
      <br/> <br/>
              <!-- SmartWizard html -->
              <form id="Staffform" name="Staffform" action="" enctype="multipart/form-data" method="post">
        <div id="smartwizard" class="sw-main sw-theme-arrows">
            <ul>
                <li><a href="#step-1">EMPLOYEE DETAILS</a></li>
                <li><a href="#step-2">COMMUNICATION</a></li>
				<li><a href="#step-3">BANK DETAILS</a></li>
                <li><a href="#step-4">PAY STRUCTURE</a></li>                
                <li><a href="#step-5">ADD CERTIFICATE</a></li>
            </ul>

            <div>
           
                <div id="step-1" class="">
                <div class="card" style="border-color: #212529!important;border:none!important;">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning"></div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        </div>
                                    </div>

                                    <div class="card-body"> 
                                   
                                    <input type="hidden" class="form-control" value="<?php if(isset($staffid)) echo $staffid; ?>"  id="id" name="id" aria-describedby="Staffid" placeholder="Enter The Staffid">

                                    <div class="row clearfix"> 

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                            <input  tabindex="1" type="text" value="<?php if(isset($firstname)) echo $firstname; ?>" id="firstname" name="firstname" placeholder="Enter The First Name" class="form-control">
                                            <label><span id="firstnamecheck" class="text-danger">Enter The Firstname</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Middle Name </label>
                                            <input tabindex="2" type="text" value="<?php if(isset($middlename)) echo $middlename; ?>" id="middlename" name="middlename" placeholder="Enter The Middle Name" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                            <input tabindex="3" type="text" value="<?php if(isset($lastname)) echo $lastname; ?>" id="lastname" name="lastname" placeholder="Enter The Last Name" class="form-control">
                                            <label><span id="lastnamecheck" class="text-danger">Enter The Lastname</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Staff Number <span class="text-danger">*</span></label>
                                            <input tabindex="4" type="text" value="<?php if(isset($employeenumber)) echo $employeenumber; ?>" id="staffnumber" name="staffnumber" placeholder="Enter The Staff number" class="form-control">
                                            <label><span id="staffnumbercheck" class="text-danger">Select The Staff Number</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Gender </label>
                                        <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input tabindex="5" type="radio" class="custom-control-input" name="gender" id="gender" checked value="Male" <?php if(isset($gender) && $gender=="Male"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Male</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="gender" id="gender" value="FeMale" <?php if(isset($gender)&& $gender=="FeMale"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Female</span>
                        </label><br/><br/>
                    </div>
                </div>
            </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Blood Group </label>
                                            <input tabindex="6" type="text" value="<?php if(isset($bloodgroup)) echo $bloodgroup; ?>" id="bloodgroup" name="bloodgroup" placeholder="Enter The Blood Group" class="form-control">
                                             
                                        </div>
                                    </div>
                                    

                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Staff Roll <span class="text-danger">*</span></label>
                                        <select tabindex="7" class="form-control show-tick"  id="staffroll"  name="staffroll"  >
                                                    <option value="">-- Select Staff Roll --</option>
                                                    <option <?php if(isset($staffroll)) { if($staffroll == "PRINCIPAL" ) echo 'selected'; }  ?> value="PRINCIPAL">PRINCIPAL</option>
                                                    <option <?php if(isset($staffroll)) { if($staffroll == "TGT" ) echo 'selected'; }  ?> value="TGT">TGT</option>
                                                    <option <?php if(isset($staffroll)) { if($staffroll == "PRT" ) echo 'selected'; }  ?> value="PRT">PRT</option>
                                                    <option <?php if(isset($staffroll)) { if($staffroll == "P.T.I" ) echo 'selected'; }  ?> value="P.T.I">P.T.I</option>                   
                                        </select>
                                            <label><span id="staffrollcheck" class="text-danger">Enter The Staff Roll</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Qualification <span class="text-danger">*</span></label>
                                            <input tabindex="8" type="text" value="<?php if(isset($qualification)) echo $qualification; ?>" id="qualification" name="qualification" placeholder="Enter The Qualification" class="form-control">
                                            <label><span id="qualificationcheck" class="text-danger">Enter The Qualification</span></label> 
                                        </div>
                                    </div>

                                
                                   

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Pan <span class="text-danger">*</span></label>
                                            <input tabindex="9" type="text" value="<?php if(isset($pan)) echo $pan; ?>" id="pan" name="pan" placeholder="Enter The Pan" class="form-control">
                                            <label><span id="pancheck" class="text-danger">Enter Valid Pannumber</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>PF Number </label>
                                            <input tabindex="10" type="text" value="<?php if(isset($pfnumber)) echo $pfnumber; ?>" id="pfnumber" name="pfnumber" placeholder="Enter The PF Number " class="form-control">
                                            <label><span id="pfnumbercheck" class="text-danger">Enter The PF Number</span></label> 
                                        </div>
                                    </div>

                                    
                                   

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Date of Joining <span class="text-danger">*</span></label>
                                        <input tabindex="11" data-provide="datepicker" value="<?php if(isset($dateofjoining)) echo $dateofjoining; ?>" data-date-autoclose="true" readonly id="dateofjoining" name="dateofjoining"  class="form-control" placeholder="Date of Joining">
                                          
                                            <label><span id="dateofjoiningcheck" class="text-danger">Enter The Date of Joining</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Appointment Letter </label>
                                            <input tabindex="12" type="text" value="<?php if(isset($appointmentletter)) echo $appointmentletter; ?>" id="appointmentletter" name="appointmentletter" placeholder="Enter The Appointment Letter" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Aadhar Number <span class="text-danger">*</span></label>
                                            <input tabindex="13" type="number" value="<?php if(isset($aadhaarnumber)) echo $aadhaarnumber; ?>" id="aadharnumber" name="aadharnumber" placeholder="Enter The Aadhar Number" class="form-control">
                                            <label><span id="aadharnumbercheck" class="text-danger">Enter The Aadhar Number</span></label> 
                                        </div>
                                    </div>
                                   

                                   

                                  
                                    <?php  if($idupd==0){
               ?>
          
            <div class="col-sm-4">
            <div class="form-group">
            <label>Staff Image</label><br/>
            <input tabindex="14" type="file" class="dropify" id="staffpicture" name="staffpicture">
            <small id="fileHelp" class="form-text text-muted">Choose your photo.</small>
            </div>
            </div>
            <?php    }?>
                </div>
      
        </div>
    </div>
            
            </div>
                <div id="step-2" class="">

                <div class="card" style="border-color: #212529!important;border:none!important;">
                <div class="row">

<div class="col-sm-4">
<div class="card-header">
<h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning"></div></h3>
</div>
</div>
<div class="col-sm-8"></div>
</div>
<div class="card-body">
        <div class="row">

        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>E-mail <span class="text-danger">*</span></label>
                                            <input tabindex="15"  type="text" value="<?php if(isset($email)) echo $email; ?>" id="email" name="email" placeholder="Enter The Email" class="form-control">
                                            <label><span id="emailcheck" class="text-danger">Enter a valid email address.</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Contact Number <span class="text-danger">*</span></label>
                                            <input tabindex="16" type="number" value="<?php if(isset($contactnumber)) echo $contactnumber; ?>" id="contactnumber" name="contactnumber" placeholder="Enter The Contact Number" class="form-control">
                                            <label><span id="contactnumbercheck" class="text-danger">Enter a valid Contact Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Transportation</label>
                                            <input tabindex="17" type="text" value="<?php if(isset($transportation)) echo $transportation; ?>" id="transportation" name="transportation" placeholder="Transportation" class="form-control">
                                     
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Emergency Contact Person </label>
                                            <input tabindex="18" type="text" value="<?php if(isset($emergencycontactperson)) echo $emergencycontactperson; ?>" id="emergencycontactperson" name="emergencycontactperson" placeholder="Enter The Emergency Contact Person" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Emergency Contact Number </label>
                                            <input tabindex="19" type="number" value="<?php if(isset($emergencycontactnumber)) echo $emergencycontactnumber; ?>" id="emergencycontactnumber" name="emergencycontactnumber" placeholder="Enter The Emergency Contact Number" class="form-control">
                                            
                                        </div>
                                    </div>

        <div class="col-sm-4">
            <div class="form-group">
            <label>Flat Number </label>
            <input tabindex="20" type="number" value="<?php if(isset($flatno)) echo $flatno; ?>" id="flatNumber" name="flatNumber" placeholder="Enter The FlatNumber" class="form-control">
            </div>
            </div>

            <div class="col-sm-4">
            <div class="form-group">
            <label>Area </label>
            <input tabindex="21" type="text" value="<?php if(isset($area)) echo $area; ?>" id="area" name="area" placeholder="Enter The Area" class="form-control">
            </div>
            </div>
        

       

        <div class="col-sm-4">

        <div class="form-group">
                                        <label>District <span class="text-danger">*</span></label>
                                        <select tabindex="22"  class="form-control show-tick"  id="district"  name="district"  >
    <option  value="">-- Select District --</option>	
	<option <?php if(isset($district)) { if($district == "Ariyalur" ) echo 'selected'; }  ?> value="Ariyalur">Ariyalur</option>
	<option <?php if(isset($district)) { if($district == "Chengalpattu" ) echo 'selected'; }  ?> value="Chengalpattu">Chengalpattu</option>
	<option <?php if(isset($district)) { if($district == "Chennai" ) echo 'selected'; }  ?> value="Chennai">Chennai</option>
	<option <?php if(isset($district)) { if($district == "Coimbatore" ) echo 'selected'; }  ?> value="Coimbatore">Coimbatore</option>
	<option <?php if(isset($district)) { if($district == "Cuddalore" ) echo 'selected'; }  ?> value="Cuddalore">Cuddalore</option>
	<option <?php if(isset($district)) { if($district == "Dharmapuri" ) echo 'selected'; }  ?> value="Dharmapuri">Dharmapuri</option>
	<option <?php if(isset($district)) { if($district == "Dindigul" ) echo 'selected'; }  ?> value="Dindigul">Dindigul</option>
	<option <?php if(isset($district)) { if($district == "Erode" ) echo 'selected'; }  ?> value="Erode">Erode</option>
	<option <?php if(isset($district)) { if($district == "Kallakurichi" ) echo 'selected'; }  ?> value="Kallakurichi">Kallakurichi</option>
	<option <?php if(isset($district)) { if($district == "Kanchipuram" ) echo 'selected'; }  ?> value="Kanchipuram">Kanchipuram</option>
	<option <?php if(isset($district)) { if($district == "Kanyakumari" ) echo 'selected'; }  ?> value="Kanyakumari">Kanyakumari</option>
	<option <?php if(isset($district)) { if($district == "Karur" ) echo 'selected'; }  ?> value="Karur">Karur</option>
	<option <?php if(isset($district)) { if($district == "Krishnagiri" ) echo 'selected'; }  ?> value="Krishnagiri">Krishnagiri</option>
	<option <?php if(isset($district)) { if($district == "Madurai" ) echo 'selected'; }  ?> value="Madurai">Madurai</option>
	<option <?php if(isset($district)) { if($district == "Mayiladuthurai" ) echo 'selected'; }  ?> value="Mayiladuthurai">Mayiladuthurai</option>
	<option <?php if(isset($district)) { if($district == "Nagapattinam" ) echo 'selected'; }  ?> value="Nagapattinam">Nagapattinam</option>
	<option <?php if(isset($district)) { if($district == "Namakkal" ) echo 'selected'; }  ?> value="Namakkal">Namakkal</option>
	<option <?php if(isset($district)) { if($district == "Nilgiris" ) echo 'selected'; }  ?> value="Nilgiris">Nilgiris</option>
	<option <?php if(isset($district)) { if($district == "Perambalur" ) echo 'selected'; }  ?> value="Perambalur">Perambalur</option>
	<option <?php if(isset($district)) { if($district == "Pudukkottai" ) echo 'selected'; }  ?> value="Pudukkottai">Pudukkottai</option>
	<option <?php if(isset($district)) { if($district == "Ramanathapuram" ) echo 'selected'; }  ?> value="Ramanathapuram">Ramanathapuram</option>
	<option <?php if(isset($district)) { if($district == "Ranipet" ) echo 'selected'; }  ?> value="Ranipet">Ranipet</option>
	<option <?php if(isset($district)) { if($district == "Salem" ) echo 'selected'; }  ?> value="Salem">Salem</option>
	<option <?php if(isset($district)) { if($district == "Sivagangai" ) echo 'selected'; }  ?> value="Sivagangai">Sivagangai</option>
	<option <?php if(isset($district)) { if($district == "Tenkasi" ) echo 'selected'; }  ?> value="Tenkasi">Tenkasi</option>
	<option <?php if(isset($district)) { if($district == "Thanjavur" ) echo 'selected'; }  ?> value="Thanjavur">Thanjavur</option>
	<option <?php if(isset($district)) { if($district == "Theni" ) echo 'selected'; }  ?> value="Theni">Theni</option>
	<option <?php if(isset($district)) { if($district == "Thoothukudi" ) echo 'selected'; }  ?> value="Thoothukudi">Thoothukudi</option>
	<option <?php if(isset($district)) { if($district == "Tiruchirappalli" ) echo 'selected'; }  ?> value="Tiruchirappalli">Tiruchirappalli</option>
	<option <?php if(isset($district)) { if($district == "Tirunelveli" ) echo 'selected'; }  ?> value="Tirunelveli">Tirunelveli</option>
	<option <?php if(isset($district)) { if($district == "Tirupathur" ) echo 'selected'; }  ?> value="Tirupathur">Tirupathur</option>
	<option <?php if(isset($district)) { if($district == "Tiruppur" ) echo 'selected'; }  ?> value="Tiruppur">Tiruppur</option>
	<option <?php if(isset($district)) { if($district == "Tiruvallur" ) echo 'selected'; }  ?> value="Tiruvallur">Tiruvallur</option>
	<option <?php if(isset($district)) { if($district == "Tiruvannamalai" ) echo 'selected'; }  ?> value="Tiruvannamalai">Tiruvannamalai</option>
	<option <?php if(isset($district)) { if($district == "Tiruvarur" ) echo 'selected'; }  ?> value="Tiruvarur">Tiruvarur</option>
	<option <?php if(isset($district)) { if($district == "Vellore" ) echo 'selected'; }  ?> value="Vellore">Vellore</option>
	<option <?php if(isset($district)) { if($district == "Viluppuram" ) echo 'selected'; }  ?> value="Viluppuram">Viluppuram</option>
	<option <?php if(isset($district)) { if($district == "Virudhunagar" ) echo 'selected'; }  ?> value="Virudhunagar">Virudhunagar</option>
</select>
                                        </div>
                                        <label><span id="districtcheck" class="text-danger">Enter The District</span></label> 
                                

<!--
               <div class="form-group">
               <label>District <span class="text-danger">*</span> </label>
               <input type="text" value="<?php//if(isset($district)) echo $district; ?>" id="district" name="district" placeholder="Enter The District" class="form-control">
               <label><span id="districtcheck" class="text-danger">Enter The District</span></label> 
               </div>-->

               </div>
               
               <div class="col-sm-4">
              <div class="form-group">
              <label>Pincode <span class="text-danger">*</span></label>
              <input tabindex="23" type="number" value="<?php if(isset($pincode)) echo $pincode; ?>" id="pincode" name="pincode" placeholder="Enter The Pincode" class="form-control">
              <label><span id="pincodecheck" class="text-danger">Enter The Pincode</span></label> 
             
              </div>
              </div>
              
           
              
              <div class="col-sm-4">
                                        
              </div>
        </div>
    </div>
</div>     </div>
 <div id="step-3" class="" >
                  
                   
                    <div class="card" style="border-color: #212529!important;border:none!important;">
                
                <div class="row">
                <div class="col-sm-4">
                <div class="card-header">
                    <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning"></div></h3>
                    </div>
                </div>
                <div class="col-sm-8"> 
                </div>
                
<div class="card-body">
                <div class="row">
                <div class="col-sm-4">
            <div class="form-group">
            <label>Bank Name <span class="text-danger">*</span> </label>
            <input tabindex="24" type="text" value="<?php if(isset($bankname)) echo $bankname; ?>" id="bankname" name="bankname" placeholder="Enter The Bank Name" class="form-control">
            <label><span id="banknamecheck" class="text-danger">Enter The Bank Name</span></label> 
            </div>
            </div>

      

          

            <div class="col-sm-4">
            <div class="form-group">
            <label>Account Number <span class="text-danger">*</span></label>
            <input tabindex="25" type="number" value="<?php if(isset($accountnumber)) echo $accountnumber; ?>" id="accountnumber" name="accountnumber" placeholder="Enter The Account Number" class="form-control">
            <label><span id="accountnumbercheck" class="text-danger">Enter The Account Number</span></label> 
            </div>
            </div>
            </div>

<div class="row">              
           
           
               <div class="col-sm-4">
               <div class="form-group">
               <label>Branch <span class="text-danger">*</span></label>
               <input tabindex="26" type="text" value="<?php if(isset($branch)) echo $branch; ?>" id="branch" name="branch" placeholder="Enter The Branch" class="form-control">
               <label><span id="branchcheck" class="text-danger">Enter The Branch</span></label> 
               </div>
               </div>
               
           
       
          
              <div class="col-sm-4">
              <div class="form-group">
              <label>IFSC Code <span class="text-danger">*</span></label>
              <input  tabindex="27"  type="text" value="<?php if(isset($ifsccode)) echo $ifsccode; ?>" id="ifsccode" name="ifsccode" placeholder="Enter The IFSC Code" class="form-control">
                                            <label><span id="ifsccodecheck" class="text-danger">Enter The IFSC Code</span></label> 
              </div>
              </div>
          
                          
                   

                </div>
            </div>
        </div>
		</div>

                </div>
                <div id="step-4" class="" >
                <div class="card" style="border-color: #212529!important;border:none!important;">
                <div class="row">

                      <div class="col-sm-4">
                <div class="card-header">
                    <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning"></div></h3>
                    </div>
                </div>
                    <div class="col-sm-8"></div>
                </div>
<div class="card-body">
                <div class="row">

                <div class="col-sm-4">
                <div class="form-group">
                <label>Basic Pay </label>
                <input tabindex="28" type="number" value="<?php if(isset($basicpay)) echo $basicpay; ?>" id="basicpay" name="basicpay" placeholder="Enter The Basic Pay " class="form-control">
                </div>
                </div>

                <div class="col-sm-4">
                <div class="form-group">
                <label>Detection(if any) </label>
                <input tabindex="29"  type="number" value="<?php if(isset($detection)) echo $detection; ?>" id="detection" name="detection" placeholder="Enter The Detection" class="form-control">
                </div>
                </div>

                <div class="col-sm-4">
                <div class="form-group">
                <label>Detection Amount </label>
                <input tabindex="30"  type="number" value="<?php if(isset($detectionamount)) echo $detectionamount; ?>" id="detectionamount" name="detectionamount" placeholder="Enter The Detection Amount" class="form-control">
                </div>
                </div>

                </div>

                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>HRA </label>
                                            <input tabindex="31" type="number" value="<?php if(isset($hra)) echo $hra; ?>" id="hra" name="hra" placeholder="Enter The HRA " class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Gross Pay</label>
                                            <input tabindex="32" type="number" value="<?php if(isset($grosspay)) echo $grosspay; ?>" id="grosspay" name="grosspay" placeholder="Enter The Gross Pay" class="form-control">
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Net Amount </label>
                                            <input tabindex="33" type="number" value="<?php if(isset($netamount)) echo $netamount; ?>" id="netamount" name="netamount" placeholder="Enter The Net Amount " class="form-control">
                                       </div>
                                       </div>
                </div>

               <div class="row">


                                       <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Transport Allowance </label>
                                            <input tabindex="34"  type="number" value="<?php if(isset($transportallowance)) echo $transportallowance; ?>" id="transportallowance" name="transportallowance" placeholder="Enter The Transport Allowance " class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Medical Allowance</label>
                                            <input tabindex="35"   type="number" value="<?php if(isset($medicalallowance)) echo $medicalallowance; ?>" id="medicalallowance" name="medicalallowance" placeholder="Enter The Medical Allowance" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Special Pay </label>
                                            <input tabindex="36"  type="number" value="<?php if(isset($specialpay)) echo $specialpay; ?>" id="specialpay" name="specialpay" placeholder="Enter The Special Pay " class="form-control">
                                       </div>  
                                        </div>
               </div>
           </div>
       </div>      </div>
               
				 <div id="step-5" class="" >
                  
                   
                    <div class="card" style="border-color: #212529!important;border:none!important;">
                
                <div class="row">
                <div class="col-sm-4">
                <div class="card-header">
                    <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning"></div></h3>
                    </div>
                </div>
                <div class="col-sm-8"> 
                </div>
                
<div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Title1 </label>
                                <input type="text" tabindex="37" value="<?php if(isset($title1)) echo $title1; ?>" id="title1" name="title1" placeholder="Enter The Title1" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Name1</label>
                                    <input type="text" tabindex="38"  value="<?php if(isset($name1)) echo $name1; ?>" id="name1" name="name1" placeholder="Enter The Name1" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Issued1 by </label>
                                    <input type="text"  tabindex="39" value="<?php if(isset($issuedby1)) echo $issuedby1; ?>" id="issuedby1" name="issuedby1" placeholder="Enter The Issued1 by" class="form-control">
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Title2 </label>
                                <input type="text" tabindex="40" value="<?php if(isset($title2)) echo $title2; ?>" id="title2" name="title2" placeholder="Enter The Title2" class="form-control">
                        </div>
                    </div>
                                
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Name2</label>
                                            <input  tabindex="41" type="text" value="<?php if(isset($name2)) echo $name2; ?>" id="name2" name="name2" placeholder="Enter The Name2" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Issued2 by </label>
                            <input type="text" tabindex="42" value="<?php if(isset($issuedby2)) echo $issuedby2; ?>" id="issuedby2" name="issuedby2" placeholder="Enter The Issued2 by" class="form-control">
                        </div>
                    </div>
                 </div>
           
               <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Title3 </label>
                                            <input tabindex="43" type="text" value="<?php if(isset($title3)) echo $title3; ?>" id="title3" name="title3" placeholder="Enter The Title3" class="form-control">
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Name3</label>
                                            <input tabindex="44" type="text" value="<?php if(isset($name3)) echo $name3; ?>" id="name3" name="name3" placeholder="Enter The Name3" class="form-control">
                                       </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Issued3 by </label>
                                            <input tabindex="45"  type="text" value="<?php if(isset($issuedby3)) echo $issuedby3; ?>" id="issuedby3" name="issuedby3" placeholder="Enter The Issued3 by" class="form-control">
                                       </div>
                                    </div>
                              </div>
                              <?php                           
                              if($idupd==0){  ?>
                              <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Cerificate Files</label><br/>
                                        <input tabindex="46"  type="file" class="dropify" id="documentpath" name="documentpath">
                                        <small id="fileHelp" class="form-text text-muted">Choose your Files.</small>
                                        </div>
                                    </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-md-12 col-sm-12">    
                                    <label><span class="text-danger">* Upload the documents in .zip or .rar format</span></label>          
                                </div>
                              </div>
                              <?php  }?>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                            <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                            <input tabindex="47" id="staffactive" name="staffactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                            <span></span>
                            </label>
                            </div>
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">    
                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                            </div>  

                            <div class="col-sm-12">
                                          <div class="text-right">
                                                <input tabindex="48"  type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button tabindex="49" type="reset" class="btn btn-outline-secondary">Cancel</button><br/>
                                                </div>
                                            </div>
                        </div>
            </div>
        </div>
		</div>

                </div>
				
				
				
				
				
				
            </div>
        </div>
</form>

    </div></div>
<!--
<div class="tab-pane <?php //if($msc!=2){ echo "active"; }?>" id="trust-add">
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">

</div>
</div>
</div>-->
</div>
</div>
<script src="dist/js/jquery.min.js" ></script>

    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="dist/js/jquery.smartWizard.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });

         
            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'default',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarButtonPosition: 'end'
                             }
            });


            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });

            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });

            // Set selected theme on page refresh
            $("#theme_selector").change();
        });
    </script>