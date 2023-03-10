<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>products</title>
   <style>
    h3{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: bold;
}
.card{
    float: right;
    margin-top: 20px;
    margin-left: 10px;
    margin-right: 10px;
}
.card img{
    width: 100%;
    height: 200px;
}
main{
    width: 60%;
}
.navbar-brand{
    margin-left:70px;
}
   </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="card.php">Mycart | عربتي</a>
    </nav>
<center>
    <h3>All products</h3>
</center>
<?php
include ('config.php');
$result = mysqli_query($con,"SELECT * FROM prod");
while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
        <div class='card' style='width: 15rem;'>
            <img src='$row[image]' class='card-img-top' >
            <div class='card-body'>
                 <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price]</p>
                <a href='val.php? id=$row[id]' class='btn btn-success'>Add to cart</a>

             </div>
        </div>
    </main>
    </center>
    ";
}
?>

</body>
</html>