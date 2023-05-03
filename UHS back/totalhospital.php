<?php

include './connection.php';

$sqltotalHospital="SELECT * FROM `hospital`";
$res=mysqli_query($connection,$sqltotalHospital);
printf(mysqli_num_rows($res));
?>