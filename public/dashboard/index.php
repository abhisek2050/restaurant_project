<?php
    session_start();
    //session_destroy();

    if(!isset($_SESSION['user_name'])){
        header('location:../loginform.php');
    }

    $name = $_SESSION['user_name'];
    echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
            <li><a href="testimonial/index.php">testimonials</a></li>
            <li><a href="news/index.php">news</a></li>
            <li><a href="service/index.php">service</a></li>
            <li><a href="aboutus/index.php">aboutus</a></li>
            <li><a href="../log_out.php">log out</a></li>
            
        </ul>

</body>
</html>