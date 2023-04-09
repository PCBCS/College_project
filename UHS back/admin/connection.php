<?php
$serverName='localhost';
$userName='root';
$passWord='';
$dataBase='uhs';

$connection=mysqli_connect($serverName,$userName,$passWord,$dataBase);

if(!$connection)
{
    echo "<script>console.log('Not Connected To Database')</script>";

    die();
    
}
else{
    echo "<script>console.log('Connected To Database')</script>";
}





?>