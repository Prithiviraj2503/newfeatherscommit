<?php

include('ajaxconfig.php');

$mysqli = mysqli_connect("localhost", "root", "", "featherschool") or die("Error in database connection".mysqli_error($mysqli));


if(isset($_GET['regnum']))		
{	
$regnum=$_GET['regnum'];
}
    $qry = "SELECT studentid, studentname FROM student WHERE rollnumber='".$regnum."' ";
    $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
    $row = mysqli_fetch_array($res);
    $studentid = $row["studentid"];
    $studentname = $row["studentname"];
    $result = array($studentid, $studentname);
    $myJSON = json_encode($result);
    echo $myJSON;
?>