<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Patient</title>

    <!-- Bootstrap 5.2v -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<!-- Custom CSS -->

<style>
    form{
        font-weight: 550;
        font-size: 1.2rem;
    }
    input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{
      appearance: none;
    }
    

    
</style>


</head>
<body class="bg-black h-100 pb-4">
    
<div class="container border border-primary border-1 col-lg-7 col-md-7   bg-body-secondary position-absolute top-50 start-50 translate-middle rounded-2 p-2 mt-5 mb-4">

<form action="./patient-reg.php" method="post">
    <h3 class="text-center mb-2 mt-2">Patient Registration</h3>
    <div class="container bg-body-tertiary  border border-black border-1 border-opacity-60 rounded-2 p-2 shadow">
        <label for="name">Patient Name</label>
       <div class="container-fluid d-flex justify-content-evenly p-0">
        
        <div class="form-floating mb-3 mb-4 mt-3">
          <input required type="text" class="form-control h-100  shadow-lg" name="fname" placeholder="First Name" style="font-weight: 550;">
          <label for="name">First Name</label>
          
        </div>
      <div class="form-floating mb-2 mb-4 mt-3">
          <input required type="text" class="form-control h-100  shadow-lg" name="lname" placeholder="Last Name" style="font-weight: 550;">
          <label for="name">Last Name</label>
        </div>
       </div>

<label for="" >Gender &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
<div class="form-check form-check-inline">
  <input class="form-check-input " type="radio"  value="Male" name="gender" id="mm">
  <label class="form-check-label" for="mm">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  value="Female" name="gender" id="ff">
  <label class="form-check-label" for="ff">Female</label>
</div>

          <div class="container-fluid p-0 d-flex">
            <div class="container-fluid p-0 w-100">
              <label class="form-check-label" for="">
                  Birth Date :  
              </label>
              <div class="d-flex justify-content-evenly ">
                 
                  <div class="form-floating col-2 mb-3 mt-4 ">
                      <input type="number" class="form-control h-100 shadow-lg text-center"  placeholder="Enter text" style="font-weight: 550;" name="day">
                      <label for="">Day</label>
                    </div> 
                    <div class="form-floating col-3 mb-3 mt-4">
                      <input type="number" class="form-control h-100 shadow-lg text-center"  placeholder="Enter text" style="font-weight: 550;" name="month">
                      <label for="">Month</label>
                    </div>
                    <div class="form-floating col-4 mb-3 mt-4">
                      <input type="number" class="form-control h-100 shadow-lg text-center" placeholder="Enter text" style="font-weight: 550;" name="year">
                      <label for="">Year</label>
                    </div>
              </div>
           </div>
  <div>
           <div class="form-floating mb-3 mt-5">
              <input type="text" class="form-control h-100  shadow-lg" placeholder="name@example.com" style="text-transform: uppercase;font-weight: 550;" name="bloodgroup">
              <label for="">Blood Group</label>
            </div>
          </div>
          </div>
         
          <div class="form-floating mb-3">
            <input type="text" class="form-control h-100 shadow-lg"  placeholder="Enter text" style="font-weight: 650;" name="address">
            <label for="">Address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control h-100 shadow-lg" id="city" placeholder="Enter text" style="font-weight: 650;" name="city">
            <label for="input4">City</label>
          </div>



         

          <div class="form-floating mb-3 mt-4">
            <input required type="number" class="form-control h-100 shadow-lg"  placeholder="Enter text" style="font-weight: 650;" name="phone">
            <label for="input1">Phone</label>
          </div>
          <div class="form-floating mb-3">
            <input required type="email" class="form-control h-100 shadow-lg" id="email" placeholder="Enter text" style="font-weight: 650;" name="email">
            <label for="input2">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input required type="password" class="form-control h-100 shadow-lg" id="pass" placeholder="Enter text" name="password">
            <label for="input2">Password</label>
          </div>
          
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
    </div>
</form>

</div>


</body>
</html>




<?php
// FOR PUSH DATA INTO DATABASE
include '../connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') //IT ONLY EXECUTES IF THE FORM IS SUBMITTED
{


  $puid = uniqid('UHS-P', false); //GENERATE UNIQUE STRING BASED ON TIME WHEN FALSE IT GENERATE 16 DIGIT STRING OR 32 DIGIT WHEN TRUE
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $bloodGroup = $_POST['bloodgroup'];

  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $passWord_raw = $_POST['password'];
  $passWord_enc=password_hash($passWord_raw,PASSWORD_DEFAULT);

 $sql = "INSERT INTO `patient`(`puid`, `fname`, `lname`, `gender`, `bday`, `bmonth`, `byear`, `bloodgroup`, `address`, `city`, `phone`, `email`, `password`) VALUES ('$puid','$fname','$lname','$gender','$day','$month','$year','$bloodGroup','$address','$city','$phone','$email','$passWord_enc')";


   $res = mysqli_query($connection, $sql);
  if (!$res) {
    echo"<script>window.open('./failed.html','_self')</script>"; //REDIRECT TO FAILED PAGE IF ERROR OCCURED
    exit();
  } else {

    echo"<script>window.open('./sucess.html','_self')</script>"; //REDIRECT TO SUCESS PAGE IF NO ERROR OCCURED
    exit();
  }
}






?>