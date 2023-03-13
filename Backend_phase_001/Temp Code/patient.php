

<?php

require "./connection.php"

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 0.5em;
        }
    </style>
</head>
<body>



    
<form action="patient.php" method="post">


    <div>
    <fieldset>
    
    
    <legend>Patient</legend>
   

<input type="text" name="id" id="did" disabled>


<select name="dcname" id="dcname">

<option value="0" selected>select doctor</option>


</select>

<select name="hid_s" id="hid_s">


<option value="0" selected>Select Hospital</option>


</select>


<input type="text" name="hid_ss" id="hid_ss" disabled>

<input type="text" name="pname" id="pname" placeholder="Enter name">

<input type="text" name="page" id="page" placeholder="Enter age">

<input type="text" name="pdis" id="pdis" placeholder="Enter disease">

<input type="text" name="pmed" id="pmed" placeholder="Enter med">







    
    
    <input type="submit" value="Submit">
    
    
    </fieldset>
    
    
    </div>
    </form>   
    








    
</body>
</html>






