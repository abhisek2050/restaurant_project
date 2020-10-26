<?php
    $title="loginform";
    require("../private/config/db_connection.php");
    // include("../private/required/body__header.inc.php");

    if(isset($_POST["submit"])){
        $name=$_POST["username"];
        $psw=$_POST["password"];

        $query="SELECT * FROM `restaurant_admins`
        WHERE (`user_name`='$name' AND `user_password`='$psw')";
        $result=mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if(!$num){
            echo "username & password is wrong";    
        }else{
            echo "successfully logedin";
            session_start();

            $_SESSION['user_name'] = $name;  

            //header('location:dashboard/index.php');
        }

    }
?>
<form action="" method="POST">

<label for="username">UserName</label>
<input type="text" class="username" id="username" name="username">

<br><br>

<label for="password">Password</label>
<input type="password" class="password" id="password" name="password">

<br><br>

<button type="login" class="login" id="login" name="submit">
    Login
</button>

</form>