<?php

$server='sql308.epizy.com';
$userName='epiz_33938660';
$passWord='k8zy5f01xgu4dn';
$db='epiz_33938660_uhs_database';

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