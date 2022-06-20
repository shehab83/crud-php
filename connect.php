<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "crud";
 // Create connection

 $conn =mysqli_connect($servername, $username, $password, $myDB);

 // Check connection
if( $conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>