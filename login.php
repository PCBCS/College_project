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
    <title>Log-in page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }
        label {
            display: block;
        }
        div {
            margin: 2rem;
            margin-left: 4.4rem;
        }
        .container {
            border: 2px solid black;
            border-radius: 10px;
            width: 20rem;
            align-items: center;
        }
        h3 {
            text-align: center;
        }
        input {
            height: 1.5rem;
        }
    </style>
</head>
<body>
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
    <form action="login.php" method="POST">
        <div class="container">
            <h3>Log-in page</h3>
            <div class="usernmae">
                <label for="">Username</label>
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="pass">
                <label for="">Password</label>
                <input type="password" placeholder="password" name="password">
            </div>
            <div class="btn">
                <button type="submit">Log in</button>
            </div>
        </div>
    </form>
</body>
</html>