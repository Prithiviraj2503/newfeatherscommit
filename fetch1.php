<?php
include('conn1.php');

$column = array(
    'titleNo',
    'title',
    'pann',
    'song',
    'thirumuraiId',
    'refId'
);

$query = "SELECT * FROM excelexport";

if (isset($_POST['search']['value'])) {
    $query .= '
  ';
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
    $sub_array[] = $row['titleNo'];
    $sub_array[] = $row['title'];
    $sub_array[] = $row['name'];
    $sub_array[] = $row['address'];
    $sub_array[] = $row['sId'];
    $sub_array[] = $row['refId'];
    $data[]      = $sub_array;
}

function count_all_data($connect)
{
    $query     = "SELECT * FROM excelexport";
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