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

    <title>GYM Admin: Table</title>

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
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="">
                        <div class="page-header">
                            <div class="page-title">
                                <h4>View Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                   
                        
                          
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="">
                        <div class="">
                            <div class="card">
                                <div class="card-title">
                                
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" border="1px">
                                            <thead style="background-color: dodgerblue">
                                                <tr style="color: white">
                                                    <th hidden="">Name</th>
                                                    <th hidden="">F_Name</th>
                                                    <th hidden="">Address</th>
                                                    <th hidden="">Gender</th>
                                                    <th hidden="">Age</th>
                                                    <th>Plan</th>
                                                    <th>Package</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                    <th hidden="">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                        $trainee_id = $_REQUEST['trainee_id'];
                                        $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                        $query = mysqli_query($conn, "SELECT trainee.trainee_id, trainee.name, trainee.f_name, trainee.address, trainee.gender, trainee.age, plans.plan_id, plans.name as plan_id, packages.package_id, packages.name as package_id from trainee inner join plans on trainee.plan_id=plans.plan_id inner join packages on trainee.package_id=packages.package_id where trainee_id=$trainee_id");
                                        while($data = mysqli_fetch_array($query)){
                                         $trainee_id=$data['trainee_id'];
                                        ?>

                                         <tr>
                                         <td hidden=""><?php echo $data['name'] ?></td>
                                         <td hidden=""><?php echo $data['f_name'] ?></td>
                                        <td hidden=""><?php echo $data['address'] ?></td>
                                         <td hidden=""><?php echo $data['gender'] ?></td>
                                         <td hidden=""><?php echo $data['age'] ?></td>
                                        <td><?php echo $data['plan_id'] ?></td>
                                         <td><?php echo $data['package_id'] ?></td>

                                         <td><?php echo "<a href='updatetrainee.php? trainee_id=$trainee_id'>update </a> " ?></td>  

                                         <td><?php echo "<a href='deletetrainee.php?trainee_id=$trainee_id'> delete </a> " ?></td> 
                                         <td hidden=""><?php echo "<a href='view.php?trainee_id=$trainee_id'> View </a> " ?></td>                                                    
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                                
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>  
                </section>
            </div>
        </div>
    </div>






    
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