<?php
    $title = "register";
        include("../private/config/config.php");
        require("../private/config/db_connection.php");
        include("../private/required/body__header.inc.php");

    
    if(isset($_POST["submit"])){
       $user_name = $_POST["user_name"];
       $user_password = $_POST["user_password"];
       $user_email = $_POST["user_email"];

       $query="INSERT INTO `restaurant_admins`(`user_name`, `user_password`, `user_email`) 
       VALUES('$user_name', '$user_password','$user_email')";
       $result=mysqli_query($conn, $query);

       if(!$result){
           die("db query failed");
       }else{
           echo $user_name." has been added ";
       }
    }

?>
    
<div class="body__banner">

    <div class="banner__img">
        <img src="<?php base_url();?>image/slider_1_1920_1200.jpg" alt="banner img">
    </div>

    <div class="banner__content">
        
        <div class="wrap__banner-content">
        <span class="town">THE BEST IN TOWN </span>
        <span class="blog">Our Blog</span>
        

            <div class="banner__button">
                <button>SEE TODAYS MENU</button>
            </div>
        </div>

    </div>

</div>
<!-- end body__banner -->


<form action="" method="POST" onsubmit="return validation()">

    <label for="user_name">UserName</label>
    <input type="text" class="user_name" id="user_name" name="user_name">
    <p>
    
    </p>

    <br><br>
    <label for="user_email">UserEmail</label>
    <input type="email" class="user_email" id="user_email" name="user_email">
    <p>
    
    </p>
    <br><br>

    <label for="user_password">UserPassword</label>
    <input type="password" class="user_password" id="user_password" name="user_password">
    <p>
    
    </p>
    <br><br>

    <label for="user_password">UserPassword</label>
    <input type="password" class="user_password" id="user_password">
    <p>
    
    </p>
    <br><br>

    <label for="submit"></label>
    <button type="submit" class="submit" id="submit" name="submit">
        Submit
    </button>

</form>

<?php
    include("../private/required/body__footer.inc.php");
?>
