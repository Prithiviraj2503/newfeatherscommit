  
  <?php 
  $subjectid =0;

 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['standard'] != '' && $_POST['groupname'] != '' )
{
  
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
        $id = $_POST['id']; 	
    $subjectgroupupdatedetails = $userObj->updatesubjectgroup($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>subjectgroup&msc=2';</script>
    <?php	}
    else{
   
	
		$subjectgroupadddetails = $userObj->addsubjectgroup($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>subjectgroup&msc=1';</script>
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
	$subjectgroupdeletedetails = $userObj->deletesubjectgroup($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php echo $HOSTPATH;  ?>subjectgroup&msc=3';</script>
<?php	
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
$section ="";
$subject ="";
if($idupd>0)
{
	$subjectgroupdetails = $userObj->getsubjectgroup($mysqli,$idupd); 
	
	if (sizeof($subjectgroupdetails)>0) {
        for($isubjectgroup=0;$isubjectgroup<sizeof($subjectgroupdetails);$isubjectgroup++)  {			
			$subjectgroupid              = $subjectgroupdetails['subjectgroupid'];
			$standard            		 = $subjectgroupdetails['standard'];
			$groupname        		     = $subjectgroupdetails['groupname'];
			$section         		     = $subjectgroupdetails['section'];	
            $subject         		     = $subjectgroupdetails['subject'];			
			$status          			 = $subjectgroupdetails['status'];      
          
		}
	}
   
    
}
$section = explode(',', $section);
$subjectgr = explode(',', $subject);
$subjectstatusdetails = $userObj->getsubjectstatus($mysqli,$idupd); 
//($isubjectstatus=0;$isubjectstatus<sizeof($subjectstatusdetails);$isubject++)  {			
  //  echo $subject              = $subjectstatusdetails['subject'];
//



//foreach ($section as $val) {echo $val."<br/>";}

//die;

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
                                    <input type="hidden" class="form-control" value="<?php if(isset($subjectgroupid)) echo $subjectgroupid; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter The Subjectid">
                                      
                                      
                                    <div class="row clearfix"> 
                                    <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label>Standard <span class="text-danger">*</span></label>
                                               
                                                    <select tabindex="1" class="form-control show-tick"  id="standard"  name="standard"  >
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
                                                <div class="form-group">
                                                    <label>Group Name <span class="text-danger">*</span></label>
                                               
                                                    <input tabindex="4"  type="text" value="<?php if(isset($groupname)) echo $groupname; ?>" id="groupname" name="groupname" placeholder="Enter The Group Name" class="form-control">
                                               
                                                    <label><span id="groupnamecheck" class="text-danger">Enter The Group Name</span></label> 
                                               
                                                                                               
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                            <label>Section </label>
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                            <?php
                            
                            foreach ($section as $sectionval) { 
                                if($sectionval == "A" )$sectionvala="checked";
                                if($sectionval == "B" ) $sectionvalb="checked";
                                if($sectionval == "C" ) $sectionvalc="checked";
                                if($sectionval == "D" ) $sectionvald="checked";
                                if($sectionval == "E" ) $sectionvale="checked";
                            }?>
                                                    <input tabindex="2" name="section[]" type="checkbox" value="A"  <?php if(isset($sectionvala)) {  echo $sectionvala; }  ?> > A<br/>
                                                    <input tabindex="2" name="section[]" type="checkbox" value="B" <?php if(isset($sectionvalb)) { echo $sectionvalb; }  ?> > B<br/>
                                                    <input tabindex="2" name="section[]" type="checkbox" value="C" <?php if(isset($sectionvalc)) {  echo $sectionvalc; }  ?> > C<br/>
                                                    <input tabindex="2" name="section[]" type="checkbox" value="D" <?php if(isset($sectionvald)) {   echo $sectionvald;}  ?>> D<br/>
                                                    <input tabindex="2" name="section[]" type="checkbox" value="E" <?php if(isset($sectionvale)) {  echo $sectionvale; }  ?>> E<br/>
                                                 
                                                    <span></span>
                                                </label>
                                               
												</div>
							</div></div>
                            <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                            <label>Subject's</label>
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                            <?php if (sizeof($subjectstatusdetails)>0) { 
 for($j=0;$j<count($subjectstatusdetails);$j++) { 
   //  if(isset($subject)) { if($subjectstatusdetails[$j]['subject'] 
	//== $subject )
		// echo 'selected'; }  
        ?> 
	              <input tabindex="3" name="subject[]" type="checkbox" 
                  <?php foreach ($subjectgr as $subjectval) {  if($subjectval == $subjectstatusdetails[$j]['subject']  ) echo $subjectval="checked"; }?>
				  value="<?php echo $subjectstatusdetails[$j]['subject'];?>"  > 
				  <?php echo $subjectstatusdetails[$j]['subject'];?><br/><?php }} ?>
     
                            <?php  
                            if($idupd>0)
                            {
                            //if (sizeof($getsubjectstatusdetails)>0) {
                                 //   for($isubjectstatus=0;$isubjectstatus<sizeof($getsubjectstatusdetails);$isubjectstatus++)  {
                                    //    $subjectstatus         		     = $getsubjectstatusdetails['subject'];	?>


                                      
                            <?php      
                          //  $isubjectstatus++;
                        
//}

                         //  } 
                        }?>


                                              <span></span>
                                                </label>
												</div>
							</div></div>
                                    <div class="col-lg-12">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="4" id="subjectgroupactive" name="subjectgroupactive" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
							</div>
                        </div></div>
                                    

                                            <div class="col-md-12 col-sm-12">    
                                            <label><span class="text-danger">* Fields are mandatory</span></label>          
                                            </div>                      

                                          <div class="col-sm-12">
                                          <div class="text-right">
                                                <input  tabindex="5" type="submit" id="submitbtn" name="submitbtn"   class="btn btn-primary">
                                                <button tabindex="6" type="reset" class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                            </div>
                        </div>