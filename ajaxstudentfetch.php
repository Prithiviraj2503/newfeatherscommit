<?php

include('ajaxconfig.php');

$column = array(
    'admissionno',
    'studentname',
    'surname',  
    'dateofbirth',
    'gender',
    'mothertongue', 
    'aadhaarcard',
    'bloodgroup',
    'category',   

    'caste',
    'subcaste', 
    'nationality',
    'region',
    'pflatnoname',  
    'pstreet', 

    'parealocality',
    'pdistrict', 
    'ppincode',
    'pcheck',
    'tflatnoname',  

    'tstreet',
    'tarealocality', 
    'tdistrict',
    'tpincode',
    'standard', 

    'medium',
    'section', 
    'rollnumber',
    'concessiontype',
    'concessionpercentage', 

    'facility',
    'areaofstudent', 
    'fathername',
    'fatheraadhaarnumber',
    'fatheroccupation', 

    'natureofjob',
    'telephone', 
    'fathermobile',
    'fatheremailid',

    'mothername',
    'motheraadhaarnumber',
    'monthlyincome',

    'positionheld',
    'liveswithguardian',
    'mothermobile',
    'smssentno',

    'siblingname',
    'siblingrefno',
    'siblingschoolname',
    'siblingstd',
	
	'extracurricular',	
    'status'
);

$query = "SELECT * FROM student where 1  ";


if($_POST['search']!="");
{
if (isset($_POST['search'])) {

	if($_POST['search']=="Active")
{
	$query .="and status=0 ";
	
}
else if($_POST['search']=="Inactive")
{
	$query .="and status=1 ";
}
else{	
   $query .= "
 and admissionno LIKE  '%".$_POST['search']."%'
 OR studentname LIKE '%".$_POST['search']."%'
 OR surname LIKE '%".$_POST['search']."%'
 OR dateofbirth LIKE '%".$_POST['search']."%'

 OR gender LIKE '%".$_POST['search']."%'
 OR mothertongue LIKE '%".$_POST['search']."%'
 OR aadhaarcard LIKE '%".$_POST['search']."%'

 OR bloodgroup LIKE '%".$_POST['search']."%'
 OR category LIKE '%".$_POST['search']."%'
 OR caste LIKE '%".$_POST['search']."%'

 OR subcaste LIKE '%".$_POST['search']."%'
 OR nationality LIKE '%".$_POST['search']."%'

 OR region LIKE '%".$_POST['search']."%'
 OR pflatnoname LIKE '%".$_POST['search']."%'
 OR pstreet LIKE '%".$_POST['search']."%'
 OR parealocality LIKE '%".$_POST['search']."%'
 OR pdistrict LIKE '%".$_POST['search']."%'
 OR ppincode LIKE '%".$_POST['search']."%'
 OR tflatnoname LIKE '%".$_POST['search']."%'

 OR tstreet LIKE '%".$_POST['search']."%'
 OR tarealocality LIKE '%".$_POST['search']."%'
 OR tdistrict LIKE '%".$_POST['search']."%'
 OR tpincode LIKE '%".$_POST['search']."%'
 OR standard LIKE '%".$_POST['search']."%'
 OR medium LIKE '%".$_POST['search']."%'
 OR section LIKE '%".$_POST['search']."%'
 OR rollnumber LIKE '%".$_POST['search']."%'

 OR concessiontype LIKE '%".$_POST['search']."%'
 OR concessionpercentage LIKE '%".$_POST['search']."%'
 OR facility LIKE '%".$_POST['search']."%'
 OR areaofstudent LIKE '%".$_POST['search']."%'
 OR fathername LIKE '%".$_POST['search']."%'
 OR fatheraadhaarnumber LIKE '%".$_POST['search']."%'
 OR fatheroccupation LIKE '%".$_POST['search']."%'
 OR natureofjob LIKE '%".$_POST['search']."%'

 OR telephone LIKE '%".$_POST['search']."%'
 OR fathermobile LIKE '%".$_POST['search']."%'
 OR fatheremailid LIKE '%".$_POST['search']."%'

 OR mothername LIKE '%".$_POST['search']."%'
 OR motheraadhaarnumber LIKE '%".$_POST['search']."%'
 OR monthlyincome LIKE '%".$_POST['search']."%'
 OR positionheld LIKE '%".$_POST['search']."%'
 OR mothermobile LIKE '%".$_POST['search']."%'
 OR smssentno LIKE '%".$_POST['search']."%'
 
 OR siblingname LIKE '%".$_POST['search']."%'
 OR siblingrefno LIKE '%".$_POST['search']."%'
 OR siblingschoolname LIKE '%".$_POST['search']."%' 
 OR siblingstd LIKE '%".$_POST['search']."%'
 OR extracurricular LIKE '%".$_POST['search']."%'
  
 
 ";
}
}
}

if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= ' ';
}

$query1 = '';

if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach ($result as $row) {
    $sub_array   = array();
    $sub_array[] = $row['admissionno'];
    $sub_array[] = $row['studentname'];
    $sub_array[] = $row['surname'];   

    $sub_array[] = $row['dateofbirth'];
    $sub_array[] = $row['gender'];
    $sub_array[] = $row['mothertongue']; 

    $sub_array[] = $row['aadhaarcard'];
    $sub_array[] = $row['bloodgroup'];
    $sub_array[] = $row['category']; 

    $sub_array[] = $row['caste'];
    $sub_array[] = $row['subcaste'];
    $sub_array[] = $row['nationality']; 

    $sub_array[] = $row['region'];
    $sub_array[] = $row['pflatnoname'];
    $sub_array[] = $row['pstreet']; 

    $sub_array[] = $row['parealocality'];
    $sub_array[] = $row['pdistrict'];
    $sub_array[] = $row['ppincode']; 

    $sub_array[] = $row['tflatnoname'];
    $sub_array[] = $row['tstreet'];
    $sub_array[] = $row['tarealocality']; 

    $sub_array[] = $row['tdistrict'];
    $sub_array[] = $row['tpincode'];
    $sub_array[] = $row['standard']; 

    $sub_array[] = $row['medium'];
    $sub_array[] = $row['section'];
    $sub_array[] = $row['rollnumber']; 

    $sub_array[] = $row['concessiontype'];
    $sub_array[] = $row['concessionpercentage'];
    $sub_array[] = $row['facility']; 

    $sub_array[] = $row['areaofstudent'];
    $sub_array[] = $row['fathername'];
    $sub_array[] = $row['fatheraadhaarnumber']; 
    $sub_array[] = $row['fatheroccupation'];
    $sub_array[] = $row['natureofjob']; 

    $sub_array[] = $row['telephone'];
    $sub_array[] = $row['fathermobile']; 
    $sub_array[] = $row['fatheremailid'];
    $sub_array[] = $row['mothername']; 

    $sub_array[] = $row['motheraadhaarnumber']; 
    $sub_array[] = $row['monthlyincome'];
    $sub_array[] = $row['positionheld']; 

    
    $sub_array[] = $row['mothermobile']; 
    $sub_array[] = $row['smssentno'];
    $sub_array[] = $row['siblingname']; 

    $sub_array[] = $row['siblingrefno']; 
    $sub_array[] = $row['siblingschoolname']; 
    $sub_array[] = $row['siblingstd']; 
    $sub_array[] = $row['extracurricular']; 
  
    $status      = $row['status'];

    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['studentid'];
	
	$action="<a href='student&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='student&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM student";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data' => $data
);

echo json_encode($output);

?>