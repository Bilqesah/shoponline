<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Update product</title>
</head>
<body>
<?php
include ('config.php');
 $ID = $_GET['id'];
 $up=mysqli_query($con,"select * FROM prod WHERE id=$ID");
 $data= mysqli_fetch_array($up);
?>
    <center>
        
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>Update products</h2>
                <input type="text" name="id" value='<?php echo $data['id']?>'><br>
                <input type="text" name="name"value='<?php echo $data['name']?>'><br>
                <input type="text" name="price"value='<?php echo $data['price']?>'><br>
                <input type="file" id="file" name="image" style='display:none'>
                <label for="file">update prodect image</label>
                <button name="update" type='submit'>update prodect</button>
                <br><br>
                <a href="products.php">View all products</a>
            </form>
        </div>
        <p>Developer by Bilqes</p>
    </center>
</body>
</html>
