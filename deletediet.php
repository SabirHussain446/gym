<?php
$diet_id = $_REQUEST['diet_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from diet where diet_id=$diet_id");

header("location: diettable.php");

?>