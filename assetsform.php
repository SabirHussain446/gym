<?php
session_start();
$username=$_SESSION['username'];
$register_id= $_SESSION['register_id'];
$image=$_SESSION['image'];

if(isset($_SESSION['username'])){

}else{
    header("location: login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Basic Form </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>



    <?php include"aside.php" ?>
    <!-- /# sidebar -->

   <?php include"header.php" ?>






    <div class="content-wrap">
        <div class="">

                    <!-- /# row -->
                    <div class="">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Assets Form</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                            </div>


                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Purchase Date</label>
                                                <input type="date" name="purchase_date" class="form-control" placeholder="Enter purchase date">
                                            </div>

                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" class="form-control" placeholder="Enter your quantity">
                                            </div>

                                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    <!-- /# row -->


                
            </div>
        </div>
    </div>




     <?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];

$image = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$folder = "images/".$image;

    $purchase_date = $_POST['purchase_date'];
    $purchase_date = $_POST['purchase_date'];
    $quantity = $_POST['quantity'];
$conn = mysqli_connect('localhost', 'root', '', 'gym');
$query = mysqli_query($conn, "INSERT into assets(name, image, purchase_date, quantity) values('$name', '$image', '$purchase_date', '$quantity')");

if(move_uploaded_file($tmpname, $folder)){
    $msg = "image uploaded successfully";
}
else{
    $msg = "image not uploaded successfully";
}
echo $msg; 
}

     ?>



    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>