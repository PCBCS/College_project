<?php session_start();
include "./connection.php";
   $global_hospital_id=$_SESSION['hospital_id'];

$sql_getHospital_data="SELECT * FROM `hospital`";
$res_getHospitalData=mysqli_query($connection,$sql_getHospital_data);

$registeredHospital=mysqli_num_rows($res_getHospitalData);//FOR GETTING NUMBER OF ROWS FILLED WITH DATA

$sql_getRegisteredDoctor="SELECT * FROM `doctor` WHERE `hospital_id`='$global_hospital_id'";

$res_getDoctorData=mysqli_query($connection,$sql_getRegisteredDoctor);

$registeredDoctor=mysqli_num_rows($res_getDoctorData);//FOR GETTING NUMBER OF ROWS FILLED WITH DATA


$sql_getRegisteredPatient="SELECT * FROM `patient`";

$res_getPatientData=mysqli_query($connection,$sql_getRegisteredPatient);

$registeredPatient=mysqli_num_rows($res_getPatientData);//FOR GETTING NUMBER OF ROWS FILLED WITH DATA




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Hospital</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            display: flex;
        }
.data{
    width: 15em;
    height: 7em;
    background-color: antiquewhite;
    margin:1em 1em 0 0.5em;
    display: flex;
  
    flex-direction: column;
    text-align: center;
}
h3{
    font-size: 45px;
    margin-top: 0.5em;
}

    </style>
</head>
<body>
    
    <h1>Hospital Page</h1>
    <hr>
   <div class="container">
    <div class="data">
        <h2>Hospital Registered</h2>
        <h3><?php
         printf($registeredHospital);  
        ?></h3>
    </div>
    <div class="data"><h2>Doctor Registered</h2>
        <h3><?php
         printf($registeredDoctor);  
        ?></h3></div>
    <div class="data"><h2>Patient Registered</h2>
        <h3><?php
         printf($registeredPatient);  
        ?></h3></div>
    <div class="data"><h2>Patient Treated</h2>
        <h3>25</h3></div> <!-- LATER TO BE MODIFIED -->
   </div>
   <?php
   $get_HospitalDataArray=mysqli_fetch_array($res_getHospitalData);//FETCHING HOSPITAL ROW DATA INTO AN ARRAY
   
   
   ?>
<h1>Details:</h1>
<br>
<h4>ID : <?php echo $get_HospitalDataArray['hospital_id']; ?> </h4>
<h1>Hospital Name : <?php echo $get_HospitalDataArray['hospital_name']; ?></h1>
<h4>Address : <?php echo $get_HospitalDataArray['hospital_address']; ?></h4>
<h4>City : <?php echo $get_HospitalDataArray['hospital_city']; ?></h4>
<h4>State : <?php echo $get_HospitalDataArray['hospital_state']; ?> - <?php echo $get_HospitalDataArray['hospital_pincode']; ?> </h4>
<h1>Contact:</h1> 
<h4>Phone no. : <?php echo $get_HospitalDataArray['hospital_phone']; ?></h4>
<h4>Email : <?php echo $get_HospitalDataArray['hospital_email']; ?></h4>

<button id="logout">Log out</button>

</body>
<script>
document.getElementById('logout').addEventListener('click',()=>{
    window.open("./logout.php","_self");
})



</script>
</html>
