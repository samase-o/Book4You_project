<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>visitor</title>
    <link rel="stylesheet" href="/css/project.css">
</head>

<body>

    <form action="validate.php" method="POST">
        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>" . $_GET['error'] . "</p>";
        }
        ?>
        <div>
            <label for="First name">First name</label>
            <input type="text" id="First name" name="first_name" placeholder="First name">
        </div>
        <br>
        <div>
            <label for="Last name">Last name</label>
            <input type="text" id="Last name" name="last_name" placeholder="Last name">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
        <br>
        <div>
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
        </div>
        <br>
        <label for="">Male or Female :</label>
        <div>
            <input type="radio" id="Male" name="gender" value="Male">
            <label for="Male">Male</label>

            <input type="radio" id="Female" name="gender" value="Female">
            <label for="Female">Female</label>
        </div>
        <br>
        <div>
            <label for="pay_way">Pay Way :</label>
            <select name="pay_way" id="pay_way">
                <option value="visa">Visa</option>
                <option value="vodafone">vodafone</option>
            </select>
        </div>
        <br>
        <div>
            <label for="day">Day </label>
            <input type="date" id="day" name="day">
        </div>
        <br>
        <div>
            <input type="submit" value="Log in" name="submit">
            <input type="reset" value="Delete">
        </div>
    </form>
</body>

</html>