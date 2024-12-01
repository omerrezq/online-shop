<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Products</title>
    <style>
        h3 {
            font-family: "Noto Sans", sans-serif;
            font-weight: bold;
        }

        .card {
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .card img {
            width: 100%;
            height: 200px;
        }

        main {
            width: 60%;
        }
    </style>
</head>

<body>

    <center>
        <h3>ALL PRODUCTS</h3>
    </center>

    <?php

    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {

        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]'  class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='delete.php ? id=$row[id]' class='btn btn-danger'>delete product</a>
                    <a href='update.php ? id=$row[id]' class='btn btn-primary'>edit product</a>
                </div>
            </div>
        </main>
        </center>
        ";
    }


    ?>



</body>

</html>