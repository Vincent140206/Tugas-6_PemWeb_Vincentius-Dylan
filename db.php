<?php
$host = 'localhost';
$user = 'root'; 
$password = '280406'; 
$dbname = 'PemWeb_Tabel';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>