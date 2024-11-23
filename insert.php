<html>
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
            echo "<span class='ticket'>" . $last_name . "</span>" . "<br>";

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



        <link rel="stylesheet" href="css/project.css">


    </body>
</div>

</html>