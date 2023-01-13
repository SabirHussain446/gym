<?php
$trainee_id = $_REQUEST['trainee_id'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "DELETE from trainee where trainee_id=$trainee_id");

header("location: traineetable.php");

?>