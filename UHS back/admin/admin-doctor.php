<?php 
session_start();
include './connection.php';
 $get_doctorId=$_SESSION['doctor_id'];

 //RETRIEVING DOCTOR DETAILS FORM TABLE
 $sql_DoctorData="SELECT * FROM `doctor` JOIN `hospital` ON `doctor`.`hospital_id`=`hospital`.`hospital_id` WHERE `doctor_id`='$get_doctorId'";
 $res_DoctorData=mysqli_query($connection,$sql_DoctorData);
//FETCHING DATA FROM THE TABLE AS ARRAY
$doctor_data_row=mysqli_fetch_array($res_DoctorData);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Doctor</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
li{
    cursor: pointer;
}
li:hover{
    color: red;
}
/* section{
    display: none;
} */
.history_block{
    width: 50%;
    height: 6em;
    margin-bottom: 1em;
    background-color: #000000;
    color: #ffffff;
}
    </style>
</head>
<body>
    
    <h1>Doctor Page</h1>
    <hr>
<ul>
    <li id="dashboard">Dashboard</li>
    <li id="patientHistory">Patient History</li>
    <li id="appointment">Appointments</li>
    <li id="logout">log out</li>
</ul>
   
<hr>

<!-- DASHBOARD SECTION -->
<section id="dashboardData">
<h1>Dashboard</h1>
<br>
<h4>ID : <?php echo$doctor_data_row['doctor_id'] ?></h4>
<h1>Dr. <?php echo $doctor_data_row['doctor_first_name']." ".$doctor_data_row['doctor_last_name'] ?></h1>
<h4>Hospital : <?php echo$doctor_data_row['hospital_name'] ?></h4>
<h4>Gender : <?php echo$doctor_data_row['doctor_gender'] ?></h4>
<h4>Speciality : <?php echo$doctor_data_row['doctor_speciality'] ?></h4>
<h4>Address : <?php echo$doctor_data_row['doctor_address'] ?></h4>
<h4>City : <?php echo$doctor_data_row['doctor_city'] ?></h4>
<h4>State : <?php echo$doctor_data_row['doctor_state'] ?></h4>
<h1>Contacts :</h1>
<h4>Phone No. : <?php echo$doctor_data_row['doctor_phone'] ?></h4>
<h4>Email : <?php echo$doctor_data_row['doctor_email'] ?></h4>




</section>


<!-- PATIENT HISTORY SECTION -->
<section id="patientData">

<h1>Patient History</h1>
<form action="./admin-doctor.php" method="get">
    <legend>Patient ID</legend>
    <input type="text" name="P-id" id="" placeholder="UHS-P Id number">
  <button type="submit" name="main">Submit</button>
</form>
<!-- RETRIEVING PATIENT HISTORY -->
<?php
if(isset($_GET['main'])){

$p_id="UHS-P-".$_GET['P-id'];
$_SESSION['pid']=$p_id;
//FETCHING PATIENT HISTORY
$sql_getPatientData="SELECT * FROM `patient_history` JOIN `patient` ON `patient_history`.`patient_id`=`patient`.`patient_id` JOIN `doctor` ON `patient_history`.`doctor_id`=`doctor`.`doctor_id` WHERE `patient_history`.`patient_id` = '$p_id'";

$res_getPatientHistory=mysqli_query($connection,$sql_getPatientData);



//PRINTING THE FETCHED DATA
while($patientHistory_row=mysqli_fetch_array($res_getPatientHistory))
{
?>

<div class="history_block">
<?php echo$patientHistory_row['treatment_date'] ?>   
<?php echo "Dr ".$patientHistory_row['doctor_first_name'] ?>
<?php echo$patientHistory_row['doctor_last_name'] ?>
<?php echo$patientHistory_row['patient_disease'] ?>
<?php echo$patientHistory_row['patient_medication'] ?>


</div>




<?php

}



}



?>

<h1>Add Report</h1>
<form action="./admin-doctor.php" method="get">
<legend>Patient ID</legend>
    <input type="text" name="P-id" id="" placeholder="UHS-P Id number">
<legend>Disease</legend>
<input type="text" name="P-disease" id="">
<legend>Medication</legend>
<input type="text" name="P-medicine" id="">
<button type="submit" name="insert">Submit</button>

</form>
<?php 

if(isset($_GET['insert']))
{
    $date = date("d/m/Y");
    $p_id="UHS-P-".$_GET['P-id'];
    $d_id=$doctor_data_row['doctor_id'];
    $p_disease=$_GET['P-disease'];
    $p_medicine=$_GET['P-medicine'];


    $sql_insertPatientInsert="INSERT INTO `patient_history`(`treatment_date`, `patient_id`, `doctor_id`, `patient_disease`, `patient_medication`) VALUES ('$date','$p_id','$d_id','$p_disease','$p_medicine')";

    $res_insertPatientHistory=mysqli_query($connection,$sql_insertPatientInsert);

    if(!$res_insertPatientHistory){
        echo "Not Inserted";
    }
    else{
        echo "Inserted";
    }





}




?>


</section>



<!-- APPOINTMENT SECTION -->
<section id="appointmentData">
<h1>Appointments</h1>
<table> <tr>
    <th>Name</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
</tr> 
<?php
$sql_getAppointment="SELECT * FROM `appointments` JOIN `patient` ON `appointments`.`patient_id`=`patient`.`patient_id` JOIN `doctor` ON `appointments`.`doctor_id`=`doctor`.`doctor_id` WHERE `appointments`.`doctor_id`='$get_doctorId'";

$res_getAppointment=mysqli_query($connection,$sql_getAppointment);

while($getAppointment_row=mysqli_fetch_array($res_getAppointment)){

    ?>
<tr>
<td><?php echo$getAppointment_row['patient_first_name'].$getAppointment_row['patient_last_name']; ?></td>
<td><?php echo$getAppointment_row['patient_address'] ?></td>
<td><?php echo$getAppointment_row['patient_city'] ?></td>
<td><?php echo$getAppointment_row['patient_phone'] ?></td>


</tr>


<?php
}




?>



</table>



</section>
  

</body>

<script>
document.getElementById('logout').addEventListener('click',()=>{
    window.open("./logout.php","_self");
})



</script>

</html>

