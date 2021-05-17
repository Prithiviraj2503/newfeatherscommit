<?php 
include('ajaxconfig.php');

if(isset($_POST['standard']))		
{	
$standard=$_POST['standard'];
}
if(isset($_POST['section']))		
{	
$section=$_POST['section'];
}

$query="SELECT rollnumber, studentname FROM student WHERE standard='".$standard."' AND section='".$section."' ";

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
$rollnumber     =  $data['rollnumber'];
$studentname    =  $data['studentname'];
?>

<table class="table table-bordered table-hover table-sm" id="studentrollbacktable">
<thead>
<tr>                                              
<th class="bg-azure text-light text-center"><label class="justify-content-center">Check</label></th>
<th class="bg-azure text-light text-center"><label class="justify-content-center">Roll Number</label></th>
<th class="bg-azure text-light text-center"><label class="justify-content-center">Student Name</label></th>
<th class="bg-azure text-light text-center"><label class="justify-content-center">Final Exam Result</label><th>  
</tr>
</thead>

<tbody class="p-0 m-0">
<tr>                                              
<td class="text-center "><input tabindex="49" id="checks" name="checks" type="checkbox" value="Yes" 
	<?php if(isset($checks)==0){echo'checked';}?>></td>

<td class="text-center "><input tabindex="21" type="text" name="rollnumber" readonly id="rollnumber" class="form-control" value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" placeholder="Enter Roll Number"> </td> 

<td class="text-center "><input tabindex="21" type="text" name="studentname" id="studentname" class="form-control" value="<?php if(isset($studentname)) echo $studentname; ?>" readonly placeholder="Enter Student Name"  ></td>

<td><select  name="result" id="result"  class="form-control" >
<option value="">Select The Final Result</option>
<option <?php if(isset($result)) { if($result == "pass" ) echo 'selected'; }  ?> value="pass">PASS</option>
<option <?php if(isset($result)) { if($result == "fail" ) echo 'selected'; }  ?> value="fail">FAIL</option>
</select>
</td>

</tr>
</tbody>
</table>

<?php } ?>
