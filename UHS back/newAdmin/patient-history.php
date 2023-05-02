<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Patient - History</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
     table{
        text-align: center;
     }
    </style>
</head>
<body class="bg-black">
    <nav class="bg-success bg-gradient p-1">
     <a class="text-white" href="./patient-home.php">Home</a>
     <a  class="text-white bg-primary rounded p-1" href="./patient-history.php">History</a>
     <a class="text-white" href="./view-doctor.php">Doctor</a>
     <a class="text-white" href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
<hr>
<h1 class="text-center text-danger">History</h1>

<br>

<table class="text-center table text-info">


<tr class="text-white">

<th>Date</th>
<th>Doctor Name</th>
<th>Speciality</th>
<th>Cause</th>
<th>Medication</th>
<th>Fee</th>
</tr>

<?php 
include './connection.php';
session_start();
$pid=$_SESSION['puid'];
$sqlh="SELECT *
FROM `history`
JOIN `doctor` ON `history`.`d_id` = `doctor`.`d_uid`
WHERE `history`.`p_id` = '$pid'";
$resh=mysqli_query($connection,$sqlh);
while($rowh=mysqli_fetch_assoc($resh))
{
?>
<tr>
    
    <td><?php echo$rowh['date'] ?></td>
    <td>Dr. <?php echo$rowh['firstname']."".$rowh['lastname']; ?></td>
    <td><?php echo$rowh['speciality'] ?></td>
    <td><?php echo$rowh['cause'] ?></td>
    <td><?php echo$rowh['medication'] ?></td>
    <td><?php echo$rowh['fee'] ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>