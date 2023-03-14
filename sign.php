<?php

    $sucess = 0;
    $user = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        // $sql = "INSERT INTO registation(username,password)
        // values('$username','$password')";

        // $result = mysqli_query($con,$sql);

        // if(!$result) {
        //     die(mysqli_error($con));
        // }
        // else {
        //     echo "Data inserted successfully";
        // }


        $sql = "SELECT * FROM registation WHERE username='$username'";
        $result = mysqli_query($con,$sql);
        if($result) {
            $num = mysqli_num_rows($result);
            if($num>0) {
                // echo "username already exist";
                $user = 1;
            }
            else {
                $sql = "INSERT INTO registation(username,password)
                values('$username','$password')";
        
                $result = mysqli_query($con,$sql);
        
                if(!$result) {
                    die(mysqli_error($con));
                }
                else {
                    // echo "Sign up successfull";
                    $sucess = 1;
                    header('location:login.php');
                }

            }
        }
    }
?>
<!-- log-in -->
 <?php

    $login = 0;
    $invalid = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM registation WHERE username='$username' AND password='$password'" ;
        $result = mysqli_query($con,$sql);
        if($result) {
            $num = mysqli_num_rows($result);
            if($num>0) {
                // echo "log-in successfull";
                $login = 1;
                session_start();
                $_SESSION['username'] = $username;
                header('location:home.php');
            }
            else {
                // echo "invalid data";
                $invalid = 1;
            }
            }
        } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up page</title>
    <style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}
.grp {
    display: flex;
    justify-content: center;
    align-items: center;
    margin:1rem 3rem;
    padding: 0;
    color: white;
}
.grp text {
    margin: 0;
}
</style>
</head>
<body>
    <?php
    if($user) {
            echo "User already exist";
    }
    if($sucess) {
        echo "You are successfully signed up";
}
    ?>
    <?php
    if($login) {
        echo '<div class="alert alert-success alert dismissible fade show" role="alert">
        <strong>thanks</strong>you loged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
     ?>

    <?php
    if($invalid) {
        echo '<div class="alert alert-danger alert dismissible fade show" role="alert">
        <strong>Error</strong> Invalid credential.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="sign.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<div class="grp">
                        <input type="radio" name="p">patient
                        <input type="radio" name="p">doctor
                        <input type="radio" name="p">other
                    </div>
					<input type="email" name="username" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="login.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>