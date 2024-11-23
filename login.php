<?php
include("connect+functions.php"); ?>

<div class="container form">
    <?php
    session_start();
    if (isset($_POST['submit'])) {
        $_SESSION['name'] = $_POST["name"];
        if (checkinput($_POST['name']) && checkinput($_POST['password'])) {
            $Uname = checkinput($_POST['name']);
            $Upass = checkinput($_POST['password']);
            $hashpass = sha1($Upass);

            try {
                $sql = "SELECT * FROM users WHERE name = '$Uname'";
                $stmt =  $conn->prepare($sql);
                $stmt->execute();
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if ($user['password'] === $Upass) {
                    $_SESSION['user'] = $user;
                    echo "You are logged in";
                    if ($_SESSION['user']['publisher'] == 1) {
                        header('Location: indix.php');
                    } else {
                        header('Location:visitors.php');
                    }
                } else {
                    echo '<h4 style=" color:red; text-align:center;">
                your password incorrect</h4>';
                }
            } else {
                echo "you don't have account";
            }
        }
    }

    ?>

    <head>
        <title>login</title>
    </head>
    <div class="background">
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
        <h1>Login!</h1>
        <div class="hr"></div>
        <form class="login" method="post">

            <label for="name">Name</label>
            <input type="name" id="name" name="name" placeholder="Enter your username" required><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <input type="submit" id="submit" name="submit" value="LOGIN">
        </form>
        <link rel="stylesheet" href="css/project.css">

    </div>
</div>
<footer>
    <p>we hope you had a good time<br>
        <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
    </p>
</footer>