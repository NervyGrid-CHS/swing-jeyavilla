<?php
// Database Connection
require("db_connection.php");
// get Users
$query = "SELECT * FROM newd";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}
$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
//fputcsv($output, array('Company Name','Street','City','State','Postal Code','Country','Email-ID','Website','Latitude','Longitude','Baked Goods','Cheese','Arts & Crafts','Flowers','Sea Foods','Fruits','Herbs','Vegetables','Honey','Jams','Maple','Meats','Nuts','Plants','Soap'));
if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
