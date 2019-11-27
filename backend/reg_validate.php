<?php
require_once('../config/connect.php');// call connection 

//save form values

$surname = $_POST['surname'];
$otherNames = $_POST['otherName'];
$address = $_POST['address'];
$phonenumber = $_POST['number'];
$isMember = $_POST['member'];
$group = $_POST['district'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$denomination =$_POST['denomination'];
$category = $_POST['category'];
$age = $_POST['age'];

//check if user has been registered before

$check = "SELECT * FROM `participants` WHERE surname = '$surname' AND otherName= '$otherNames' AND H_address='$address' AND phonenumber='$phonenumber' AND isMember= '$isMember' AND district = '$group' 
AND C_location = '$location' AND gender = '$gender' AND denomination = '$denomination' AND section = '$category' AND age = '$age'";

$query_check = mysqli_query($conn, $check) or die(mysqli_error($conn));

$result = mysqli_num_rows($query_check);
if ($result > 0){
    
// If the details already exists, with an error message will be displayed.
echo  "<script>alert('Participant Already Registered!!!'); window.location.replace('../register.html');</script>";
}else{
    $sql = "INSERT INTO `participants` (surname, otherName, H_address, phonenumber, isMember, district, C_location, denomination, gender, age, section) 
    VALUES 
    ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$location', '$denomination', '$gender', '$age', '$category')";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($query){
        echo  "<script>alert('Participant Registered Successfully.!!!'); window.location.replace('../register.html');</script>";

    }
}



?>