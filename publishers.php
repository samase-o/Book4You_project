<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>publishers gate</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>page for admin </h1>
        <div class="add-publisher">
            <div class="container">
                <h4>أضف دار نشر </h4>
                <form action="publishers.php" method="POST" enctype="multipart/form-data">
                    <label>اسم دار النشر</label>
                    <input type="varchar" placeholder="Enter a name" name="title">
                    <br>
                    <label>المكان فى المعرض</label>
                    <input type="varchar" placeholder="Enter a place" name="position">
                    <br>
                    <label>صورة المعرض</label>
                    <input type="file" placeholder="" name="image">

                    <br>
                    <br>
                    <a><button calss="btn indigo" name="send">send</button></a>
                    <a href="display.php">display</a>
                </form>
            </div>
        </div>

    </center>


    <?php
    include('connect.php');
    @$name = $_POST['title'];
    @$place = $_POST['position'];
    @$image = $_FILES['image'];
    @$image_location = $_FILES['image']['tmp_name'];
    @$image_name = $_FILES['image']['name'];
    @$image_up = "images/" . $image_name;
    @$query = "INSERT INTO publishers(publisher_name,publisher_place,publisher_image)VALUES('$name','$place','$image_up')";
    mysqli_query($conn, $query);
    if (move_uploaded_file($image_location, "images/" . $image_name)) {
        echo "<script>alert('تم اضافة الصورة بنجاح')</script>";
    } else {
        echo "<script>alert('فشل الاضافة')</script>";
    }
    ?>