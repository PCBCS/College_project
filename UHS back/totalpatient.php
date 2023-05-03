<?php

include './connection.php';

$sqltotalPatient="SELECT * FROM `patient`";
$res=mysqli_query($connection,$sqltotalPatient);
printf(mysqli_num_rows($res));
?>