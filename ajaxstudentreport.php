<?php

include('ajaxconfig.php');

$column = array(
    'studentname',
    'rollnumber',
    'standard',
    'section', 

    'reportfrom',
    'reportto',

    'workingdays',
    'absent',
    'attendancepercent',

    'perattendance',
    'perpunctuality',
    'perdiscipline',
    'perattitude',
    'percommunication',
    'perclassparticipation',
    'percapability',
    'perskill',

    'test1name',
    'test1marks',
    'test2name',
    'test2marks',
    'test3name',
    'test3marks',
    'test4name',
    'test4marks',
    
    'reportcomments',
    'status'

   
);

$query = "SELECT * FROM studentreport WHERE 1 ";


if(isset($_POST['search'])!="");
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
 and studentname LIKE  '%".$_POST['search']."%'
 OR rollnumber LIKE '%".$_POST['search']."%'
 OR standard LIKE '%".$_POST['search']."%'
 OR section LIKE '%".$_POST['search']."%'

 OR reportfrom LIKE '%".$_POST['search']."%'
 OR reportto LIKE '%".$_POST['search']."%'

 OR workingdays LIKE '%".$_POST['search']."%'
 OR absent LIKE '%".$_POST['search']."%'
 OR attendancepercent LIKE '%".$_POST['search']."%'

 OR perattendance LIKE '%".$_POST['search']."%'
 OR perpunctuality LIKE '%".$_POST['search']."%'
 OR perdiscipline LIKE '%".$_POST['search']."%'
 OR perattitude LIKE '%".$_POST['search']."%'
 OR percommunication LIKE '%".$_POST['search']."%'
 OR perclassparticipation LIKE '%".$_POST['search']."%'
 OR percapability LIKE '%".$_POST['search']."%'
 OR perskill LIKE '%".$_POST['search']."%'

 OR test1name LIKE '%".$_POST['search']."%'
 OR test1marks LIKE '%".$_POST['search']."%'
 OR test2name LIKE '%".$_POST['search']."%'
 OR test2marks LIKE '%".$_POST['search']."%'
 OR test3name LIKE '%".$_POST['search']."%'
 OR test3marks LIKE '%".$_POST['search']."%'
 OR test4name LIKE '%".$_POST['search']."%'
 OR test4marks LIKE '%".$_POST['search']."%'

 OR reportcomments LIKE '%".$_POST['search']."%'
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

if (isset($_POST['length']) != -1) {
    $query1 = 'LIMIT ' . isset($_POST['start']) . ', ' . isset($_POST['length']);
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
    $sub_array[] = $row['studentname'];
    $sub_array[] = $row['rollnumber'];
    $sub_array[] = $row['standard'];
    $sub_array[] = $row['section'];   

    $sub_array[] = $row['reportfrom'];
    $sub_array[] = $row['reportto'];

    $sub_array[] = $row['workingdays'];
    $sub_array[] = $row['absent'];  
    $sub_array[] = $row['attendancepercent'];

    $sub_array[] = $row['perattendance'];
    $sub_array[] = $row['perpunctuality'];
    $sub_array[] = $row['perdiscipline'];  
    $sub_array[] = $row['perattitude'];
    $sub_array[] = $row['percommunication'];
    $sub_array[] = $row['perclassparticipation'];
    $sub_array[] = $row['percapability'];  
    $sub_array[] = $row['perskill']; 

    $sub_array[] = $row['test1name']; 
    $sub_array[] = $row['test1marks']; 
    $sub_array[] = $row['test2name']; 
    $sub_array[] = $row['test2marks']; 
    $sub_array[] = $row['test3name']; 
    $sub_array[] = $row['test3marks']; 
    $sub_array[] = $row['test4name']; 
    $sub_array[] = $row['test4marks']; 
 
    $sub_array[] = $row['reportcomments']; 


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
	
	$action="<a href='studentreport&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='studentreport&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM studentreport";
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