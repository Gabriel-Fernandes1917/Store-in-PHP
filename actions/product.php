<html>

<?php
    $name = $_GET["name"];
    $price = $_GET["price"];

    $conecction = mysqli_connect('localhost', 'root', '','store');

    $query = "insert into "
?>


    Total price <?php echo $name ?>, <?php  echo $price?>.
</html>



