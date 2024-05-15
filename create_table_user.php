<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "gaia_database";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $db);
// Create table

$sqlString = "CREATE TABLE IF NOT EXISTS User(
    user_id INT(4) AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(20) NOT NULL,
    Email_address VARCHAR(30) NOT NULL,
    Pass_word VARCHAR(12) NOT NULL)";
    
$queryResult = mysqli_query($connect, $sqlString);

?>