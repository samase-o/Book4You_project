<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <title>display page</title>
</head>
<div class="background-2">

    <body dir="rtl">

        <header>

            <div class="header">

                <svg height="130" width="1000">
                    <defs>
                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:rgb(61, 30, 16);stop-opacity:1" />
                            <stop offset="100%" style="stop-color:rgb(141, 70, 37);stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <ellipse cx="360" cy="70" rx="300" ry="55" fill="url(#grad1)" />
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
            <br><br>
        </nav>
        <h1 class="contact">جميع الأعمال المتاحة بالمعرض</h1>

        <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM admin");
        while ($row = mysqli_fetch_array($result)) {

            /*  echo "         
          <main>
         <div class='card-body'>
         <h1 >$row[name]</h1>
         <h1  >$row[book]</h1>
         <img src='$row[image]'class='card' style='width: 15rem; height: 200px;' >
       </div>
         </main>
          
          ";*/
            echo "
          
        <div class='card-body' >
        <h1>$row[name]</h2>
        <h3>$row[book]</h3>
          <img src='$row[image]'class='card' style='width: 270px;; height: 290px;px;' >
          <a href='delete writer.php? id=$row[id]' class='btn'>delete</a>
      <a href='update.php? id=$row[id]' class='btn'>update</a>
      </div>
      
          ";
        }

        ?>


</div>
</div>
<link rel="stylesheet" href="css/project.css">

<footer>

    <p>we hope you had a good time<br>
        <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
    </p>
</footer>
</body>
</div>

</html>