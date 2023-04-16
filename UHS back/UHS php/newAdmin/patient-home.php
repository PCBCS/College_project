<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient - Home</title>
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
        <a href="./patient-home.php">Home</a>
        <a href="./patient-history.php">History</a>
     <a href="https://pcbcs.github.io/College_project/">Log out</a>
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

<h2>Patient Details:</h2>
<h3>ID : <?php echo$rowP['puid']; ?></h3>
<h3>Name :  <?php echo$rowP['fname']."".$rowP['lname']; ?></h3>
<h3>Gender : <?php echo$rowP['gender']; ?></h3>
<h3>Age : <?php $age=date('Y')-$rowP['byear']; echo$age; ?></h3>
<h3>Phone : <?php echo$rowP['phone']; ?></h3>
<h3>Email : <?php echo$rowP['email']; ?></h3>
<h3>Address : <?php echo$rowP['address'].", ".$rowP['city']; ?></h3>



</body>
</html>