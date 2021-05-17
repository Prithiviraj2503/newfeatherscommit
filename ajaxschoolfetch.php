<?php

include('ajaxconfig.php');

$column = array(
    'schoolname',
    'address1',
    'address2',
    'pincode',
    'landmark',
    'district',
	'state',
    'email',
    'website',
	'phonenumber',
    'landlinecode',
    'landlinenumber',
    'status'
);

$query = "SELECT * FROM school where 1  ";

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
 and schoolname LIKE  '%".$_POST['search']."%'
 OR address1 LIKE '%".$_POST['search']."%'
 OR address2 LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%'

 OR landmark LIKE '%".$_POST['search']."%'
 OR district LIKE '%".$_POST['search']."%'
 OR state LIKE '%".$_POST['search']."%'

 OR email LIKE '%".$_POST['search']."%'
 OR website LIKE '%".$_POST['search']."%'
 OR phonenumber LIKE '%".$_POST['search']."%'

 OR landlinecode LIKE '%".$_POST['search']."%'
 OR landlinenumber LIKE '%".$_POST['search']."%'
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
    $sub_array[] = $row['schoolname'];
    $sub_array[] = $row['address1'];
    $sub_array[] = $row['address2'];
    $sub_array[] = $row['pincode'];
    $sub_array[] = $row['landmark'];
    $sub_array[] = $row['district'];
	$sub_array[] = $row['state'];
	$sub_array[] = $row['email'];
	$sub_array[] = $row['website'];
	$sub_array[] = $row['phonenumber'];
	$sub_array[] = $row['landlinecode'];
	$sub_array[] = $row['landlinenumber'];	
    $status      = $row['status'];
    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['id'];
	
	$action="<a href='school&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='school&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM school";
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