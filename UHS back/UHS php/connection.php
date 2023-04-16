<?php

$server='localhost';
$userName='root';
$passWord='';
$db='uhsdb';

$connection=mysqli_connect($server,$userName,$passWord,$db);
if(!$connection)
{
    die('Not Connected To Database'.mysqli_connect_error());
}
else
{
echo"<script>console.log('Connected To Database')</script>";
}






?>