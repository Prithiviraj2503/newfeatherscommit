<?php

include('ajaxconfig.php');

$column = array(
'receiptnumber', 
'registernumber', 
'studentid', 
'receiptdate', 
'academicyear', 
'standard', 
'otherchanges', 
'otherfeesreceived', 
'totalfeecollected', 
'finalfeecollected', 
'feecollected', 
'balancefeecollect', 
'status'
);

$query = "SELECT * FROM feescollection  WHERE 1 ";


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
 and receiptnumber LIKE  '%".$_POST['search']."%'
 OR  registernumber LIKE '%".$_POST['search']."%'
 OR  studentid LIKE '%".$_POST['search']."%'
 OR  receiptdate LIKE '%".$_POST['search']."%'
 OR  academicyear LIKE '%".$_POST['search']."%'
 OR  standard LIKE '%".$_POST['search']."%'
 OR  otherchanges LIKE '%".$_POST['search']."%'
 OR  otherfeesreceived LIKE '%".$_POST['search']."%'
 OR  totalfeecollected LIKE '%".$_POST['search']."%'
 OR  finalfeecollected LIKE '%".$_POST['search']."%'
 OR  feecollected LIKE '%".$_POST['search']."%'
 OR  balancefeecollect LIKE '%".$_POST['search']."%'
 OR  status LIKE '%".$_POST['search']."%'
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
    $sub_array[] = $row['receiptnumber'];
    $sub_array[] = $row['registernumber'];
    $sub_array[] = $row['studentid'];   
    $sub_array[] = $row['receiptdate'];
    $sub_array[] = $row['academicyear'];
    $sub_array[] = $row['standard'];
    $sub_array[] = $row['otherchanges'];   
    $sub_array[] = $row['otherfeesreceived'];
    $sub_array[] = $row['totalfeecollected'];
    $sub_array[] = $row['finalfeecollected'];
    $sub_array[] = $row['feecollected'];   
    $sub_array[] = $row['balancefeecollect'];
    $status      = $row['status'];

    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
    
	$id          = $row['feecollectid'];
	
	$action="<a href='feecollection&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='feecollection&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM feescollection";
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