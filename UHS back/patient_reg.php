<?php
session_start();
include './connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Registration</title>
	<style>
/* Importiong fonts from Google Fonts */

  @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Raleway&family=Roboto&family=Ubuntu&display=swap');


:root {
  --font-1: 'Open Sans', sans-serif;
  --font-2: 'Roboto', sans-serif;
  --font-3: 'Montserrat', sans-serif;



  --font-4: 'Raleway', sans-serif;
  
  --font-5: 'Ubuntu', sans-serif;
}



*{
	margin:0;
	padding: 0;
	user-select:none;
    -webkit-user-drag: none;
	
}
body{
	max-width: 100vw;
    height: 100vh;
	background-image: url('./Assets/patient_background.jpg');
	background-size: cover;
	backdrop-filter:brightness(60%);
	background-repeat: no-repeat;
	display: flex;
	justify-content: center;
	align-items: center;
}
.primary_container{
	width: 60em;
	height: 30em;
	border-radius: 5px;
	background-color: aliceblue;
	box-shadow: 0 0 15px black;
}

#side_image{
	width: 18em;
	height: 30em;



}
.color_spread{
	width: 18em;
	height: 30em;
	position: relative;
	top: -30.2em;

	background-color: #002a95c2;
}

h2{   width: 9.5em;
	text-align: center;
	font-family: var(--font-5);
	font-size: 1.8em;
text-shadow: 0 3px 3px #021f25;

	
	color: #ffffff;
padding-top: 4em;
margin-left: 0.2em;
margin-bottom: 1em;
}

p{height: 13.8em;
	font-family: var(--font-4);
	font-size: 1.2em;
	font-weight: 800;
	text-align: justify;
	text-shadow:  8px 5px 2px #000000a1;
	padding: 1em;
	word-spacing: 0.5px;
letter-spacing: 0.9px;
	color: aliceblue;
	background-color: #311b0b2b;

}

.secondary_container{
	width: 42em;
	height: 30em;
	position: relative;
	top: -60.2em;
	left: 18em;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
	background-color: #ffff;
	

}

.basic_details{
	width: 40.99em;
	height: 10em;
	
	display: flex;
	font-family: var(--font-3);
	font-weight: 650;



	padding-top: 1em;
padding-left: 1em;

	
	

}
legend{
	margin-bottom: 0.7em;
}

.basic_details div{
width: 15em;

height: 4em;
margin-right: 4em;
position: relative;
}
.basic_details div:nth-child(4)
{
	top: 5em;
	left: -40.5em;
}
.basic_details div:nth-child(5)
{
	top: 5em;
	left: -40.5em;
}
.basic_details div:nth-child(6)
{
	top: 5em;
	left: -40.5em;
}

select{
	outline: none;
	border: none;
	text-align: center;
	width: 8em;
	height: 1.82em;

	font-size: 1.2em;
	padding-left: 5px;
	padding-right: 5px;
	background-color:#ffffff ;
	color: #01112feb;
	font-weight: 550;
	box-shadow: 0 0 5px #00000090;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	border-bottom: 2px solid #000000dc;
	font-family: var(--font-5);
}

select:hover{
	border-bottom: 2px solid #6e7afcdc;
}

.basic_details div input{
	outline: none;
	border: none;
	width: 7em;
	padding-top: 4px;
	padding-bottom: 2px;
	font-size: 1.35em;
	padding-left: 5px;
	padding-right: 5px;
	background-color:#ffffff ;
	color: #01112feb;
	font-weight: 550;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	border-bottom: 2px solid #000000dc;
	font-family: var(--font-5);
	
	
}

.basic_details div input:focus{
	border-bottom: 2px solid #4d6afddc;
}

.account_details{
	width: 40.99em;
	height: 6em;
	
	display: flex;
	font-family: var(--font-3);
	font-weight: 650;



	padding-top: 2em;
	
/* padding-left: 1em; */

}

.account_details div{
	margin: 0 3.5em 0 1em ;
}


legend{
	margin-bottom: 0.7em;
}

.account_details div input{
	outline: none;
	border: none;
	width: 7em;
	padding-top: 4px;
	padding-bottom: 2px;
	font-size: 1.35em;
	padding-left: 5px;
	padding-right: 5px;
	background-color:#ffffff ;
	color: #141517a6;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	border-bottom: 2px solid #000000dc;
	font-family: var(--font-5);
	
	
}

input{
	font-style: italic;
	box-shadow: 0 0 5px #00000065;
}
.account_details div input:focus{
	border-bottom: 2px solid #4d6afddc;
}

.form_button{
	height: 5em;
	display: flex;
	justify-content: center;

	
}
.form_button button{
	width: 6em;
	height: 3em;
	margin-right: 3em;
	margin-top: 5em;
	border-radius: 15px;
	border: none;
	background-color: rgb(127, 206, 255);
	font-family: var(--font-3);
	font-weight: 550;
	font-size: 1em;
}
.form_button button:nth-child(1):hover{
	background-color: #ff9474;
	box-shadow: inset 0 0 10px #f90606b4;
}
.form_button button:nth-child(2):hover{
	background-color: #74ffa9;
	box-shadow: inset 0 0 10px #67f906b4;
}

input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{
-webkit-appearance: none;
}
.preloader{
	position: absolute;
	width: 100%;
	height: 100%;

	background-color: white;
	z-index: 9999;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
#progress{
	font-family: var(--font-4);
	font-weight: 550;
	font-size: 2em;
}


/*Large Mobile Responsive */





	</style>
</head>
<body>

<div class="preloader">
	<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="90px" height="90px" viewBox="0 0 128 128" xml:space="preserve"><g><path d="M64 0L40.08 21.9a10.98 10.98 0 0 0-5.05 8.75C34.37 44.85 64 60.63 64 60.63V0z" fill="#ffb118"/><path d="M128 64l-21.88-23.9a10.97 10.97 0 0 0-8.75-5.05C83.17 34.4 67.4 64 67.4 64H128z" fill="#80c141"/><path d="M63.7 69.73a110.97 110.97 0 0 1-5.04-20.54c-1.16-8.7.68-14.17.68-14.17h38.03s-4.3-.86-14.47 10.1c-3.06 3.3-19.2 24.58-19.2 24.58z" fill="#cadc28"/><path d="M64 128l23.9-21.88a10.97 10.97 0 0 0 5.05-8.75C93.6 83.17 64 67.4 64 67.4V128z" fill="#cf171f"/><path d="M58.27 63.7a110.97 110.97 0 0 1 20.54-5.04c8.7-1.16 14.17.68 14.17.68v38.03s.86-4.3-10.1-14.47c-3.3-3.06-24.58-19.2-24.58-19.2z" fill="#ec1b21"/><path d="M0 64l21.88 23.9a10.97 10.97 0 0 0 8.75 5.05C44.83 93.6 60.6 64 60.6 64H0z" fill="#018ed5"/><path d="M64.3 58.27a110.97 110.97 0 0 1 5.04 20.54c1.16 8.7-.68 14.17-.68 14.17H30.63s4.3.86 14.47-10.1c3.06-3.3 19.2-24.58 19.2-24.58z" fill="#00bbf2"/><path d="M69.73 64.34a111.02 111.02 0 0 1-20.55 5.05c-8.7 1.14-14.15-.7-14.15-.7V30.65s-.86 4.3 10.1 14.5c3.3 3.05 24.6 19.2 24.6 19.2z" fill="#f8f400"/><circle cx="64" cy="64" r="2.03"/><animateTransform attributeName="transform" type="rotate" from="0 64 64" to="-360 64 64" dur="2700ms" repeatCount="indefinite"/></g></svg>
	<br>
	<div id="progress">
		Loading . . . 
	</div>
</div>

	<div class="primary_container">
<img src="./Assets/patient_inside.jpg" alt="" id="side_image">
<div class="color_spread">
	<h2>Patient Registration</h2>
  <p>Welcome to our patient registration page. Our goal is to create a special digital record management system for all patients. By partnering with us, we can work together to make a positive impact on healthcare. Let's build a better future together.</p>
</div>
<div class="secondary_container">


	<form action="./patient_reg.php" method="post">
<div class="basic_details">
	<div class="patient_fname">
        <legend><label for="patient_fname">First Name :</label></legend>
        <input type="text" name="patient_fname" id="patient_fname">
    </div>
	<div class="patient_lname">
        <legend><label for="patient_lname">Last Name :</label></legend>
        <input type="text" name="patient_lname" id="patient_lname">
    </div>
<div class="patient_dob">
    <legend><label for="patient_dob">Date Of Birth :</label></legend>
    <input type="date" name="patient_dob" id="patient_dob">
</div>
<div class="patient_blood">
    <legend><label for="patient_blood">Blood Group :</label></legend>
    <select name="patient_blood" id="patient_blood">
        <option value="0" selected>Select</option>
        <option value="a+ve">A+</option>
        <option value="a-ve">A-</option>
        <option value="b+ve">B+</option>
        <option value="b-ve">B-</option>
        <option value="b-ve">AB+</option>
		<option value="b-ve">AB-</option>
        <option value="b-ve">O+</option>
        <option value="b-ve">O-</option>
        
    </select>
    
</div>


<div class="patient_address">
	<legend><label for="patient_address">Address :</label></legend>
	<input type="text" name="patient_address" id="patient_address">
</div>
<div class="patient_city">
	<legend><label for="patient_city">City :</label></legend>
	<input type="text" name="patient_city" id="patient_city">
</div>


</div>
<div class="account_details">
	<div><legend> <label for="patient_email">
		Email :
	</label></legend>
	<input type="email" name="patient_email" id="patient_email">
</div>
<div class="patient_contact">
	<legend><label for="patient_contact">Phone No :</label></legend>
	<input type="number" name="patient_contact" id="patient_contact">
</div>
<div> <legend>	<label for="patient_password">
		Password :
	</label></legend>
	<input type="password" name="patient_password" id="patient_password">
</div>
</div>

<div class="form_button">
	<button type="reset">Reset</button>
	<button type="submit">Submit</button>
</div>

	</form>
</div>

	</div>

	

<script>
	window.addEventListener('load',function(){
		document.querySelector('.preloader').style.display='none';
		
		
	})
</script>







<?php

if($_SERVER['REQUEST_METHOD']==='POST')
{

	$patient_id=uniqid('UHSPT-',false);
	$patient_fname=$_POST['patient_fname'];
	$patient_lname=$_POST['patient_lname'];
	$patient_dob=$_POST['patient_dob'];
	$patient_blood=$_POST['patient_blood'];
	$patient_address=$_POST['patient_address'];
	$patient_city=$_POST['patient_city'];
	$patient_email=$_POST['patient_email'];
	$patient_contact=$_POST['patient_contact'];
	$patient_raw_password=$_POST['patient_password'];


	$patient_age=date('Y') - substr($patient_dob,0,4);

$patient_encrypt_password=password_hash($patient_raw_password,PASSWORD_DEFAULT);



$sql_insert_patient="INSERT INTO `patient_data`(`patient_id`, `patient_fname`, `patient_lname`, `patient_age`, `patient_blood`,`patient_address`, `patient_city`, `patient_emaill`, `patient_contact`, `patient_password`) VALUES ('$patient_id','$patient_fname','$patient_lname','$patient_age','$patient_blood','$patient_address','$patient_city','$patient_email','$patient_contact','$patient_encrypt_password')";


$insert_patient_result=mysqli_query($connection,$sql_insert_patient);

if(!$insert_patient_result)
{
	echo '<script> console.log("Not Submitted"); window.open("./fail.html","_self")</script>';
	
}
else
{
	echo '<script> console.log("Submitted"); window.open("./sucess.html","_self")</script>';
	
}












}

























session_destroy();

?>






</html>