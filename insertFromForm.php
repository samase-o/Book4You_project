<?php
// connection between database and the form

$con = mysqli_connect("localhost", "root", "", "project");

// check if there is error

// if($con=== false){
//     dia("ERROR:Cloud not connect".mysqli_connect_error());
// }

// save the data in this variable and insert this data to the database

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pay_way = $_POST['pay_way'];
    $day = $_POST['day'];
    @$gender = $_POST['gender'];

    @$sql = "INSERT INTO visitors (first_name,last_name,email,phone,gender,pay_way,day)
        VALUES('$first_name','$last_name','$email','$phone','$gender','$pay_way','$day')";
}

$result = mysqli_query($con, $sql);
// print the data inserted to the database if there is no error and print this prombt if there is

if ($result == true) {
    echo nl2br("\n$first_name" . " " . "$last_name\n " . "$phone\n $email" . "\n$gender" . "\n$pay_way\n$day");
} else {
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($con);
}
