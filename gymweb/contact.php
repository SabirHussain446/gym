<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
     <?php include"header.php"; ?>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Contact Us</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <a href="#">Pages</a>
                            <span>Contact us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title contact-title">
                        <span>Contact Us</span>
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-text">
                            <i class="fa fa-map-marker"></i>
                            <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                        </div>
                        <div class="cw-text">
                            <i class="fa fa-mobile"></i>
                            <ul>
                                <li>125-711-811</li>
                                <li>125-668-886</li>
                            </ul>
                        </div>
                        <div class="cw-text email">
                            <i class="fa fa-envelope"></i>
                            <p>Support.gymcenter@gmail.com</p>
                        </div>
                    </div>
                </div>


<!--
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


                                          
                                            <div class="form-group">
                                                <label>Trainer</label> <br>
                                                <select name="trainer_id">
                                                    <option>Select Trainer</option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from trainers"); 
                                                    while($data = mysqli_fetch_array($query)){
                                                        $trainer_id = $data['trainer_id']; ?>
                                                        <option value="<?php echo $data['trainer_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
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
                                          
                                            <div class="form-group">
                                                <label>Fee</label><br>
                                                <select name="fee">
                                                    <option>Select Fee</option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query = mysqli_query($conn, "SELECT * from packages");
                                                    while($data = mysqli_fetch_array($query)){
                                                        $package_id= $data['package_id'];
                                                        ?>
                                                        <option value="<?php echo $data['package_id']; ?>"><?php echo $data['fee']; ?></option>
                                                        <?php
                                                    } 
                                                    ?>
                                                </select>
                                            </div>



<hr>
                                          
                                            <div class="form-group">
                                                <label>Diet</label><br>
                                                <select name="diet_id">
                                                    <option>Select Diet</option>
                                                    <?php
                                                    $conn = mysqli_connect('localhost', 'root', '', 'gym');
                                                    $query= mysqli_query($conn, "SELECT * from diet");
                                                    while($data= mysqli_fetch_array($query)){
                                                        $diet_id= $data['diet_id'];
                                                        ?>
                                                        <option value="<?php echo $data['diet_id']; ?>"><?php echo $data['name']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                
                                            </div>


                                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        </form>
                                    </div>
-->


                <div class="col-lg-6">
                    <div class="leave-comment">
                        <form action="#" class="form-inline" method="post" enctype="multipart/form-data">
                            <input type="text" name="name" placeholder="Name">
                            <input type="text" name="f_name" placeholder="Father Name">
                            <label style="color: white">Image</label>
                            <input type="file" name="image" placeholder="Image">
                            <select name="gender" class="form-control">
                                <option value="male">Select Gender</option>

                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>  
                            <input type="number" name="age" placeholder="Age">
                            <input type="text" name="address" placeholder="Address">
                            
                                <div class="form-group">
                                                <label style="color: white">Plan:</label> <pre>     </pre>
                                                <select name="plan_id" class="form-control">
                                                    <option style="color: white">Select Plan</option>
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
<pre>
    
</pre>
                            <div class="form-group">
                                                <label style="color: white">Package:</label><pre>     </pre>
                                                <select name="package_id" class="form-control">
                                                    <option>Select Package</option>
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
<pre>
    

</pre>
                            <button type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>




    <?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $f_name = $_POST['f_name'];
$image = $_FILES["image"]["name"];
$tmppics = $_FILES["image"]["tmp_name"];
$folder ="../images/".$image;
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






            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                    height="550" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
   <?php include"footer.php" ?>

    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>