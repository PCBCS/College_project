<?php

$server_name='localhost';
$user_name='root';
$password='';
$database='module';

$connection=mysqli_connect($server_name,$user_name,$password,$database);
if(!$connection)
{
    $mysql_error=mysqli_connect_error();
 echo "<script>console.log('Not Connected')</script>";
}
else{
    echo '<script>console.log("Connected")</script>';
}

?>