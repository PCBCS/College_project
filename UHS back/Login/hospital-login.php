<?php session_start(); //FOR STARTING A SESSION
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In ( Hospital )</title>
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container{
    width: 11.5em;
    height: 20em;
    background-color: antiquewhite;
    padding: 0.5em;
    display: flex;
    flex-direction: column;
}
#wrong_input{
    display: none;
    color: red;
}


    </style>
</head>
<body>
    <div class="container">
<form action="./hospital-login.php" method="post">

<legend>Email</legend>
<input type="email" name="H-email" id="">
<legend>Password</legend>
<input type="password" name="H-password" id="">
<span id="wrong_input">Wrong Email or Password !</span>
<input type="submit" value="submit">
<a href="#">Not Registered yet ?</a>
</form>
    </div>
</body>
</html>

<?php

include './connection.php';

if($_SERVER['REQUEST_METHOD']==='POST')

{
 
    $h_email=$_POST['H-email'];
    $h_password=$_POST['H-password'];
    

    $sql_validateHospital="SELECT * FROM `hospital` WHERE `hospital_email`= '$h_email'";  //CHECKING WHETHER EMAIL ID AVILABLE OR NOT

    //EXECUTING ABOVE QUERY FOR GETTING ROW DATA
    $res_validateHospital=mysqli_query($connection,$sql_validateHospital);
//CAPTURING DATA FROM THE ROW IN THE FORM OF ASSOCIATIVE ARRAY
    $hospital_data_row=mysqli_fetch_assoc($res_validateHospital);
    //CHECKING THE HASHED PASSWORD VALUE & INPUTTED PASSWORD VALUE ARE MATCHING OR NOT
    if(password_verify($h_password,$hospital_data_row['hospital_password'])){
        $_SESSION['hospital_id']=$hospital_data_row['hospital_id'];
        header('Location:./admin/admin-hospital.html');
    }
else{
    echo "<script>document.getElementById('wrong_input').style.display='block';</script>";
}











}






?>

