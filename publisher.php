<?php
$con = mysqli_connect("localhost", "root", "", "project");
if ($con === false) {
    echo ("ERROR:could not connect" . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    @$name = $_POST['name'];
    @$national_id = $_POST['national_id'];
    @$phone_number = $_POST['phone_number'];
    @$site = $_POST['site'];
    //@$site = $_POST['site'];
    @$pay_way = $_POST['pay_way'];
    @$num_day = $_POST['days'];

    @$sql = "INSERT INTO publisher (name,national_id,phone_number,site,pay_way,days)
VALUES( '$name','$national_id','$phone_number','$site','$pay_way','$num_day')";
}

if (mysqli_query(@$con, @$sql)) {

    echo "thanks";
} else {
    echo "ERROR 404 " . mysqli_error(@$con);
}



/*@$stmt = mysqli_query(@$con, "SELECT * FROM publisher");
while (($row = mysqli_fetch_array(@$stmt))) {
if (is_null($row['site']) === FALSE && empty($row['site']) == false) {
//echo "<div class='hi'> " . $row['site'] . "</div>" . "<br />";
}
}*/







?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book your place</title>
</head>
<div class="background">

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
        <h1 class="font">Publishers Gate</h1>
        <div>
            <form action="" method="POST" class="form">
                Name:<input type="text" name="name" class="name" placeholder="enter your full name"><br>

                National id:<input type="text" name="national_id" placeholder="national id" class="name"><br>

                Phone Number:<input type="text" name="phone_number" placeholder="just numbers" class="name"><br>

                Site <select name="site" id="mySelect" class="myselect">
                    <option value="" autofocus> Choose the site </option>
                    <option value="A" disabled>A</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="A10">A10</option>
                    <option value="A11">A11</option>
                    <option value="A12">A12</option>
                    <option value="A13">A13</option>
                    <option value="A14">A14</option>
                    <option value="A15">A15</option>
                    <option value="A16">A16</option>
                    <option value="A17">A17</option>
                    <option value="A18">A18</option>
                    <option value="A19">A19</option>
                    <option value="A20">A20</option>
                    <option value="A21">A21</option>
                    <option value="A22">A22</option>
                    <option value="A23">A23</option>
                    <option value="A24">A24</option>
                    <option value="A25">A25</option>
                    <option value="A26">A26</option>
                    <option value="A27">A27</option>
                    <option value="A28">A28</option>
                    <option value="A29">A29</option>
                    <option value="A30">A30</option>
                    <option value="A31">A31</option>
                    <option value="A32">A32</option>
                    <option value="A33">A33</option>
                    <option value="A34">A34</option>
                    <option value="A35">A35</option>
                    <option value="A36">A36</option>
                    <option value="A37">A37</option>
                    <option value="A38">A38</option>
                    <option value="A39">A39</option>
                    <option value="A40">A40</option>
                    <option value="A41">A41</option>
                    <option value="A42">A42</option>
                    <option value="A43">A43</option>
                    <option value="A44">A44</option>
                    <option value="A45">A45</option>
                    <option value="A46">A46</option>
                    <option value="A47">A47</option>
                    <option value="A48">A48</option>
                    <option value="A49">A49</option>
                    <option value="A50">A50</option>
                    <option value="A51">A51</option>
                    <option value="A52">A52</option>
                    <option value="A53">A53</option>
                    <option value="A54">A54</option>
                    <option value="A55">A55</option>
                    <option value="A56">A56</option>
                    <option value="A57">A57</option>
                    <option value="B" disabled>B</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="B10">B10</option>
                    <option value="B11">B11</option>
                    <option value="B12">B12</option>
                    <option value="B13">B13</option>
                    <option value="B14">B14</option>
                    <option value="B15">B15</option>
                    <option value="B16">B16</option>
                    <option value="B17">B17</option>
                    <option value="B18">B18</option>
                    <option value="B19">B19</option>
                    <option value="B20">B20</option>
                    <option value="B21">B21</option>
                    <option value="B22">B22</option>
                    <option value="B23">B23</option>
                    <option value="B24">B24</option>
                    <option value="B25">B25</option>
                    <option value="B26">B26</option>
                    <option value="B27">B27</option>
                    <option value="B28">B28</option>
                    <option value="B29">B29</option>
                    <option value="B30">B30</option>
                    <option value="B31">B31</option>
                    <option value="B32">B32</option>
                    <option value="B33">B33</option>
                    <option value="B34">B34</option>
                    <option value="B35">B35</option>
                    <option value="B36">B36</option>
                    <option value="B37">B37</option>
                    <option value="B38">B38</option>
                    <option value="B39">B39</option>
                    <option value="B40">B40</option>
                    <option value="B41">B41</option>
                    <option value="B42">B42</option>
                    <option value="B43">B43</option>
                    <option value="B44">B44</option>
                    <option value="B45">B45</option>
                    <option value="B46">B46</option>
                    <option value="B47">B47</option>
                    <option value="B48">B48</option>
                    <option value="B49">B49</option>
                    <option value="B50">B50</option>
                    <option value="B51">B51</option>
                    <option value="B52">B52</option>
                    <option value="B53">B53</option>
                    <option value="B54">B54</option>
                    <option value="B55">B55</option>
                    <option value="B56">B56</option>
                    <option value="B57">B57</option>
                    <option value="B58">B58</option>
                    <option value="B59">B59</option>
                    <option value="B60">B60</option>
                    <option value="B61">B61</option>
                    <option value="B62">B62</option>
                    <option value="B63">B63</option>
                    <option value="B64">B64</option>
                    <option value="B65">B65</option>
                    <option value="B66">B66</option>
                    <option value="B67">B67</option>
                    <option value="B68">B68</option>
                    <option value="B69">B69</option>
                    <option value="B70">B70</option>
                    <option value="B71">B71</option>
                    <option value="B72">B72</option>
                    <option value="C" disabled>C</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="C10">C10</option>
                    <option value="C11">C11</option>
                    <option value="C12">C12</option>
                    <option value="C13">C13</option>
                    <option value="C14">C14</option>
                    <option value="C15">C15</option>
                    <option value="C16">C16</option>
                    <option value="C17">C17</option>
                    <option value="C18">C18</option>
                    <option value="C19">C19</option>
                    <option value="C20">C20</option>
                    <option value="C21">C21</option>
                    <option value="C22">C22</option>
                    <option value="C23">C23</option>
                    <option value="C24">C24</option>
                    <option value="C25">C25</option>
                    <option value="C26">C26</option>
                    <option value="C27">C27</option>
                    <option value="C28">C28</option>
                    <option value="C29">C29</option>
                    <option value="C30">C30</option>
                    <option value="C31">C31</option>
                    <option value="C32">C32</option>
                    <option value="C33">C33</option>
                    <option value="C34">C34</option>
                    <option value="C35">C35</option>
                    <option value="C36">C36</option>
                    <option value="C37">C37</option>
                    <option value="C38">C38</option>
                    <option value="C39">C39</option>
                    <option value="C40">C40</option>
                    <option value="C41">C41</option>
                    <option value="C42">C42</option>
                    <option value="C43">C43</option>
                    <option value="C44">C44</option>
                    <option value="C45">C45</option>
                    <option value="C46">C46</option>
                    <option value="C47">C47</option>
                    <option value="C48">C48</option>
                    <option value="C49">C49</option>
                    <option value="C50">C50</option>
                    <option value="C51">C51</option>
                    <option value="C52">C52</option>
                    <option value="C53">C53</option>
                    <option value="C54">C54</option>
                    <option value="C55">C55</option>
                    <option value="C56">C56</option>
                    <option value="C57">C57</option>
                    <option value="C58">C58</option>


                </select>
                <div class="main">
                    <div class="alert alert-warning">
                        <strong>Warning!</strong>These places are already booked, please do not select them
                    </div>
                </div>
                <p> <?php
                    @$stmt = mysqli_query(@$con, "SELECT * FROM publisher");
                    while (($row = mysqli_fetch_array(@$stmt))) {
                        if (is_null($row['site']) === FALSE && empty($row['site']) == false) {
                            echo "<span class='main'> " . $row['site'] . "</span>";
                        }
                    }
                    mysqli_close($con); ?></p>


                <br><br><br>
                <label for="fname">Accepted Cards</label>



                <label for="color">Pay Way</label><br><br>

                <input type="radio" name="pay_way" <?php if (isset($pay) && $pay == "visa") echo "checked"; ?> value="visa">visa
                <img src="https://img.icons8.com/color/512/visa.png" width="50px" height="50px">
                <input type="radio" name="pay_way" <?php if (isset($pay) && $pay == "vodafonecash") echo "checked"; ?> value="vodafonecash">vodafonecash
                <img src="https://i.pinimg.com/474x/50/aa/e7/50aae742ebf223df24336b8ebe54f9b6.jpg" width="50px" height="50px">
                <input type="radio" name="pay_way" <?php if (isset($pay) && $pay == "other") echo "checked"; ?> value="master_card">master card
                <img src="https://static-00.iconduck.com/assets.00/mastercard-icon-2048x1286-s6y46dfh.png" width="50px" height="50px">
                <br><br>
                <label for="color">Number of days</label><br>
                <select name="days">
                    <option value="">--- Choose number of days ---</option>
                    <option value="three">three</option>
                    <option value="five">five</option>
                    <option value="seven">seven</option>
                </select>
                <br>
                <input type="submit" name="submit" value="Submit" class="button"><br><br>
                <input type="reset" name="reset" value="Delete" class="button"><br><br>

            </form>
        </div>


        <img src="https://cdn.al-ain.com/lg/images/2023/1/09/205-152900-map-of-international-book-fair-2.jpeg" alt="map" width="40%" height="15%">
        <link rel="stylesheet" href="css/project.css">
        <footer>
            <p>we hope you had a good time<br>
                <a href="mailto:hege@example.com">bookyourbook@gmail.com</a>
            </p>
        </footer>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



    </body>
</div>

</html>