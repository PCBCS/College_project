<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration - Hospital</title>

  <!-- Bootstrap 5.2v -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


  <!-- Custom CSS -->

  <style>
    form {
      font-weight: 550;
      font-size: 1.2rem;
    }

    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
      appearance: none;
    }
  </style>


</head>

<body class="bg-black">

  <div class="container border border-primary border-1 col-lg-3 col-md-7   bg-body-secondary position-absolute top-50 start-50 translate-middle rounded-2 p-2">

    <form action="./hospital-reg.php" method="post">
      <h3 class="text-center mb-5 mt-2">Hospital Registration</h3>
      <div class="container bg-body-tertiary  border border-black border-1 border-opacity-60 rounded-2 p-2 shadow">
        <div class="form-floating mb-4 mt-3">
          <input type="text" class="form-control h-100  shadow-lg" name="name" placeholder="name@example.com">
          <label for="name">Hospital Name</label>
        </div>
        <label for="">Organization Type &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input " type="radio" value="Private" name="org_type">
          <label class="form-check-label" for="">Private</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" value="Govt." name="org_type">
          <label class="form-check-label" for="">Govt.</label>
        </div>
        <div class="form-floating mb-3 mt-4">
          <input type="number" class="form-control h-100 shadow-lg" name="phone" placeholder="Enter text">
          <label for="">Phone</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control h-100 shadow-lg" name="email" placeholder="Enter text">
          <label for="">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control h-100 shadow-lg" name="address" placeholder="Enter text">
          <label for="">Address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control h-100 shadow-lg" name="city" placeholder="Enter text">
          <label for="">City</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control h-100 shadow-lg" name="state" placeholder="Enter text" readonly value="Odisha">
          <label for="">Odisha</label>
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') //IT ONLY EXECUTES IF THE FORM IS SUBMITTED
{
  include "../connection.php";

  $uid = uniqid('UHS-H', false); //GENERATE UNIQUE STRING BASED ON TIME WHEN FALSE IT GENERATE 16 DIGIT STRING OR 32 DIGIT WHEN TRUE

  $name = $_POST['name'];
  $type = $_POST['org_type'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];

  $sql = "INSERT INTO `hospital`(`uid`, `name`, `org_type`, `phone`, `email`, `address`, `city`, `state`) VALUES (
'$uid','$name','$type','$phone','$email','$address','$city','$state')";


  $res = mysqli_query($connection, $sql);
  if (!$res) {
    header('location:failed.html'); //REDIRECT TO FAILED PAGE IF ERROR OCCURED
    exit();
  } else {

    header('location:sucess.html'); //REDIRECT TO SUCESS PAGE IF NO ERROR OCCURED
    exit();
  }
}






?>