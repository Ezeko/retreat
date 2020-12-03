<?php
require_once('../config/connect.php');// call connection 
?>
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<link rel="icon" type="image/jpg" href='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<title>RETREAT PARTICIPANTS </title>
<style>
</style>
</head>
<body>
    <h2 class="w3-center w3-text-big w3-text-purple">DEEPER CHRISTIAN LIFE MINISTRY, DLCF  ORE REGION DECEMBER <?php echo (date('Y'))?></h2>
<h3 class="w3-center w3-text-big w3-text-green">  PARTICIPANTS DETAILS </h3>
<div style="overflow-x:auto;">
<div style = "overflow-y:auto">

<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-pink">
        <th>S/N</th>
      <th>FULLNAME</th>
        <th>PRAYER REQUEST</th>
        <th>PHONE NUMBER</th>
        <th>DISTRICT</th>
        <th>LOCATION</th>
        <th>DENOMINATION</th>
        <th>GENDER</th>
        <th>AGE</th>
        <th>INSTITUTION</th>
        <th>FACULTY/ DEPARTMENT</th>
        <th>LEVEL</th>
        <th>TIME OF REGISTRATION</th>
      </tr>
    </thead>
    <?php $SQ="SELECT * FROM `campus` WHERE section = 'campus'";
        $query = mysqli_query($conn, $SQ) or die(mysqli_error($conn));
        $count = mysqli_num_rows($query);
        while ( $rows= mysqli_fetch_assoc($query)){

            echo "<tr class='w3-hover-blue'>
        <td></td>
        <td>".  ($rows['fullname']). "</td>
        <td>". ($rows['prayer_request']). "</td>
        <td>". ($rows['phonenumber'])."</td>
    <td>". ($rows['district'])."</td>
    <td>". ($rows['C_location'])."</td>
    <td>". ($rows['denomination'])."</td>
    <td>". ($rows['gender'])."</td>
    <td>". ($rows['age'])."</td>
    <td>". ($rows['institution'])."</td>
    <td>". ($rows['faculty_department'])."</td>
    <td>". ($rows['currentLevel'])."</td>
    <td>". ($rows['time'])."</td>
    </tr>";
    ;
        }
        ?>
    
</div>
</div>
</table>
</body>
</html>
