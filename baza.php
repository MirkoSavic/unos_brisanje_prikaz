<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'vezba';

$conn = mysqli_connect($host, $user, $password, $dbname);
if($conn->connect_error){
   die('No connection: ' . $conn->connect_error);
}

?>
