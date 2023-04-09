<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Patient</title>
    <style>
        input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{
            appearance: none;
        }
    </style>
</head>
<body>
    <h1>Patient Registration</h1>
    <hr>
    <form action="" method="post">
    <legend>First Name</legend>
    <input type="text" name="P-f-name"> 
    <legend>Last Name</legend>
    <input type="text" name="P-l-name"> 
    <legend>Gender</legend>
    <label for="">Male : </label><input type="radio" name="P-gender" id="" value="Male">
    <label for="">Female : </label><input type="radio" name="P-gender" id="" value="Female">

<div style="display: flex; justify-content: start;">
   <div>
    <legend>Day</legend>
    <input type="number" name="P-day" id="">
   </div>
   <div>
    <legend>Month</legend>
  <select name="P-month" id="">
    <option value="" style="display: none;">Select Month</option>
    <option value="01">January</option>
  <option value="02">February</option>
  <option value="03">March</option>
  <option value="04">April</option>
  <option value="05">May</option>
  <option value="06">June</option>
  <option value="07">July</option>
  <option value="08">August</option>
  <option value="09">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
  </select>
   </div>
   <div>
    <legend>Year</legend>
    <input type="number" name="P-year" id="">
   </div>
    
</div>

<legend>Blood Group</legend>
<input type="text" name="P-bloodGrp" id="" style="text-transform: uppercase;">

    <legend>Address</legend>
    <input type="text" name="P-address">
    <legend>City</legend>
    <input type="text" name="P-city">
    <legend>State</legend>
    <input type="text" name="P-state">
    <legend>Phone</legend>
    <input type="number" name="P-phone">
    <legend>Email</legend>
    <input type="email" name="P-email">
    <legend>Password</legend>
    <input type="password" name="P-password">
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
<a href="#">Already Registered</a>  <!-- LINK TO PATIENT LOGIN PAGE -->

</body>
</html>


<?php



if($_SERVER['REQUEST_METHOD']==='POST')
{
 include './connection.php';   //FOR CONNECTING TO SERVER & DATABASE
 

 $p_id=uniqid("UHS-P-",false);  //FOR GENERATING RANDOM STRING 1ST PARAMETER IS PREFIX TO THAT STRING & ANOTHER PARAMETER GENERATE 13 CHARACTER
 $p_f_name=$_POST['P-f-name'];
 $p_l_name=$_POST['P-l-name'];
 $p_gender=$_POST['P-gender'];
 $p_day=$_POST['P-day'];
 $p_month=$_POST['P-month'];
 $p_year=$_POST['P-year'];
 $p_bloodGrp=$_POST['P-bloodGrp'];
 $p_address=$_POST['P-address'];
 $p_city=$_POST['P-city'];
 $p_state=$_POST['P-state'];
 $p_phone=$_POST['P-phone'];
 $p_email=$_POST['P-email'];
 $p_raw_password=$_POST['P-password'];
 $p_enc_password=password_hash($p_raw_password,PASSWORD_DEFAULT); //CONVERT THE PASSWORD STRING TO A DEFAULT HASH FORMAT WHICH IS HARD TO DECODE
$p_age=date('Y') - $p_year; //SIMPLY SUBTRACTING PATIENT BIRTH YEAR FROM CURREBNT YEAR & DATE() RETURNS CURRENT DATE,WITH 'Y' PARAMETER IT ONLY RETURNS THE CURRENT YEAR
$p_dob=$p_day."/".$p_month."/".$p_year;



$insert_patient="INSERT INTO `patient`(`patient_id`, `patient_first_name`, `patient_last_name`, `patient_gender`, `patient_dob`, `patient_age`, `patient_bloodGrp`, `patient_address`, `patient_city`, `patient_state`, `patient_phone`, `patient_email`, `patient_password`) VALUES('$p_id','$p_f_name','$p_l_name','$p_gender','$p_dob','$p_age',' $p_bloodGrp','$p_address','$p_city','$p_state',' $p_phone','$p_email','$p_enc_password')";

//EXECUTING ABOVE QUERY TO INSERT THE INPUTTED DATA INTO PATIENT TABLE

$res_insertPatient=mysqli_query($connection,$insert_patient);

if(!$res_insertPatient){
    echo 'Not Submitted';
    echo '<script>window.open("./html/fail.html","_self")</script>';
}
else{
    echo 'Submitted';
    echo '<script>window.open("./html/sucess.html","_self")</script>';
}


}


?>

