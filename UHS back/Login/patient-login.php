<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In ( Patient )</title>
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
<form action="./patient-login.php" method="post">

<legend>Email</legend>
<input type="email" name="P-email" id="">
<legend>Password</legend>
<input type="password" name="P-password" id="">
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
 
    $p_email=$_POST['P-email'];
    $p_password=$_POST['P-password'];
    

    $sql_validatePatient="SELECT * FROM `patient` WHERE `patient_email`= '$p_email'";  //CHECKING WHETHER EMAIL ID AVILABLE OR NOT

    //EXECUTING ABOVE QUERY FOR GETTING ROW DATA
    $res_validatePatient=mysqli_query($connection,$sql_validatePatient);
//CAPTURING DATA FROM THE ROW IN THE FORM OF ASSOCIATIVE ARRAY
    $patient_data_row=mysqli_fetch_assoc($res_validatePatient);
    //CHECKING THE HASHED PASSWORD VALUE & INPUTTED PASSWORD VALUE ARE MATCHING OR NOT
    if(password_verify($p_password,$patient_data_row['patient_password'])){
        echo "Password Matched";
    }
else{
    echo "Password Not Matched";
}











}






?>

