<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="/css/project.css">
    <title>update</title>
</head>

<body>
    <?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'project';
    $con = mysqli_connect($host, $username, $password, $db);
    @$ID = $_GET['id'];
    @$up = mysqli_query($con, "SELECT * FROM admin where id=$ID ");
    @$data = mysqli_fetch_array($up);


    ?>
    <center>
        <h1>update</h1>
        <div class="container">
            <form action="up.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value='<?php echo $data['id']  ?>'>
                <br>
                <label>اسم الكاتب</label>
                <br>
                <input type="text" placeholder="Writer Name" name="name" value='<?php echo $data['name']  ?>'>
                <br>
                <label>اسم العمل</label>
                <br>
                <input type="text" placeholder=" book Name" name="book" value='<?php echo $data['book']  ?>'>
                <br>
                <label>update image</label>
                <br>
                <input type="file" name="image">
                <br>
                <a><button type="submit" class="btn" name="update" type="submit">update</button> </a>
                <br>
                <a href="display writer.php">display</a>
            </form>
        </div>


    </center>
</body>

</html>