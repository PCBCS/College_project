<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Doctor - Prescribe</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
    </style>
</head>
<body class="bg-dark">
    <nav class="mt-2">
        <a class="text-warning" href="./doctor-home.php">Home</a>
        <a class="text-warning" href="./doctor-treated.php">Treated</a>
        <a class="text-warning" href="./doctor-patienthistory.php">Patient History</a>
        <a class="text-white bg-success p-1 rounded" href="./doctor-prescribe.php">Prescribe</a>
        <a class="text-warning" href="https://pcbcs.github.io/College_project/">Log out</a>
       </nav>
<hr>
<h1 class="text-center text-danger">Add Prescription</h1>

<br>
<!-- <form action="" method="post">
    <input type="text" name="uid" placeholder="Enter Patient ID" id="">
    <button type="button">Submit</button>
</form> -->

<form action="./doctor-prescribe.php" method="post" class="form-control bg-transparent border-0 d-flex justify-content-center ">
<input class="form-control m-1 rounded" type="text" name="cause" id="" placeholder="Cause">
<input class="form-control m-1 rounded" type="text" name="medicine" id="" placeholder="Medication">
<button class="form-control w-25 rounded bg-success text-white" type="submit">Submit</button>

</form>

<?php
include './connection.php';
error_reporting(0);
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
$pid=$_SESSION['pid'];
$duid=$_SESSION['duid'];
$date=$date = date('d/m/Y');
$cause=$_POST['cause'];
$med=$_POST['medicine'];

$sqlh="INSERT INTO `history`(`date`, `d_id`, `p_id`, `cause`, `medication`) VALUES ('$date','$duid','$pid','$cause','$med')";

$resh=mysqli_query($connection,$sqlh);
if(!$resh)
{
    echo" <div class='text-danger text-center bg-white'>Data Not Inserted !</div>";
}else
{
    echo" <div class='text-primary text-center bg-white'>Data Inserted</div>";
}

}

?>


</body>
</html>