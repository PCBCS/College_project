
<?php

require "./connection.php";
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
    
<form action="doctor.php" method="post">

 

    <div>
    <fieldset>
    
    
    <legend>Doctor Data</legend>
   

<input type="text" name="id" id="did" disabled>
<input onblur="gen()" type="text" name="dname" id="dname" placeholder="Enter Doctor's Name :">
<script>
gen=()=>{
    gg= "DOC"+(Math.floor(Math.random()*899+100));
document.getElementById('did').value=gg;



}
</script>




<select name="hid_s" id="hid_s" onblur="getval()">
<?php 

$option="SELECT * FROM `hospital`";

$disp_res=mysqli_query($con,$option);



while( $disp_qu=mysqli_fetch_array($disp_res))
{
    ?>
    <option value="<?php echo $disp_qu['UID'] ?>"><?php echo $disp_qu['Name'] ?></option>
<?php
}






?>



<option value="0" selected>Select Hospital</option>


</select>

<script>
getval=()=>{
val=document.getElementById('hid_s').value;
document.getElementById('hid_ss').value=val;


}
</script>


<input type="text" name="hid_ss" id="hid_ss" disabled>








    
    
    <input type="submit" value="Submit">
    
    
    </fieldset>
    
    
    </div>
    </form>   
</body>
</html>