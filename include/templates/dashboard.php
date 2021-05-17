<?php
//Student Count
$chartstudent="SELECT 
(SELECT COUNT(studentid) FROM student WHERE standard='LKG') AS totallkg,
(SELECT COUNT(studentid) FROM student WHERE standard='UKG') AS totalukg,
(SELECT COUNT(studentid) FROM student WHERE standard='I') AS totalI,
(SELECT COUNT(studentid) FROM student WHERE standard='II') AS totalII,
(SELECT COUNT(studentid) FROM student WHERE standard='III') AS totalIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IV') AS totalIV,
(SELECT COUNT(studentid) FROM student WHERE standard='V') AS totalV,
(SELECT COUNT(studentid) FROM student WHERE standard='VI') AS totalVI,
(SELECT COUNT(studentid) FROM student WHERE standard='VII') AS totalVII,
(SELECT COUNT(studentid) FROM student WHERE standard='VIII') AS totalVIII,
(SELECT COUNT(studentid) FROM student WHERE standard='IX') AS totalIX,
(SELECT COUNT(studentid) FROM student WHERE standard='X') AS totalX,
(SELECT COUNT(studentid) FROM student WHERE standard='XI') AS totalXI,
(SELECT COUNT(studentid) FROM student WHERE standard='XII') AS totalXII,
(SELECT COUNT(studentid) FROM student WHERE gender='Male') AS totalboys,
(SELECT COUNT(studentid) FROM student WHERE gender='Female') AS totalgirls,
(SELECT COUNT(studentid) FROM student WHERE medium='Tamil') AS tamilstudents,
(SELECT COUNT(studentid) FROM student WHERE medium='English') AS englishstudents,
(SELECT COUNT(studentid) FROM student) AS totalstudents
FROM student WHERE 1";

$studentres =$mysqli->query($chartstudent)or die("Error in Get All Records".$mysqli->error);

if($studentres->num_rows > 0) {
while($row = $studentres->fetch_assoc()){
$totallkg      =$row["totallkg"];
$totalukg      =$row["totalukg"];
$totalI        =$row["totalI"];
$totalII       =$row["totalII"];
$totalIII      =$row["totalIII"];
$totalIV       =$row["totalIV"];
$totalV        =$row["totalV"];
$totalVI       =$row["totalVI"];
$totalVII      =$row["totalVII"];
$totalVIII     =$row["totalVIII"];
$totalIX       =$row["totalIX"];
$totalX        =$row["totalX"];
$totalXI       =$row["totalXI"];
$totalXII      =$row["totalXII"];
$totalboys     =$row["totalboys"];
$totalgirls    =$row["totalgirls"];
$tamilstudents  =$row["tamilstudents"];
$englishstudents   =$row["englishstudents"];
$totalstudents   =$row["totalstudents"];
}
}

//Staff Count
$staffchart="SELECT
(SELECT COUNT(staffid) FROM staff) AS totalstaff,
(SELECT COUNT(staffid) FROM staff WHERE gender='Male') AS totalmalestaff,
(SELECT COUNT(staffid) FROM staff WHERE gender='FeMale') AS totalfemalestaff
FROM staff WHERE 1";

$staffres =$mysqli->query($staffchart)or die("Error in Get All Records".$mysqli->error);

if($staffres->num_rows > 0) {
while($row = $staffres->fetch_assoc()){
$totalstaff       =$row["totalstaff"];
$totalmalestaff   =$row["totalmalestaff"];
$totalfemalestaff =$row["totalfemalestaff"];
}
}

//subjects
$subjectchart="SELECT 
(SELECT DISTINCT(COUNT(subject)) FROM subject) AS totalsub
FROM subject WHERE 1";

$subres =$mysqli->query($subjectchart)or die("Error in Get All Records".$mysqli->error);

if($subres->num_rows > 0) {
while($row = $subres->fetch_assoc()){
$totalsub      =$row["totalsub"];
}
}

//pending fee
$pendingfeechart="SELECT 
(SELECT COUNT(feecollectid) FROM feescollection WHERE balancefeecollect!=0) AS totalpendingfee
FROM feescollection WHERE 1";

$pendingfeeres =$mysqli->query($pendingfeechart)or die("Error in Get All Records".$mysqli->error);

if($pendingfeeres->num_rows > 0) {
while($row = $pendingfeeres->fetch_assoc()){
$totalpendingfee      =$row["totalpendingfee"];
}
}

//pending fee
$trustchart="SELECT 
(SELECT COUNT(trustid) FROM trust) AS totaltrust
FROM trust WHERE 1";

$trustres =$mysqli->query($trustchart)or die("Error in Get All Records".$mysqli->error);

if($trustres->num_rows > 0) {
while($row = $trustres->fetch_assoc()){
$totaltrust      =$row["totaltrust"];
}
}

//Leave
$currentdate=date("m-d-Y");
$leavequery="SELECT description, holidaystartdate  FROM holiday WHERE holidaystartdate>'".$currentdate."' ";

$leaves =$mysqli->query($leavequery)or die("Error in Get All Records".$mysqli->error);

if($leaves->num_rows > 0) {
 while($row = $leaves->fetch_array()){
    $holidaydesc[]=$row["description"];
    $holidaydate[]=$row["holidaystartdate"];
}
} 
?>

<head>
<style>
.idash{
    color:blue;
}
.adash:hover{
    border-bottom: 5px solid #ff00ff; 
}
.dashcounter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
    border: 2px solid gray;
    box-shadow: 2px 2px 2px 2px silver;
}
.count-text{
    font-weight: bold;
}


</style>
</head>
<!-- Start Page title and tab -->
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Feather</a></li>                          
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
<br />
<div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="staff" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-black-tie"></i>
                                    <span>Staff</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="student" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-users"></i>
                                    <span>Student</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="feemaster" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-credit-card"></i>
                                    <span>Fee master</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="subjectgroup" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-book"></i>
                                    <span>Subject</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="manageuser" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-drivers-license"></i>
                                    <span>Manage user</span>
                                </a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="holiday" class="adash my_sort_cut text-muted">
                                    <i class="idash fa fa-bullhorn"></i>
                                    <span>Holiday</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<div class="card">
<div class="card-body">
<div class="row">    
<div class="col-md-6">    
<canvas id="totalstudentschart" width="100%" height="50%"></canvas>
<script src="chartjs.js"></script>
<script>
    var totallkg   = <?php if(isset($totallkg)){echo $totallkg; } ?>;
    var totalukg   = <?php if(isset($totalukg)){echo $totalukg; } ?>;
    var totalI     = <?php if(isset($totalI)){echo $totalI; } ?>;
    var totalII    = <?php if(isset($totalII)){echo $totalII; } ?>;
    var totalIII   = <?php if(isset($totalIII)){echo $totalIII; } ?>;
    var totalIV    = <?php if(isset($totalIV)){echo $totalIV; } ?>;
    var totalV     = <?php if(isset($totalV)){echo $totalV; } ?>;
    var totalVI    = <?php if(isset($totalVI)){echo $totalVI; } ?>;
    var totalVII   = <?php if(isset($totalVII)){echo $totalVII; } ?>;
    var totalVIII  = <?php if(isset($totalVIII)){echo $totalVIII; }?>;
    var totalIX    = <?php if(isset($totalXI)){echo $totalXI; } ?>;
    var totalX     = <?php if(isset($totalX)){echo $totalX; } ?>;
    var totalXI    = <?php if(isset($totalXI)){echo $totalXI; } ?>;
    var totalXII   = <?php if(isset($totalXII)){echo $totalXII; }?>; 

new Chart(document.getElementById("totalstudentschart"), {
    type: 'bar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [totallkg, totalukg, totalI, totalII, totalIII, totalIV, totalV, totalVI, totalVII, totalVIII, totalIX, totalX, totalXI, totalXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number Of Students'
      },

    }
});
</script>
</div>

<div class="col-md-5">
<canvas id="genderratio" width="100%" height="65%"></canvas>
<script src="chartjs.js"></script>
<script>
    var totalboys   = <?php if(isset($totalboys)){echo $totalboys; } ?>;
    var totalgirls  = <?php if(isset($totalgirls)){echo $totalgirls; } ?>;
new Chart(document.getElementById("genderratio"), {
    type: 'pie',
    data: {
      labels: ["Male","Female","Others"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#73e600", "#ff1a75","#0099ff"],
          data: [totalboys, totalgirls]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Student Gender Radio'
      },
    }
});
</script>
</div>
<div class="col-md-1">
<p style="background-color:#73e600; font-weight:bold;color:white;text-align: center">M</p>
<p style="background-color:#ff1a75; font-weight:bold;color:white;text-align: center">F</p>
<p style="background-color:#0099ff; font-weight:bold;color:white;text-align: center">O</p>
</div>
</div>

<div class="row">
<div class="col-md-6">
<canvas id="totalstaffschart" width="100%" height="50%"></canvas>
<script src="chartjs.js"></script>
<script>
    var totalmalestaff   = <?php if(isset($totalmalestaff)){echo $totalmalestaff; } ?>;
    var totalfemalestaff  = <?php if(isset($totalfemalestaff)){echo $totalfemalestaff; } ?>;
new Chart(document.getElementById("totalstaffschart"), {
    type: 'horizontalBar',
    data: {
      labels: ["Male","Female","Others"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#cc3399", "#ff9900",""],
          data: [totalmalestaff,totalfemalestaff,0]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number Of Staffs'
      },

    }
});
</script>
</div>

<div class="col-md-5">
<canvas id="mediumratio" width="100%" height="65%"></canvas>
<script src="chartjs.js"></script>
<script>
    var tamilstudents   = <?php if(isset($tamilstudents)){echo $tamilstudents; } ?>;
    var englishstudents  = <?php if(isset($englishstudents)){echo $englishstudents; } ?>;
new Chart(document.getElementById("mediumratio"), {
    type: 'doughnut',
    data: {
      labels: ["English","Tamil","Others"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#3e95cd", "#e60000","#ffcc00"],
          data: [englishstudents, tamilstudents,0]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Medium Radio'
      },
    }
});
</script>
</div>
<div class="col-md-1">
<p style="background-color:#3e95cd; font-weight:bold;color:white;text-align: center">E</p>
<p style="background-color:#e60000; font-weight:bold;color:white;text-align: center">T</p>
<p style="background-color:#ffcc00; font-weight:bold;color:white;text-align: center">O</p>
</div>
</div>

</div>
</div>

<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <div class="row text-center">

            <div class="col">
            <div class="dashcounter">
            <h2 class="count-text"><?php if(isset($totalstudents)){ echo $totalstudents;}?></h2>
            <p class="count-text">Students</p>
            </div>
            </div>

            <div class="col">
            <div class="dashcounter">
            <h2  class="count-text"><?php if(isset($totalstaff)){ echo $totalstaff;}?></h2>
            <p class="count-text">Teaching Staffs</p>
            </div>
            </div>

            <div class="col">
            <div class="dashcounter">
            <h2  class="count-text"><?php if(isset($totalsub)){ echo $totalsub;}?></h2>
            <p class="count-text">Subjects</p>
            </div>
            </div>

            <div class="col">
            <div class="dashcounter">
            <h2  class="count-text"><?php if(isset($totalpendingfee)){ echo $totalpendingfee;}?></h2>
            <p  class="count-text">Pending fee</p>
            </div>
            </div>

            <div class="col">
            <div class="dashcounter">
            <h2  class="count-text"><?php if(isset($totaltrust)){ echo $totaltrust;}?></h2>
            <p   class="count-text">Trusts</p>
            </div>
            </div>

        </div>

</div>
</div>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-3">
        <h5 class="count-text">Upcomming Holidays</h5>
        <p>
        <?php
            foreach($holidaydesc as $leavedesc){
                echo $leavedesc."<br>";
            }
            ?> 
        </p>
    </div>
</div>

</div>
</div>
</div>

   

