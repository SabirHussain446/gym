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
<?php ob_start(); ?>
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
                                        <?php
                                        $trainee_id = $_REQUEST['trainee_id'];
                                        $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                        $query = mysqli_query($conn, "SELECT * from trainee where trainee_id=$trainee_id");
                                        while($data = mysqli_fetch_array($query)){
$gender=$data['gender'];
$image=$data['image'];
                                        ?>

                                        <form method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" placeholder="Enter your name">
                                            </div>

                                            <div class="form-group">
                                                <label>Father Name</label>
                                                <input type="text" name="f_name" value="<?php echo $data['f_name']; ?>" class="form-control" placeholder="Enter your father name">
                                            </div>

                                             <div class="form-group">
                                                <label>Add Your Image</label>
                                                <input type="file" name="filename">
                                                <input type="hidden" name="pics" value="<?php echo $image ?>">
                                            </div>
                                            <img src="images/<?php echo $image ?>" width="100px" height="100px">
                                          
                                            <div class="form-group">
                                                <label>Gender</label><br>
                                                Male<input type="radio" name="gender" value="male" required
                                                 <?php 
                                                if($gender=="male")
                                                {
                                                    echo"checked";
                                                }
                                                 ?>
                                                >
                                                Female<input type="radio" name="gender" value="female" required  <?php 
                                                if($gender=="female")
                                                {
                                                    echo"checked";
                                                }
                                                 ?>
                                                 >
                                            </div>
<hr>

                                          
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" value="<?php echo $data['age']; ?>" name="age" class="form-control" placeholder="Enter your age">
                                            </div>


                                          
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" value="<?php echo $data['address']; ?>" name="address" class="form-control" placeholder="Enter your address">
                                            </div>


                                          
                                            

<hr>
                                          
                                            <div class="form-group">
                                                <label>Plan</label> <br>
                                                <select name="plan_id">

                                                    <?php
                                                   $trainee_id = $_REQUEST['trainee_id'];
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query2 = mysqli_query($conn, "select plans.plan_id, plans.name, trainee.plan_id from plans inner join trainee on plans.plan_id= trainee.plan_id where trainee.trainee_id =  '$trainee_id' ");
                                                    $dat= mysqli_fetch_array($query2);
                                                        ?>
                                                        <option value="<?php echo $pp = $dat['plan_id']; ?>"><?php echo $dat['name']; ?></option>


                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from plans where plan_id !='$pp' ");
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


                                                    <?php
                                                    $trainee_id = $_REQUEST['trainee_id'];
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $querys = mysqli_query($conn, "SELECT packages.package_id, packages.name, trainee.package_id from packages inner join trainee on packages.package_id=trainee.package_id where trainee.trainee_id='$trainee_id' ");
                                                    $datass = mysqli_fetch_array($querys);
                                                        ?>
                                                        <option value="<?php echo $ss = $datass['package_id']; ?>"><?php echo $datass['name']; ?></option>


                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from packages where package_id !='$ss' ");
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
                                           
                                                
                                            </div>


                                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        </form>
                                        <?php
                                    }
                                    ?>
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
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $plan_id = $_POST['plan_id'];
    $package_id = $_POST['package_id'];
    $pics = $_POST['pics'];

$filename = $_FILES["filename"]["name"];
$tempimage = $_FILES["filename"]["tmp_name"];
$folder="images/".$filename;
if($filename != ''){
    $update=$_FILES["filename"]["name"];
}
else{
    $update = $pics;
}
    $conn = mysqli_connect('localhost', 'root', '', 'gym');
    $query = mysqli_query($conn, "UPDATE trainee set name='$name', f_name='$f_name', image='$update', address='$address', gender='$gender', age='$age', plan_id='$plan_id', package_id='$package_id' where trainee_id='$trainee_id' ");

if(move_uploaded_file($tempimage, $folder)){
            $msg="image uploaded successfully";
        }else{
            $msg ="image not uploaded successfully";
        }

header("location: traineetable.php");
        
        echo $msg;
}
ob_end_flush();
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