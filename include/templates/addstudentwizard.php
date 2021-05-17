<?php 
  $samecurrentaddress =0;
  $id =0;
  $pcheck=1;
  $idupd=0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
     
if($_POST['studentname'] != '' && $_POST['surname'] != '' && $_POST['admissionnumber'] != ''
&& $_POST['rollnumber'] != '' && $_POST['dob'] != '' && $_POST['mothertongue'] != ''
&& $_POST['aadhaarcard'] != '' && $_POST['nationality'] != '' && $_POST['standard'] != ''
&& $_POST['section'] != '' && $_POST['medium'] != '' && $_POST['cflatnumber'] != '' 
&& $_POST['pflatnumber'] != '' && $_POST['cstreet'] != '' && $_POST['pstreet'] != ''
&& $_POST['carealocality'] != '' && $_POST['parealocality'] != '' && $_POST['cdistrict'] != ''
&& $_POST['pdistrict'] != '' && $_POST['cpincode'] != '' && $_POST['ppincode'] != ''
&& $_POST['fathersname'] != '' && $_POST['mothersname'] != '' && $_POST['fatheroccupation'] != ''
&& $_POST['motherscontact'] != '' && $_POST['mothersaadhaar'] != '' && $_POST['monthlyincome'] != ''
&& $_POST['fatherscontact'] != '' && $_POST['fathersaadhaar'] != ''

)
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
         $id= $_POST['id']; 	
   $studentupdatedetails = $userObj->updatestudent($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>student&msc=2';</script>
    <?php	}
    else{
		$studentadddetails = $userObj->addstudent($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>student&msc=1';</script>
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
	$studentdeletedetails = $userObj->deletestudent($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>student&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
	$studentdetails = $userObj->getstudent($mysqli,$idupd); 
	
	if (sizeof($studentdetails)>0) {
        for($istudent=0;$istudent<sizeof($studentdetails);$istudent++)  {			
			$studentid                   = $studentdetails['studentid'];
			$admissionno            	 = $studentdetails['admissionno'];
			$studentname        		 = $studentdetails['studentname'];
			$surname            		 = $studentdetails['surname'];			
			$dateofbirth            	 = $studentdetails['dateofbirth'];

            $gender                      = $studentdetails['gender'];
			$mothertongue            	 = $studentdetails['mothertongue'];
			$aadhaarcard        		 = $studentdetails['aadhaarcard'];
			$bloodgroup                  = $studentdetails['bloodgroup'];			
			$category          	         = $studentdetails['category'];

            $caste                       = $studentdetails['caste'];
            $subcaste                    = $studentdetails['subcaste'];
			$nationality            	 = $studentdetails['nationality'];
			$region        		         = $studentdetails['region'];
			$pflatnoname                 = $studentdetails['pflatnoname'];			
			$pstreet                	 = $studentdetails['pstreet'];

            $parealocality               = $studentdetails['parealocality'];
			$pdistrict                   = $studentdetails['pdistrict'];
			$ppincode        		     = $studentdetails['ppincode'];
			$pcheck            		     = $studentdetails['pcheck'];			
			$tflatnoname          	     = $studentdetails['tflatnoname'];

            $tstreet                     = $studentdetails['tstreet'];
			$tarealocality               = $studentdetails['tarealocality'];
			$tdistrict	        		 = $studentdetails['tdistrict'];
			$tpincode            	     = $studentdetails['tpincode'];			
			$standard          	         = $studentdetails['standard'];

            $medium                      = $studentdetails['medium'];
			$section                     = $studentdetails['section'];
			$rollnumber	        		 = $studentdetails['rollnumber'];
			$concessiontype              = $studentdetails['concessiontype'];	
            $concessionpercentage        = $studentdetails['concessionpercentage'];
            $facility                    = $studentdetails['facility'];

            $areaofstudent               = $studentdetails['areaofstudent'];
			$fathername                  = $studentdetails['fathername'];
			$fatheraadhaarnumber	     = $studentdetails['fatheraadhaarnumber'];
			$fatheroccupation            = $studentdetails['fatheroccupation'];			
			$natureofjob                 = $studentdetails['natureofjob'];

            $telephone                   = $studentdetails['telephone'];
			$fathermobile                = $studentdetails['fathermobile'];
			$fatheremailid	        	 = $studentdetails['fatheremailid'];
			$mothername              	 = $studentdetails['mothername'];	

			$motheraadhaarnumber         = $studentdetails['motheraadhaarnumber'];
            $monthlyincome	        	 = $studentdetails['monthlyincome'];
			$positionheld              	 = $studentdetails['positionheld'];	

            $liveswithguardian           = $studentdetails['liveswithguardian'];
            $mothermobile	        	 = $studentdetails['mothermobile'];
			$smssentno              	 = $studentdetails['smssentno'];	
			$siblingname                 = $studentdetails['siblingname'];

            $liveswithguardian           = $studentdetails['liveswithguardian'];
            $mothermobile	        	 = $studentdetails['mothermobile'];
			$smssentno              	 = $studentdetails['smssentno'];	
			$siblingname                 = $studentdetails['siblingname'];

            $siblingrefno                = $studentdetails['siblingrefno'];
            $siblingschoolname	         = $studentdetails['siblingschoolname'];
			$siblingstd              	 = $studentdetails['siblingstd'];	
			$extracurricular             = $studentdetails['extracurricular'];

            $status                      = $studentdetails['status'];				
		}
	}
}

  ?>
   <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="Staff-add">
  <div class="container">
      <br/> <br/>
              <!-- SmartWizard html -->
              <form id="studentform" name="studentform" action="" enctype="multipart/form-data" method="post">
        <div id="smartwizard" class="sw-main sw-theme-arrows">
            <ul>
                <li><a href="#step-1">STUDENT GENERAL</a></li>
                <li><a href="#step-2">JOINING</a></li>
                <li><a href="#step-3">ADDRESS DETAILS</a></li>
                <li><a href="#step-4">PARENTS/ GUARDIAN</a></li>
                <li><a href="#step-5">FAMILY</a></li>
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
                                   
                                    <input type="hidden" class="form-control" value="<?php if(isset($studentid)) echo $studentid; ?>"  id="id" name="id" aria-describedby="Studentid" placeholder="Enter The Studentid">

                                    <div class="row clearfix"> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Student Name <span class="text-danger">*</span></label>
                                            <input tabindex="1" type="text" value="<?php if(isset($studentname)) echo $studentname; ?>" id="studentname" name="studentname" placeholder="Enter The Student Name" class="form-control">
                                            <label><span id="studentnamecheck" class="text-danger">Enter The Student Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Sur Name <span class="text-danger">*</span></label>
                                            <input tabindex="2"  type="text" value="<?php if(isset($surname)) echo $surname; ?>" id="surname" name="surname" placeholder="Enter The Sur Name" class="form-control">
                                            <label><span id="surnamecheck" class="text-danger">Enter The Sur Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Admission Number <span class="text-danger">*</span></label>
                                            <input tabindex="3"  type="text" value="<?php if(isset($admissionno)) echo $admissionno; ?>" id="admissionnumber" name="admissionnumber" placeholder="Enter The Admission Number" class="form-control">
                                            <label><span id="admissionnumbercheck" class="text-danger">Enter The Admission Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Roll Number <span class="text-danger">*</span></label>
                                            <input tabindex="4" type="text" value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" id="rollnumber" name="rollnumber" placeholder="Enter The Roll Number" class="form-control">
                                            <label><span id="rollnumbercheck" class="text-danger">Enter The Roll Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Gender </label>
                                        <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" tabindex="5" class="custom-control-input" name="gender" id="gender" checked value="Male" <?php if(isset($gender) && $gender=="Male"){?> checked=""<?php }?>>
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
                                        <label>D.O.B <span class="text-danger">*</span></label>                                   
                                           <input tabindex="6" data-provide="datepicker" value="<?php if(isset($dateofbirth)) echo $dateofbirth; ?>" data-date-autoclose="true" readonly id="dob" name="dob"  class="form-control" placeholder="Enter The D.O.B">
                                            <label><span id="dobcheck" class="text-danger">Enter The D.O.B</span></label> 
                                        </div>
                                    </div>
                                    

<div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Mother Tongue <span class="text-danger">*</span></label>
                                        <select tabindex="7" class="form-control show-tick"  id="mothertongue"  name="mothertongue"  >
                                                    <option value="">-- Select Mother Tongue --</option>
                                                    <option <?php if(isset($mothertongue)) { if($mothertongue == "Tamil" ) echo 'selected'; }  ?> value="Tamil">Tamil</option>
                                                    <option <?php if(isset($mothertongue)) { if($mothertongue == "Malayalam" ) echo 'selected'; }  ?> value="Malayalam">Malayalam</option>
                                                    <option <?php if(isset($mothertongue)) { if($mothertongue == "Telugu" ) echo 'selected'; }  ?> value="Telugu">Telugu</option>
                                                    <option <?php if(isset($mothertongue)) { if($mothertongue == "Kannada" ) echo 'selected'; }  ?> value="Kannada">Kannada</option>     
                                                    <option <?php if(isset($mothertongue)) { if($mothertongue == "Others" ) echo 'selected'; }  ?> value="Others">Others</option>                
                                     	</select>
                                            <label><span id="mothertonguecheck" class="text-danger">Enter The Mother Tongue</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Aadhaar Card <span class="text-danger">*</span></label>
                                            <input tabindex="8"  type="number" value="<?php if(isset($aadhaarcard)) echo $aadhaarcard; ?>" id="aadhaarcard" 
                                            name="aadhaarcard" placeholder="Enter The Aadhaar Card" class="form-control">
                                            <label><span id="aadhaarcardcheck" class="text-danger">Enter The Aadhaar Card</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Nationality <span class="text-danger">*</span></label>
                                        <select tabindex="9"  class="form-control show-tick"  id="nationality"  name="nationality"  >
                                                    <option value="">-- Select Nationality --</option>
                                                    <option <?php if(isset($nationality)) { if($nationality == "Indian" ) echo 'selected'; }  ?> value="Indian">Indian</option>                                                   
                                                    <option <?php if(isset($nationality)) { if($nationality == "Others" ) echo 'selected'; }  ?> value="Others">Others</option>                
                                     	</select>      <label><span id="nationalitycheck" class="text-danger">Select The Nationality</span></label> 
                                        </div>
                                    </div>
                                   

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Religion </label>
                                        <select  tabindex="10"  class="form-control show-tick"  id="religion"  name="religion"  >
    <option value="">-- Select Religion --</option>
	<option  <?php if(isset($region)) { if($region == "Hindu" ) echo 'selected'; }  ?> value="Hindu">Hindu</option>
	<option  <?php if(isset($region)) { if($region == "Muslim" ) echo 'selected'; }  ?> value="Muslim">Muslim</option>
	<option  <?php if(isset($region)) { if($region == "Christian" ) echo 'selected'; }  ?> value="Christian">Christian</option>
                                         </select>
    
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Blood Group</label>
                                        <select tabindex="11"  class="form-control show-tick"  id="bloodgroup"  name="bloodgroup"  >
                                                    <option value="">-- Select Blood Group --</option>
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "A+" ) echo 'selected'; }  ?> value="A+">A+</option>                                                   
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "A-" ) echo 'selected'; }  ?> value="A-">A-</option>      
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "B+" ) echo 'selected'; }  ?> value="B+">B+</option>                                                   
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "B-" ) echo 'selected'; }  ?> value="B-">B-</option> 
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "O+" ) echo 'selected'; }  ?> value="O+">O+</option>                                                   
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "O-" ) echo 'selected'; }  ?> value="O-">O-</option> 
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "AB+" ) echo 'selected'; }  ?> value="AB+">AB+</option>                                                   
                                                    <option <?php if(isset($bloodgroup)) { if($bloodgroup == "AB-" ) echo 'selected'; }  ?> value="AB-">AB-</option>          
                                         	</select>               
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Category </label>
                                        <select tabindex="12" class="form-control show-tick"  id="category"  name="category"  >
                                                    <option value="">-- Select Category --</option>
                                                    <option <?php if(isset($category)) { if($category == "BC" ) echo 'selected'; }  ?> value="BC">BC</option>                                                   
                                                    <option <?php if(isset($category)) { if($category == "MBC" ) echo 'selected'; }  ?> value="MBC">MBC</option>      
                                                    <option <?php if(isset($category)) { if($category == "SC" ) echo 'selected'; }  ?> value="SC">SC</option> 
                                                    <option <?php if(isset($category)) { if($category == "ST" ) echo 'selected'; }  ?> value="ST">ST</option> 
                                                    <option <?php if(isset($category)) { if($category == "OBC" ) echo 'selected'; }  ?> value="OBC">OBC</option> 
                                                    <option <?php if(isset($category)) { if($category == "DNC" ) echo 'selected'; }  ?> value="DNC">DNC</option> 
                                                    <option <?php if(isset($category)) { if($category == "Others" ) echo 'selected'; }  ?> value="Others">Others</option> 
                                     	</select>      
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Caste </label>
                                        <select tabindex="13" class="form-control show-tick"  id="caste"  name="caste"  >													 
						<option  value="">- Select Caste-</option <?php if(isset($caste)) { if($caste == "" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Achirapakkam Chettiar" ) echo 'selected'; }  ?> value="Achirapakkam Chettiar">Achirapakkam Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Adi Dravidar" ) echo 'selected'; }  ?> value="Adi Dravidar">Adi Dravidar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Agamudayar / Arcot / Thuluva Vellala" ) echo 'selected'; }  ?> value="Agamudayar / Arcot / Thuluva Vellala">Agamudayar / Arcot / Thuluva Vellala</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Agaram Vellan Chettiar" ) echo 'selected'; }  ?> value="Agaram Vellan Chettiar">Agaram Vellan Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Ahirwar" ) echo 'selected'; }  ?> value="Ahirwar">Ahirwar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Arunthathiyar" ) echo 'selected'; }  ?> value="Arunthathiyar">Arunthathiyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Ayira Vysya" ) echo 'selected'; }  ?> value="Ayira Vysya">Ayira Vysya</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Badaga" ) echo 'selected'; }  ?> value="Badaga">Badaga</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Bairwa" ) echo 'selected'; }  ?> value="Bairwa">Bairwa</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Balai" ) echo 'selected'; }  ?> value="Balai">Balai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Beri Chettiar" ) echo 'selected'; }  ?> value="Beri Chettiar">Beri Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Boyar" ) echo 'selected'; }  ?> value="Boyar">Boyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Anaviln Desai" ) echo 'selected'; }  ?> value="Brahmin - Anaviln Desai">Brahmin - Anaviln Desai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Baidhiki/Vaidhiki" ) echo 'selected'; }  ?> value="Brahmin - Baidhiki/Vaidhiki">Brahmin - Baidhiki/Vaidhiki</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Bardai" ) echo 'selected'; }  ?> value="Brahmin - Bardai">Brahmin - Bardai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Bhargav" ) echo 'selected'; }  ?> value="Brahmin - Bhargav">Brahmin - Bhargav</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Gurukkal" ) echo 'selected'; }  ?> value="Brahmin - Gurukkal">Brahmin - Gurukkal</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Iyengar" ) echo 'selected'; }  ?> value="Brahmin - Iyengar">Brahmin - Iyengar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Iyer" ) echo 'selected'; }  ?> value="Brahmin - Iyer">Brahmin - Iyer</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Khadayata" ) echo 'selected'; }  ?> value="Brahmin - Khadayata">Brahmin - Khadayata</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Khedaval" ) echo 'selected'; }  ?> value="Brahmin - Khedaval">Brahmin - Khedaval</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Mevada" ) echo 'selected'; }  ?> value="Brahmin - Mevada">Brahmin - Mevada</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Others" ) echo 'selected'; }  ?> value="Brahmin - Others">Brahmin - Others</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Rajgor" ) echo 'selected'; }  ?> value="Brahmin - Rajgor">Brahmin - Rajgor</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Rarhi/Radhi" ) echo 'selected'; }  ?> value="Brahmin - Rarhi/Radhi">Brahmin - Rarhi/Radhi</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Sarua" ) echo 'selected'; }  ?> value="Brahmin - Sarua">Brahmin - Sarua</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Shri Gaud" ) echo 'selected'; }  ?> value="Brahmin - Shri Gaud">Brahmin - Shri Gaud</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Tapodhan" ) echo 'selected'; }  ?> value="Brahmin - Tapodhan">Brahmin - Tapodhan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Valam" ) echo 'selected'; }  ?> value="Brahmin - Valam">Brahmin - Valam</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Brahmin - Zalora" ) echo 'selected'; }  ?> value="Brahmin - Zalora">Brahmin - Zalora</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Chattada Sri Vaishnava" ) echo 'selected'; }  ?> value="Chattada Sri Vaishnava">Chattada Sri Vaishnava</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Cherakula Vellalar" ) echo 'selected'; }  ?> value="Cherakula Vellalar">Cherakula Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Chettiar" ) echo 'selected'; }  ?> value="Chettiar">Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Dasapalanjika / Kannada Saineegar" ) echo 'selected'; }  ?> value="Dasapalanjika / Kannada Saineegar">Dasapalanjika / Kannada Saineegar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Desikar" ) echo 'selected'; }  ?> value="Desikar">Desikar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Desikar Thanjavur" ) echo 'selected'; }  ?> value="Desikar Thanjavur">Desikar Thanjavur</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Devandra Kula Vellalar" ) echo 'selected'; }  ?> value="Devandra Kula Vellalar">Devandra Kula Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Devanga Chettiar" ) echo 'selected'; }  ?> value="Devanga Chettiar">Devanga Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Devar/Thevar/Mukkulathor" ) echo 'selected'; }  ?> value="Devar/Thevar/Mukkulathor">Devar/Thevar/Mukkulathor</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Dhanak" ) echo 'selected'; }  ?> value="Dhanak">Dhanak</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Elur Chetty" ) echo 'selected'; }  ?> value="Elur Chetty">Elur Chetty</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gandla / Ganiga" ) echo 'selected'; }  ?> value="Gandla / Ganiga">Gandla / Ganiga</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder" ) echo 'selected'; }  ?> value="Gounder">Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Kongu Vellala Gounder" ) echo 'selected'; }  ?> value="Gounder - Kongu Vellala Gounder">Gounder - Kongu Vellala Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Nattu Gounder" ) echo 'selected'; }  ?> value="Gounder - Nattu Gounder">Gounder - Nattu Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Others" ) echo 'selected'; }  ?> value="Gounder - Others">Gounder - Others</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Urali Gounder" ) echo 'selected'; }  ?> value="Gounder - Urali Gounder">Gounder - Urali Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Vanniya Kula Kshatriyar" ) echo 'selected'; }  ?> value="Gounder - Vanniya Kula Kshatriyar">Gounder - Vanniya Kula Kshatriyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gounder - Vettuva Gounder" ) echo 'selected'; }  ?> value="Gounder - Vettuva Gounder">Gounder - Vettuva Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gramani" ) echo 'selected'; }  ?> value="Gramani">Gramani</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Gurukkal  Brahmin" ) echo 'selected'; }  ?> value="Gurukkal  Brahmin">Gurukkal  Brahmin</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Illaththu Pillai" ) echo 'selected'; }  ?> value="Illaththu Pillai">Illaththu Pillai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Intercaste" ) echo 'selected'; }  ?> value="Intercaste">Intercaste</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Isai Vellalar" ) echo 'selected'; }  ?> value="Isai Vellalar">Isai Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Iyengar  Brahmin" ) echo 'selected'; }  ?> value="Iyengar  Brahmin">Iyengar  Brahmin</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Iyer  Brahmin" ) echo 'selected'; }  ?> value="Iyer  Brahmin">Iyer  Brahmin</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Julaha" ) echo 'selected'; }  ?> value="Julaha">Julaha</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kamma Naidu" ) echo 'selected'; }  ?> value="Kamma Naidu">Kamma Naidu</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kanakkan Padanna" ) echo 'selected'; }  ?> value="Kanakkan Padanna">Kanakkan Padanna</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kandara" ) echo 'selected'; }  ?> value="Kandara">Kandara</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Karkathar" ) echo 'selected'; }  ?> value="Karkathar">Karkathar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Karuneegar" ) echo 'selected'; }  ?> value="Karuneegar">Karuneegar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kasukara" ) echo 'selected'; }  ?> value="Kasukara">Kasukara</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kerala Mudali" ) echo 'selected'; }  ?> value="Kerala Mudali">Kerala Mudali</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Khatik" ) echo 'selected'; }  ?> value="Khatik">Khatik</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kodikal Pillai" ) echo 'selected'; }  ?> value="Kodikal Pillai">Kodikal Pillai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kongu Chettia" ) echo 'selected'; }  ?> value="Kongu Chettia">Kongu Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kongu Nadar" ) echo 'selected'; }  ?> value="Kongu Nadar">Kongu Nadar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kongu Vellala Gounder" ) echo 'selected'; }  ?> value="Kongu Vellala Gounder">Kongu Vellala Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kori/Koli" ) echo 'selected'; }  ?> value="Kori/Koli">Kori/Koli</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Krishnavaka" ) echo 'selected'; }  ?> value="Krishnavaka">Krishnavaka</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kshatriya Raju" ) echo 'selected'; }  ?> value="Kshatriya Raju">Kshatriya Raju</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kulalar" ) echo 'selected'; }  ?> value="Kulalar">Kulalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kuravan" ) echo 'selected'; }  ?> value="Kuravan">Kuravan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kuruhini Chetty" ) echo 'selected'; }  ?> value="Kuruhini Chetty">Kuruhini Chetty</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Kurumbar" ) echo 'selected'; }  ?> value="Kurumbar">Kurumbar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Manjapudur Chettiar" ) echo 'selected'; }  ?> value="Manjapudur Chettiar">Manjapudur Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Mannan / Velan / Vannan" ) echo 'selected'; }  ?> value="Mannan / Velan / Vannan">Mannan / Velan / Vannan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Maruthuvar" ) echo 'selected'; }  ?> value="Maruthuvar">Maruthuvar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Meenavar" ) echo 'selected'; }  ?> value="Meenavar">Meenavar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Meghwal" ) echo 'selected'; }  ?> value="Meghwal">Meghwal</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Mudaliyar" ) echo 'selected'; }  ?> value="Mudaliyar">Mudaliyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Mukkulathor" ) echo 'selected'; }  ?> value="Mukkulathor">Mukkulathor</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Muthuraja" ) echo 'selected'; }  ?> value="Muthuraja">Muthuraja</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nadar" ) echo 'selected'; }  ?> value="Nadar">Nadar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Naicker" ) echo 'selected'; }  ?> value="Naicker">Naicker</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Naicker - Others" ) echo 'selected'; }  ?> value="Naicker - Others">Naicker - Others</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Naicker - Vanniya Kula Kshatriyar" ) echo 'selected'; }  ?> value="Naicker - Vanniya Kula Kshatriyar">Naicker - Vanniya Kula Kshatriyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Naidu" ) echo 'selected'; }  ?> value="Naidu">Naidu</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nanjil Mudali" ) echo 'selected'; }  ?> value="Nanjil Mudali">Nanjil Mudali</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nanjil Nattu Vellala" ) echo 'selected'; }  ?> value="Nanjil Nattu Vellala">Nanjil Nattu Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nanjil Vellalar" ) echo 'selected'; }  ?> value="Nanjil Vellalar">Nanjil Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nanjil pillai" ) echo 'selected'; }  ?> value="Nanjil pillai">Nanjil pillai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nankudi Vellala" ) echo 'selected'; }  ?> value="Nankudi Vellala">Nankudi Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nattu Gounder" ) echo 'selected'; }  ?> value="Nattu Gounder">Nattu Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Nattukottai Chettiar" ) echo 'selected'; }  ?> value="Nattukottai Chettiar">Nattukottai Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Othuvaar" ) echo 'selected'; }  ?> value="Othuvaar">Othuvaar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Padmashali" ) echo 'selected'; }  ?> value="Padmashali">Padmashali</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pallan / Devandra Kula Vellalan" ) echo 'selected'; }  ?> value="Pallan / Devandra Kula Vellalan">Pallan / Devandra Kula Vellalan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Panan" ) echo 'selected'; }  ?> value="Panan">Panan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pandaram" ) echo 'selected'; }  ?> value="Pandaram">Pandaram</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pandiya Vellalar" ) echo 'selected'; }  ?> value="Pandiya Vellalar">Pandiya Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pannirandam Chettiar" ) echo 'selected'; }  ?> value="Pannirandam Chettiar">Pannirandam Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Paravan / Bharatar" ) echo 'selected'; }  ?> value="Paravan / Bharatar">Paravan / Bharatar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Parkavakulam / Udayar" ) echo 'selected'; }  ?> value="Parkavakulam / Udayar">Parkavakulam / Udayar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Parvatha Rajakulam" ) echo 'selected'; }  ?> value="Parvatha Rajakulam">Parvatha Rajakulam</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Paswan / Dusadh" ) echo 'selected'; }  ?> value="Paswan / Dusadh">Paswan / Dusadh</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pattinavar" ) echo 'selected'; }  ?> value="Pattinavar">Pattinavar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pattusali" ) echo 'selected'; }  ?> value="Pattusali">Pattusali</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pillai" ) echo 'selected'; }  ?> value="Pillai">Pillai</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Poundra" ) echo 'selected'; }  ?> value="Poundra">Poundra</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Pulaya / Cheruman" ) echo 'selected'; }  ?> value="Pulaya / Cheruman">Pulaya / Cheruman</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Reddy" ) echo 'selected'; }  ?> value="Reddy">Reddy</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Rohit / Chamar" ) echo 'selected'; }  ?> value="Rohit / Chamar">Rohit / Chamar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "SC" ) echo 'selected'; }  ?> value="SC">SC</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "ST" ) echo 'selected'; }  ?> value="ST">ST</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sadhu Chetty" ) echo 'selected'; }  ?> value="Sadhu Chetty">Sadhu Chetty</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Saiva Pillai Thanjavur" ) echo 'selected'; }  ?> value="Saiva Pillai Thanjavur">Saiva Pillai Thanjavur</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Saiva Pillai Tirunelveli" ) echo 'selected'; }  ?> value="Saiva Pillai Tirunelveli">Saiva Pillai Tirunelveli</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Saiva Vellan chettiar" ) echo 'selected'; }  ?> value="Saiva Vellan chettiar">Saiva Vellan chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Saliyar" ) echo 'selected'; }  ?> value="Saliyar">Saliyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Samagar" ) echo 'selected'; }  ?> value="Samagar">Samagar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sambava" ) echo 'selected'; }  ?> value="Sambava">Sambava</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Satnami" ) echo 'selected'; }  ?> value="Satnami">Satnami</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Senai Thalaivar" ) echo 'selected'; }  ?> value="Senai Thalaivar">Senai Thalaivar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Senguntha Mudaliyar" ) echo 'selected'; }  ?> value="Senguntha Mudaliyar">Senguntha Mudaliyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sengunthar/Kaikolar" ) echo 'selected'; }  ?> value="Sengunthar/Kaikolar">Sengunthar/Kaikolar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Shilpkar" ) echo 'selected'; }  ?> value="Shilpkar">Shilpkar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sonkar" ) echo 'selected'; }  ?> value="Sonkar">Sonkar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sourashtra" ) echo 'selected'; }  ?> value="Sourashtra">Sourashtra</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sozhia Chetty" ) echo 'selected'; }  ?> value="Sozhia Chetty">Sozhia Chetty</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Sozhiya Vellalar" ) echo 'selected'; }  ?> value="Sozhiya Vellalar">Sozhiya Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Telugupatti" ) echo 'selected'; }  ?> value="Telugupatti">Telugupatti</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Thandan" ) echo 'selected'; }  ?> value="Thandan">Thandan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Thondai Mandala Vellalar" ) echo 'selected'; }  ?> value="Thondai Mandala Vellalar">Thondai Mandala Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Urali Gounder" ) echo 'selected'; }  ?> value="Urali Gounder">Urali Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vadambar" ) echo 'selected'; }  ?> value="Vadambar">Vadambar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vadugan" ) echo 'selected'; }  ?> value="Vadugan">Vadugan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Valluvan" ) echo 'selected'; }  ?> value="Valluvan">Valluvan</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vaniya Chettiar" ) echo 'selected'; }  ?> value="Vaniya Chettiar">Vaniya Chettiar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vannar" ) echo 'selected'; }  ?> value="Vannar">Vannar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vannia Kula Kshatriyar" ) echo 'selected'; }  ?> value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Veera Saivam" ) echo 'selected'; }  ?> value="Veera Saivam">Veera Saivam</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Veerakodi Vellala" ) echo 'selected'; }  ?> value="Veerakodi Vellala">Veerakodi Vellala</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vellalar" ) echo 'selected'; }  ?> value="Vellalar">Vellalar</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vellan Chettiars" ) echo 'selected'; }  ?> value="Vellan Chettiars">Vellan Chettiars</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vettuva Gounder" ) echo 'selected'; }  ?> value="Vettuva Gounder">Vettuva Gounder</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vishwakarma" ) echo 'selected'; }  ?> value="Vishwakarma">Vishwakarma</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Vokkaliga" ) echo 'selected'; }  ?> value="Vokkaliga">Vokkaliga</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Yadav" ) echo 'selected'; }  ?> value="Yadav">Yadav</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
						<option <?php if(isset($caste)) { if($caste == "Yadava Naidu" ) echo 'selected'; }  ?> value="Yadava Naidu">Yadava Naidu</option <?php if(isset($caste)) { if($caste == "BC" ) echo 'selected'; }  ?>>
                        <option <?php if(isset($caste)) { if($caste == "Others" ) echo 'selected'; }  ?> value="Others">Others</option> 
       
                        </select>     
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Sub Caste </label>
                                            <input tabindex="14"  type="text" value="<?php if(isset($subcaste)) echo $subcaste; ?>" id="subcaste" name="subcaste" placeholder="Enter The Sub Caste" class="form-control">
                                          
                                        </div>
                                    </div>
                                   <?php if($idupd==0){?>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Student Image</label><br/>
                                        <input tabindex="15" type="file" class="dropify" id="studentimage" name="studentimage">
                                        <small id="fileHelp" class="form-text text-muted">Choose your photo.</small>
                                        </div>
                                    </div>
                                    <?php }?>
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
                                        <label> Standard <span class="text-danger">*</span></label>
                                         <select tabindex="16" class="form-control show-tick"  id="standard"  name="standard"  >
                                         <option value="">-- Select Standard --</option>
	<option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
	<option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
	<option <?php if(isset($standard)) { if($standard == "I" ) echo 'selected'; }  ?> value="I">I</option>
	<option <?php if(isset($standard)) { if($standard == "II" ) echo 'selected'; }  ?> value="II">II</option>
	<option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
	<option <?php if(isset($standard)) { if($standard == "IV" ) echo 'selected'; }  ?> value="IV">IV</option>
	<option <?php if(isset($standard)) { if($standard == "V" ) echo 'selected'; }  ?> value="V">V</option>
	<option <?php if(isset($standard)) { if($standard == "VI" ) echo 'selected'; }  ?> value="VI">VI</option>
	<option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VII">VII</option>
	<option <?php if(isset($standard)) { if($standard == "VIII" ) echo 'selected'; }  ?> value="VIII">VIII</option>
	<option <?php if(isset($standard)) { if($standard == "IX" ) echo 'selected'; }  ?> value="IX">IX</option>
	<option <?php if(isset($standard)) { if($standard == "X" ) echo 'selected'; }  ?> value="X">X</option>
	<option <?php if(isset($standard)) { if($standard == "XI" ) echo 'selected'; }  ?> value="XI">XI</option>
	<option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
</select>
                                         
                                         
                                          <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Section <span class="text-danger">*</span></label>
                                        <select tabindex="17"  class="form-control show-tick"  id="section"  name="section"  >
<option value="">-- Select Section --</option>
<option <?php if(isset($section)) { if($section == "A" ) echo 'selected'; } ?> value="A">A</option>
<option <?php if(isset($section)) { if($section == "B" ) echo 'selected'; } ?> value="B">B</option>
<option <?php if(isset($section)) { if($section == "C" ) echo 'selected'; } ?> value="C">C</option>
<option <?php if(isset($section)) { if($section == "D" ) echo 'selected'; } ?> value="D">D</option>
<option <?php if(isset($section)) { if($section == "E" ) echo 'selected'; } ?> value="E">E</option>
<option <?php if(isset($section)) { if($section == "F" ) echo 'selected'; } ?> value="F">F</option>
</select>
     <label><span id="sectioncheck" class="text-danger">Select The Section</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Medium <span class="text-danger">*</span></label>
                                        <select tabindex="18" class="form-control show-tick"  id="medium"  name="medium"  >
<option value="">-- Select Medium --</option>
	<option <?php if(isset($medium)) { if($medium == "English" ) echo 'selected'; } ?> value="English">English</option>
	<option <?php if(isset($medium)) { if($medium == "Tamil" ) echo 'selected'; } ?> value="Tamil">Tamil</option>
</select>      <label><span id="mediumcheck" class="text-danger">Select The Medium</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Concession Type </label>
                                        <select tabindex="19"  class="form-control show-tick"  id="concessiontype"  name="concessiontype"  >
    <option value="">-- Select Concession --</option>
	<option <?php if(isset($concessiontype)) { if($concessiontype == "Scholarship" ) echo 'selected'; }  ?> value="Scholarship">Scholarship</option>
	<option <?php if(isset($concessiontype)) { if($concessiontype == "RTE" ) echo 'selected'; }  ?>value="RTE">RTE</option>
	<option <?php if(isset($concessiontype)) { if($concessiontype == "General" ) echo 'selected'; }  ?>value="General">General</option>
	<option <?php if(isset($concessiontype)) { if($concessiontype == "Others" ) echo 'selected'; }  ?>value="Others">Others</option>
</select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Concession Percentage </label>
                                            <input tabindex="20" type="text" value="<?php if(isset($concessionpercentage)) echo $concessionpercentage; ?>" id="concessionpercentage" name="concessionpercentage" placeholder="Enter The Concession Percentage" class="form-control">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Facility</label>
                                        <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" tabindex="21"  class="custom-control-input" name="facility" id="facility" checked value="Hosteller" <?php if(isset($facility) && $facility=="Hosteller"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Hosteller</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="facility" id="facility" value="Transportation" <?php if(isset($facility)&& $facility=="Transportation"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Transportation</span>
                        </label><br/><br/>
</div>
                                        </div>
                                    </div>
							
                                    <div class="col-sm-4">
                                                <div class="form-group">
                                        <label>Area Of Student</label>
                                            <input tabindex="22"  type="text" value="<?php if(isset($areaofstudent)) echo $areaofstudent; ?>" id="areaofstudent" name="areaofstudent" placeholder="Enter The Area Of Student" class="form-control">
                                          
                                        </div>
                                    </div>
        </div>



        <div class="row">

  
        
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
                    <div class="col-sm-8"></div>
                </div>
<div class="card-body">
                <div class="row">

                <div class="col-sm-4">
                                    <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">ADDRESS DETAILS </div></h3><br/>
                                    </div>
                                    <div class="col-sm-8"></div>

                                    <div class="col-sm-6">
                                    <h3 class="card-title"><div class="text-green " data-class="">Current Address For Communication</div></h3>
                                    </div>
                                    <div class="col-sm-6">
                                    <h3 class="card-title"><div class="text-green " data-class="">Permanent Address </div></h3>
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                    <div class="col-sm-6">
                                    <div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="23" id="samecurrentaddress" name="samecurrentaddress" type="checkbox" value="no"  <?php if($pcheck==0){echo'checked';}?> > Same as current address
                                                    <span></span>
                                                </label>
												</div>
                                                </div>    </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Flat Number <span class="text-danger">*</span></label>
                                            <input tabindex="24"  type="text" value="<?php if(isset($tflatnoname)) echo $tflatnoname; ?>" id="cflatnumber" name="cflatnumber" placeholder="Enter The Flat Number" class="form-control">
                                            <label><span id="cflatnumbercheck" class="text-danger">Enter The Flat Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Flat Number <span class="text-danger">*</span></label>
                                            <input tabindex="25"  type="text" value="<?php if(isset($pflatnoname)) echo $pflatnoname; ?>" id="pflatnumber" name="pflatnumber" placeholder="Enter The Flat Number" class="form-control">
                                            <label><span id="pflatnumbercheck" class="text-danger">Enter The Flat Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Street <span class="text-danger">*</span></label>
                                            <input tabindex="26"  type="text" value="<?php if(isset($tstreet)) echo $tstreet; ?>" id="cstreet" name="cstreet" placeholder="Enter The Street" class="form-control">
                                            <label><span id="cstreetcheck" class="text-danger">Enter The Street</span></label> 
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Street <span class="text-danger">*</span></label>
                                            <input tabindex="27" type="text" value="<?php if(isset($pstreet)) echo $pstreet; ?>" id="pstreet" name="pstreet" placeholder="Enter The Street" class="form-control">
                                            <label><span id="pstreetcheck" class="text-danger">Enter The Street</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Area/Locality <span class="text-danger">*</span></label>
                                            <input tabindex="28" type="text" value="<?php if(isset($tarealocality)) echo $tarealocality; ?>" id="carealocality" name="carealocality" placeholder="Enter The Area/Locality" class="form-control">
                                            <label><span id="carealocalitycheck" class="text-danger">Enter The Area/Locality</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Area/Locality <span class="text-danger">*</span></label>
                                            <input tabindex="29"  type="text" value="<?php if(isset($parealocality)) echo $parealocality; ?>" id="parealocality" name="parealocality" placeholder="Enter The Area/Locality" class="form-control">
                                            <label><span id="parealocalitycheck" class="text-danger">Enter The Area/Locality</span></label> 
                                        </div>
                                    </div>
                                     <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>District <span class="text-danger">*</span></label>
                                        <select tabindex="30"  class="form-control show-tick"  id="cdistrict"  name="cdistrict"  >
    <option  value="">-- Select District --</option>	
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Ariyalur" ) echo 'selected'; }  ?> value="Ariyalur">Ariyalur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Chengalpattu" ) echo 'selected'; }  ?> value="Chengalpattu">Chengalpattu</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Chennai" ) echo 'selected'; }  ?> value="Chennai">Chennai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Coimbatore" ) echo 'selected'; }  ?> value="Coimbatore">Coimbatore</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Cuddalore" ) echo 'selected'; }  ?> value="Cuddalore">Cuddalore</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Dharmapuri" ) echo 'selected'; }  ?> value="Dharmapuri">Dharmapuri</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Dindigul" ) echo 'selected'; }  ?> value="Dindigul">Dindigul</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Erode" ) echo 'selected'; }  ?> value="Erode">Erode</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Kallakurichi" ) echo 'selected'; }  ?> value="Kallakurichi">Kallakurichi</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Kanchipuram" ) echo 'selected'; }  ?> value="Kanchipuram">Kanchipuram</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Kanyakumari" ) echo 'selected'; }  ?> value="Kanyakumari">Kanyakumari</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Karur" ) echo 'selected'; }  ?> value="Karur">Karur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Krishnagiri" ) echo 'selected'; }  ?> value="Krishnagiri">Krishnagiri</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Madurai" ) echo 'selected'; }  ?> value="Madurai">Madurai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Mayiladuthurai" ) echo 'selected'; }  ?> value="Mayiladuthurai">Mayiladuthurai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Nagapattinam" ) echo 'selected'; }  ?> value="Nagapattinam">Nagapattinam</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Namakkal" ) echo 'selected'; }  ?> value="Namakkal">Namakkal</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Nilgiris" ) echo 'selected'; }  ?> value="Nilgiris">Nilgiris</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Perambalur" ) echo 'selected'; }  ?> value="Perambalur">Perambalur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Pudukkottai" ) echo 'selected'; }  ?> value="Pudukkottai">Pudukkottai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Ramanathapuram" ) echo 'selected'; }  ?> value="Ramanathapuram">Ramanathapuram</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Ranipet" ) echo 'selected'; }  ?> value="Ranipet">Ranipet</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Salem" ) echo 'selected'; }  ?> value="Salem">Salem</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Sivagangai" ) echo 'selected'; }  ?> value="Sivagangai">Sivagangai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tenkasi" ) echo 'selected'; }  ?> value="Tenkasi">Tenkasi</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Thanjavur" ) echo 'selected'; }  ?> value="Thanjavur">Thanjavur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Theni" ) echo 'selected'; }  ?> value="Theni">Theni</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Thoothukudi" ) echo 'selected'; }  ?> value="Thoothukudi">Thoothukudi</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tiruchirappalli" ) echo 'selected'; }  ?> value="Tiruchirappalli">Tiruchirappalli</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tirunelveli" ) echo 'selected'; }  ?> value="Tirunelveli">Tirunelveli</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tirupathur" ) echo 'selected'; }  ?> value="Tirupathur">Tirupathur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tiruppur" ) echo 'selected'; }  ?> value="Tiruppur">Tiruppur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tiruvallur" ) echo 'selected'; }  ?> value="Tiruvallur">Tiruvallur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tiruvannamalai" ) echo 'selected'; }  ?> value="Tiruvannamalai">Tiruvannamalai</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Tiruvarur" ) echo 'selected'; }  ?> value="Tiruvarur">Tiruvarur</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Vellore" ) echo 'selected'; }  ?> value="Vellore">Vellore</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Viluppuram" ) echo 'selected'; }  ?> value="Viluppuram">Viluppuram</option>
	<option <?php if(isset($tdistrict)) { if($tdistrict == "Virudhunagar" ) echo 'selected'; }  ?> value="Virudhunagar">Virudhunagar</option>
</select>
                                        </div>
                                        <label><span id="cdistrictcheck" class="text-danger">Enter The District</span></label> 
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>District <span class="text-danger">*</span></label>
                                        <select tabindex="31" class="form-control show-tick"  id="pdistrict"  name="pdistrict"  >
    <option  value="">-- Select District --</option>	
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Ariyalur" ) echo 'selected'; }  ?> value="Ariyalur">Ariyalur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Chengalpattu" ) echo 'selected'; }  ?> value="Chengalpattu">Chengalpattu</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Chennai" ) echo 'selected'; }  ?> value="Chennai">Chennai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Coimbatore" ) echo 'selected'; }  ?> value="Coimbatore">Coimbatore</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Cuddalore" ) echo 'selected'; }  ?> value="Cuddalore">Cuddalore</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Dharmapuri" ) echo 'selected'; }  ?> value="Dharmapuri">Dharmapuri</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Dindigul" ) echo 'selected'; }  ?> value="Dindigul">Dindigul</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Erode" ) echo 'selected'; }  ?> value="Erode">Erode</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Kallakurichi" ) echo 'selected'; }  ?> value="Kallakurichi">Kallakurichi</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Kanchipuram" ) echo 'selected'; }  ?> value="Kanchipuram">Kanchipuram</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Kanyakumari" ) echo 'selected'; }  ?> value="Kanyakumari">Kanyakumari</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Karur" ) echo 'selected'; }  ?> value="Karur">Karur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Krishnagiri" ) echo 'selected'; }  ?> value="Krishnagiri">Krishnagiri</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Madurai" ) echo 'selected'; }  ?> value="Madurai">Madurai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Mayiladuthurai" ) echo 'selected'; }  ?> value="Mayiladuthurai">Mayiladuthurai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Nagapattinam" ) echo 'selected'; }  ?> value="Nagapattinam">Nagapattinam</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Namakkal" ) echo 'selected'; }  ?> value="Namakkal">Namakkal</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Nilgiris" ) echo 'selected'; }  ?> value="Nilgiris">Nilgiris</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Perambalur" ) echo 'selected'; }  ?> value="Perambalur">Perambalur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Pudukkottai" ) echo 'selected'; }  ?> value="Pudukkottai">Pudukkottai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Ramanathapuram" ) echo 'selected'; }  ?> value="Ramanathapuram">Ramanathapuram</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Ranipet" ) echo 'selected'; }  ?> value="Ranipet">Ranipet</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Salem" ) echo 'selected'; }  ?> value="Salem">Salem</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Sivagangai" ) echo 'selected'; }  ?> value="Sivagangai">Sivagangai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tenkasi" ) echo 'selected'; }  ?> value="Tenkasi">Tenkasi</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Thanjavur" ) echo 'selected'; }  ?> value="Thanjavur">Thanjavur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Theni" ) echo 'selected'; }  ?> value="Theni">Theni</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Thoothukudi" ) echo 'selected'; }  ?> value="Thoothukudi">Thoothukudi</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tiruchirappalli" ) echo 'selected'; }  ?> value="Tiruchirappalli">Tiruchirappalli</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tirunelveli" ) echo 'selected'; }  ?> value="Tirunelveli">Tirunelveli</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tirupathur" ) echo 'selected'; }  ?> value="Tirupathur">Tirupathur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tiruppur" ) echo 'selected'; }  ?> value="Tiruppur">Tiruppur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tiruvallur" ) echo 'selected'; }  ?> value="Tiruvallur">Tiruvallur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tiruvannamalai" ) echo 'selected'; }  ?> value="Tiruvannamalai">Tiruvannamalai</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Tiruvarur" ) echo 'selected'; }  ?> value="Tiruvarur">Tiruvarur</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Vellore" ) echo 'selected'; }  ?> value="Vellore">Vellore</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Viluppuram" ) echo 'selected'; }  ?> value="Viluppuram">Viluppuram</option>
	<option <?php if(isset($pdistrict)) { if($pdistrict == "Virudhunagar" ) echo 'selected'; }  ?> value="Virudhunagar">Virudhunagar</option>
</select>
                                        </div>
                                        <label><span id="pdistrictcheck" class="text-danger">Enter The District</span></label> 
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Pincode <span class="text-danger">*</span></label>
                                            <input tabindex="32"  type="number" value="<?php if(isset($tpincode)) echo $tpincode; ?>" id="cpincode" name="cpincode" placeholder="Enter The Pincode" class="form-control">
                                            <label><span id="cpincodecheck" class="text-danger">Enter The Pincode</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Pincode <span class="text-danger">*</span></label>
                                            <input tabindex="33" type="number" value="<?php if(isset($ppincode)) echo $ppincode; ?>" id="ppincode" name="ppincode" placeholder="Enter The Pincode" class="form-control">
                                            <label><span id="ppincodecheck" class="text-danger">Enter The Pincode</span></label> 
                                        </div>
                                    </div>

              

               

                </div>

                <div class="row">

                                  
                </div>

               <div class="row">


                                   
               </div>
           </div>
       </div>      </div>
                <div id="step-4" class="" >
                  
                   
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
                <div class="col-sm-6">
                                    <h3 class="card-title"><div class="text-green " data-class="">Parents/ Guardian Informations</div></h3>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Father's Name <span class="text-danger">*</span></label>
                                            <input tabindex="34" type="text" value="<?php if(isset($fathername)) echo $fathername; ?>" id="fathersname" name="fathersname" placeholder="Enter The Father's Name" class="form-control">
                                            <label><span id="fathersnamecheck" class="text-danger">Enter The Father's Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Mother's Name <span class="text-danger">*</span></label>
                                            <input tabindex="35" type="text" value="<?php if(isset($mothername)) echo $mothername; ?>" id="mothersname" name="mothersname" placeholder="Enter The Mother's Name" class="form-control">
                                            <label><span id="mothersnamecheck" class="text-danger">Enter The Mother's Name</span></label> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Aadhaar <span class="text-danger">*</span></label>
                                            <input tabindex="36" type="number" value="<?php if(isset($fatheraadhaarnumber)) echo $fatheraadhaarnumber; ?>" id="fathersaadhaar" name="fathersaadhaar" placeholder="Enter The Father's Aadhaar" class="form-control">
                                            <label><span id="fathersaadhaarcheck" class="text-danger">Enter The Father's Aadhaar</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Mother's Aadhaar <span class="text-danger">*</span></label>
                                            <input tabindex="37" type="number" value="<?php if(isset($motheraadhaarnumber)) echo $motheraadhaarnumber; ?>" id="mothersaadhaar" name="mothersaadhaar" placeholder="Enter The Mother's Aadhaar" class="form-control">
                                            <label><span id="mothersaadhaarcheck" class="text-danger">Enter The Mother's Aadhaar</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Father Occupation <span class="text-danger">*</span></label>
                                        <select tabindex="38" class="form-control show-tick"  id="fatheroccupation"  name="fatheroccupation"  >
<option value="">-- Select Father Occupation --</option>
<option <?php if(isset($fatheroccupation)) { if($fatheroccupation == "Job" ) echo 'selected'; }  ?> value="Job">Job</option>                                                   
<option <?php if(isset($fatheroccupation)) { if($fatheroccupation == "Business" ) echo 'selected'; }  ?> value="Business">Business</option>      
</select>      <label><span id="fatheroccupationcheck" class="text-danger">Select The Father Occupation</span></label> 
                                        </div>
                                                
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Monthly Income <span class="text-danger">*</span></label>
                                            <input tabindex="39" type="number" value="<?php if(isset($monthlyincome)) echo $monthlyincome; ?>" id="monthlyincome" name="monthlyincome" placeholder="Enter The Monthly Income" class="form-control">
                                            <label><span id="mothersincomecheck" class="text-danger">Enter The Monthly Income</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nature of Job</label>
                                            <input tabindex="40" type="text" value="<?php if(isset($natureofjob)) echo $natureofjob; ?>" id="natureofjob" name="natureofjob" placeholder="Enter The Nature of Job" class="form-control">
                                            </div>
                                        </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Position Held</label>
                                            <input tabindex="41" type="text" value="<?php if(isset($positionheld)) echo $positionheld; ?>" id="positionheld" name="positionheld" placeholder="Enter The Position Held" class="form-control">
                                    </div>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                            <input tabindex="42" type="text" value="<?php if(isset($telephone)) echo $telephone; ?>" id="telephone" name="telephone" placeholder="Enter The Telephone" class="form-control">
                                           
                                        </div>    
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Lives with Guardian  </label>
                                        <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" tabindex="43"  class="custom-control-input" name="liveswithguardian" id="liveswithguardian" checked value="Yes" <?php if(isset($liveswithguardian) && $liveswithguardian=="1"){?> checked=""<?php }?>>
                            <span class="custom-control-label">Yes</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="liveswithguardian" id="liveswithguardian" value="No" <?php if(isset($liveswithguardian)&& $liveswithguardian=="0"){?> checked=""<?php }?>>
                            <span class="custom-control-label">No</span>
                        </label><br/><br/>
</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Father's Contact <span class="text-danger">*</span></label>
                                            <input tabindex="44" type="number" value="<?php if(isset($fathermobile)) echo $fathermobile; ?>" id="fatherscontact" name="fatherscontact" placeholder="Enter The Father's Contact" class="form-control">
                                            <label><span id="fatherscontactcheck" class="text-danger">Enter The Father's Contact</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Mother's Contact <span class="text-danger">*</span></label>
                                            <input tabindex="45" type="number" value="<?php if(isset($mothermobile)) echo $mothermobile; ?>" id="motherscontact" name="motherscontact" placeholder="Enter The Mother's Contact" class="form-control">
                                            <label><span id="motherscontactcheck" class="text-danger">Enter The Mother's Contact</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>Father's E-Mail</label>
                                            <input tabindex="46" type="text" value="<?php if(isset($fatheremailid)) echo $fatheremailid; ?>" id="fathersemail" name="fathersemail" placeholder="Enter The Father's E-Mail" class="form-control">
                                            <label><span id="emailcheck" class="text-danger">Enter a valid email address.</span></label> 
                                      
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                <div class="form-group">
                                        <label>SMS send number</label>
                                            <input tabindex="47"  type="number" value="<?php if(isset($smssentno)) echo $smssentno; ?>" id="smssendnumber" name="smssendnumber" placeholder="Enter The SMS send number" class="form-control">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                               
                                    </div>
                                    <div class="col-sm-6">
                                         
                                    </div>
                </div>

                 <div class="row">
                    
                 </div>
           
               <div class="row">

                                   
                              </div>
                             
                        <div class="row">
                       
                        </div>

                        <div class="row">
                        

                        
                        </div>
            </div>
        </div>
		</div>

                </div>
                <div id="step-5" class="" >
                <div class="row">
                <div class="col-sm-4">
                                                <div class="form-group">
                                        <label>Name of the sibilings</label>
                                            <input tabindex="48" type="text" value="<?php if(isset($siblingname)) echo $siblingname; ?>" id="siblingname" name="siblingname" placeholder="Enter The Name of the sibilings" class="form-control">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                                <div class="form-group">
                                        <label>Ref No</label>
                                            <input tabindex="49" type="number" value="<?php if(isset($siblingrefno)) echo $siblingrefno; ?>" id="siblingrefno" name="siblingrefno" placeholder="Enter The Ref No" class="form-control">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                                <div class="form-group">
                                        <label>School</label>
                                            <input tabindex="50" type="text" value="<?php if(isset($siblingschoolname)) echo $siblingschoolname; ?>" id="siblingschool" name="siblingschool" placeholder="Enter The School" class="form-control">
                                          
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label> Standard</label>
                                         <select tabindex="51" class="form-control show-tick"  id="siblingstandard"  name="siblingstandard"  >
                                         <option value="">-- Select Standard --</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "I" ) echo 'selected'; }  ?> value="I">I</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "II" ) echo 'selected'; }  ?> value="II">II</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "III" ) echo 'selected'; }  ?> value="III">III</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "IV" ) echo 'selected'; }  ?> value="IV">IV</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "V" ) echo 'selected'; }  ?> value="V">V</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "VI" ) echo 'selected'; }  ?> value="VI">VI</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "VII" ) echo 'selected'; }  ?> value="VII">VII</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "VIII" ) echo 'selected'; }  ?> value="VIII">VIII</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "IX" ) echo 'selected'; }  ?> value="IX">IX</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "X" ) echo 'selected'; }  ?> value="X">X</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "XI" ) echo 'selected'; }  ?> value="XI">XI</option>
	<option <?php if(isset($siblingstd)) { if($siblingstd == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
</select>
                                         
                                         
                                        </div>
                                    </div><div class="col-sm-8">  </div>
                                    <div class="col-sm-4">
                                    <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">EXTRA CURRICULAR ACTIVITIES </div></h3><br/>
                                    </div>
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Activity </label>
                                            <textarea tabindex="52"  rows="4" class="form-control no-resize" value="" id="activity" name="activity" placeholder="Enter the Activity">
                                            <?php if(isset($extracurricular)) echo $extracurricular; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                            <div class="col-md-12 col-sm-12">    
                                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                                            </div>   </div>
                                            
                                            <div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="49" id="studentactive" name="studentactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
                                                </div>
                                                <div class="col-sm-12">
                                          <div class="text-right">
                                                <input  type="submit"  tabindex="53" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button type="reset"  tabindex="54" class="btn btn-outline-secondary">Cancel</button><br/>
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