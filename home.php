<?php 
   define('iEditValid', 1);
	include('api/main.php'); // Database Connection File   
	?>
<!doctype html>
<html lang="en" dir="ltr">
<?php include "include/common/dashboardhead.php"?>
<body class="font-muli theme-cyan gradient">

<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                   <a href="index.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>   
                    
                </div>
            </div>
            <div class="hright">
                         
            </div>
        </div>
    </div>
   <?php// include("include/common/rightschoolmenu.php");?>
   
   <?php include("include/common/leftbar.php");?>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top" >
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">                        
                      
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                           
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w350 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <div class="message">It is a long established fact that a reader</div>
                                                    <small>11 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Wendy Keen</span>
                                                    <div class="message">There are many variations of passages of Lorem Ipsum</div>
                                                    <small>18 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Matt Rosales</span>
                                                    <div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
                                                    <small>27 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Phillip Smith</span>
                                                    <div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
                                                    <small>33 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>                        
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-blue"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">Campaign <strong class="text-blue font-weight-bold">Holiday</strong> is nearly reach budget limit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-green"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">New admission <strong class="text-green font-weight-bold">32</strong> in computer department.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-red"><i class="fa fa-info"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">6th sem result <strong class="text-red font-weight-bold">67%</strong> in computer department.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-azure"><i class="fa fa-thumbs-o-up"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">New Feedback <strong class="text-azure font-weight-bold">53</strong> for university assessment.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url(assets/images/xs/avatar5.jpg)"></span> George</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="app-email.html"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="index.php"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php  $msc=0;
if(isset($_GET['msc']))
{
$msc=$_GET['msc'];
}
$current_page = isset($_GET['page']) ? $_GET['page'] : null;                          
?>
                   <!-- Start Page title and tab -->
  <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">

                   <?php  if($current_page == 'school') { ?>
                        <h1 class="page-title">School</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">School</li>
                        </ol>
                    </div> <?php  } if($current_page == 'trust') { ?>
                        <h1 class="page-title">Trust</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Trust</li>
                        </ol>
                    </div><?php  } 
                 if($current_page == 'holiday') { ?>
                        <h1 class="page-title">Holiday</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Holiday</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'subject') { ?>
                        <h1 class="page-title">Subject</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Subject</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'subjectgroup') { ?>
                        <h1 class="page-title">Subject Group</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Subject Group</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'staff') { ?>
                        <h1 class="page-title">Staff</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Staff</li>
                        </ol>
                    </div><?php  }        
                     if($current_page == 'student') { ?>
                        <h1 class="page-title">Student</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student</li>
                        </ol>
                    </div><?php  } 
                     if($current_page == 'feecollection') { ?>
                        <h1 class="page-title">Feecollection</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Feecollection</li>
                        </ol>
                    </div><?php  } 
					if($current_page == 'smsbirthday') { ?>
                        <h1 class="page-title">Birthday Wishes</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Birthday Wishes</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'generalsms') { ?>
                        <h1 class="page-title">General Message</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Message</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'remindersms') { ?>
                        <h1 class="page-title"> Payment Reminder</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payment Reminder</li>
                        </ol>
                    </div><?php  } 
                     if($current_page == 'castereport') { ?>
                        <h1 class="page-title"> Caste Report</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Caste Report</li>
                        </ol>
                    </div><?php  } 
                     if($current_page == 'studentreport') { ?>
                        <h1 class="page-title"> Student Report</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student Report</li>
                        </ol>
                    </div><?php  } 
					 if($current_page == 'feemaster') { ?>
                        <h1 class="page-title">Fee Master </h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fee Master</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'pendingfee') { ?>
                        <h1 class="page-title">Pending Fee </h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pending Fee</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'feehistory') { ?>
                        <h1 class="page-title">Fee History </h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fee History</li>
                        </ol>
                    </div><?php  } 
            
                    if($current_page == 'feecollectionreport') { ?>
                        <h1 class="page-title">Fees Collection Report</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fees Collection Report</li>
                        </ol>
                    </div><?php  } 
                    if($current_page == 'studentrollback') { ?>
                        <h1 class="page-title">Student RollBack</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student RollBack</li>
                        </ol>
                    </div><?php  } 

                    if($current_page == 'bulkimport') { ?>
                        <h1 class="page-title">Student RollBack</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bulk Import</li>
                        </ol>
                    </div><?php  } ?>
                   
                   


                    <ul class="nav nav-tabs page-header-tab">
                  <?php  $msc=0;
                         if(isset($_GET['msc']))
                         {
                         $msc=$_GET['msc'];
                         }?>
                    <?php if($current_page == 'school') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."school";?> target="_self" >Add School</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#School-all">Edit School</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'trust') { ?>				
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Trust-all">Edit Trust</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'holiday') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."holiday";?>  target="_self" >Add Holiday</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Holiday-all">Edit Holiday</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'subject') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."subject";?>  target="_self" >Add Subject</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Subject-all">Edit Subject</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'subjectgroup') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."subjectgroup";?>  target="_self" >Add Subjectgroup</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Subjectgroup-all">Edit Subjectgroup</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'staff') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."staff";?>  target="_self" >Add Staff</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Staff-all">Edit Staff</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'student') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."student";?>  target="_self" >Add Student</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#Student-all">Edit Student</a></li>             
                        <?php  }  ?>
                        <?php if($current_page == 'feecollection') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."feecollection";?>  target="_self" >Add Feecollection</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#feecollection-all">Edit Feecollection</a></li>             
                        <?php  } ?>
                   <?php if($current_page == 'smsbirthday') { ?>
					 <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."smsbirthday";?>  target="_self" >Add Birthday Wishes</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#smsbirthday-all">Edit Birthday Wishes</a></li>             
                        <?php  } ?>
                          <?php if($current_page == 'generalsms') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."generalsms";?>  target="_self" >Add General Message</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#generalsms-all">Edit General Message</a></li>             
                        <?php  } ?>
                        <?php if($current_page == 'remindersms') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."remindersms";?>  target="_self" >Add Payment Reminder</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#remindersms-all">Edit Payment Reminder</a></li>             
                        <?php  } ?>

                         <?php if($current_page == 'studentreport') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."studentreport";?>  target="_self" >Add Student Report</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#studentreport-all">Edit Student Report</a></li>             
                        <?php  } ?>

                        <?php if($current_page == 'castereport') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc=1){ echo "active"; } if($msc=2  ){ echo "active"; } if($msc=3 ){ echo "active"; }?>" <a  href="#castereport-all" target="_self" > view caste report</a></li>
                       <!-- <li class="nav-item"><a class="nav-link <?php //if($msc!==1){ echo "active"; }if($msc!==2){ echo "active"; }if($msc!==3){ echo "active"; }?> " data-toggle="tab" href=<?php //echo $URLPATH."castereport";?>View Caste Report</a></li>          -->
                        <?php  } ?>
                         <?php if($current_page == 'feemaster') { ?>
                            <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."feemaster";?>  target="_self" >Add Fee Master</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#feemaster-all">Edit Fee Master</a></li>   
                            <?php  } ?>
                            <?php if($current_page == 'pendingfee') { ?>
                            <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."pendingfee";?>  target="_self" >Add Pending Fee</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#pendingfee-all">Edit Pending Fee</a></li>   
                            <?php  } ?>
                        <?php if($current_page == 'feecollectionreport') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc=1){ echo "active"; } if($msc=2  ){ echo "active"; } if($msc=3 ){ echo "active"; }?>" <a  href="#feecollectionreport-all" target="_self" >View Fee Collection Report</a></li>
                        <?php  } ?>
                        <?php if($current_page == 'feehistory') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc=1){ echo "active"; } if($msc=2  ){ echo "active"; } if($msc=3 ){ echo "active"; }?>" <a  href="#feehistory" target="_self" >View Fee History</a></li>
                        <?php  } ?>
                        <?php if($current_page == 'studentrollback') { ?>
                     <li class="nav-item"><a class="nav-link <?php if($msc!=1){ echo "active"; } if($msc!=2  ){ echo "active"; } if($msc!=3 ){ echo "active"; }?>" <a href=<?php echo $URLPATH."studentrollback";?>  target="_self" >Add Student RollBack</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; }?> " data-toggle="tab" href="#studentrollback-all">Edit Student RollBack</a></li>             
                        <?php  } ?>
                        </ul>
                </div>
            </div>
        </div>
        <?php if($current_page != 'staffwizard') { ?>
            <div class="section-body mt-4">
            <?php }?>
            <?php if($current_page == 'staffwizard') { ?>
        <div class="section-body mt-0">
        <?php }?>
            <div class="container-fluid">
                <div class="tab-content">
                <?php if($current_page == 'school') { ?>
                    <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="School-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'school') { 
							  include "include/templates/editschool.php";
							   }                             
                              ?>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>
                        <?php if($current_page == 'trust') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Trust-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'trust') { 
							  include "include/templates/edittrust.php";
							   }                             
                              ?>
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'holiday') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Holiday-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'holiday') { 
							  include "include/templates/editholiday.php";
							   }                             
                              ?>
                              
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'subject') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Subject-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'subject') { 
							  include "include/templates/editsubject.php";
							   }                             
                              ?>
                              
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'subjectgroup') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Subjectgroup-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'subjectgroup') { 
							  include "include/templates/editsubjectgroup.php";
							   }                             
                              ?>
                              
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'staff') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Staff-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'staff') { 
							  include "include/templates/editstaff.php";
							   }                             
                              ?>
                              
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'student') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="Student-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'student') { 
							  include "include/templates/editstudent.php";
							   }                             
                              ?>
                              
                            </div>
                        </div>
                    </div>
                            <?php  } ?> 

                            <?php if($current_page == 'feecollection') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="feecollection-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'feecollection') { 
							  include "include/templates/editfeecollection.php";
							   }                             
                              ?>
							  </div>
                        </div>
                    </div>
                            <?php  } ?> 
							   <?php if($current_page == 'smsbirthday') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="smsbirthday-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
							  $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
							   if($current_page == 'smsbirthday') { 
							  include "include/templates/editsmsbirthday.php";
							   }                             
                              ?>
							  </div>
                        </div>
                    </div>
                            <?php  } ?> 
							 <?php if($current_page == 'generalsms') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="generalsms-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'generalsms') { 
                              include "include/templates/editgeneralsms.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'remindersms') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="remindersms-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'remindersms') { 
                              include "include/templates/editpaymentreminder.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>


                       <?php  } ?> 
                            <?php if($current_page == 'studentreport') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="studentreport-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'studentreport') { 
                              include "include/templates/editstudentreport.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 
                           
                            <?php if($current_page == 'castereport') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="castereport-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'castereport') { 
                              include "include/templates/editcastereport.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 

							<?php if($current_page == 'feemaster') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="feemaster-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'feemaster') { 
                              include "include/templates/editfeemaster.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                    <?php  } ?> 

                    <?php if($current_page == 'pendingfee') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="pendingfee-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'pendingfee') { 
                              include "include/templates/editpendingfee.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 

                              <?php if($current_page == 'feecollectionreport') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="feecollectionreport-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'feecollectionreport') { 
                              include "include/templates/editfeecollectionreport.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 
                            <?php if($current_page == 'feehistory') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="feehistory-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'feehistory') { 
                              include "include/templates/viewfeehistory.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 

                            <?php if($current_page == 'studentrollback') { ?>
                            <div class="tab-pane <?php if($msc==1){ echo "active"; }if($msc==2){ echo "active"; }if($msc==3){ echo "active"; } ?>" id="studentrollback-all">
                        <div class="card">
                            <div class="table-responsive">
                              <?php 
                              $current_page = isset($_GET['page']) ? $_GET['page'] : null; 
                               if($current_page == 'studentrollback') { 
                              include "include/templates/editstudentrollback.php";
                               }                             
                              ?>
                              </div>
                        </div>
                    </div>
                            <?php  } ?> 

                  
                  <?php
		 
         if($msc!=1){ 
            if($msc!=2){ 
                if($msc!=3){ 
                    if($current_page == 'feemaster') 
                    { 
                         include('include/templates/addfeemaster.php'); 
                    }
                     if($current_page == 'school') 
                     { 
		                  include('include/templates/addschool.php'); 
                     }
                     if($current_page == 'trust') 
                     { 
                          include('include/templates/addtrust.php'); 
                     }
                     if($current_page == 'holiday') 
                     { 
                          include('include/templates/addholiday.php'); 
                     }
                     if($current_page == 'subject') 
                     { 
                          include('include/templates/addsubject.php'); 
                     }
                     if($current_page == 'subjectgroup') 
                     { 
                          include('include/templates/addsubjectgroup.php'); 
                     }
                     if($current_page == 'staff') 
                     { 
                          include('include/templates/addstaffwizard.php'); 
                     }
                     if($current_page == 'student') 
                     { 
                          include('include/templates/addstudentwizard.php'); 
                     }
                     if($current_page == 'feecollection') 
                     { 
                          include('include/templates/addfeecollection.php'); 
                     }
                     if($current_page == 'staffwizard') 
                     { 
                          include('include/templates/addstaff.php'); 
                     }
                     if($current_page == 'dashboard') 
                     { 
                          include('include/templates/dashboard.php'); 
                     }
                      if($current_page == 'smsbirthday') 
                     { 
                          include('include/templates/addsmsbirthday.php'); 
                     }
                      if($current_page == 'generalsms') 
                     { 
                          include('include/templates/addgeneralsms.php'); 
                     }
                     if($current_page == 'remindersms') 
                     { 
                          include('include/templates/addpaymentreminder.php'); 
                     }
                     if($current_page == 'studentreport') 
                     { 
                          include('include/templates/addstudentreport.php'); 
                     }
                     if($current_page == 'pendingfee') 
                     { 
                          include('include/templates/addpendingfee.php'); 
                     }
                     if($current_page == 'castereport'){ 
                        include('include/templates/viewcastereport.php'); 
                     }
                     if($current_page == 'viewfeecollectionreport'){ 
                        include('include/templates/viewfeecollectionreport.php'); 
                     }     
                     if($current_page == 'feehistory'){ 
                        include('include/templates/viewfeehistory.php'); 
                     }          
                     if($current_page == 'studentrollback'){ 
                        include('include/templates/addstudentrollback.php'); 
                     }
                     if($current_page == 'bulkimport'){ 
                        include('include/templates/addbulkimport.php'); 
                     }             
    }
    }
}
        
       ?>
						
						
						
                    </div>
                </div>
            </div>
        </div>
     


    
        
<?php include "include/common/dashboardfooter.php";?>




<?php if($current_page == 'school') { ?>
<script src="./school.js"></script>

<?php } if($current_page == 'trust') { ?>
<script src="./trust.js"></script>
<?php }if($current_page == 'holiday') { ?>
<script src="./holiday.js"></script>
<?php }if($current_page == 'subject') { ?>
<script src="./subject.js"></script>
<?php }if($current_page == 'subjectgroup') { ?>
<script src="./subjectgroup.js"></script>
<?php }if($current_page == 'staff') { ?>
<script src="./staff.js"></script>
<?php }if($current_page == 'student') { ?>
<script src="./student.js"></script>
<?php }?>
<?php   if($current_page == 'staffwizard') { ?>
<script src="./staff.js"></script>
<?php }?>

<?php   if($current_page == 'smsbirthday') { ?>
<script src="./birthday.js"></script>
<?php }?>
<?php   if($current_page == 'generalsms') { ?>
<script src="./generalsms.js"></script>
<?php }?>
<?php   if($current_page == 'remindersms') { ?>
<script src="./remindersms.js"></script>
<?php }?>
<?php   if($current_page == 'castreport') { ?>
<script src="./castereport.js"></script>
<?php }?>
<?php   if($current_page == 'studentreport') { ?>
<script src="./studentreport.js"></script>
<?php }?>
<?php   if($current_page == 'feemaster') { ?>
<script src="./feemaster.js"></script>
<?php }?>
<?php   if($current_page == 'pendingfee') { ?>
<script src="./pendingfee.js"></script>
<?php }?>
<?php   if($current_page == 'feecollection') { ?>
<script src="./feecollection.js"></script>
<?php }?>
<?php   if($current_page == 'feehistory') { ?>
<script src="./feehistory.js"></script>
<?php }?>
<?php   if($current_page == 'studentrollback') { ?>
<script src="./studentrollback.js"></script>
<?php }?>
</body>
</html>
