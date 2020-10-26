<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");

    if(isset($_POST["submit"])){
        $photo = "image/pizza.png";
        $name = $_POST["name"];
        $price = $_POST["price"];

        // echo $photo , $name , $price;

        $query="INSERT INTO choose_pizzas (`photo`,`name`, `price`)
        VALUES('$photo','$name', '$price')";
        $result=mysqli_query($conn, $query);

        if(!$result){
            die("query failed");
        }else{
            echo "successful";
        }
    }
   
?>

<form action=""  method="POST">

    <label for="name">name</label>
    <input type="text" id="name" class="name" name="name">
   
    <br><br>
    <label for="price">price</label>
    <input type="text" id="price" class="price" name="price">

    <br><br>
    <button type="submit" id="submit" class="submit" name="submit">
        submit    
    </button>

</form>