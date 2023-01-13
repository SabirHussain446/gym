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
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Assets Table</li>
                                </ol>
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
                                    <button><a href="assetsform.php">Add Assets</a></button>
                                    <h4>Assets Table</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" border="1px">
                                          <thead style="background-color: dodgerblue">
                                                <tr style="color: white">
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Purchase Date</th>
                                                    <th>Quantity</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                $query = mysqli_query($conn, "SELECT * from assets");
                                                while($data = mysqli_fetch_array($query)){
                                                $asset_id = $data['asset_id'];
                                                    ?>
                                      <tr>
                                      <td><?php echo $data['name'] ?></td>
                                      <td><img height="100px" width="100px" src=" <?php echo "images/".$data['image']; ?>" alt="images"/></td>
                                      <td><?php echo $data['purchase_date'] ?></td>
                                      <td><?php echo $data['quantity'] ?></td>
                                      <td><?php echo "<a href='updateasset.php? asset_id=$asset_id'>update </a> " ?></td>                                                    
                                         <td><?php echo "<a href='deleteasset.php? asset_id=$asset_id'> delete <?a> " ?></td> 
                                     
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