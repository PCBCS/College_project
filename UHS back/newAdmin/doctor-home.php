<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Doctor - Home</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
    </style>
</head>
<body class="bg-dark">
    <nav class="pt-2">
     <a class="text-white w-100 bg-success rounded p-1 " href="./doctor-home.php">Home</a>
     <a class="text-warning" href="./doctor-treated.php
     ">Treated</a>
     <a class="text-warning" href="./doctor-patienthistory.php">Patient History</a>
     <a class="text-warning" href="./doctor-prescribe.php">Prescribe</a>
     <a class="text-warning" href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
<hr>

<br>

<?php
include './connection.php';
session_start();
$d_uid=$_SESSION['duid'];
$sqlD="SELECT *
FROM `doctor`
JOIN `hospital`
ON `doctor`.`h_uid` = `hospital`.`uid` 
WHERE `doctor`.`d_uid` = '$d_uid'";
$resD=mysqli_query($connection,$sqlD);
$rowD=mysqli_fetch_assoc($resD);

?>


<h2 class="mb-5 ms-3 text-info">Doctor Details:</h2>
<h3 class=" ms-4 text-secondary">ID : <?php echo$rowD['d_uid'] ?></h3>
<h3 class=" ms-4 text-light">Name : Dr. <?php echo$rowD['firstname']."".$rowD['lastname']; ?></h3>
<h3 class=" ms-4 text-primary">Gender : <?php echo$rowD['gender'] ?></h3>
<h3 class=" ms-4 text-primary">Speciality : <?php echo$rowD['speciality'] ?></h3>
<h3 class=" ms-4 text-primary">Phone : <?php echo$rowD['phone'] ?></h3>
<h3 class=" ms-4 text-primary">Email : <?php echo$rowD['email'] ?></h3>
<h3 class=" ms-4 text-danger">Hospital : <?php echo$rowD['name'] ?></h3>
<h3 class=" ms-4 text-danger">Address : <?php echo$rowD['address'].", ".$rowD['city'].", ".$rowD['state']; ?></h3>



</body>
</html>