<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Hospital</title>
    <style>
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            appearance: none;
        }
    </style>
</head>

<body>
    <h1>Hospital Registration</h1>
    <hr>
    <form action="./hospital-reg.php" method="post">
        <legend>Hospital Name</legend>
        <input type="text" name="H-name">
        <legend>Address</legend>
        <input type="text" name="H-address">
        <legend>City</legend>
        <input type="text" name="H-city">
        <legend>State</legend>
        <input type="text" name="H-state">
        <legend>Pincode</legend>
        <input type="number" name="H-pincode">
        <legend>Phone</legend>
        <input type="number" name="H-phone">
        <legend>Email</legend>
        <input type="email" name="H-email">
        <legend>Password</legend>
        <input type="password" name="H-password">
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    <a href="#">Already Registered</a> <!-- LINK TO HOSPITAL LOGIN PAGE -->

</body>

</html>

<?php
  include "./connection.php"; //FOR CONNECTING TO SERVER & DATABASE

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
    $h_id = uniqid("UHS-H-", false);  //FOR GENERATING RANDOM STRING 1ST PARAMETER IS PREFIX TO THAT STRING & ANOTHER PARAMETER GENERATE 13 CHARACTER
    $h_name = $_POST['H-name'];
    $h_address = $_POST['H-address'];
    $h_city = $_POST['H-city'];
    $h_state = $_POST['H-state'];
    $h_pincode = $_POST['H-pincode'];
    $h_phone = $_POST['H-phone'];
    $h_email = $_POST['H-email'];
    $h_raw_password = $_POST['H-password'];
    $h_enc_password = password_hash($h_raw_password, PASSWORD_DEFAULT); //CONVERT THE PASSWORD STRING TO A DEFAULT HASH FORMAT WHICH IS HARD TO DECODE

    $insert_hospital = "INSERT INTO `hospital`(`hospital_id`, `hospital_name`, `hospital_address`, `hospital_city`, `hospital_state`, `hospital_pincode`, `hospital_phone`, `hospital_email`, `hospital_password`) VALUES ('$h_id','$h_name','$h_address','$h_city','$h_state','$h_pincode','$h_phone','$h_email','$h_enc_password')";

    //EXECUTING ABOVE QUERY TO INSERT THE INPUTTED DATA INTO HOSPITAL TABLE

    $res_insertHospital=mysqli_query($connection,$insert_hospital);

    if(!$res_insertHospital){
        echo 'Not Submitted';
        echo '<script>window.open("./html/fail.html","_self")</script>';
    }
    else{
        echo 'Submitted';
        echo '<script>window.open("./html/sucess.html","_self")</script>';
    }





}



?>