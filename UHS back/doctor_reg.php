
<?php
session_start();

include './connection.php';
$sql_get_hospital="SELECT `hospital_id`,`hospital_name` FROM `hospital_data`;";

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor Registration</title>
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



		* {
			margin: 0;
			padding: 0;
			user-select: none;
			-webkit-user-drag: none;

		}

		body {
			max-width: 100vw;
			height: 100vh;
			background-image: url('./Assets/doctor_background.jpg');
			background-size: cover;
			backdrop-filter: brightness(60%);
			background-repeat: no-repeat;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.primary_container {
			width: 60em;
			height: 30em;
			border-radius: 5px;
			background-color: aliceblue;
			box-shadow: 0 0 15px black;
		}

		#side_image {
			width: 18em;
			height: 30em;



		}

		.color_spread {
			width: 18em;
			height: 30em;
			position: relative;
			top: -30.2em;

			background-color: #002a95c2;
		}

		h2 {
			width: 9.5em;
			text-align: center;
			font-family: var(--font-5);
			font-size: 1.8em;
			text-shadow: 0 3px 3px #021f25;


			color: #ffffff;
			padding-top: 4em;
			margin-left: 0.2em;
			margin-bottom: 1em;
		}

		p {
			height: 13.8em;
			font-family: var(--font-4);
			font-size: 1.2em;
			font-weight: 800;
			text-align: justify;
			text-shadow: 8px 5px 2px #000000a1;
			padding: 1em;
			word-spacing: 0.5px;
			letter-spacing: 0.9px;
			color: aliceblue;
			background-color: #311b0b2b;

		}

		.secondary_container {
			width: 42em;
			height: 30em;
			position: relative;
			top: -60.2em;
			left: 18em;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
			background-color: #ffff;


		}

		.basic_details {
			width: 40.99em;
			height: 10em;

			display: flex;
			font-family: var(--font-3);
			font-weight: 650;



			padding-top: 1em;
			padding-left: 1em;




		}

		legend {
			margin-bottom: 0.7em;
		}

		.basic_details div {
			width: 15em;

			height: 4em;
			margin-right: 4em;
			position: relative;
		}

		.basic_details div:nth-child(4) {
			top: 5em;
			left: -40.5em;
		}

		.basic_details div:nth-child(5) {
			top: 5em;
			left: -42em;
		}




		.basic_details div input {
			outline: none;
			border: none;
			width: 7em;
			padding-top: 4px;
			padding-bottom: 2px;
			font-size: 1.35em;
			padding-left: 5px;
			padding-right: 5px;
			background-color: #ffffff;
			color: #01112feb;
			font-weight: 550;
			border-top-right-radius: 5px;
			border-top-left-radius: 5px;
			border-bottom: 2px solid #000000dc;
			font-family: var(--font-5);


		}

		.basic_details div input:focus {
			border-bottom: 2px solid #4d6afddc;
		}

		.account_details {
			width: 40.99em;
			height: 6em;

			display: flex;
			font-family: var(--font-3);
			font-weight: 650;



			padding-top: 2em;

			/* padding-left: 1em; */

		}

		.account_details div {
			margin: 0 3.5em 0 1em;
		}


		legend {
			margin-bottom: 0.7em;
		}

		.account_details div input {
			outline: none;
			border: none;
			width: 7em;
			padding-top: 4px;
			padding-bottom: 2px;
			font-size: 1.35em;
			padding-left: 5px;
			padding-right: 5px;
			background-color: #ffffff;
			color: #141517a6;
			border-top-right-radius: 5px;
			border-top-left-radius: 5px;
			border-bottom: 2px solid #000000dc;
			font-family: var(--font-5);


		}

		input {
			font-style: italic;
			box-shadow: 0 0 5px #00000065;
		}

		.account_details div input:focus {
			border-bottom: 2px solid #4d6afddc;
		}

		.form_button {
			height: 5em;
			display: flex;
			justify-content: center;


		}

		.form_button button {
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

		.form_button button:nth-child(1):hover {
			background-color: #ff9474;
			box-shadow: inset 0 0 10px #f90606b4;
		}

		.form_button button:nth-child(2):hover {
			background-color: #74ffa9;
			box-shadow: inset 0 0 10px #67f906b4;
		}

		input::-webkit-inner-spin-button,
		input::-webkit-outer-spin-button {
			-webkit-appearance: none;
		}

		.preloader {
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

		#progress {
			font-family: var(--font-4);
			font-weight: 550;
			font-size: 2em;
		}

		select {
			outline: none;
			border: none;
			width: 10em;
			height: 2em;
			font-family: var(--font-2);
			font-size: 1em;
			border-bottom: 2px solid black;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			background-color: white;
			box-shadow: 0 0 5px black;
		}

		select:hover {
			border-bottom: 2px solid rgb(112, 65, 252);
		}
	</style>
</head>

<body>

	<div class="preloader">
		<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="90px" height="90px" viewBox="0 0 128 128" xml:space="preserve">
			<g>
				<path d="M64 0L40.08 21.9a10.98 10.98 0 0 0-5.05 8.75C34.37 44.85 64 60.63 64 60.63V0z" fill="#ffb118" />
				<path d="M128 64l-21.88-23.9a10.97 10.97 0 0 0-8.75-5.05C83.17 34.4 67.4 64 67.4 64H128z" fill="#80c141" />
				<path d="M63.7 69.73a110.97 110.97 0 0 1-5.04-20.54c-1.16-8.7.68-14.17.68-14.17h38.03s-4.3-.86-14.47 10.1c-3.06 3.3-19.2 24.58-19.2 24.58z" fill="#cadc28" />
				<path d="M64 128l23.9-21.88a10.97 10.97 0 0 0 5.05-8.75C93.6 83.17 64 67.4 64 67.4V128z" fill="#cf171f" />
				<path d="M58.27 63.7a110.97 110.97 0 0 1 20.54-5.04c8.7-1.16 14.17.68 14.17.68v38.03s.86-4.3-10.1-14.47c-3.3-3.06-24.58-19.2-24.58-19.2z" fill="#ec1b21" />
				<path d="M0 64l21.88 23.9a10.97 10.97 0 0 0 8.75 5.05C44.83 93.6 60.6 64 60.6 64H0z" fill="#018ed5" />
				<path d="M64.3 58.27a110.97 110.97 0 0 1 5.04 20.54c1.16 8.7-.68 14.17-.68 14.17H30.63s4.3.86 14.47-10.1c3.06-3.3 19.2-24.58 19.2-24.58z" fill="#00bbf2" />
				<path d="M69.73 64.34a111.02 111.02 0 0 1-20.55 5.05c-8.7 1.14-14.15-.7-14.15-.7V30.65s-.86 4.3 10.1 14.5c3.3 3.05 24.6 19.2 24.6 19.2z" fill="#f8f400" />
				<circle cx="64" cy="64" r="2.03" />
				<animateTransform attributeName="transform" type="rotate" from="0 64 64" to="-360 64 64" dur="5ms" repeatCount="infinite" />
			</g>
		</svg>
		<br>
		<div id="progress">
			Loading . . .
		</div>
	</div>

	<div class="primary_container">
		<img src="./Assets/doctor_inside.jpg" alt="" id="side_image">
		<div class="color_spread">
			<h2>Doctor</h2>
			<p>Welcome to our doctor registration page. Our goal is to create a peaceful and supportive community that provides exceptional care to all patients. By partnering with us, we can work together to make a positive impact on healthcare. Let's build a better future together.</p>
		</div>
		<div class="secondary_container">


			<form action="./doctor_reg.php" method="post">
				<div class="basic_details">
					<div class="doctor_fname">
						<legend><label for="doctor_fname">First Name :</label></legend>
						<input type="text" name="doctor_fname" id="doctor_fname">
					</div>
					<div class="doctor_lname">
						<legend><label for="doctor_lname">Last Name :</label></legend>
						<input type="text" name="doctor_lname" id="doctor_lname">
					</div>
					<div class="doctor_fee">
						<legend><label for="doctor_fee">Check-up Fee :</label></legend>
						<input type="number" name="doctor_fee" id="doctor_fee">
					</div>
					<div class="doctor_speciality">
						<legend><label for="doctor_speciality">Speciality :</label></legend>
						<select name="doctor_speciality" id="doctor_speciality">
							<option selected>Select speciality</option>

							<option value="cardiology">Cardiology</option>
  <option value="dermatology">Dermatology</option>
  <option value="endocrinology">Endocrinology</option>
  <option value="gastroenterology">Gastroenterology</option>
  <option value="hematology">Hematology</option>
  <option value="neurology">Neurology</option>
  <option value="oncology">Oncology</option>
  <option value="pediatrics">Pediatrics</option>
  <option value="psychiatry">Psychiatry</option>
  <option value="radiology">Radiology</option>
						</select>
					</div>
					<div class="doctor_hospital">
						<legend><label for="doctor_hospital">Hospital :</label></legend>
						<select name="doctor_hospital" id="doctor_hospital">
<?php

$result_get_sql=mysqli_query($connection,$sql_get_hospital);
while($row_hospital_data=mysqli_fetch_array($result_get_sql))
{
	?>


<option value="<?php echo $row_hospital_data['hospital_id']; ?>"><?php echo $row_hospital_data['hospital_name']; ?></option>

<?php
}


?>

<option value="0" selected>Select Hospital</option>
						</select>
					</div>

				</div>
				<div class="account_details">
					<div>
						<legend> <label for="doctor_email">
								Email :
							</label></legend>
						<input type="email" name="doctor_email" id="doctor_email">
					</div>
					<div>
						<legend> <label for="doctor_password">
								Password :
							</label></legend>
						<input type="password" name="doctor_password" id="doctor_password">
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
		window.addEventListener('load', function() {
			document.querySelector('.preloader').style.display = 'none';


		})
	</script>

</html>


<?php


if($_SERVER['REQUEST_METHOD']==='POST')
{
    $doctor_id=uniqid('UHSDR-',false);
	$doctor_fname=$_POST['doctor_fname'];
	$doctor_lname=$_POST['doctor_lname'];
	$doctor_fee=$_POST['doctor_fee'];
	$doctor_speciality=$_POST['doctor_speciality'];
	$doctor_hospital=$_POST['doctor_hospital'];
    $doctor_email=$_POST['doctor_email'];
	$doctor_raw_password=$_POST['doctor_password'];
$doctor_encrypted_password=password_hash($doctor_raw_password,PASSWORD_DEFAULT);

$insert_doctor_data="INSERT INTO `doctor_data`(`hospital_id`, `doctor_id`, `doctor_fname`, `doctor_lname`, `speciality`, `fee`, `doctor_email`, `doctor_password`) VALUES ('$doctor_hospital','$doctor_id','$doctor_fname','$doctor_lname','$doctor_speciality','$doctor_fee','$doctor_email','$doctor_encrypted_password');";

$result_insert_doctor=mysqli_query($connection,$insert_doctor_data);

if(!$result_insert_doctor)
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