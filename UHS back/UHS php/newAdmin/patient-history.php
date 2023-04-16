<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
    <nav>
     <a href="./patient-home.php">Home</a>
     <a href="./patient-history.php">History</a>
   
     <a href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
<hr>
<h1>History</h1>

<br>

<table>


<tr>

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