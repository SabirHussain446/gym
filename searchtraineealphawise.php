


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
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                   
                        
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Trainee Table</li>
                                </ol>
                      <!--          <h5>Search Trainer</h5>
                                <form method="POST" action="searchtrainer.php">
                                    <select name="trainer_id">
                                        <option>Select Trainer</option>
                                        <?php 
                                        $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                        $query = mysqli_query($conn, "SELECT * from trainers");
                                        while($data=mysqli_fetch_array($query)){
                                         ?>
                                         <option value="<?php echo $data['trainer_id']; ?>"><?php echo $data['name']; ?></option>
                                         <?php
                                        }
                                        ?>
                                        </select>
                                        <button name="search" value="submit">Search</button>
                                </form>
                                <h5 hidden="">Search Address</h5>
                                <form hidden="" method="POST" action="searchtraineeaddress.php">
                                    <select name="trainee_id">
                                        <option>Select Address</option>
                                        <?php 
                                        $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                        $query = mysqli_query($conn, "SELECT * from trainee");
                                        while($data=mysqli_fetch_array($query)){
                                         ?>
                                         <option value="<?php echo $data['trainee_id']; ?>"><?php echo $data['address']; ?></option>
                                         <?php
                                        }
                                        ?>
                                        </select>
                                        <button name="search" value="submit">Search</button>
                                </form>
-->
                                <h4>Search Trainee Alphabetically</h4>
                                <form method="POST" action="searchtraineealphawise.php">
                                    <input type="text" name="alpha" placeholder="search name, f_name and gender alphawise">
                                    <button name="alphaa" type="submit" value="submit">search alpha wise</button>
                                </form>

                            </div>
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
                                    <h4>Trainee Table</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" border="1px">
                                            <thead style="background-color: dodgerblue">
                                                <tr style="color: white">
                                                    <th>Name</th>
                                                    <th>F_Name</th>
                                                    <th>Address</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th>Plan</th>
                                                    <th>Package</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
  <?php 
  if(isset($_POST['alphaa'])){
 $alpha= $_POST['alpha'];
 $conn = mysqli_connect('localhost', 'root', '', 'gym');
 $query = mysqli_query($conn, "SELECT trainee.trainee_id, trainee.name, trainee.f_name, trainee.address, trainee.gender, trainee.age, plans.plan_id, plans.name as plan_id, packages.package_id, packages.name as package_id from trainee inner join plans on trainee.plan_id=plans.plan_id inner join packages on trainee.package_id=packages.package_id where trainee.name like '$alpha%' or trainee.name like '%$alpha' or trainee.name like '%$alpha%' or trainee.f_name like '$alpha%' or trainee.f_name like '%$alpha%' or trainee.f_name like '%$alpha' or trainee.address like '$alpha%' or trainee.address like '%$alpha' or trainee.address like '%$alpha%' or trainee.gender like'%$alpha' or trainee.gender like '$alpha%' or trainee.gender like '%$alpha%' ");
     while($data = mysqli_fetch_array($query)){
     $trainee_id = $data['trainee_id'];
     ?>
                                         <tr>
                                         <td><?php echo $data['name'] ?></td>
                                         <td><?php echo $data['f_name'] ?></td>
                                        <td><?php echo $data['address'] ?></td>
                                         <td><?php echo $data['gender'] ?></td>
                                         <td><?php echo $data['age'] ?></td>
                                        <td><?php echo $data['plan_id'] ?></td>
                                         <td><?php echo $data['package_id'] ?></td>
                                         <td><?php echo "<a href='updatetrainee.php? trainee_id=$trainee_id'>update </a> " ?></td>  

                                         <td><?php echo "<a href='deletetrainee.php?trainee_id=$trainee_id'> delete </a> " ?></td>                                                    
                                                </tr>
                                                <?php
                                                } }
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