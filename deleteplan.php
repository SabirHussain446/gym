<?php
$plan_id = $_REQUEST['plan_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from plans where plan_id=$plan_id");

header("location: planstable.php");

?>