<?php
include('config.php');
if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMGE = $_FILES['image'];
    $imge_location = $_FILES['image']['tmp_name'];
    $imge_name=$_FILES['image']['name'];
    $imge_up="imges/".$imge_name;
    $insert="INSERT INTO prod (name,price,image) VALUES ('$NAME','$PRICE','$imge_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($imge_location,'imges/'.$imge_name)){
        echo"<script>alert('upload product');</script>";
    } else {
        echo"<script>alert('donot upload product');</script>";
    }
    header('location:index.php');
}

?>