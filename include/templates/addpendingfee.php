<?php
  $id =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if($_POST['studentname'] != '' && $_POST['rollnumber'] != '' && $_POST['medium'] != '' && $_POST['standard'] != ''
&& $_POST['section'] != '' && $_POST['academicyear'] != '' && $_POST['totalfee'] != '' && $_POST['pendingfee'] != '' )
{
    
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){     
        $id = $_POST['id'];    
   
    $updatependingfee = $userObj->updatependingfee($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>pendingfee&msc=2';</script>
    <?php   }
    else{
   
    
        $addpendingfee = $userObj->addpendingfee($mysqli);   
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>pendingfee&msc=1';</script>
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
    $deletependingfee = $userObj->deletependingfee($mysqli,$del); 
    //die;
    ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>pendingfee&msc=3';</script>
<?php   
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
    $getpendingfee = $userObj->getpendingfee($mysqli,$idupd); 
    
    if (sizeof($getpendingfee)>0) {
        for($ipending=0;$ipending<sizeof($getpendingfee);$ipending++)  {   
            $id                        = $getpendingfee['id'];
            $studentname               = $getpendingfee['studentname'];
            $rollnumber                = $getpendingfee['rollnumber'];
            $medium                    = $getpendingfee['medium'];
            $standard                  = $getpendingfee['standard'];
            $section                   = $getpendingfee['section']; 
            $academicyear              = $getpendingfee['academicyear'];
            $totalfee                  = $getpendingfee['totalfee'];
            $pendingfee                = $getpendingfee['pendingfee'];

            $status                    = $getpendingfee['status']; 
        }
    }
}
?>


 <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">PENDING FEE STUDENT LIST</div></h3>
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
                                        <label>Student Name<span class="text-danger">*</span></label>
                                        <input tabindex="1"  type="text" value="<?php if(isset($studentname)) echo $studentname; ?>" id="studentname" name="studentname" placeholder="Enter The Student Name" class="form-control">

                                            <label><span id="studentnamecheck" class="text-danger">Enter The Student Name</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Roll Number<span class="text-danger">*</span></label>
                                        <input tabindex="2"  type="text" value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" id="rollnumber" name="rollnumber" placeholder="Enter The Roll Number" class="form-control">
                                            <label><span id="rollnumbercheck" class="text-danger">Enter The Roll Number</span></label> 
                                        </div>
                                    </div></div>
                                    <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Medium<span class="text-danger">*</span></label>
                                        <select tabindex="3" name="medium" id="medium"  class="form-control" tabindex="3">
                                                    <option value="">Select The Medium</option>
                                                    <option <?php if(isset($medium)) { if($medium == "Tamil" ) echo 'selected'; }  ?> value="Tamil">Tamil</option>
                                                    <option <?php if(isset($medium)) { if($medium == "English" ) echo 'selected'; }  ?> value="English">English</option>
                                         </select>
                                            <label><span id="mediumcheck" class="text-danger">Select The Medium</span></label> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Standard<span class="text-danger">*</span></label>
                                        <select tabindex="4" name="standard" id="standard"  class="form-control" >
                                                    <option value="">Select The Standard</option>
                                                    <option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "I"   ) echo 'selected'; }  ?> value="I">I</option>
                                                    <option <?php if(isset($standard)) { if($standard == "II"  ) echo 'selected'; }  ?> value="II">II</option>
                                                    <option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IV"  ) echo 'selected'; }  ?> value="IV">IV</option>
                                                    <option <?php if(isset($standard)) { if($standard == "V"   ) echo 'selected'; }  ?> value="V">V</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VI"  ) echo 'selected'; }  ?> value="VI">VI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VI">VII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VIII") echo 'selected'; }  ?> value="VIII">VIII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IX"  ) echo 'selected'; }  ?> value="IX">IX</option>
                                                    <option <?php if(isset($standard)) { if($standard == "X"   ) echo 'selected'; }  ?> value="X">X</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XI"  ) echo 'selected'; }  ?> value="XI">XI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
                                            </select>
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Section<span class="text-danger">*</span></label>
                                            <select tabindex="5" name="section" id="section"  class="form-control" >
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
                            
                                <div class="row clearfix"> 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Academic Year<span class="text-danger">*</span></label>
                                        <select tabindex="6" name="academicyear" id="academicyear"  class="form-control" >
                                                    <option value="">Select The Academic Year</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2001-2002" ) echo 'selected'; }  ?> value="2001-2002">2001-2002</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2002-2003" ) echo 'selected'; }  ?> value="2002-2003">2002-2003</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2003-2004" ) echo 'selected'; }  ?> value="2003-2004">2003-2004</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2004-2005" ) echo 'selected'; }  ?> value="2004-2005">2004-2005</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2005-2006" ) echo 'selected'; }  ?> value="2005-2006">2005-2006</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2006-2007" ) echo 'selected'; }  ?> value="2006-2007">2006-2007</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2007-2008" ) echo 'selected'; }  ?> value="2007-2008">2007-2008</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2008-2009" ) echo 'selected'; }  ?> value="2008-2009">2008-2009</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2009-2010" ) echo 'selected'; }  ?> value="2009-2010">2009-2010</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2010-2011" ) echo 'selected'; }  ?> value="2010-2011">2010-2011</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2011-2012" ) echo 'selected'; }  ?> value="2011-2012">2011-2012</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2012-2013" ) echo 'selected'; }  ?> value="2012-2013">2012-2013</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2013-2014" ) echo 'selected'; }  ?> value="2013-2014">2013-2014</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2014-2015" ) echo 'selected'; }  ?> value="2014-2015">2014-2015</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2015-2016" ) echo 'selected'; }  ?> value="2015-2016">2015-2016</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2016-2017" ) echo 'selected'; }  ?> value="2016-2017">2016-2017</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2017-2018" ) echo 'selected'; }  ?> value="2017-2018">2017-2018</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2018-2019" ) echo 'selected'; }  ?> value="2018-2019">2018-2019</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2019-2020" ) echo 'selected'; }  ?> value="2019-2020">2019-2020</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2020-2021" ) echo 'selected'; }  ?> value="2020-2021">2020-2021</option>
                                                    <option <?php if(isset($academicyear)) { if($academicyear == "2021-2022" ) echo 'selected'; }  ?> value="2021-2022">2021-2022</option>
                                                    
                                            </select>
                                            <label><span id="academicyearcheck" class="text-danger">Select The Academic Year</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Total Fee<span class="text-danger">*</span></label>
                                        <input tabindex="7"  type="number" value="<?php if(isset($totalfee)) echo $totalfee; ?>" id="totalfee" name="totalfee" placeholder="Enter The Total Fee" class="form-control">
                                            <label><span id="totalfeecheck" class="text-danger">Enter The Total Fee</span></label> 
                                        </div>
                                    </div>

                                    
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Pending Fee<span class="text-danger">*</span></label>
                                        <input tabindex="8"  type="number" value="<?php if(isset($pendingfee)) echo $pendingfee; ?>" id="pendingfee" name="pendingfee" placeholder="Enter The Pending Fee" class="form-control">
                                            <label><span id="pendingfeecheck" class="text-danger">Enter The Pending Fee</span></label> 
                                        </div>
                                    </div>
                                </div> 
                                    <div class="form-group">
                                        <div class="kt-checkbox-inline">
                                            <label class="kt-checkbox">
                                                <input tabindex="9" id="status" name="status" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="submit" tabindex="10" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 ">
                                    <button type="reset" tabindex="11" class="btn btn-outline-secondary">Cancel</button><br/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

