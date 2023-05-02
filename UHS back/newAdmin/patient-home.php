<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Patient - Home</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
    </style>
</head>
<body class="bg-dark">
    <nav class="bg-success bg-gradient h-50 p-2">
        <a class="text-white bg-primary bg-gradient rounded p-1" href="./patient-home.php">Home</a>
        <a class="text-white" href="./patient-history.php">History</a>
        <a class="text-white" href="./view-doctor.php">Doctor</a>
     <a class="text-white" href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
<hr>
<h1>Home</h1>

<br>

<?php
include './connection.php';
session_start();
$pid= $_SESSION['puid'];
$sqlp="SELECT * FROM `patient` WHERE `puid`='$pid'";
$resP=mysqli_query($connection,$sqlp);
$rowP=mysqli_fetch_assoc($resP);



?>

<h2 class="text-center bg-danger">Patient Details:</h2>
<h3 class="text-secondary ms-2">ID : <?php echo$rowP['puid']; ?></h3>
<h3 class="text-primary ms-2">Name :  <?php echo$rowP['fname']." ".$rowP['lname']; ?></h3>
<h3 class="text-success ms-2">Gender : <?php echo$rowP['gender']; ?></h3>
<h3 class="text-success ms-2">Age : <?php $age=date('Y')-$rowP['byear']; echo$age; ?></h3>
<h3 class="text-success ms-2">Phone : <?php echo$rowP['phone']; ?></h3>
<h3 class="text-success ms-2">Email : <?php echo$rowP['email']; ?></h3>
<h3 class="text-warning ms-2">Address : <?php echo$rowP['address'].", ".$rowP['city']; ?></h3>



</body>
</html>