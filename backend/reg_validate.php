<?php
require_once('../config/connect.php');// call connection 

//save form values

$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_ENCODED);
$otherNames = filter_input(INPUT_POST, 'otherName', FILTER_SANITIZE_SPECIAL_CHARS);
$address =  filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
$phonenumber = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_ENCODED);
$isMember = filter_input(INPUT_POST, 'member', FILTER_SANITIZE_ENCODED);
$group = filter_input(INPUT_POST, 'district', FILTER_SANITIZE_ENCODED);
$location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_ENCODED);
$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_ENCODED);
$denomination = filter_input(INPUT_POST, 'denomination', FILTER_SANITIZE_ENCODED);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_ENCODED);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
$prayer_request = filter_input(INPUT_POST, 'prayer', FILTER_SANITIZE_SPECIAL_CHARS);
$institution = filter_input(INPUT_POST, 'school', FILTER_SANITIZE_SPECIAL_CHARS);
$level = filter_input(INPUT_POST, 'level', FILTER_SANITIZE_SPECIAL_CHARS);
$faculty_department = filter_input(INPUT_POST, 'dept', FILTER_SANITIZE_SPECIAL_CHARS);

//check if user has been registered before

$check = "SELECT * FROM `participants` WHERE surname = '$surname' AND otherName= '$otherNames' AND H_address='$address' AND phonenumber='$phonenumber' AND isMember= '$isMember' AND district = '$group' 
AND C_location = '$location' AND gender = '$gender' AND denomination = '$denomination' AND section = '$category' AND age = '$age' AND institution = '$institution' AND faculty_department = '$faculty_department' AND currentLevel = '$level' AND prayer_request = '$prayer_request'";

$query_check = mysqli_query($conn, $check) or die(mysqli_error($conn));

$result = mysqli_num_rows($query_check);
if ($result > 0){
    
// If the details already exists, with an error message will be displayed.
echo  "<script>alert('Participant Already Registered!!!'); window.location.replace('../register');</script>";
}else{

    switch($category){
        //if adult add into adult database as well
        case("adult"): echo  "<script>alert('Cannot Register as Adult!!! Kindly choose Campus in the category'); window.location.replace('../register');</script>";
        exit;
        $sql = "INSERT INTO `adult` (surname, otherName, H_address, phonenumber, isMember, district, C_location, denomination, gender, age, section) 
        VALUES 
        ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$location', '$denomination', '$gender', '$age', '$category')";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn)); break;

        case("youth"): echo  "<script>alert('Cannot Register as Youth!!! Kindly choose Campus in the category'); window.location.replace('../register');</script>";
        exit; 
        $sql = "INSERT INTO `youths` (surname, otherName, H_address, phonenumber, isMember, district, C_location, denomination, gender, age, section) 
        VALUES 
        ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$location', '$denomination', '$gender', '$age', '$category')";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn)); break;

        case("campus"): 
        $sql = "INSERT INTO `campus` (surname, otherName, H_address, phonenumber, isMember, district, prayer_request, C_location, denomination, gender, institution, faculty_department, currentLevel, age, section ) 
        VALUES 
        ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$prayer_request', '$location', '$denomination', '$gender', '$institution', '$faculty_department', '$level', '$age', '$category' )";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn)); break;

        default:echo  "<script>alert('Cannot Register as Children!!! Kindly choose Campus in the category'); window.location.replace('../register');</script>";
        exit;
         $sql = "INSERT INTO `children` (surname, otherName, H_address, phonenumber, isMember, district, C_location, denomination, gender, age, section) 
        VALUES 
        ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$location', '$denomination', '$gender', '$age', '$category')";
    
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        break;
    
    
    } 



    $sql = "INSERT INTO `participants` (surname, otherName, H_address, phonenumber, isMember, district, prayer_request, C_location, denomination, gender, institution, faculty_department, currentLevel, age, section ) 
        VALUES 
        ('$surname', '$otherNames', '$address', '$phonenumber', '$isMember', '$group', '$prayer_request', '$location', '$denomination', '$gender', '$institution', '$faculty_department', '$level', '$age', '$category' )";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($query){
        echo  "<script>alert('Participant Registered Successfully.!!!'); window.location.replace('../index');</script>";

    }
}



?>