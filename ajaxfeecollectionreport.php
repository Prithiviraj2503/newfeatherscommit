<?php 
include('ajaxconfig.php');

if(isset($_POST['academicyear']))		
{	
$academicyear=$_POST['academicyear'];
}

$query= "SELECT 
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='LKG' AND  academicyear='".$academicyear."') AS totallkgstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='UKG' AND  academicyear='".$academicyear."') AS totalukgstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='I'   AND  academicyear='".$academicyear."') AS totalIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='II'  AND  academicyear='".$academicyear."') AS totalIIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='III' AND  academicyear='".$academicyear."') AS totalIIIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='IV'  AND  academicyear='".$academicyear."') AS totalIVstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='V'   AND  academicyear='".$academicyear."') AS totalVstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='VI'  AND  academicyear='".$academicyear."') AS totalVIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='VII' AND  academicyear='".$academicyear."') AS totalVIIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='VIII' AND academicyear='".$academicyear."') AS totalVIIIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='IX'  AND  academicyear='".$academicyear."') AS totalIXstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='X'  AND   academicyear='".$academicyear."')  AS totalXstudents, 
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='XI' AND   academicyear='".$academicyear."')  AS totalXIstudents,
  (SELECT COUNT(feecollectid) FROM feescollection WHERE standard='XII' AND  academicyear='".$academicyear."') AS totalXIIstudents,

  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='LKG' AND academicyear='".$academicyear."') AS lkgstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='UKG' AND  academicyear='".$academicyear."') AS ukgstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='I' AND  academicyear='".$academicyear."')   AS Istudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='II' AND  academicyear='".$academicyear."')  AS IIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='III' AND  academicyear='".$academicyear."') AS IIIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='IV' AND academicyear='".$academicyear."')  AS IVstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='V' AND academicyear='".$academicyear."')   AS Vstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='VI' AND academicyear='".$academicyear."')  AS VIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='VII' AND  academicyear='".$academicyear."') AS VIIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='VIII' AND  academicyear='".$academicyear."')AS VIIIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='IX' AND  academicyear='".$academicyear."')  AS IXstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='X' AND  academicyear='".$academicyear."')   AS Xstudentsfee, 
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='XI' AND  academicyear='".$academicyear."')  AS XIstudentsfee,
  (SELECT SUM(finalfeecollected) FROM feescollection WHERE standard='XII' AND  academicyear='".$academicyear."') AS XIIstudentsfee,

  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='LKG' AND academicyear='".$academicyear."') AS lkgstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='UKG' AND academicyear='".$academicyear."') AS ukgstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='I' AND academicyear='".$academicyear."')   AS Istudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='II' AND academicyear='".$academicyear."')  AS IIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='III' AND academicyear='".$academicyear."') AS IIIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='IV' AND academicyear='".$academicyear."')  AS IVstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='V' AND academicyear='".$academicyear."')   AS Vstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='VI' AND academicyear='".$academicyear."')  AS VIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='VII' AND academicyear='".$academicyear."') AS VIIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='VIII' AND academicyear='".$academicyear."')AS VIIIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='IX' AND academicyear='".$academicyear."')  AS IXstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='X' AND academicyear='".$academicyear."')   AS Xstudentspaid, 
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='XI' AND academicyear='".$academicyear."')  AS XIstudentspaid,
  (SELECT SUM(totalfeecollected) FROM feescollection WHERE standard='XII' AND academicyear='".$academicyear."') AS XIIstudentspaid,

  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='LKG' AND academicyear='".$academicyear."') AS lkgstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='UKG' AND academicyear='".$academicyear."') AS ukgstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='I' AND academicyear='".$academicyear."')   AS Istudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='II' AND academicyear='".$academicyear."')  AS IIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='III' AND academicyear='".$academicyear."') AS IIIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='IV' AND academicyear='".$academicyear."')  AS IVstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='V' AND academicyear='".$academicyear."')   AS Vstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='VI' AND academicyear='".$academicyear."')  AS VIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='VII' AND academicyear='".$academicyear."') AS VIIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='VIII' AND academicyear='".$academicyear."')AS VIIIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='IX' AND academicyear='".$academicyear."')  AS IXstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='X' AND academicyear='".$academicyear."')   AS Xstudentsout, 
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='XI' AND academicyear='".$academicyear."')  AS XIstudentsout,
  (SELECT SUM(balancefeecollect) FROM feescollection WHERE standard='XII' AND academicyear='".$academicyear."') AS XIIstudentsout
  FROM feescollection WHERE  1";

if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}
$query1 = '';


$statement = $connect->prepare($query);
$statement->execute();
$number_filter_row = $statement->rowCount();
$statement = $connect->prepare($query . $query1);
$statement->execute();
$result = $statement->fetchAll();
$row = array();

foreach ($result as $data) { 
$totallkgstudents     =  $data['totallkgstudents'];
$totalukgstudents     =  $data['totalukgstudents'];
$totalIstudents       =  $data['totalIstudents'];
$totalIIstudents      =  $data['totalIIstudents'];
$totalIIIstudents     =  $data['totalIIIstudents'];
$totalIVstudents      =  $data['totalIVstudents'];
$totalVstudents       =  $data['totalVstudents'];
$totalVIstudents      =  $data['totalVIstudents'];
$totalVIIstudents     =  $data['totalVIIstudents'];
$totalVIIIstudents    =  $data['totalVIIIstudents'];
$totalIXstudents      =  $data['totalIXstudents'];
$totalXstudents       =  $data['totalXstudents'];
$totalXIstudents      =  $data['totalXIstudents'];
$totalXIIstudents     =  $data['totalXIIstudents'];
$totalstudents        =  $totallkgstudents + $totalukgstudents  + $totalIstudents  + $totalIIstudents +
                         $totalIIIstudents + $totalIVstudents   + $totalVstudents  + $totalVIstudents +
                         $totalVIIstudents + $totalVIIIstudents + $totalIXstudents + $totalXstudents  +
                         $totalXIstudents  + $totalXIIstudents;


$lkgstudentsfee     =  $data['lkgstudentsfee'];
$ukgstudentsfee     =  $data['ukgstudentsfee'];
$Istudentsfee       =  $data['Istudentsfee'];
$IIstudentsfee      =  $data['IIstudentsfee'];
$IIIstudentsfee     =  $data['IIIstudentsfee'];
$IVstudentsfee      =  $data['IVstudentsfee'];
$Vstudentsfee       =  $data['Vstudentsfee'];
$VIstudentsfee      =  $data['VIstudentsfee'];
$VIIstudentsfee     =  $data['VIIstudentsfee'];
$VIIIstudentsfee    =  $data['VIIIstudentsfee'];
$IXstudentsfee      =  $data['IXstudentsfee'];
$Xstudentsfee       =  $data['Xstudentsfee'];
$XIstudentsfee      =  $data['XIstudentsfee'];
$XIIstudentsfee     =  $data['XIIstudentsfee'];
$totalstudentsfee   =  $lkgstudentsfee + $ukgstudentsfee  + $Istudentsfee  + $IIstudentsfee +
                       $IIIstudentsfee + $IVstudentsfee   + $Vstudentsfee  + $VIstudentsfee +
                       $VIIstudentsfee + $VIIIstudentsfee + $IXstudentsfee + $Xstudentsfee  +
                       $XIstudentsfee  + $XIIstudentsfee;


$lkgstudentspaid     =  $data['lkgstudentspaid'];
$ukgstudentspaid     =  $data['ukgstudentspaid'];
$Istudentspaid       =  $data['Istudentspaid'];
$IIstudentspaid      =  $data['IIstudentspaid'];
$IIIstudentspaid     =  $data['IIIstudentspaid'];
$IVstudentspaid      =  $data['IVstudentspaid'];
$Vstudentspaid       =  $data['Vstudentspaid'];
$VIstudentspaid      =  $data['VIstudentspaid'];
$VIIstudentspaid     =  $data['VIIstudentspaid'];
$VIIIstudentspaid    =  $data['VIIIstudentspaid'];
$IXstudentspaid      =  $data['IXstudentspaid'];
$Xstudentspaid       =  $data['Xstudentspaid'];
$XIstudentspaid      =  $data['XIstudentspaid'];
$XIIstudentspaid     =  $data['XIIstudentspaid'];
$totalstudentspaid   =  $lkgstudentspaid  + $ukgstudentspaid  + $Istudentspaid  + $IIstudentspaid +
                        $IIIstudentspaid  + $IVstudentspaid   + $Vstudentspaid  + $VIstudentspaid +
                        $VIIstudentspaid  + $VIIIstudentspaid + $IXstudentspaid + $Xstudentspaid  +
                        $XIstudentspaid   + $XIIstudentspaid;


$lkgstudentsout     =  $data['lkgstudentsout'];
$ukgstudentsout     =  $data['ukgstudentsout'];
$Istudentsout       =  $data['Istudentsout'];
$IIstudentsout      =  $data['IIstudentsout'];
$IIIstudentsout     =  $data['IIIstudentsout'];
$IVstudentsout      =  $data['IVstudentsout'];
$Vstudentsout       =  $data['Vstudentsout'];
$VIstudentsout      =  $data['VIstudentsout'];
$VIIstudentsout     =  $data['VIIstudentsout'];
$VIIIstudentsout    =  $data['VIIIstudentsout'];
$IXstudentsout      =  $data['IXstudentsout'];
$Xstudentsout       =  $data['Xstudentsout'];
$XIstudentsout      =  $data['XIstudentsout'];
$XIIstudentsout     =  $data['XIIstudentsout'];
$totalstudentsout   =  $lkgstudentsout  + $ukgstudentsout  + $Istudentsout  + $IIstudentsout +
                       $IIIstudentsout  + $IVstudentsout   + $Vstudentsout  + $VIstudentsout +
                       $VIIstudentsout  + $VIIIstudentsout + $IXstudentsout + $Xstudentsout  +
                       $XIstudentsout   + $XIIstudentsout;


$lkgtotaltopay     =  $lkgstudentspaid  + $lkgstudentsout;
$ukgtotaltopay     =  $ukgstudentspaid  + $ukgstudentsout;
$Itotaltopay       =  $Istudentspaid    + $Istudentsout;
$IItotaltopay      =  $IIstudentspaid   + $IIstudentsout;
$IIItotaltopay     =  $IIIstudentspaid  + $IIIstudentsout;
$IVtotaltopay      =  $IVstudentspaid   + $IVstudentsout;
$Vtotaltopay       =  $Vstudentspaid    + $Vstudentsout;
$VItotaltopay      =  $VIstudentspaid   + $VIstudentsout;
$VIItotaltopay     =  $VIIstudentspaid  + $VIIstudentsout;
$VIIItotaltopay    =  $VIIIstudentspaid + $VIIIstudentsout;
$IXtotaltopay      =  $IXstudentspaid   + $IXstudentsout;
$Xtotaltopay       =  $Xstudentspaid    + $Xstudentsout;
$XItotaltopay      =  $XIstudentspaid   + $XIstudentsout;
$XIItotaltopay     =  $XIIstudentspaid  + $XIIstudentsout;

$totalstudentstopay=  $lkgtotaltopay + $ukgtotaltopay  + $Itotaltopay  + $IItotaltopay +
                      $IIItotaltopay + $IVtotaltopay   + $Vtotaltopay  + $VItotaltopay +
                      $VIItotaltopay + $VIIItotaltopay + $IXtotaltopay + $Xtotaltopay  +
                      $XItotaltopay  + $XIItotaltopay;
}

//chart

$chartqry="SELECT (SELECT COUNT(feecollectid) FROM feescollection WHERE  academicyear='".$academicyear."' AND balancefeecollect=0) AS fullpaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE academicyear='".$academicyear."' AND feecollected=0) AS notpaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE academicyear='".$academicyear."' AND (feecollected/finalfeecollected)*100>0  AND (feecollected/finalfeecollected)*100<=30) AS onepaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE academicyear='".$academicyear."' AND (feecollected/finalfeecollected)*100>30 AND (feecollected/finalfeecollected)*100<=60) AS twopaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE academicyear='".$academicyear."' AND (feecollected/finalfeecollected)*100>60 AND (feecollected/finalfeecollected)*100<=80) AS threepaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE academicyear='".$academicyear."' AND (feecollected/finalfeecollected)*100>80 AND (feecollected/finalfeecollected)*100<=95) AS fourpaidval
FROM feescollection WHERE 1";

$chartres =$connect->query($chartqry)or die("Error in Get All Records".$connect->error);

if (isset($_POST['order'])) {
    $chartqry .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $chartqry .= ' ';
}
$chartqry1 = '';


$statementch = $connect->prepare($chartqry);
$statementch->execute();
$number_filter_row = $statementch->rowCount();
$statementch = $connect->prepare($chartqry . $chartqry1);
$statementch->execute();
$chartresult = $statementch->fetchAll();
$row = array();


foreach ($chartresult as $chartrow) { 
$fullpaid=$chartrow["fullpaidval"];
$notpaid =$chartrow["notpaidval"];
$onepaid=$chartrow["onepaidval"];
$twopaid=$chartrow["twopaidval"];
$threepaid=$chartrow["threepaidval"];
$fourpaid=$chartrow["fourpaidval"];
}
?>                   

<div>
<div class="ml-4 mt-4">
<br>
<table class="table table-bordered" id="feecollectionreport_info">
                                                <thead class="text-center">
                                                    <tr>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Class</th>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Number Of Students In the Class</th>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Class Fee Per Student</th>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Amount Paid By Students</th>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Outstanding Summary</th>
                                                      <th scope="col"  rowspan="3" class="text-center font-weight-bold bg-azure">Total</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody class="text-center">

                                                    <tr>
                                                  <td scope="row" class="text-dark">LKG</td>
                                                  <td scope="row"   class="text-dark"><?php if(isset($totallkgstudents)!=0){ echo $totallkgstudents;}else{ echo "0";}?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($lkgstudentsfee)!=0){ echo $lkgstudentsfee; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($lkgstudentspaid)!=0){ echo $lkgstudentspaid; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($lkgstudentsout)!=0){ echo $lkgstudentsout; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($lkgtotaltopay)!=0){ echo $lkgtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                      <td scope="row" class="text-dark">UKG</td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($totalukgstudents)!=0){ echo $totalukgstudents; }else{ echo "0";} ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($ukgstudentsfee)!=0){ echo $ukgstudentsfee; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($ukgstudentspaid)!=0){ echo $ukgstudentspaid; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($ukgstudentsout)!=0){ echo $ukgstudentsout; }else{ echo "0";} ?></td>
                                                      <td scope="row"   class="text-dark"><?php if(isset($ukgtotaltopay)!=0){ echo $ukgtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">I</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalIstudents)!=0){ echo $totalIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($Istudentsfee)!=0){ echo $Istudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Istudentspaid)!=0){ echo $Istudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Istudentsout)!=0){ echo $Istudentsout; }else{ echo "0";}  ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Itotaltopay)!=0){ echo $Itotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">II</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalIIstudents)!=0){ echo $totalIIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($IIstudentsfee)!=0){ echo $IIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IIstudentspaid)!=0){ echo $IIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IIstudentsout)!=0){ echo $IIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IItotaltopay)!=0){ echo $IItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">III</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalIIIstudents)!=0){ echo $totalIIIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($IIIstudentsfee)!=0){ echo $IIIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IIIstudentspaid)!=0){ echo $IIIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IIIstudentsout)!=0){ echo $IIIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IIItotaltopay)!=0){ echo $IIItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">IV</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalIVstudents)!=0){ echo $totalIVstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($IVstudentsfee)!=0){ echo $IVstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IVstudentspaid)!=0){ echo $IVstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IVstudentsout)!=0){ echo $IVstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IVtotaltopay)!=0){ echo $IVtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">V</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalVstudents)!=0){ echo $totalVstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($Vstudentsfee)!=0){ echo $Vstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Vstudentspaid)!=0){ echo $Vstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IVstudentsout)!=0){ echo $IVstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"  class="text-dark"><?php if(isset($Vtotaltopay)!=0){ echo $Vtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">VI</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalVIstudents)!=0){ echo $totalVIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($VIstudentsfee)!=0){ echo $VIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIstudentspaid)!=0){ echo $VIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIstudentsout)!=0){ echo $VIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VItotaltopay)!=0){ echo $VItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">VII</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalVIIstudents)!=0){ echo $totalVIIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($VIIstudentsfee)!=0){ echo $VIIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIIstudentspaid)!=0){ echo $VIIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIIstudentsout)!=0){ echo $VIIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIItotaltopay)!=0){ echo $VIItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">VIII</td>
                                                     <td scope="row"   class="text-dark"><?php if(isset($totalVIIIstudents)!=0){ echo $totalVIIIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($VIIIstudentsfee)!=0){ echo $VIIIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIIIstudentspaid)!=0){ echo $VIIIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIIIstudentsout)!=0){ echo $VIIIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($VIIItotaltopay)!=0){ echo $VIIItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">IX</td>
                                                     <td scope="row"   class="text-dark"><?php if(isset($totalIXstudents)!=0){ echo $totalIXstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($IXstudentsfee)!=0){ echo $IXstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IXstudentspaid)!=0){ echo $IXstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IXstudentsout)!=0){ echo $IXstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($IXtotaltopay)!=0){ echo $IXtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">X</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalXstudents)!=0){ echo $totalXstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($Xstudentsfee)!=0){ echo $Xstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Xstudentspaid)!=0){ echo $Xstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Xstudentsout)!=0){ echo $Xstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($Xtotaltopay)!=0){ echo $Xtotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">XI</td>
                                                     <td scope="row"   class="text-dark"><?php if(isset($totalXIstudents)!=0){ echo $totalXIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($XIstudentsfee)!=0){ echo $XIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XIstudentspaid)!=0){ echo $XIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XIstudentsout)!=0){ echo $XIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XItotaltopay)!=0){ echo $XItotaltopay; }else{ echo "0";} ?></td>

                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">XII</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalXIIstudents)!=0){ echo $totalXIIstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($XIIstudentsfee)!=0){ echo $XIIstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XIIstudentspaid)!=0){ echo $XIIstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XIIstudentsout)!=0){ echo $XIIstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($XIItotaltopay)!=0){ echo $XIItotaltopay; }else{ echo "0";} ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td scope="row" class="text-dark">Total</td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalstudents)!=0){ echo $totalstudents; }else{ echo "0";} ?></td>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalstudentsfee)!=0){ echo $totalstudentsfee; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalstudentspaid)!=0){ echo $totalstudentspaid; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalstudentsout)!=0){ echo $totalstudentsout; }else{ echo "0";} ?></td>
                                                    <td scope="row"   class="text-dark"><?php if(isset($totalstudentstopay)!=0){ echo $totalstudentstopay; }else{ echo "0";} ?></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                          </div>

<script src="chartjs.js"></script>
<canvas id="bar-chart" width="200" height="100"></canvas>
<script>
  var notpaid   = <?php echo $notpaid; ?>;
  var fullpaid  = <?php echo $fullpaid;?>;
  var onepaid   = <?php echo $onepaid; ?>;
  var twopaid   = <?php echo $twopaid; ?>;
  var threepaid = <?php echo $threepaid;?>;
  var fourpaid =  <?php echo $fourpaid; ?>;
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Not Paid", "30% Paid", "60% Paid", "80% Paid","95% Paid","Paid Full Amount"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#FF0000","#8e5ea2","#00FFFF","#ff0066","#00ff00","#008000"],
          data: [notpaid, onepaid, twopaid, threepaid, fourpaid,fullpaid]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number Of Students'
      }
    }
});
</script>
</div>

<script>
    $('#feecollectionreport_info').DataTable( {
        dom: 'Bfrtip',
        buttons: [
    'excel', 'csv', {
                          extend: 'pdf',
                          
            },'copy', 'print', 
  ],"lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
  ]
    });
</script>
