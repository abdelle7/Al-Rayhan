<?php
$servername = 'localhost';
$username = 'Al-Rayhan';
$password = '123456';
$db = 'al-rayhan';

$conn = mysqli_connect($servername,$username,$password,$db);
if (!$conn){
    die( 'Connection faild: ' . mysqli_connect_error() );
}
?>
