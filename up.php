<?php
include('config.php');
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMGE = $_FILES['image'];
    $imge_location = $_FILES['image']['tmp_name'];
    $imge_name=$_FILES['image']['name'];
    $imge_up="imges/".$imge_name;
    $update="UPDATE prod SET name='$NAME', price='$PRICE', image='$imge_up' WHERE id=$ID";
    mysqli_query($con,$update);
    if(move_uploaded_file($imge_location,'imges/'.$imge_name)){
        echo"<script>alert('update product');</script>";
    } else {
        echo"<script>alert('donot update product');</script>";
    }
    header('location:index.php');
}

?>