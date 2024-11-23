<html>
<header>
    <div class="header">
        <h1 class="header_logo">Book your Book</h1>
    </div>
    <div class="offset">
        <p>welcome to our website</p>
    </div>

</header>
<nav>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">Visitors Gate </a>
        <a href="#contact">Contact us</a>
        <a href="#about">Publishers Gate</a>
        <a href="#about"> About Publidhers</a>
        <a href="#about">About Books</a>
        <a href="#about">Events</a>
        <a href="#about">authors</a>
    </div>
    <br><br>
</nav>


<?php
// connection between database and the form

$con = mysqli_connect("localhost", "root", "", "project");

// check if there is error

if ($con === false) {
    ("ERROR:Cloud not connect" . mysqli_connect_error());
}

// save the data in this variable and insert this data to the database

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pay_way = $_POST['pay_way'];
    $day = $_POST['day'];
    @$gender = $_POST['gender'];
    $sql = "INSERT INTO visitors (first_name,last_name,email,phone,gender,pay_way,day)
    VALUES('$first_name','$last_name','$email','$phone','$gender','$pay_way','$day')";
}

// print the data inserted to the database if there is no error and print this prombt if there is

if (mysqli_query($con, $sql)) {

    echo "<span class='ticket'>" . $first_name . "</span>" . "<br>";
    echo "<span class='ticket2'>" . $last_name . "</span>" . "<br>";

    echo "<span class='ticket'>" . $email . "</span>" . "<br>";
    echo "<span class='ticket'>" . $phone . "</span>" . "<br>";
    echo "<span class='ticket'>" . $gender . "</span>" . "<br>";
    echo "<span class='ticket'>" . $pay_way . "</span>" . "<br>";
    echo "<span class='ticket'>" . $day . "</span>" . "<br>";
} else {
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>



<link rel="stylesheet" href="../css/project.css">



</html>