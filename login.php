<?php 
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>

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
                            <h4>User Login</h4>
                            <form method="POST">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name='sign'>Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="register.php"> Sign Up Here</a></p>
                                </div>
                            </form>
<?php
$conn=mysqli_connect('localhost','root','','gym');
if(isset($_POST['sign'])){

$email=$_POST['email'];
$password=$_POST['password'];
$query=mysqli_query($conn,"SELECT *  from register where email='$email' and password = '$password' ");
while ($data=mysqli_fetch_array($query)){
    
    if($data['email']== $email && $data['password']==$password)
    {
        $_SESSION['username']=$data['user_name'];
        $_SESSION['register_id']=$data['register_id'];
        $_SESSION['image']=$data['image'];
        $_SESSION['email']=$data['email'];
        header("location:index.php");

}

}
?>
<span style="color: black"><?php  echo " email and password does not match "; ?> </span>
<?php
}

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>