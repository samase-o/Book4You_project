<?php
$conn = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST["submit"])) {
  @$name = $_POST["name"];
  @$email = $_POST["email"];
  @$phone = $_POST["phone"];
  @$message = $_POST["message"];

  @$sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone','$message')";
}

if (mysqli_query(@$conn, @$sql)) {
  echo "<script>alert('Mail Send.');</script>";
} else {
  echo "<script>alert('Mail Not Send.');</script>";
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact us</title>
  <link rel="stylesheet" href="css/project.css">

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<div class="background-2">

  <body>
    <header>

      <div class="header">

        <svg height="130" width="1000">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgb(61, 30, 16);stop-opacity:1" />
              <stop offset="100%" style="stop-color:rgb(141, 70, 37);stop-opacity:1" />
            </linearGradient>
          </defs>
          <ellipse cx="660" cy="70" rx="300" ry="55" fill="url(#grad1)" />
          <text fill="#faee9e" font-size="45" font-family="Instrument Serif" x="500" y="86">Book your Book</text>
          Sorry, your browser does not support inline SVG.
        </svg>

      </div>
      <div class="offset">
        <p>welcome to our website</p>
      </div>

    </header>

    <nav>
      <div class="topnav">
        <a class="active" href="http://localhost:8080/IT-final-project/login%20(1).php">Home</a>
        <a href="http://localhost:8080/IT-final-project/visitors.PHP">Visitors Gate </a>
        <a href="http://localhost:8080/IT-final-project/publisher.php">Publishers Gate</a>
        <a href="http://localhost:8080/IT-final-project/display.php"> About Publidhers</a>
        <a href="http://localhost:8080/IT-final-project/visitor%20book.php">About Books</a>
        <a href="http://localhost:8080/IT-final-project/display%20writer.php">about authors</a>
        <a href="http://localhost:8080/IT-final-project/writers.php">authors</a>
        <a href="http://localhost:8080/IT-final-project/contact%20us.php">Contact us</a>
        <a href="http://localhost:8080/IT-final-project/about%20us.php">about us</a>
      </div>

    </nav>

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">


        <div class="contact">
          <p>Connect with us </p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>
        <p>يسعدنا تواصلك معنا في أى وقت
          إذا كنت تواجه أي مشكلة أو ترغب في إسترجاع أو إستبدال المنتج لا تتردد أبدأ بالتواصل معنا في أي وقت. كل ماعليك هو ملئ النموذج التالي ببيانات صحيحة وسنقوم بمراجعة طلبك في أسرع وقت</p>

        <form action="" method="post">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" />
            <label for="">Username</label>

          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>

          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>

          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
          </div>
          <input type="submit" name="submit" value="Send" class="" />
        </form>
      </div>
    </div>


    <script src="app.js"></script>

    <footer>
      <p>we hope you had a good time<br>
        <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
      </p>
    </footer>

  </body>
</div>

</html>