<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Doctor</title>

    <!-- Bootstrap 5.2v -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<!-- Custom CSS -->

<style>
/* body{
    padding:5rem;
} */
    form,option{
        font-weight: 550;
        font-size: 1.2rem;
    }
    input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{
      appearance: none;
    }
    
   

    
</style>


</head>
<body class="bg-black  pt-5">
    
<div class="container border border-primary border-1 col-lg-8 col-md-7   bg-body-secondary position-absolute top-50 start-50 translate-middle rounded-2 mt-5 mb-4 pb-4">

<form action="./doctor-reg.php" method="post">
    <h3 class="text-center mb-2 mt-2">Doctor Registration</h3>
    <div class="container bg-body-tertiary  border border-black border-1 border-opacity-60 rounded-2 p-2 shadow">
        <label for="name">Doctor Name</label>
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

          <select required  class="form-select  mt-3 mb-4 shadow-lg"  style="height: 3.5em;font-weight:550;" name="huid">
            <option selected style="display: none;">Select Hospital</option>
<?php
include '../connection.php';

$get_data="SELECT `uid`,`name` FROM `hospital`";

$hGet=mysqli_query($connection,$get_data);
while($row_hget=mysqli_fetch_array($hGet))
{
  ?>
<option value="<?php echo $row_hget['uid'] ?>"><?php echo $row_hget['name'] ?></option>
  <?php
}




?>



          </select>



          <select required class="form-select  mt-3 mb-4 shadow-lg" style="height: 3.5em;font-weight:550;" name="speciality">
            <option selected style="display: none">Select Speciality</option>


            
  <option value="cardiologist">Cardiologist</option>
  <option value="dermatologist">Dermatologist</option>
  <option value="endocrinologist">Endocrinologist</option>
  <option value="gastroenterologist">Gastroenterologist</option>
  <option value="hematologist">Hematologist</option>
  <option value="neurologist">Neurologist</option>
  <option value="Gynecologist">Gynecologist</option>
  <option value="oncologist">Oncologist</option>
  <option value="ophthalmologist">Ophthalmologist</option>
  <option value="orthopedic-surgeon">Orthopedic Surgeon</option>
  <option value="otolaryngologist">Otolaryngologist (ENT)</option>
  <option value="pediatrician">Pediatrician</option>
  <option value="psychiatrist">Psychiatrist</option>
  <option value="pulmonologist">Pulmonologist</option>
  <option value="radiologist">Radiologist</option>
  <option value="rheumatologist">Rheumatologist</option>
  <option value="surgeon">Surgeon</option>
  <option value="urologist">Urologist</option>
  <option value="allergist-immunologist">Allergist/Immunologist</option>


            
          </select>


          <div class="form-floating mb-3 mt-4">
            <input required type="number" class="form-control h-100 shadow-lg" id="fee" placeholder="Enter text" style="font-weight: 550;" name="fee" >
            <label for="input1">Fee</label>
          </div>

          <div class="form-floating mb-3 mt-4">
            <input required type="number" class="form-control h-100 shadow-lg" id="phone" placeholder="Enter text" style="font-weight: 550;" name="phone">
            <label for="input1">Phone</label>
          </div>
          <div class="form-floating mb-3">
            <input required type="email" class="form-control h-100 shadow-lg" id="email" placeholder="Enter text" style="font-weight: 550;" name="email">
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') //IT ONLY EXECUTES IF THE FORM IS SUBMITTED
{


  $duid = uniqid('UHS-D', false); //GENERATE UNIQUE STRING BASED ON TIME WHEN FALSE IT GENERATE 16 DIGIT STRING OR 32 DIGIT WHEN TRUE
  $huid = $_POST['huid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $speciality = $_POST['speciality'];
  $fee = $_POST['fee'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $passWord_raw = $_POST['password'];
  $passWord_enc=password_hash($passWord_raw,PASSWORD_DEFAULT);

  $sql = "INSERT INTO `doctor`(`d_uid`, `h_uid`, `firstname`, `lastname`, `gender`, `speciality`, `fee`, `phone`, `email`, `password`) VALUES ('$duid','$huid','$fname','$lname','$gender',' $speciality',' $fee','$phone','$email','$passWord_enc')";


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