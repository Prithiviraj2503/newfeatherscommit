<?php

include('ajaxconfig.php');

$column = array(
    'firstname',
    'middlename',
    'lastname',  
    'employeenumber',
    'gender',
    'bloodgroup', 
    'staffroll',
    'qualification',
    'email',   

    'pan',
    'pfnumber', 
    'contactnumber',
    'dateofjoining',
    'appointmentletter',  
    'aadhaarnumber', 

    'emergencycontactperson',
    'emergencycontactnumber', 
    'transportation',
    'flatno',
    'area',  

    'district',
    'pincode', 
    'bankname',
    'accountnumber',
    'branch', 

    'ifsccode',
    'staffpath', 
    'basicpay',
    'detection',
    'detectionamount', 

    'hra',
    'grosspay', 
    'netamount',
    'transportallowance',
    'medicalallowance', 

    'specialpay',
    'title1', 
    'name1',
    'issuedby1',

    'title2',
    'name2',
    'issuedby2',

    'title3',
    'name3',
    'issuedby3',
    'documentpath',

    'status'
);

$query = "SELECT * FROM staff where 1  ";


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
 and firstname LIKE  '%".$_POST['search']."%'
 OR middlename LIKE '%".$_POST['search']."%'
 OR lastname LIKE '%".$_POST['search']."%'
 OR employeenumber LIKE '%".$_POST['search']."%'

 OR gender LIKE '%".$_POST['search']."%'
 OR bloodgroup LIKE '%".$_POST['search']."%'
 OR staffroll LIKE '%".$_POST['search']."%'

 OR qualification LIKE '%".$_POST['search']."%'
 OR email LIKE '%".$_POST['search']."%'
 OR pan LIKE '%".$_POST['search']."%'

 OR pfnumber LIKE '%".$_POST['search']."%'
 OR contactnumber LIKE '%".$_POST['search']."%'

 OR dateofjoining LIKE '%".$_POST['search']."%'
 OR appointmentletter LIKE '%".$_POST['search']."%'
 OR aadhaarnumber LIKE '%".$_POST['search']."%'
 OR emergencycontactperson LIKE '%".$_POST['search']."%'
 OR emergencycontactnumber LIKE '%".$_POST['search']."%'
 OR transportation LIKE '%".$_POST['search']."%'
 OR flatno LIKE '%".$_POST['search']."%'
 OR area LIKE '%".$_POST['search']."%'

 OR district LIKE '%".$_POST['search']."%'
 OR pincode LIKE '%".$_POST['search']."%'
 OR bankname LIKE '%".$_POST['search']."%'
 OR accountnumber LIKE '%".$_POST['search']."%'
 OR branch LIKE '%".$_POST['search']."%'
 OR ifsccode LIKE '%".$_POST['search']."%'
 OR staffpath LIKE '%".$_POST['search']."%'
 OR basicpay LIKE '%".$_POST['search']."%'

 OR detection LIKE '%".$_POST['search']."%'
 OR detectionamount LIKE '%".$_POST['search']."%'
 OR hra LIKE '%".$_POST['search']."%'
 OR grosspay LIKE '%".$_POST['search']."%'
 OR netamount LIKE '%".$_POST['search']."%'
 OR transportallowance LIKE '%".$_POST['search']."%'
 OR medicalallowance LIKE '%".$_POST['search']."%'
 OR specialpay LIKE '%".$_POST['search']."%'

 OR title1 LIKE '%".$_POST['search']."%'
 OR name1 LIKE '%".$_POST['search']."%'
 OR issuedby1 LIKE '%".$_POST['search']."%'
 OR title2 LIKE '%".$_POST['search']."%'
 OR name2 LIKE '%".$_POST['search']."%'
 OR issuedby2 LIKE '%".$_POST['search']."%'
 OR title3 LIKE '%".$_POST['search']."%'
 OR name3 LIKE '%".$_POST['search']."%'
 OR issuedby3 LIKE '%".$_POST['search']."%'
 OR documentpath LIKE '%".$_POST['search']."%'

 
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
    $sub_array[] = $row['firstname'];
    $sub_array[] = $row['middlename'];
    $sub_array[] = $row['lastname'];   

    $sub_array[] = $row['employeenumber'];
    $sub_array[] = $row['gender'];
    $sub_array[] = $row['bloodgroup']; 

    $sub_array[] = $row['staffroll'];
    $sub_array[] = $row['qualification'];
    $sub_array[] = $row['email']; 

    $sub_array[] = $row['pan'];
    $sub_array[] = $row['pfnumber'];
    $sub_array[] = $row['contactnumber']; 

    $sub_array[] = $row['dateofjoining'];
    $sub_array[] = $row['appointmentletter'];
    $sub_array[] = $row['aadhaarnumber']; 

    $sub_array[] = $row['emergencycontactperson'];
    $sub_array[] = $row['emergencycontactnumber'];
    $sub_array[] = $row['transportation']; 

    $sub_array[] = $row['flatno'];
    $sub_array[] = $row['area'];
    $sub_array[] = $row['district']; 

    $sub_array[] = $row['pincode'];
    $sub_array[] = $row['bankname'];
    $sub_array[] = $row['accountnumber']; 

    $sub_array[] = $row['branch'];
    $sub_array[] = $row['ifsccode'];
    $sub_array[] = $row['staffpath']; 

    $sub_array[] = $row['basicpay'];
    $sub_array[] = $row['detection'];
    $sub_array[] = $row['detectionamount']; 

    $sub_array[] = $row['hra'];
    $sub_array[] = $row['grosspay'];
    $sub_array[] = $row['netamount']; 
    $sub_array[] = $row['transportallowance'];
    $sub_array[] = $row['medicalallowance']; 

    $sub_array[] = $row['specialpay'];
    $sub_array[] = $row['title1']; 
    $sub_array[] = $row['name1'];
    $sub_array[] = $row['issuedby1']; 

    $sub_array[] = $row['title2']; 
    $sub_array[] = $row['name2'];
    $sub_array[] = $row['issuedby2']; 

    
    $sub_array[] = $row['title3']; 
    $sub_array[] = $row['name3'];
    $sub_array[] = $row['issuedby3']; 

    $sub_array[] = $row['documentpath']; 

    $status      = $row['status'];

    if($status==1)
	{
	$sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill'>Inactive</span></span>";
	}
	else
	{
    $sub_array[]="<span style='width: 144px;'><span class='kt-badge  kt-badge--success kt-badge--inline kt-badge--pill'>Active</span></span>";
	}
	$id          = $row['staffid'];
	
	$action="<a href='staff&upd=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm' title='Edit'><i class='fa fa-edit'></i></button></a>
	<a href='staff&del=$id' title='Edit details'><button type='button' class='btn btn-icon btn-sm js-sweetalert' title='Delete' data-type='confirm'><i class='fa fa-trash-o text-danger'></i></button></a>";

	
	$sub_array[] = $action;
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM staff";
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