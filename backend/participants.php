<?php
require_once('../config/connect.php');// call connection 
?>
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="icon" type="image/jpg" href='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<title>RETREAT PARTICIPANTS </title>
<style>
#table{
padding-right: 1%;
padding-left: 1%;
}
</style>
</head>
<body >
    <h2 class="w3-center w3-text-big w3-text-purple">DEEPER CHRISTIAN LIFE MINISTRY, DLCF  ORE REGION DECEMBER 2020</h2>
<h3 class="w3-center w3-text-big w3-text-indigo">  PARTICIPANTS DETAILS </h3>
<div style="overflow-x:auto;" id="table">
<div style = "overflow-y:auto"  >


<table class="w3-table-all w3-hoverable " id="summaryTable">
    <thead>
      <tr class="w3-purple">
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
        $sn = 0;
        while ( $rows= mysqli_fetch_assoc($query)){
                $sn +=1;
            echo "<tr class='w3-hover-blue'>
        <td>$sn</td>
        <td>".  ($rows['surname']). " ". ($rows['otherName']). "</td>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#summaryTable').DataTable({
            dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });
} );
</script>
</body>
</html>
