<?php
require_once('../config/connect.php');// call connection 
?>
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<link rel="icon" type="image/jpg" href='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<title>RETREAT SUMMARY FORM</title>
<style>
</style>
</head>
<body>
    <h2 class="w3-center w3-text-big w3-text-purple">DEEPER CHRISTIAN LIFE MINISTRY, DLCF  ORE REGION DECEMBER 2019</h2>
<h3 class="w3-center w3-text-big w3-text-green">  REGISTRATION SUMMARY FORM</h3>
<div style="overflow-x:auto;">
c
<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-pink">
        <th>S/N</th>
      <th>GROUP</th>
        <th>BOYS</th>
        <th>GIRLS</th>
        <th>TOTAL</th>
        
      </tr>
    </thead>
    <tr class="w3-hover-blue">
        <td><strong>1</strong></td>
        <td><strong>CENTRAL GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='CENTRAL' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td>
            <?php $sql= "SELECT gender FROM `campus` WHERE district='CENTRAL' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='CENTRAL'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Central </td>
        <td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td><td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td><td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Oluwa-Femi 1 </td>
        <td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oluwa-Femi 1' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oluwa-Femi 1' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oluwa-Femi 1'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Oluwa-Femi 2 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='Oluwa-Femi 2' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oluwa-Femi 2' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oluwa-Femi 2'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>2</strong></td>
        <td><strong>CAMPSITE GROUP</strong></td>
        <td>
            <?php $sql= "SELECT gender FROM `campus` WHERE district='CAMPSITE' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='CAMPSITE' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='CAMPSITE'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Campsite </td>
        <td>  <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campsite' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campsite' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campsite'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Campus </td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campus' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campus' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campus' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Olotito 1 </td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olotito 1' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olotito 1' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olotito 1' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>College </td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='College' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='College' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='College' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>V</strong></td>
        <td>Olupitan </td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olupitan' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olupitan' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Olupitan' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>3</strong></td>
        <td><strong>POWERLINE GROUP</strong></td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE district='POWERLINE' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE district='POWERLINE' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE district='POWERLINE'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Mission </td>
        <td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mission' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mission' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td> <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mission'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Courage </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage_power' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage_power' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage_power'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Powerline </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Powerline' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Powerline' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Powerline' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>4</strong></td>
        <td><strong>EBENEZER GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='EBENEZER' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='EBENEZER' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='EBENEZER'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Ebenezer </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ebenezer' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ebenezer' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ebenezer'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Fish Pond </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Fish Pond' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Fish Pond' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Fish Pond'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Victorious </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Victorious' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Victorious' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Victorious'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
<tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>Courage </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td>
            <?php $sql= "SELECT gender FROM `campus` WHERE C_location='Courage'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?>
        </td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>5</strong></td>
        <td><strong>LAGOS-EXPRESS GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='LAGOS-EXPRESS' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='LAGOS-EXPRESS' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='LAGOS-EXPRESS'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
            <td><strong>I</strong></td>
            <td>Osooro 1 </td>
            <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 1' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 1' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 1'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
        </tr>
        <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Osooro 2 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 2' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 2' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Osooro 2'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Ologede </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ologede' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ologede' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ologede'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>Dumex </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Dumex' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Dumex' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Dumex' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>V</strong></td>
        <td>Hope </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Hope' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Hope' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Hope' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>VI</strong></td>
        <td>Mosco </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mosco' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mosco' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Mosco'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>VII</strong></td>
        <td>Immaculate </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Immaculate' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Immaculate' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Immaculate'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>6</strong></td>
        <td><strong>IDIMANGO GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='IDIMANGO' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='IDIMANGO' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='IDIMANGO'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Idimango 1 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 1' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 1' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 1' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Idimango 2 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 2' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 2' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Idimango 2' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Ore-Alaba </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ore-Alaba' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ore-Alaba' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ore-Alaba' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>Albert </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Albert' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Albert' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Albert'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>7</strong></td>
        <td><strong>Language GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='LANGUAGE' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='LANGUAGE' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='LANGUAGE'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Igbo Central/Hausa </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Central/Hausa' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Central/Hausa' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Central/Hausa' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Igbo Express </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Express' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Express' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo Express'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Igbo/Kutep </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo/Kutep' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo/Kutep' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Igbo/Kutep' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>Urhobo </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Urhobo' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Urhobo' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Urhobo' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>V</strong></td>
        <td>Efiki </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Efiki' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Efiki' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Efiki' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>VI</strong></td>
        <td>Zaccheus </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Zaccheus' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Zaccheus' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Zaccheus'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>8</strong></td>
        <td><strong>OMI-AYO GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='OMI-AYO' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='OMI-AYO' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='OMI-AYO' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Omi-Ayo </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omi-Ayo' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omi-Ayo' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omi-Ayo' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Show-Boy </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Show-Boy' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Show-Boy' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Show-Boy' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Akinjagunle </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Akinjagunle' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Akinjagunle' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Akinjagunle'  ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>9</strong></td>
        <td><strong>IBUKUN-OLUWA GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='IBUKUN-OLUWA' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='IBUKUN-OLUWA' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='IBUKUN-OLUWA' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Ibukun-Oluwa 1 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 1' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukub-Oluwa 1' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 1'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Ibukun-Oluwa 2 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 2' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 2' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 2' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Ibukun-Oluwa 3 </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 3' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 3' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ibukun-Oluwa 3' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>10</strong></td>
        <td><strong>YORUBA GROUP</strong></td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE district='YORUBA' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='YORUBA' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE district='YORUBA'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>I</strong></td>
        <td>Campground  </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campground' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campground' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Campground' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-blue">
        <td><strong>II</strong></td>
        <td>Surulere</td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Surulere' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Surulere' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Surulere' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>III</strong></td>
        <td>Bolorunduro </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Bolorunduro' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Bolorunduro' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Bolorunduro'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>IV</strong></td>
        <td>Big Joe</td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Big Joe' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Big Joe' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Big Joe'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>V</strong></td>
        <td>Central </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central_Yoruba' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central_Yoruba' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Central_Yoruba' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td></tr>
    <tr><td></td><td><strong>OUTSIDE LOCATION (GROUP)</strong></td><td></td><td></td><td></td></tr>
    <tr class="w3-hover-blue">
        <td><strong>11</strong></td>
        <td>Asejire </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Asejire' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Asejire' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Asejire' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>12</strong></td>
        <td>Odigbo </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Odigbo' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Odigbo' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Odigbo' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>13</strong></td>
        <td>Ajue </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajue' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajue' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajue' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>14</strong></td>
        <td>F.O.P </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='F.O.P' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='F.O.P' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='F.O.P' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>15</strong></td>
        <td>Faith </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Faith' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Faith' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Faith' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>16</strong></td>
        <td>Ofosu </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ofosu' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ofosu' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ofosu' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>17</strong></td>
        <td>Kajola </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Kajola' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Kajola' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Kajola' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>18</strong></td>
        <td>Oniparaga </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oniparaga' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oniparaga' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oniparaga' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>19</strong></td>
        <td>Okefara </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Okefara' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Okefara' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Okefara' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>20</strong></td>
        <td>Onisere </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Onisere' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Onisere' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Onisere' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>21</strong></td>
        <td>Oladapo </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oladapo' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oladapo' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Oladapo' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>22</strong></td>
        <td>Araromi-Obu </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Araromi-Obu' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Araromi-Obu' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Araromi-Obu' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>23</strong></td>
        <td>Afforestation </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Afforestation' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Afforestation' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Afforestation' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>24</strong></td>
        <td>Omifon </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omifon' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omifon' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Omifon' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>25</strong></td>
        <td>Ajegunle </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajegunle' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajegunle' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Ajegunle' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong>26</strong></td>
        <td>costain </td>
        <td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Costain' AND gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Costain' AND gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT gender FROM `campus` WHERE C_location='Costain' ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
    <tr class="w3-hover-black">
        <td><strong></strong></td>
        <td> </td>
        <td></td><td></td><td></td>
    </tr>
    <tr class="w3-hover-blue">
        <td><strong></strong></td>
        <td><strong>GRAND TOTAL</strong> </td>
        <td><?php $sql= "SELECT * FROM `campus` WHERE  gender='male'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT * FROM `campus` WHERE gender='female'";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td><td><?php $sql= "SELECT * FROM `campus` WHERE 1 ";
         $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         $count = mysqli_num_rows($query);
         if($count <= 0){
            echo (0);
         }else{
             echo $count;
         }
        
        
        ?></td>
    </tr>
        <tr class="w3-hover-black">
        <td><strong></strong></td>
        <td> </td>
        <td></td><td></td><td></td>
    </tr>
        <tr class="w3-hover-black">
        <td><strong></strong></td>
        <td> </td>
        <td></td><td></td><td></td>
    </tr>
</div>
</table>
</body>
</html>