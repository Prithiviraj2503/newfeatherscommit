<?php

 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['studentname'] != '' && $_POST['rollnumber'] != '' && $_POST['standard'] != ''
&& $_POST['section'] != '' && $_POST['reportfrom'] != '' && $_POST['reportto'] != ''
&& $_POST['workingdays'] != '' && $_POST['absent'] != '' && $_POST['attendancepercent'] != ''
&& $_POST['perattendance'] != '' && $_POST['perpunctuality'] != '' && $_POST['perdiscipline'] != '' 
&& $_POST['perattitude'] != '' && $_POST['percommunication'] != '' && $_POST['perclassparticipation'] != ''
&& $_POST['percapability'] != ''&& $_POST['perskill'] != ''&& $_POST['test1name'] != ''&& $_POST['test1marks'] != ''&& $_POST['reportcomments'] != '')
{
    
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){     
        $id = $_POST['id'];    
   
    $updatestudentreport = $userObj->updatestudentreport($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>studentreport&msc=2';</script>
    <?php   }
    else{
   
    
        $addstudentreport = $userObj->addstudentreport($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>studentreport&msc=1';</script>
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
    $deletestudentreport = $userObj->deletestudentreport($mysqli,$del); 
    //die;
    ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>studentreport&msc=3';</script>
<?php   
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
    $studentreportdetails = $userObj->getstudentreport($mysqli,$idupd); 
    
    if (sizeof($studentreportdetails)>0) {
        for($istudreport=0;$istudreport<sizeof($studentreportdetails);$istudreport++)  {   
            $id                         = $studentreportdetails['id'];
            $studentname                = $studentreportdetails['studentname'];
            $rollnumber                 = $studentreportdetails['rollnumber'];
            $standard                   = $studentreportdetails['standard'];
            $section                    = $studentreportdetails['section']; 

            $reportfrom                 = $studentreportdetails['reportfrom'];
            $reportto                   = $studentreportdetails['reportto'];

            $workingdays                = $studentreportdetails['workingdays'];
            $absent                     = $studentreportdetails['absent'];          
            $attendancepercent          = $studentreportdetails['attendancepercent'];      

            $perattendance              = $studentreportdetails['perattendance'];
            $perpunctuality             = $studentreportdetails['perpunctuality'];
            $perdiscipline              = $studentreportdetails['perdiscipline'];
            $perattitude                = $studentreportdetails['perattitude'];           
            $percommunication           = $studentreportdetails['percommunication'];
            $perclassparticipation      = $studentreportdetails['perclassparticipation'];
            $percapability              = $studentreportdetails['percapability'];
            $perskill                   = $studentreportdetails['perskill'];

            $test1name                  = $studentreportdetails['test1name'];         
            $test1marks                 = $studentreportdetails['test1marks'];  
            $test2name                  = $studentreportdetails['test2name'];
            $test2marks                 = $studentreportdetails['test2marks'];
            $test3name                  = $studentreportdetails['test3name'];
            $test3marks                 = $studentreportdetails['test3marks'];           
            $test4name                  = $studentreportdetails['test4name'];
            $test4marks                 = $studentreportdetails['test4marks'];

            $reportcomments             = $studentreportdetails['reportcomments'];
            $status                     = $studentreportdetails['status']; 
        }
    }
}
?>


 <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">STUDENT PROFILE</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    
                                    <form id="studentreportform" name="studentreportform" action="" method="post">

                                    <div class="card-body">    
                                    <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id">
                                      
                                    <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Student Name <span class="text-danger">*</span></label>
                                            <input tabindex="1" type="text" value="<?php if(isset($studentname)) echo $studentname; ?>" id="studentname" name="studentname" placeholder="Enter The Student Name" class="form-control">
                                            <label><span id="studentnamecheck" class="text-danger">Enter The Student Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Roll Number<span class="text-danger">*</span></label>
                                            <input tabindex="2"  type="text" value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" id="rollnumber" name="rollnumber" placeholder="Enter The Roll Number" class="form-control">
                                            <label><span id="rollnumbercheck" class="text-danger">Enter The Roll Number</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Standard<span class="text-danger">*</span></label>
                                        <select tabindex="3" name="standard" id="standard"  class="form-control" tabindex="3">
                                                    <option value="">Select The Standard</option>
                                                    <option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "I" ) echo 'selected'; }  ?> value="I">I</option>
                                                    <option <?php if(isset($standard)) { if($standard == "II" ) echo 'selected'; }  ?> value="II">II</option>
                                                    <option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IV" ) echo 'selected'; }  ?> value="IV">IV</option>
                                                    <option <?php if(isset($standard)) { if($standard == "V" ) echo 'selected'; }  ?> value="V">V</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VI" ) echo 'selected'; }  ?> value="VI">VI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VI">VII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VIII" ) echo 'selected'; }  ?> value="VIII">VIII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IX" ) echo 'selected'; }  ?> value="IX">IX</option>
                                                    <option <?php if(isset($standard)) { if($standard == "X" ) echo 'selected'; }  ?> value="X">X</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XI" ) echo 'selected'; }  ?> value="XI">XI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
                                            </select>
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Section<span class="text-danger">*</span></label>
                                            <select tabindex="4" name="section" id="section"  class="form-control" tabindex="4">
                                                    <option value="">Select The Section</option>
                                                    <option <?php if(isset($section)) { if($section == "A" ) echo 'selected'; }  ?> value="A">A</option>
                                                    <option <?php if(isset($section)) { if($section == "B" ) echo 'selected'; }  ?> value="B">B</option>
                                                    <option <?php if(isset($section)) { if($section == "C" ) echo 'selected'; }  ?> value="C">C</option>
                                                    <option <?php if(isset($section)) { if($section == "D" ) echo 'selected'; }  ?> value="D">D</option>
                                                    <option <?php if(isset($section)) { if($section == "E" ) echo 'selected'; }  ?> value="E">E</option>
                                                    <option <?php if(isset($section)) { if($section == "F" ) echo 'selected'; }  ?> value="F">F</option>
                                            </select>
                                            <label><span id="sectioncheck" class="text-danger">Select The Section</span></label> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                              
                                    <div class="row clearfix">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">REPORTING PERIOD</div></h3>
                                    </div>
                                    </div>
                                    <div class="card-body row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>From <span class="text-danger">*</span></label>
                                            <input tabindex="5"  type="date" value="<?php if(isset($reportfrom)) echo $reportfrom; ?>" id="reportfrom" name="reportfrom" class="form-control">
                                            <label><span id="reportfromcheck" class="text-danger">Select Start Report Period</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>To<span class="text-danger">*</span></label>
                                            <input tabindex="6" type="date" value="<?php if(isset($reportto)) echo $reportto; ?>" id="reportto" name="reportto"  class="form-control">
                                            <label><span id="reporttocheck" class="text-danger">Select End Report Period</span></label> 
                                        </div>
                                    </div>
                                </div>

                                  <div class="row clearfix">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">MONTHLY ATTENDANCE</div></h3>
                                    </div>
                                </div>
                                <div class="card-body row clearfix"> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Working Days<span class="text-danger">*</span></label>
                                            <input tabindex="7" type="number" value="<?php if(isset($workingdays)) echo $workingdays; ?>" id="workingdays" name="workingdays" class="form-control" placeholder="Enter The Total Number Of Working Days">
                                            <label><span id="workingdayscheck" class="text-danger">Enter The Total Number Of Working Days</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Absent<span class="text-danger">*</span></label>
                                            <input tabindex="8"  type="number" value="<?php if(isset($absent)) echo $absent; ?>" id="absent" name="absent"  class="form-control" placeholder="Enter The Total Number Of Absent Days">
                                            <label><span id="absentcheck" class="text-danger">Enter The Total Number Of Absent Days</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Attendance Percentage<span class="text-danger">*</span></label>
                                            <input tabindex="9"  type="number" value="<?php if(isset($attendancepercent)) echo $attendancepercent; ?>" id="attendancepercent" name="attendancepercent"  class="form-control" placeholder="Enter The Attendance Percentage">
                                            <label><span id="attendancepercentcheck" class="text-danger">Enter The Attendance Percentage</span></label> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">MONTHLY PERFORMANCE EVALUATION</div></h3>
                                    </div>
                                </div>
                                <div class="card-body ">
                                 <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Attendance<span class="text-danger">*</span></label>
                                            <select tabindex="10" id="perattendance" name="perattendance" class="form-control">
                                                <option value="">Select Attendances</option>
                                                <option <?php if(isset($perattendance)) { if($perattendance == "Excellent" )         echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perattendance)) { if($perattendance == "Very Good" )         echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perattendance)) { if($perattendance == "Good" )              echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perattendance)) { if($perattendance == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perattendance)) { if($perattendance == "Unsatisfactory" )    echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perattendancecheck" class="text-danger">Select Attendance</span></label> 
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Punctuality<span class="text-danger">*</span></label>
                                            <select tabindex="11" id="perpunctuality" name="perpunctuality" class="form-control">
                                                <option value="">Select Punctuality</option>
                                                <option <?php if(isset($perpunctuality)) { if($perpunctuality == "Excellent" )         echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perpunctuality)) { if($perpunctuality == "Very Good" )         echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perpunctuality)) { if($perpunctuality == "Good" )              echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perpunctuality)) { if($perpunctuality == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perpunctuality)) { if($perpunctuality == "Unsatisfactory" )    echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perpunctualitycheck" class="text-danger">Select Punctuality</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>General Discipline<span class="text-danger">*</span></label>
                                            <select tabindex="12" id="perdiscipline" name="perdiscipline" class="form-control">
                                                <option value="">Select General Discipline</option>
                                                <option <?php if(isset($perdiscipline)) { if($perdiscipline == "Excellent" )         echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perdiscipline)) { if($perdiscipline == "Very Good" )         echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perdiscipline)) { if($perdiscipline == "Good" )              echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perdiscipline)) { if($perdiscipline == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perdiscipline)) { if($perdiscipline == "Unsatisfactory" )    echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perdisciplinecheck" class="text-danger">Select General Discipline</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Attitude<span class="text-danger">*</span></label>
                                            <select tabindex="13" id="perattitude" name="perattitude" class="form-control">
                                                <option value="">Select Attitude</option>
                                                <option <?php if(isset($perattitude)) { if($perattitude == "Excellent" ) echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perattitude)) { if($perattitude == "Very Good" ) echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perattitude)) { if($perattitude == "Good" ) echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perattitude)) { if($perattitude == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perattitude)) { if($perattitude == "Unsatisfactory" ) echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perattitudecheck" class="text-danger">Select Attitude</span></label> 
                                        </div>
                                    </div>
                                </div>
                         
                                 <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Communication<span class="text-danger">*</span></label>
                                            <select tabindex="14" id="percommunication" name="percommunication" class="form-control">
                                                <option value="">Select Communication</option>
                                                <option <?php if(isset($percommunication)) { if($percommunication == "Excellent" ) echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($percommunication)) { if($percommunication == "Very Good" ) echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($percommunication)) { if($percommunication == "Good" ) echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($percommunication)) { if($percommunication == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($percommunication)) { if($percommunication == "Unsatisfactory" ) echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="percommunicationcheck" class="text-danger">Select Communication</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Class Participation<span class="text-danger">*</span></label>
                                            <select tabindex="15" id="perclassparticipation" name="perclassparticipation" class="form-control">
                                                <option value="">Select Class Participation</option>
                                                <option <?php if(isset($perclassparticipation)) { if($perclassparticipation == "Excellent" ) echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perclassparticipation)) { if($perclassparticipation == "Very Good" ) echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perclassparticipation)) { if($perclassparticipation == "Good" ) echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perclassparticipation)) { if($perclassparticipation == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perclassparticipation)) { if($perclassparticipation == "Unsatisfactory" ) echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perparticipationcheck" class="text-danger">Select Class Participation</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Capability and Commitment<span class="text-danger">*</span></label>
                                            <select tabindex="16" id="percapability" name="percapability" class="form-control">
                                                <option value="">Select Capability and Commitment</option>
                                                <option <?php if(isset($percapability)) { if($percapability == "Excellent" ) echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option  <?php if(isset($percapability)) { if($percapability == "Very Good" ) echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option  <?php if(isset($percapability)) { if($percapability == "Good" ) echo 'selected'; }  ?> value="Good">Good</option>
                                                <option  <?php if(isset($percapability)) { if($percapability == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option  <?php if(isset($percapability)) { if($percapability == "Unsatisfactory" ) echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="percapabilitycheck" class="text-danger">Select Capability and Commitment</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label>Trade Skill Development<span class="text-danger">*</span></label>
                                            <select tabindex="17" id="perskill" name="perskill" class="form-control">
                                                <option value="">Select Trade Skill Development</option>
                                                <option <?php if(isset($perskill)) { if($perskill == "Excellent" ) echo 'selected'; }  ?> value="Excellent">Excellent</option>
                                                <option <?php if(isset($perskill)) { if($perskill == "Very Good" ) echo 'selected'; }  ?> value="Very Good">Very Good</option>
                                                <option <?php if(isset($perskill)) { if($perskill == "Good" ) echo 'selected'; }  ?> value="Good">Good</option>
                                                <option <?php if(isset($perskill)) { if($perskill == "Needs Improvement" ) echo 'selected'; }  ?> value="Needs Improvement">Needs Improvement</option>
                                                <option <?php if(isset($perskill)) { if($perskill == "Unsatisfactory" ) echo 'selected'; }  ?> value="Unsatisfactory">Unsatisfactory</option>
                                            </select>
                                            <label><span id="perskillcheck" class="text-danger">Select Trade Skill Development</span></label> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                                  <div class="row clearfix">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">TEST PERFORMANCE</div></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test I Name<span class="text-danger">*</span></label>
                                            <input tabindex="18" type="text" value="<?php if(isset($test1name)) echo $test1name; ?>" id="test1name" name="test1name" placeholder="Enter The Test I Name" class="form-control">
                                            <label><span id="test1namecheck" class="text-danger">Enter The Test I Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test I Marks<span class="text-danger">*</span></label>
                                            <input tabindex="19"  type="number" value="<?php if(isset($test1marks)) echo $test1marks; ?>" id="test1marks" name="test1marks" placeholder="Enter The I Marks" class="form-control">
                                            <label><span id="test1markscheck" class="text-danger">Enter The I Marks</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test II Name</label>
                                            <input tabindex="20" type="text" value="<?php if(isset($test2name)) echo $test2name; ?>" id="test2name" name="test2name" placeholder="Enter The Test II Name" class="form-control">
                                            <label><span id="test2namecheck" class="text-danger">Enter The Test II Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test II Marks</label>
                                            <input tabindex="21"  type="number" value="<?php if(isset($test2marks)) echo $test2marks; ?>" id="test2marks" name="test2marks" placeholder="Enter The Test II Marks" class="form-control"> 
                                            <label><span id="test2markscheck" class="text-danger">Enter The Test II Marks</span></label> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test III Name</label>
                                            <input tabindex="22" type="text" value="<?php if(isset($test3name)) echo $test3name; ?>" id="test3name" name="test3name" placeholder="Enter The Test III Name" class="form-control"> 
                                            <label><span id="test3namecheck" class="text-danger">Enter The Test III Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test III Marks</label>
                                            <input tabindex="23"  type="number" value="<?php if(isset($test3marks)) echo $test3marks; ?>" id="test3marks" name="test3marks" placeholder="Enter The III Marks" class="form-control">
                                            <label><span id="test3markscheck" class="text-danger">Enter The Test III Marks</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test IV Name</label>
                                            <input tabindex="24" type="text" value="<?php if(isset($test4name)) echo $test4name; ?>" id="test4name" name="test4name" placeholder="Enter The Test IV Name" class="form-control">
                                            <label><span id="test4namecheck" class="text-danger">Enter The Test IV Name</span></label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Test IV Marks</label>
                                            <input tabindex="25"  type="number" value="<?php if(isset($test4marks)) echo $test4marks; ?>" id="test4marks" name="test4marks" placeholder="Enter The Test IV Marks" class="form-control">
                                            <label><span id="test4markscheck" class="text-danger">Enter The Test IV Marks</span></label> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix"> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Comments<span class="text-danger">*</span></label>
                                            <textarea tabindex="26" placeholder="Enter The Comments" class="form-control no-resize" id="reportcomments" name="reportcomments" rows="4" cols="30"><?php if(isset($reportcomments)) echo $reportcomments; ?></textarea>
                                            <label><span id="reportcommentcheck" class="text-danger">Enter The Comments</span></label> 
                                        </div>
                                    </div>
                                </div>

                                    <div class="form-group">
                                    <div class="kt-checkbox-inline">
                                    <label class="kt-checkbox">
                                    <input tabindex="27" id="status" name="status" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                    <span></span></label>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="submit" tabindex="28" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 ">
                                    <button type="reset" tabindex="29" class="btn btn-outline-secondary">Cancel</button><br/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

