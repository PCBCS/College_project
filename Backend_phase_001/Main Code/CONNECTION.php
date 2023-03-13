<?php

$server_name="localhost";

$user_name="root";

$user_password="";

$database="college_project_db";


$connection=mysqli_connect($server_name,$user_name,$user_password,$database);      //connecting to Database

if(!$connection)
{
  
    

    
    die("Not Connected".mysqli_connect_error());
    
    

}
