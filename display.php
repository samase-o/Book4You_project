<header>

<div class="header">

  <svg height="130" width="1000">
    <defs>
      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgb(61, 30, 16);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgb(141, 70, 37);stop-opacity:1" />
      </linearGradient>
    </defs>
    <ellipse cx="330" cy="70" rx="300" ry="55" fill="url(#grad1)" />
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
  <a href="http://localhost:8080/IT-final-project/books.php">About Books</a>
  <a href="http://localhost:8080/IT-final-project/display%20writer.php">about authors</a>
  <a href="http://localhost:8080/IT-final-project/writers.php">authors</a>
  <a href="http://localhost:8080/IT-final-project/contact%20us.php">Contact us</a>
  <a href="http://localhost:8080/IT-final-project/about%20us.php">about us</a>
</div>
<br><br>
</nav>











<?php
require_once('connect.php');
$query = "SELECT * FROM publishers;";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book your Book </title>

</head>

<body class="bg-dark">
<div class="container">
  <div class="row mt-5">
    <div class="column">
      <div class="publishers mt-5">
        <div class="publisher-header">
          <h2 class="display-6 text-center">دور النشر فى المعرض </h2>
        </div>
        <div class="publisher-body">
          <table class="table table bordered text-center">
            <tr class="bg-dark text-white my-4">
              <td> شعار دور النشر<br></td>
              <td> دور النشر<br></td>
              <td> المكان فى المعرض</td>
            </tr>
            <tr>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <td><?php echo $row['publisher_image'] ?> </td>
                <td><?php echo $row['publisher_name'] ?> </td>
                <td><?php echo $row['publisher_place'] ?> </td>
                <td><?php echo " <a href='display.php? publisher_name=$row[publisher_name] 'class='btn'>delete</a>" ?> </td>
            </tr>
          <?php
              }
          ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<link rel="stylesheet" href="css/project.css">
<footer>
<p>we hope you had a good time<br>
  <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
</p>
</footer>

</html>

<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'project';
$con = mysqli_connect($host, $username, $password, $db);
@$publisher_name = $_GET['publisher_name'];

mysqli_query($con, "DELETE FROM publishers WHERE $publisher_name=publisher_name");
header('location:display.php');
?>