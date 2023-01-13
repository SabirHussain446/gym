<?php 
session_start();
$username = $_SESSION['username'];
$register_id = $_SESSION['register_id'];
$image = $_SESSION['image'];

if(isset($_SESSION['username'])){

}else{
    header("location:login.php");
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
                                    <h4>Trainee Form</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                            </div>

                                            <div class="form-group">
                                                <label>Father Name</label>
                                                <input type="text" name="f_name" class="form-control" placeholder="Enter your father name">
                                            </div>

                                             <div class="form-group">
                                                <label>Add Your Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label>Gender</label><br>
                                                <input type="radio" name="gender" value="male">Male
                                                <input type="radio" name="gender" value="female">Female
                                            </div>
<hr>

                                          
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" name="age" class="form-control" placeholder="Enter your age">
                                            </div>


                                          
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Enter your address">
                                            </div>


                                          
                                            
<hr>
                                          
                                            <div class="form-group">
                                                <label>Plan</label> <br>
                                                <select name="plan_id">
                                                    <option>Select Plan</option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from plans");
                                                    while($data= mysqli_fetch_array($query)){
                                                        $plan_id = $data['plan_id'];
                                                        ?>
                                                        <option value="<?php echo $data['plan_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

<hr>
                                          
                                            <div class="form-group">
                                                <label>Package</label><br>
                                                <select name="package_id">
                                                    <option>Select Packages</option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from packages");
                                                    while($data = mysqli_fetch_array($query)){
                                                        $package_id= $data['package_id'];
                                                        ?>
                                                        <option value="<?php echo $data['package_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php
                                                    } 
                                                    ?>
                                                </select>
                                            </div>


<hr>
                                          
                   


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
    $f_name = $_POST['f_name'];
$image = $_FILES["image"]["name"];
$tmppics = $_FILES["image"]["tmp_name"];
$folder ="images/".$image;
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $plan_id = $_POST['plan_id'];
    $package_id = $_POST['package_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'gym');
    $query = mysqli_query($conn, "INSERT into trainee(name, f_name, image, gender, age, address, plan_id, package_id) values('$name', '$f_name', '$image', '$gender', '$age', '$address', '$plan_id', '$package_id')");

    if(move_uploaded_file($tmppics, $folder)){
            $msg="image uploaded successfully";
        }else{
            $msg ="image not uploaded successfully";
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