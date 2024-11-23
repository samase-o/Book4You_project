<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'project';
$con = mysqli_connect($host, $username, $password, $db);
@$ID = $_GET['id'];
mysqli_query($con, "DELETE  FROM bookyou WHERE id=' $ID'");

header('location:books.php');
