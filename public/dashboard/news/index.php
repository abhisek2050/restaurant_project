<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");
    $query = "SELECT * FROM news";
    $result = mysqli_query($conn, $query);
?>
<ul>
    <li>
        <a href="<?php base_url()?>dashboard/news/insert.php">insert new record</a>
    </li>
</ul>

<?php
    while($row = mysqli_fetch_assoc($result)){
?>
    <h1>
        <?php echo $row["title"];?>
    </h1>
        <img src="<?php echo base_url() . $row["image"];?>" height="100px"  alt="">

        <a href="update.php?view=<?php echo $row["id"];?>">update</a>
    
<?php
    }
?>



