<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Doctor</title>
    <style>
        input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{
            appearance: none;
        }
    </style>
</head>
<body>
    <h1>Doctor Registration</h1>
    <hr>
    <form action="./doctor-reg.php" method="post">
    <legend>First Name</legend>
    <input type="text" name="D-f-name"> 
    <legend>Last Name</legend>
    <input type="text" name="D-l-name"> 
    <legend>Gender</legend>
    <label for="">Male : </label><input type="radio" name="D-gender" id="" value="Male">
    <label for="">Female : </label><input type="radio" name="D-gender" id="" value="Female">
    <legend>Hospital :</legend>
    <select name="D-hospital" id="">
        <option value="" style="display: none;">Select Hospital</option>
<!-- GET REGISTERED HOSPITAL LIST FROM HOSPITAL TABLE -->
<?php

include "./connection.php";//FOR CONNECTING TO SERVER & DATABASE
$get_hospital_data="SELECT `hospital_id`,`hospital_name` FROM `hospital`";

$res_getHospital=mysqli_query($connection,$get_hospital_data);
while($row_getHospital=mysqli_fetch_array($res_getHospital))
{
 ?>
<!-- FOR PRINTING THE OPTION TAG MULTIPLE TIMES -->

<option value="<?php echo $row_getHospital['hospital_id']; ?>"><?php echo $row_getHospital['hospital_name']; ?></option>



<?php

}


?>

    </select>

    <legend>Speciality</legend>
    <select name="D-speciality" id="">
        <option value="" style="display: none;">Select Speciality</option>

  <option value="Cardiology">Cardiology</option>
  <option value="Dermatology">Dermatology</option>
  <option value="Endocrinology">Endocrinology</option>
  <option value="Gastroenterology">Gastroenterology</option>
  <option value="Hematology">Hematology</option>
  <option value="Infectious Disease">Infectious Disease</option>
  <option value="Neurology">Neurology</option>
  <option value="Obstetrics">Obstetrics</option>
  <option value="Gynecology"> Gynecology</option>
  <option value="Oncology">Oncology</option>
  <option value="Ophthalmology">Ophthalmology</option>
  <option value="Orthopedic Surgery">Orthopedic Surgery</option>
  <option value="Otolaryngology">Otolaryngology</option>
  <option value="Pediatrics">Pediatrics</option>
  <option value="Psychiatry">Psychiatry</option>
  <option value="Pulmonary Medicine">Pulmonary Medicine</option>
  <option value="Radiology">Radiology</option>
  <option value="Rheumatology">Rheumatology</option>
  <option value="Surgery">Surgery</option>
  <option value="Urology">Urology</option>


    </select>

<legend>Check-up Fee</legend>
<input type="number" name="D-fee" id="">

    <legend>Address</legend>
    <input type="text" name="D-address">
    <legend>City</legend>
    <input type="text" name="D-city">
    <legend>State</legend>
    <input type="text" name="D-state">
    <legend>Phone</legend>
    <input type="number" name="D-phone">
    <legend>Email</legend>
    <input type="email" name="D-email">
    <legend>Password</legend>
    <input type="password" name="D-password">
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
<a href="#">Already Registered</a>  <!-- LINK TO DOCTOR LOGIN PAGE -->

</body>
</html>

<?php



if($_SERVER['REQUEST_METHOD']==='POST')
{

 

 $d_id=uniqid("UHS-D-",false);  //FOR GENERATING RANDOM STRING 1ST PARAMETER IS PREFIX TO THAT STRING & ANOTHER PARAMETER GENERATE 13 CHARACTER
 $d_f_name=$_POST['D-f-name'];
 $d_l_name=$_POST['D-l-name'];
 $d_gender=$_POST['D-gender'];
 $h_hospital_id=$_POST['D-hospital'];
 $d_speciality=$_POST['D-speciality'];
 $d_fee=$_POST['D-fee'];
 $d_address=$_POST['D-address'];
 $d_city=$_POST['D-city'];
 $d_state=$_POST['D-state'];
 $d_phone=$_POST['D-phone'];
 $d_email=$_POST['D-email'];
 $d_raw_password=$_POST['D-password'];
 $d_enc_password=password_hash($d_raw_password,PASSWORD_DEFAULT); //CONVERT THE PASSWORD STRING TO A DEFAULT HASH FORMAT WHICH IS HARD TO DECODE

$insert_doctor="INSERT INTO `doctor`(`doctor_id`, `hospital_id`, `doctor_first_name`, `doctor_last_name`, `doctor_gender`, `doctor_speciality`, `doctor_fee`, `doctor_address`, `doctor_city`, `doctor_state`, `doctor_phone`, `doctor_email`, `doctor_password`) VALUES('$d_id','$h_hospital_id','$d_f_name','$d_l_name','$d_gender','$d_speciality','$d_fee','$d_address','$d_city','$d_state','$d_phone','$d_email','$d_enc_password')";

  //EXECUTING ABOVE QUERY TO INSERT THE INPUTTED DATA INTO DOCTOR TABLE

  $res_insertDoctor=mysqli_query($connection,$insert_doctor);

  if(!$res_insertDoctor){
    echo 'Not Submitted';
    echo '<script>window.open("./html/fail.html","_self")</script>';
}
else{
    echo 'Submitted';
    echo '<script>window.open("./html/sucess.html","_self")</script>';
  }





}


?>