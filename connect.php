<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn =  mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
   echo "Can't connect database " . mysqli_connect_error($conn);
}
echo "Connected successfully";


$sql = "CREATE TABLE `publishers list`.publishers (
    `publisher id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `publisher name` varchar(200) NOT NULL,
    `publisher place` varchar(200) NOT NULL,
    `image` VARCHAR(200) NOT NULL,
    ADD PRIMARY KEY (`publisherid`)
    )";
