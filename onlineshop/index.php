<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>SHOPE ONLINE | إصافة المنتجات</title>
</head>

<body>
    <center>
        <div class="main">
            <!-- enctype="multipart/form-data" => this code must be added to be able to upload the image -->
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>online shop</h2>
                <img src="logo/—Pngtree—unique shopping logo design icon_4825258.png" alt="online shop" width="310px">
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" name="image" id="file" style="display: none;">
                <label for="file">choose product image</label>
                <button name="upload">Add product ✅</button>
                <br><br>
                <a href="products.php">show all products</a>

            </form>
        </div>
        <p class="omar">made by: omar mohsen</p>
    </center>
</body>

</html>