<?php 
    session_start();
    include("includes/db.php");

?>

<!DOCTYPE html>
<html>
    <head>

        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    </head>

    <body>

        
        <div class="container"><!-- container starts-->

            <form action="" method="post" class="form-login"><!-- form-login starts -->

                <h2 class="form-login-heading">Admin Login</h2>

                <input type="text" class="form-control" name="admin_email" placeholder="Email Address" required>

                <input type="password" class="form-control" name="admin_pass" placeholder="password" required>


                <button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Log in</button>

            </form><!-- form-login ends -->

        </div><!-- container ends-->


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>

<?php

if(isset($_POST['admin_login'])){
    $admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
    $admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);

    $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
    $run_admin = mysqli_query($con,$get_admin);
    $count = mysqli_num_rows($run_admin);
    if($count==1){
        $_SESSION['admin_email']=$admin_email;
        echo"<script>alert('You are Logged into admin panel')</script>";
        echo"<script>window.open('index.php?dashboard','_self')</script>";
    }else{
        echo"<script>alert('Email or Password is Wrong')</script>";
    }
}

?>