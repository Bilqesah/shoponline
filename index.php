<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Shop Online</title>
</head>
<body>
    <center>
        
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Add Products</h2>
                <input type="text" name="name"><br>
                <input type="text" name="price"><br>
                <input type="file" id="file" name="image" style='display:none'>
                <label for="file">Select prodect image</label>
                <button name="upload">upload prodect</button>
                <br><br>
                <a href="products.php">View all products</a>
            </form>
        </div>
        <p>Developer by Bilqes</p>
    </center>
</body>
</html>