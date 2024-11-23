<div class="container form">
  <?php
  include("connect+functions.php");
  if (isset($_POST["submit"])) {
    if (checkinput($_POST['name']) && checkinput($_POST['email']) && checkinput($_POST['password']) && checkinput($_POST['whatsapp']) && checkinput($_POST['age'])) {
      $iname =  checkinput($_POST['name']);
      $iemail = checkinput($_POST['email']);
      $pass = checkinput($_POST['password']);
      $whats_num = checkinput($_POST['whatsapp']);
      $age = checkinput($_POST['age']);
      if (isset($_POST['publisher']) && $_POST['publisher'] === 'yes') {
        $publisher = 1;
      } else {
        $publisher = 0;
      }

      try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$iemail]);
        $resultemail = $stmt->rowCount();

        $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
        $stmt->execute([$iname]);
        $resultname = $stmt->rowCount();
      } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
      }
      if ($resultemail > 0 && $resultname > 0) {
        die("<h1 >This email and username already exist</h1>");
      } elseif ($resultemail > 0) {
        die("<h1 >This email already exists</h1>");
      } elseif ($resultname > 0) {
        die("<h1>This username already exists</h1>");
      } else {
        try {
          $sql = "INSERT INTO `users` (`name`, `email`, `password`, `whatsapp`, `age`, `publisher`)VALUES('$iname', '$iemail', '$pass','$whats_num','$age','$publisher')";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            $id = $conn->lastInsertId();
            echo '<h4 style=" color:red; text-align:center;">
                Account created successfully</h4>';
            echo '<h4 style=" color:red; text-align:center;">
                Your ID is</h4>';
            echo '<h4 style=" color:red; text-align:center;">';
            echo $id;
            echo '</h4>';
          } else {
            echo '<h4 style=" color:red; text-align:center;">
                something wrong!</h4>';
          }
        } catch (PDOException $e) {
          die("Error: " . $e->getMessage());
        }
      }
    } else {
      die('Error: Missing or invalid input');
    }
  } else {
    echo '
   ';
  }
  ?>

  <head>
    <title>register</title>
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
        <a class="active" href="http://localhost:8080/IT-final-project/indix.php">Home</a>
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

    </form>
    <h1>Register!</h1>
    <div class="hr"></div>
    <form class="registration" method="post">
      <div class="group-form">
        <label for="name" class="margin-bottom">Username:</label>
        <input type="text" id="name" name="name" class="margin-bottom" placeholder="Enter your username"><br>

        <label for="email" class="margin-bottom">Email:</label>
        <input type="email" id="email" name="email" class="margin-bottom" placeholder="Enter your email"><br>

        <label for="password" class="margin-bottom">Password:</label>
        <input type="password" id="password" name="password" class="margin-bottom" placeholder="Enter your password"><br>

        <label for="whatsapp" class="margin-bottom">WhatsApp Number:</label>
        <input type="tel" id="whatsapp" name="whatsapp" class="margin-bottom" placeholder="Enter your WhatsApp number"><br>
      </div>
      <div class="group-form" class="margin-bottom"><br>
        <label for="age" class="margin-bottom">Age:</label>
        <input type="number" id="age" name="age" class="margin-bottom" placeholder="Enter your age"><br>


      </div>
      <div class="group-form">
        <label class="margin-bottom">Are you a publisher?</label>
        <input type="radio" id="publisher-yes" name="publisher" value="yes">
        <label for="publisher-yes" class="no-margin-bottom">Yes</label>
        <input type="radio" id="publisher-no" name="publisher" value="no">
        <label for="publisher-no" class="no-margin-bottom">No</label><br><br>
        <input type="submit" id="submit" name="submit" value="Sign Up">

      </div>
    </form>
    <link rel="stylesheet" href="css/project.css">
    <footer>
      <p>we hope you had a good time<br>
        <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
      </p>
    </footer>
  </div>