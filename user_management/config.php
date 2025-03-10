<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

$host = "localhost";  
$user = "root";       
$pass = "";           
$dbname = "labassignment03";  

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
