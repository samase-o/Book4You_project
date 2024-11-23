<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>
<div class="background">

    <body>
        <header>
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
        <h3 CLASS="font">Visitors Gate</h3>
        <form action="validate.php" method="POST">
            <?php
            if (isset($_GET['error'])) {
                echo "<p class='error'>" . $_GET['error'] . "</p>";
            }
            ?>
            <div>
                <label for="First name">First name</label>
                <input type="text" id="First name" name="first_name" placeholder="First name" class="name">
            </div>
            <br>
            <div>
                <label for="Last name">Last name</label>
                <input type="text" id="Last name" name="last_name" placeholder="Last name" class="name">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="email" class="port" id="email" name="email" placeholder="Enter your email" class="name">
            </div>
            <br>
            <div>
                <label for="phone">Phone</label>
                <input type="tel" class="port" id="phone" name="phone" placeholder="Enter your phone number" class="name">
            </div>
            <br>
            <label for=""> Gender </label>
            <div>
                <input type="radio" id="Male" name="gender" value="Male">
                <label for="Male">Male</label>

                <input type="radio" id="Female" name="gender" value="Female">
                <label for="Female">Female</label>
            </div>
            <br>
            <div>
                <label for="pay_way"> Pay Way </label>
                <select name="pay_way" id="pay_way" class="name">
                    <option value="visa">Visa</option>
                    <option value="vodafone">vodafone</option>
                </select>
            </div>
            <br>
            <div>
                <label for="day"> Date </label>
                <input type="date" id="day" name="day">
            </div>
            <br>
            <div>
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Delete"><br>
            </div>
        </form>

        <link rel="stylesheet" href="css/project.css">
        <footer>
            <p>we hope you had a good time<br>
                <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
            </p>
        </footer>
    </body>
</div>

</html>