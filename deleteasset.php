<?php
$asset_id = $_REQUEST['asset_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from assets where asset_id=$asset_id");

header("location: assetstable.php");

?>