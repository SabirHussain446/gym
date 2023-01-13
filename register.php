<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Register</title>

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
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php"></a>
                        </div>
                        <div class="login-form">
                            <h4>User Register</h4>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="user_name" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="pics" class="form-control">
                                </div>

                                <div class="checkbox">
                                    <label>
										<input type="checkbox" required> Agree the terms and policy 
									</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $user_name=$_POST['user_name'];
        $email=$_POST['email'];
        $password=$_POST['password']; 

$pics = $_FILES["pics"]["name"];
$tmppics = $_FILES["pics"]["tmp_name"];
$folder ="images/".$pics;


        $conn = mysqli_connect('localhost', 'root', '', 'gym');
       $query = mysqli_query($conn, "INSERT into register(user_name, email, password, image) values('$user_name', '$email', '$password', '$pics')");

        if(move_uploaded_file($tmppics, $folder)){
            $msg="image uploaded successfully";
        }else{
            $msg ="image not uploaded successfully";
        }
        echo $msg;
        
    } 
     ?>

</body>

</html>