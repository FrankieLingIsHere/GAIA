<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "gaia_database";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $db);
// Create table

$sqlString = "CREATE TABLE IF NOT EXISTS Enquiry(
    enquiry_id INT(4) AUTO_INCREMENT PRIMARY KEY,
    First_name VARCHAR(25),
    Last_name VARCHAR(25),
    Email_address text(50),
    Phone_number VARCHAR(11),
    Street_address text (40),
    City varchar(30),
    States varchar(30),
    Postal_code int(6),
    Choose_a_Plant varchar(30),
    Comment text (100))";
    
$queryResult = mysqli_query($connect, $sqlString);

?>