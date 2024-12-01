<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Update</title>
</head>

<body>


    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "SELECT * FROM prod WHERE id= $ID");
    $data = mysqli_fetch_array($up)
    ?>
    <center>
        <div class="main">
            <!-- enctype="multipart/form-data" => this code must be added to be able to upload the image -->
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Update product</h2>
                <input type="text" name="id" value="<?php echo $data['id']; ?>">
                <br>
                <input type="text" name="name" value="<?php echo $data['name']; ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price']; ?>">
                <br>
                <input type="file" name="image" id="file" style="display: none;">
                <label for="file">Update product image</label>
                <button name="update" type="submit">Update product ✅</button>
                <br><br>
                <a href="products.php">show all products</a>

            </form>
        </div>
        <p class="omar">made by: omar mohsen</p>
    </center>
</body>

</html>