<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body>
    <nav>
        <a href="./doctor-home.php">Home</a>
        <a href="./doctor-treated.php">Treated</a>
        <a href="./doctor-patienthistory.php">Patient History</a>
        <a href="./doctor-prescribe.php">Prescribe</a>
        <a href="https://pcbcs.github.io/College_project/">Log out</a>
       </nav>
<hr>
<h1>Patient Details</h1>

<br>
<form action="./doctor-patienthistory.php" method="post">
    <input type="email" name="email" placeholder="Enter Email" id="">
    <button type="submit">Submit</button>
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
<h1>Patient Details</h1><br><br>
<h3>ID : <?php echo $rowP['puid']; ?></h3>
<h3>Name : <?php echo $rowP['fname']."".$rowP['lname']; ?></h3>
<h3>Phone : <?php echo $rowP['phone']; ?></h3>
<h3>Email : <?php echo $rowP['email']; ?></h3>
<h3>Address : <?php echo $rowP['address'].", ".$rowP['city']; ?></h3>


<h3>Patient History</h3>
<table>

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
    <td>Dr. <?php echo$rowPP['firstname']."".$rowPP['lastname'] ?></td>
    <td><?php echo$rowPP['speciality'] ?></td>
    
    <td><?php echo$rowPP['cause'] ?></td>
    <td><?php echo$rowPP['medication'] ?></td>
</tr><?php
}
?>
</table>

</body>
</html>