
<?php

$server="localhost";
$user="root";
$password="";
$db="college_project_db";


$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
{
    die("Not Connected to Database".mysqli_connection_error());

}

else
{
    echo "Connected";
}










?>