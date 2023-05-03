<?php

include './connection.php';

$sqltotalDoctor="SELECT * FROM `doctor`";
$res=mysqli_query($connection,$sqltotalDoctor);
printf(mysqli_num_rows($res));

?>