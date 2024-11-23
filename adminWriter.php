<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="project 2.css">
    <title>Page for Admin</title>
</head>

<body>
    <center>
        <h1>Page for Admin</h1>
        <img src="project photos/book admin.jpeg">
        <div class="container">
            <form action="admin writer.php" method="POST" enctype="multipart/form-data">
                <label>اسم الكاتب</label>
                <br>
                <input type="text" placeholder="Writer Name" name="name">
                <br>
                <label>اسم العمل</label>
                <br>
                <input type="text" placeholder=" book Name" name="book">
                <br>
                <label>upload image</label>
                <br>
                <input type="file" name="image">
                <br>
                <a><button type="submit" class="btn" name="send">upload</button> </a>
                <br>
                <a href="display writer.php">display</a>
            </form>
        </div>
        <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'project';
        $con = mysqli_connect($host, $username, $password, $db);
        @$name = $_POST['name'];
        @$book = $_POST['book'];
        @$image = $_FILES['image'];
        @$image_location = $_FILES['image']['tmp_name'];
        @$image_name = $_FILES['image']['name'];
        @$image_up = "images/" . $image_name;
        @$sql = "INSERT INTO admin (name , book ,image ) VALUES ('$name','$book','$image_up')";
        mysqli_query($con, $sql);
        if (move_uploaded_file($image_location, 'images/' . $image_name)) {
            echo "<script>alert('uploaded successfully')</script>";
        } else {
            echo "<script>alert('Failed!')</script>";
        }
        ?>

    </center>
</body>

</html>