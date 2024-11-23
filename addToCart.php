<!-- add to cart function -->
<?php
// 
session_start();
// connection between database and the form


$con = mysqli_connect("localhost", "root", "", "project");
// check if there is error
if ($con === false) {
    ("ERROR:Cloud not connect" . mysqli_connect_error());
}

$user_name = $_SESSION['name'];
@$bookId = $_GET['id'];
$sql = "SELECT quantity FROM cart WHERE user_name = '$user_name' AND id = '$bookId'";
@$result = mysqli_query($con, $sql);
while ($row = $result->fetch_assoc()) {
    $quantity =  $row['quantity'];
}
if (!empty($quantity)) {
    $quantity = $quantity + 1;
    $sql = "UPDATE cart SET quantity = $quantity WHERE user_name = '$user_name' AND id = '$bookId'";
} else {
    $quantity = 1;
    $sql = "INSERT INTO cart( user_name , id , quantity) VALUES ('$user_name' , '$bookId', '$quantity')";
}
mysqli_query($con, $sql);


header('Location: cart.php');
die();

?>