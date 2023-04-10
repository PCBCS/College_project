<?php
session_start();

session_unset();
session_destroy();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHS - Result (Sucess)</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        *{
        
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(45deg,#00a100ec,#ddff00);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .conteiner{width: 20rem;
            height: 11rem;
            display: flex;
            flex-direction: column;
          
            text-align: center;
            background-color: #75f3eda7;
            border-radius: 15px;
            box-shadow: 0 0 15px #000000c6;
            font-family: 'Montserrat', sans-serif;
        }
        img{
            width: 5em;


        }
        #primary_txt_container{
            font-size: 2rem;
            font-weight: 550;
        }
        #secondary_txt_container{
            font-size: 1rem;
            font-weight: 600;
            margin-top: 1em;
            font-style: italic;
        }
    </style>
</head>
<body>
    
<div class="conteiner">
<div id="img_container"><img src="https://img.icons8.com/color/48/null/checked--v4.png" alt="sucess"/></div>
<div id="primary_txt_container">Log Out</div>
<div id="secondary_txt_container">Redirecting To Homepage in <span id="sec_counter"></span> sec </div>
</div>

</body>

<script>
  const timer =  document.getElementById('sec_counter')
 counter=3;
setInterval(() => {
    timer.innerHTML="0"+counter;
    counter=counter-1;
    if(counter==0)
    {     
        window.open("https://pcbcs.github.io/College_project/","_self");
    
    }
}, 900);




</script>

</html>
