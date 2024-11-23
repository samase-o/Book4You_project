<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>

<body>
    <?php
    // this is user cart 
    session_start();
    // connection between database and the form
    $con = mysqli_connect("localhost", "root", "", "project");
    // check if there is error
    if ($con === false) {
        ("ERROR:Cloud not connect" . mysqli_connect_error());
    }
    @$user_name = $_SESSION['name'];
    if (!empty($user_name)) {
        echo $user_name;
    } else {
        echo "f";
    }
    $sql = "SELECT * FROM cart INNER JOIN bookyou ON cart.id = bookyou.id WHERE user_name='$user_name'";
    $result = mysqli_query($con, $sql);
    while ($row = $result->fetch_assoc()) {
        $user_name = $row['user_name'];
        $title = $row['title'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $totalCost = (int)$quantity * (int)$price;
        echo "<p> username : $user_name, title : $title, quantity : $quantity price : $price$ total cost : $totalCost$</p> ";
    }


    ?>
</body>

</html>