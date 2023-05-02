<?php
include './connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <title>Patient - View Doctor</title>
    <style>
        a {
            margin: 1em;
            text-decoration: none;
            font-size: 25px;
        }
        option{
            text-transform: capitalize;
        }
        td{
            text-transform: capitalize;
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="bg-success bg-gradient h-50 p-2">
        <a class="text-white " href="./patient-home.php">Home</a>
        <a class="text-white" href="./patient-history.php">History</a>
        <a class="text-white bg-primary bg-gradient rounded p-1"
            href="./view-doctor.php">Doctors</a>
        <a class="text-white" href="https://pcbcs.github.io/College_project/">Log out</a>
    </nav>
    <hr>
    <h1>Home</h1>

    <br>

    <h2 class="text-center text-white">Doctors</h2>

    <form action="./view-doctor.php" method="post" class=" w-100 mt-5 mb-5 p-2">
        <div class="mt-4 w-100 d-flex justify-content-center mt-4">
            <select name="speciality" id="" class="form-control w-50 form-select fs-5 fw-semibold fst-italic">
                <option value="" class="form-control fs-4 fw-semibold fs-4 d-none" selected>Select Speciality</option>

                <?php
$sqlSp="SELECT * FROM `doctor`";
$resSp=mysqli_query($connection,$sqlSp);
$rowSpd = mysqli_fetch_array($resSp);
while($rowSp = mysqli_fetch_array($resSp))
{
    
    ?>

<option value="<?php echo $rowSp['speciality'];?>" class="form-control fs-4 fw-semibold fs-4" ><?php echo $rowSp['speciality'];?></option>



<?php
}




?>
</select>
        <button id="btn"  name='submit' type="submit" class="rounded w-25 ms-2 bg-gradient bg-primary fs-5 fw-bold text-white">Submit</button>
        </div>
    </form>








    <table id="table" class="table table-responsive-md  text-center table-dark text-white">
        <thead class="fs-5 fw-light ">
            <th class="fw-semibold fst-italic bg-danger">Doctor</th>
            <th class="fw-semibold fst-italic bg-danger">Speciality</th>
            <th class="fw-semibold fst-italic bg-danger">Fee</th>
            <th class="fw-semibold fst-italic bg-danger">Phone</th>
            <th class="fw-semibold fst-italic bg-danger">Hospital</th>
            <th class="fw-semibold fst-italic bg-danger">Address</th>
        </thead>
        <tbody class="fs-5 text-white">
            <!-- <tr>
        <td class="text-warning fw-bold">Manoj Shu</td>
            <td class="text-info ">Ma</td>
            <td class="text-info">Ma</td>
            <td class="text-danger fs-4">Ma</td>
            <td class="text-info">Ma</td>
            <td class="text-info">Ma</td>
            </tr> -->

 <?php

if(isset($_POST['submit']))
{
    $spe=$_POST['speciality'];

    $sqlSpDD= "SELECT * FROM `doctor` INNER JOIN `hospital` ON `doctor`.`h_uid` = `hospital`.`uid` WHERE `doctor`.`speciality` = '$spe'";

$resSpDD = mysqli_query($connection,$sqlSpDD);




    

    while($rowMm=mysqli_fetch_array($resSpDD))
    {
        ?>
       
       <tr>
            <td class="text-warning fw-bold">Dr. <?php echo$rowMm['firstname']." ".$rowMm['lastname']?> </td>
            <td class="text-info "> <?php echo$rowMm['speciality']?> </td>
            <td class="text-info"> <?php echo$rowMm['fee']?> </td>
            <td class="text-danger fs-4"> <?php echo$rowMm['phone']?> </td>
            <td class="text-info"> <?php echo$rowMm['name']?> </td>
            <td class="text-info"> <?php echo$rowMm['address']?> </td>
            
        
        
        </tr>




       <?php
       
      
    }


   

}

?>

       

        </tbody>

    </table>









    <script>
        const btn = document.getElementById('btn')
        const table = document.getElementById('table')
    
        // btn.addEventListener('click', () => {
        //     // event.preventDefault()
        //     table.classList.remove('d-none')
        // })
    </script>




</body>

</html>