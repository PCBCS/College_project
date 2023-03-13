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
<form action="hospital.php" method="post">

 

<div>
<fieldset>


<legend>Hospital Data</legend>
<input type="text" name="hid" id="hid" readonly>

<input type="text" name="hospital_name" id="hospital_name" placeholder="Enter Hospital Name :"  onblur="gen()" required>
<script>






gen=()=>{
    gg= "HID"+(Math.floor(Math.random()*8999+1000));
document.getElementById('hid').value=gg;



}
</script>

<input type="text" name="address" id="address" placeholder="Enter Address :" required>


<input type="submit" id="sub" value="submit" name="submit">






<?php

   if(isset($_POST['submit']))
  {
    $id=$_POST['hid'];
 $nm=$_POST['hospital_name'];
 $addrs=$_POST['address'];








$h_data="INSERT INTO `hospital`(`UID`, `Name`, `Address`) VALUES ('$id','$nm','$addrs')";

$res=mysqli_query($con,$h_data);







if(!$res)
{
    echo"Not Inserted";
  


   
}

else{
    echo"Inserted";


}

}



else{
    echo "Not submitted";
}

?>






</fieldset>


</div>
</form>   
</body>
</html>