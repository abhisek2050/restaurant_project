<?php
    require("../../../private/config/db_connection.php");
    require("../../../private/config/config.php");
    include("../include/dashboard.header.inc.php");
    $query = "SELECT * FROM testimonials";
    $result = mysqli_query($conn, $query);
?>
<div class="border-bottom mb-5 bg-light">
    <div class="container text-right  py-3">
        <a class="btn btn-primary text-white" href="<?php base_url()?>dashboard/testimonial/insert.php">insert new record</a>
        </div>
</div>
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
    <h1>
        <?php echo $row["title"];?>
    </h1>

    <a href="update.php?id=<?php echo $row["id"];?>">update</a>
<?php
    }
?>



