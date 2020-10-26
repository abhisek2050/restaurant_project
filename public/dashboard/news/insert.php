<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");

    if(isset($_POST["submit"])){
        $image = "image/blog-1-1000x400.jpg";
        $title = $_POST["title"];
        $detail = $_POST["detail"];
        
        $query ="INSERT INTO news (`image`, `title`, `detail`) 
        VALUES('$image', '$title', '$detail')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query failed");
        }else{
            echo "successful";
        }
    }
?>

<form action=""  method="POST">

    <!-- <label for="image">image</label>
    <input type="text" id="image" class="image" name="image"> -->

    <br><br>
    <label for="title">title</label>
    <input type="text" id="title" class="title" name="title">

    <br><br>
    <label for="detail">detail</label>
    <input type="text" id="detail" class="detail" name="detail">

    <br><br>
    <button type="submit" id="submit" class="submit" name="submit">
        submit    
    </button>

</form>