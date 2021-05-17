<style>
 /* reset our lists to remove bullet points and padding */
.metismenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.metismenu a {
  display: block;
  background-color: #17468f;
  text-decoration: none;
  padding: 10px;
  color: #17468f;
}

/* add hover behaviour */
.metismenu a:hover {
    background-color: #17468f;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.metismenu li:hover .submenu {
  display: block;
  max-height: 200px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color: #17468f;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: #17468f;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}
</style>
<!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Feather<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        
        
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">

                        <li><a href="dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>   
                        <li><a href="javascript:void(0);"><i class="fa fa-user"></i><span>Admin</span></a>
                        <ul class="submenu">
                          <li><a href="trust"><i class="fa fa-handshake-o"></i>Trust Creation</a></li>
                          <li><a href="school"><i class="fa fa-bank"></i>School Creation</a></li>
                          <li><a href="javascript:void(0);"><i class="fa fa-drivers-license"></i>Manage User</a></li>
                        </ul>
                      </li>

                        <li><a href="javascript:void(0);"><i class="fa fa-black-tie"></i><span>Master</span></a>
                        <ul class="submenu">
                          <li><a href="feemaster"><i class="fa fa-credit-card"></i>Fee Master</a></li>  
                          <li><a href="subject"><i class="fa fa-book"></i> Subject Master</a></li>
                          <li><a href="subjectgroup"><i class="fa fa-book"></i> Subject Group</a></li>
                          <li><a href="staff"><i class="fa fa-address-book"></i> Staff Master</a></li>
                          <li><a href="holiday"><i class=" fa fa-suitcase"></i> Holiday Info</a></li>
                        </ul>
                      </li>

                      <li><a href="javascript:void(0);"><i class="fa fa-users"></i><span>Student</span></a>
                        <ul class="submenu">
                          <li><a href="student"><i class="fa fa-user-plus"></i>Create Student</a></li>
                        <!--  <li><a href="student"><i class="fa fa-address-book-o"></i>Student List</a></li>-->
                          <li><a href="javascript:void(0);"><i class=" fa fa-vcard-o"></i>Certificate</a></li>
                          <li><a href="studentrollback"><i class=" fa fa-pencil-square-o"></i>Student Roll Back</a></li>
                          <li><a href="bulkimport"><i class=" fa fa-upload"></i>Bulk Import</a></li>
                           <!--  <li><a href="javascript:void(0);"><i class=" fa fa-user-times"></i>Delete Student</a></li>-->
                        </ul>
                      </li>

                      <li><a href="javascript:void(0);"><i class="fa fa-money"></i><span>Billing</span></a>
                        <ul class="submenu">
                          <li><a href="feecollection"><i class="fa fa-inr"></i>Fees Collection</a></li>
                          <li><a href="feehistory"><i class="fa fa-wpforms"></i>History</a></li>
                        </ul>
                      </li>

                      <li><a href="javascript:void(0);"><i class="fa fa-envelope-open"></i><span>SMS</span></a>
                        <ul class="submenu">
                          <li><a href="smsbirthday"><i class="fa fa-birthday-cake"></i>Birthday Wishes</a></li>
                          <li><a href="generalsms"><i class="fa fa-commenting-o"></i>General Message</a></li>
                          <li><a href="remindersms"><i class="fa fa-bell-o"></i>Payment Reminder</a></li>
                        </ul>
                      </li>

                      <li><a href="javascript:void(0);"><i class="fa fa-newspaper-o"></i><span>Reports</span></a>
                        <ul class="submenu">
                          <li><a href="studentreport"><i class="fa fa-users"></i>Student Report</a></li>
                          <li><a href="castereport"><i class=" fa fa-drivers-license"></i>Caste Report</a></li>
                          <li><a href="pendingfee"><i class=" fa fa-cc-amex"></i>Pending Fee</a></li>
                          <li><a href="feecollectionreport"><i class="fa fa-edit"></i>Collection Report</a></li>
                        </ul>
                      </li>
           
          
                    </ul> 
                </nav>
            </div>
        </div>
    </div>
