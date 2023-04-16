<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - Prescribe</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
    </style>
</head>
<body>
    <nav>
        <a href="./doctor-home.php">Home</a>
        <a href="./doctor-treated.php">Treated</a>
        <a href="./doctor-patienthistory.php">Patient History</a>
        <a href="./doctor-prescribe.php">Prescribe</a>
        <a href="https://pcbcs.github.io/College_project/">Log out</a>
       </nav>
<hr>
<h1>Add Prescription</h1>

<br>
<!-- <form action="" method="post">
    <input type="text" name="uid" placeholder="Enter Patient ID" id="">
    <button type="button">Submit</button>
</form> -->

<form action="./doctor-prescribe.php" method="post">
<input type="text" name="cause" id="" placeholder="Cause">
<input type="text" name="medicine" id="" placeholder="Medication">
<button type="submit">Submit</button>

</form>

<?php
include './connection.php';
error_reporting(0);
session_start();
$pid=$_SESSION['pid'];
$duid=$_SESSION['duid'];
$date=$date = date('d/m/Y');
$cause=$_POST['cause'];
$med=$_POST['medicine'];

$sqlh="INSERT INTO `history`(`date`, `d_id`, `p_id`, `cause`, `medication`) VALUES ('$date','$duid','$pid','$cause','$med')";

$resh=mysqli_query($connection,$sqlh);
if(!$resh)
{
    echo"Data Not Inserted !";
}else
{
    echo"Data Inserted";
}



?>


</body>
</html>