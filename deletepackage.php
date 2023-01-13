<?php
$package_id = $_REQUEST['package_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from packages where package_id=$package_id");

header("location: packagetable.php");

?>