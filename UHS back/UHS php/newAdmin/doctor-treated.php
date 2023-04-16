<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor - Treated</title>
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
<h1>Treated</h1>

<br>

<table>

<tr>

<th>Date</th>
<th>Patient Name</th>
<th>Cause</th>
<th>Medication</th>
</tr>
<?php
include './connection.php';
session_start();
$d_uid=$_SESSION['duid'];
$SqlT="SELECT * FROM `history` JOIN `doctor` ON `history`.`d_id` = `doctor`.`d_uid` JOIN `patient` ON `history`.`p_id` = `patient`.`puid` WHERE `doctor`.`d_uid` = '$d_uid'";
$resT=mysqli_query($connection,$SqlT);

while($rowT=mysqli_fetch_assoc($resT))
{
?>

<tr>
    
    <td><?php echo$rowT['date']?></td>
    <td><?php echo$rowT['fname']."".$rowT['lname'];?></td>
    <td><?php echo$rowT['cause']?></td>
    <td><?php echo$rowT['medication']?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>