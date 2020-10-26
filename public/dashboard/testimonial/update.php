<?php
    include("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");

    if(isset($_POST["submit"])){
        $id = $_GET["id"];
        $title = $_POST["title"];
        $detail = $_POST["detail"];
        $name = $_POST["name"];

        $query="UPDATE `testimonials` SET
        `title` = '$title',
        `detail` = '$detail',
        `name` = '$name'
        WHERE `id` = '$id'
        ";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query failed");
        }else{
            echo "successful";
        }
    }
?>


<form action="" method="POST">

    <label for="title">title</label>
    <input type="text" class="title" id="title" name="title">

    <br><br>
    <label for="detail">detail</label>
    <input type="text" class="detail" id="detail" name="detail">

    <!-- <br><br>
    <label for="photo">photo</label>
    <input type="text" class="photo" id="photo" name="photo"> -->

    <br><br>
    <label for="name">name</label>
    <input type="text" class="name" id="name" name="name">

    <br><br>
    <label for="submit"></label>
    <button type="submit" class="submit" id="submit" name="submit">
     submit
    </button>

</form>