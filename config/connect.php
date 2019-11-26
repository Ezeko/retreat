<?php

$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'retreat_participants';

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if(!$conn){
    echo (mysqli_error($conn));

}else {
    echo('Database connected Successfully! ');
}

?>