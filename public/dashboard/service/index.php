<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");
    $query = "SELECT * FROM choose_pizzas";
    $result = mysqli_query($conn, $query);
?>
<ul>
    <li>
        <a href="<?php base_url()?>dashboard/service/insert.php">insert new record</a>
    </li>
</ul>
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
    <h1>
        <?php echo $row["name"];?>
        <?php echo $row["price"];?>

    </h1>
<?php
    }
?>



