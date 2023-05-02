<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Doctor - History</title>
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
<body class="bg-dark">
    <nav class="mt-2">
        <a  class="text-warning"  href="./doctor-home.php">Home</a>
        <a class="text-warning" href="./doctor-treated.php">Treated</a>
        <a class="text-white rounded bg-success p-1" href="./doctor-patienthistory.php">Patient History</a>
        <a class="text-warning" href="./doctor-prescribe.php">Prescribe</a>
        <a class="text-warning" href="https://pcbcs.github.io/College_project/">Log out</a>
       </nav>
<hr>

<br>
<form action="./doctor-patienthistory.php" method="post" class="form-control d-flex justify-content-center bg-transparent border-0">
    <input type="email" name="email" placeholder="Enter Email" id="" class="rounded form-control m-1">
    <button type="submit" class="rounded form-control bg-primary text-white w-25 m-1">Submit</button>
</form>

<br><br><br>
<?php
include './connection.php';
session_start();
error_reporting(0);
if($_SERVER['REQUEST_METHOD']==='POST')
{
 $email=$_POST['email']; 
 $sqlP="SELECT * FROM `patient` WHERE `email`='$email'";
 $resP=mysqli_query($connection,$sqlP);
 $rowP=mysqli_fetch_assoc($resP);

}
?>
<h1 class="text-danger text-center">Patient Details</h1><br><br>
<h3 class="text-secondary ms-2" >ID : <?php echo $rowP['puid']; ?></h3>
<h3 class="text-white ms-2" >Name : <?php echo $rowP['fname']." ".$rowP['lname']; ?></h3>
<h3 class="text-primary ms-2" >Phone : <?php echo $rowP['phone']; ?></h3>
<h3 class="text-primary ms-2" >Email : <?php echo $rowP['email']; ?></h3>
<h3 class="text-warning ms-2" >Address : <?php echo $rowP['address'].", ".$rowP['city']; ?></h3>


<h3>Patient History</h3>
<table class="table text-white">

<tr>

<th>Date</th>
<th>Doctor</th>
<th>Speciality</th>
<th>Cause</th>
<th>Medication</th>
</tr>


<?php
$pid=$rowP['puid'];
$_SESSION['pid']=$rowP['puid'];
$SqlPP="SELECT * FROM `history` JOIN `doctor` ON `history`.`d_id` = `doctor`.`d_uid` JOIN `patient` ON `history`.`p_id` = `patient`.`puid` WHERE `patient`.`puid` = '$pid'";
$resPP=mysqli_query($connection,$SqlPP);

while($rowPP=mysqli_fetch_assoc($resPP))
{

?>
<tr>
    <td><?php echo$rowPP['date'] ?></td>
    <td>Dr. <?php echo$rowPP['firstname']." ".$rowPP['lastname'] ?></td>
    <td><?php echo$rowPP['speciality'] ?></td>
    
    <td><?php echo$rowPP['cause'] ?></td>
    <td><?php echo$rowPP['medication'] ?></td>
</tr><?php
}
?>
</table>

</body>
</html>