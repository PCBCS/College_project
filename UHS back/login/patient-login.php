<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient - Login</title>


<!-- Bootstrap 5.2v -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



<!-- Fontawesome -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->
<style>

#usname,#passwd{
    font-weight: 550;
    font-size: 1.2rem;
}

</style>


</head>
<body class="h-100 bg-black">
    
<div class="container bg-body-secondary position-absolute start-50 top-50 translate-middle col-lg-3 col-md-5 col-sm-5 p-4 rounded-4 border border-danger-subtle border-4">

    <form action="./patient-login.php" method="post">

<div class="container d-flex justify-content-center flex-column">
<i class="fa fa-user align-self-center border-2 border-danger-subtle border p-3 rounded-5 bg-body-tertiary shadow-lg mb-4 mt-2" style=" font-size: 60px; color: #080276;"></i>


<input type="email" class="form-control mt-3 shadow-lg" id="usname" placeholder="Email" name="email">

<input type="password" class="form-control mt-4 mb-4 shadow-lg" id="passwd" placeholder="Password" name="password">
<a href="../registration/doctor-reg.php" class="text-decoration-none mt-2 mb-3">Not registered ?</a>

<button type="submit" class="form-control btn btn-primary w-50 align-self-center text-white shadow-lg" style="height: 3em;font-weight: 550;">Submit</button>
</form>


<?php
session_start();
//FOR REMOVING ALL KINDS OF ERROR REPORT
// error_reporting(0);
// ini_set('display_errors', 0);


if($_SERVER['REQUEST_METHOD']==='POST')
{
    include '../connection.php';
    $email=$_POST['email'];
    $passWord=$_POST['password'];
  

    //RETRIEVING DATA FROM DATABASE DOCTOR TABLE
$getTable_data="SELECT `puid`,`email`,`password` FROM `patient` WHERE `email`='$email'";

$getData=mysqli_query($connection,$getTable_data);

    //VERIFYING THE EMAIL ID & PASSWORD

    $patData = mysqli_fetch_array($getData);
    if(!password_verify($passWord,$patData['password']))
    {
        echo'<span class="text-center text-danger mt-4" style="font-size: 20px; font-weight: 550;">Wrong email or password</span> ';
    }
    else{
        $_SESSION['puid'] = $patData['puid'];
        header('location:../newAdmin/patient-home.php');
        exit();
    }


    








}






?>







</div>




</div>


</body>
</html>






