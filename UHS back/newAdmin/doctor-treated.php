<!DOCTYPE html>
<html lang="en">
<head>
<!--  <meta http-equiv="refresh" content="2">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Doctor - Treated</title>
    <style>
     a{
        margin: 1em;
        text-decoration: none;
        font-size: 25px;
     }
    </style>
</head>
<body class="bg-dark">
    <nav class="mt-3">
        <a class="text-warning" href="./doctor-home.php">Home</a>
        <a  class="text-white p-1 bg-success rounded"  href="./doctor-treated.php">Treated</a>
        <a  class="text-warning "  href="./doctor-patienthistory.php">Patient History</a>
        <a  class="text-warning "  href="./doctor-prescribe.php">Prescribe</a>
        <a  class="text-warning "  href="https://pcbcs.github.io/College_project/">Log out</a>
       </nav>
<hr>
<h1>Treated</h1>

<br>

<table class="table ">

<tr class="text-white text-center">

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

<tr class="text-center">
    
    <td scope="row" class="text-primary"><?php echo$rowT['date']?></td>
    <td  class="text-danger"><?php echo$rowT['fname']." ".$rowT['lname'];?></td>
    <td class="text-info"><?php echo$rowT['cause']?></td>
    <td class="text-info"><?php echo$rowT['medication']?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>