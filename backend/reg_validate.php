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
$category = $_POST['category'];
$age = $_POST['age'];




echo($surname . ','. $otherNames);

?>