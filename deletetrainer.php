<?php
$trainer_id = $_REQUEST['trainer_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from trainers where trainer_id=$trainer_id");

header("location: trainertable.php");

?>