<?php 
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            text-align: center;
            color: yellow;
        }
        button {
            color: white;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- <div>
    <h1>WELCOME
    <?php echo $_SESSION['username']; ?> </h1>
    <div class="container">
        <button><a href="logout.php">LOG-OUT</a></button>
    </div> -->
</body>
</html>