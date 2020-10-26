<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");

    if(isset($_POST["submit"])){
        $title=$_POST["title"];
        $detail=$_POST["detail"];
        $photo="img/quoto-1-200x200.jpg";
        $name=$_POST["name"];

        $query="INSERT INTO testimonials (`title`, `detail`, `photo`, `name`)
        VALUES('$title', '$detail', '$photo', '$name')";
        $result=mysqli_query($conn, $query);

        if(!$result){
            die ("database query failed");
        } else {
            echo "successful";
        }
    }
?>

<form action=""  method="POST">

    <label for="title">title</label>
    <input type="text" id="title" class="title" name="title">

    <br><br>
    <label for="detail">detail</label>
    <input type="text" id="detail" class="detail" name="detail">

    <!-- <br><br>
    <label for="photo">photo</label>
    <input type="text" id="photo" class="photo" name="photo"> -->

    <br><br>
    <label for="name">name</label>
    <input type="text" id="name" class="name" name="name">

    <br><br>
    <button type="submit" id="submit" class="submit" name="submit">
        submit    
    </button>

</form>