<?php

include('traineetable.php');

$trainee_id = $_GET['trainee_id'];
$status = $_GET['status'];

$q = "update trainee set status=$status where trainee_id=$trainee_id";

mysqli_query($conn, $q);

// header("location: traineetable.php");

?>