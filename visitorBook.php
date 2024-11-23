<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المعروضات</title>
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
                <a class="active" href="">Home</a>
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




        <center>
            <h3>جميع كتب المعرض</h3>
        </center>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        /*$result = mysqli_query($con, "SELECT * FROM bookyou");
    while ($row = mysqli_fetch_array($result)) {
    echo "<span class='main'> " . $row['publisher'] . "</span>";
    echo "<span class='main'> " . $row['author'] . "</span>";
    echo "<span class='main'> " . $row['title'] . "</span>";
    }
    //mysqli_close($con);*/
        @$bookId = $row['id'];
        @$result = mysqli_query($con, "SELECT * FROM bookyou");
        while ($row = mysqli_fetch_array($result)) {

            echo "         
        
        <div class='card-body'>
        <h3 >$row[title]</h3>
        <h3 >$row[author]</h3>
        <h3 >$row[publisher]</h3>
        <h3  >$row[price]$</h3>
      
        <img src='$row[image]''class='card' style='width: 150px;; height: 290px' ><br>

       
<p><a href='add_to_cart.php?id=$bookId'> Add to cart </a></p>
         </div>
      
      ";

            echo " ";
        }

        ?>
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