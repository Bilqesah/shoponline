<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Mycart</title>
    <style>
        h3{
    font-family:'cairo',sans-serif;
    font-weight: bold;
}
main{
    width: 40%;
    margin-top: 30px;
}
table{
    box-shadow: 1px 1px 10px silver;

}
thead{
    color: white;
    background-color: #3498db;
    text-align: center;
}
tbody{
    text-align: center;
}
    </style>
</head>
<body>
    <center><h3>Items In My Cart</h3></center>
    <?php
    include ('config.php');
    $result = mysqli_query($con,"SELECT * FROM addcard");
    $i=1;
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Item Name</th>
                        <th scope='col'>Unit price</th>
                        <th scope='col'>Remove</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$i</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php ? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    </tr>
                </tbody>
               
            </table>
        </main>
    </center>
        ";
        $i+=1;
    }
    ?>
    <center>
            <a href="shop.php">Return to products page</a>
    </center>
</body>
</html>