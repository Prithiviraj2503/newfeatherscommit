<?php

include('ajaxconfig.php');

$column = array(
    'trustname',
    'pannumber',
    'tannumber',
    'flatno',
    'street',
    'area',
	'district',
    'pincode',  
    'status'
);

$query = "SELECT * FROM trust WHERE 1 ";

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
 and trustname LIKE  '%".$_POST['search']."%'
 OR pannumber LIKE '%".$_POST['search']."%'
 OR tannumber LIKE '%".$_POST['search']."%'
 OR flatno LIKE '%".$_POST['search']."%'
 OR street LIKE '%".$_POST['search']."%'
 OR area LIKE '%".$_POST['search']."%'
 OR district LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%' 
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
    $sub_array[] = $row['trustname'];
    $sub_array[] = $row['pannumber'];
    $sub_array[] = $row['tannumber'];
    $sub_array[] = $row['flatno'];
    $sub_array[] = $row['street'];
    $sub_array[] = $row['area'];
	$sub_array[] = $row['district'];
	$sub_array[] = $row['pincode'];
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['trustid'];
	
	$action="<a href='trust&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM trust";
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