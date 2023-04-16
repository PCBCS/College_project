<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - Home</title>
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
     <a href="./doctor-treated.php
     ">Treated</a>
     <a href="./doctor-patienthistory.php">Patient History</a>
     <a href="./doctor-prescribe.php">Prescribe</a>
     <a href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
<hr>
<h1>Home</h1>

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


<h2>Doctor Details:</h2>
<h3>ID : <?php echo$rowD['d_uid'] ?></h3>
<h3>Name : Dr. <?php echo$rowD['firstname']."".$rowD['lastname']; ?></h3>
<h3>Gender : <?php echo$rowD['gender'] ?></h3>
<h3>Speciality : <?php echo$rowD['speciality'] ?></h3>
<h3>Phone : <?php echo$rowD['phone'] ?></h3>
<h3>Email : <?php echo$rowD['email'] ?></h3>
<h3>Hospital : <?php echo$rowD['name'] ?></h3>
<h3>Address : <?php echo$rowD['address'].", ".$rowD['city'].", ".$rowD['state']; ?></h3>



</body>
</html>