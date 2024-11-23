<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'project';
$ID = $_POST['id'];
$con = mysqli_connect($host, $username, $password, $db);
$name = $_POST['name'];
$book = $_POST['book'];
$image = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up = "images/" . $image_name;
$update = "update admin set name='$name', book='$book', image='$image_up' where id=$ID";
mysqli_query($con, $update);
if (move_uploaded_file($image_location, 'images/' . $image_name)) {
    echo "<script>alert('uploaded successfully')</script>";
} else {
    echo "<script>alert('Failed!')</script>";
}
header('location:display writer.php');
