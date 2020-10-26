<?php
    $title = "service";

include("../../private/config/db_connection.php");
include("../../private/config/config.php");
include("../../private/required/body__header.inc.php");
?>

<div class="body__banner">

    <div class="banner__img">
        <img src="<?php base_url();?>image/service_bg.jpg" alt="banner img">
    </div>

    <div class="banner__content">
        
        <div class="wrap__banner-content">

            <span class="town">THE BEST IN TOWN </span>
            <span class="blog">Menu</span>
        

            <!-- <div class="banner__button">
                <button>SEE TODAYS MENU</button>
            </div> -->
            
        </div>

    </div>

</div>
<!-- end body__banner -->

<div class="body__container">

    <main class="body__main">

        <div class="body__section">
                <div class="pizza__section wrap__container">
                    <div class="pizza__section-header">
                     Choose from Pizza
                    </div>

                    <?php
                        $query="SELECT * FROM choose_pizzas";
                        $result=mysqli_query($conn, $query);
                        
                        while($row=mysqli_fetch_assoc($result)){
                    ?>

                    <article class="first__pizza">

                        <figure class="pizza__figure">
                            <img src="<?php echo $row["photo"];?>" alt="<?php echo $row["name"];?>">
                        </figure>

                        <header class="pizza__header">
                           <?php echo $row["name"];?>
                        </header>

                        <div class="pizza__price">
                        <?php echo $row["price"];?>
                        
                        </div>
                    </article>

                    <?php
                     }
                    ?>

                </div>
                <!-- end pizza__section -->

                <div class="pizza__pasta-section wrap__container">

                    <article class="pizza__margherita-article">
                       
                        <img src="../image/menu-1-120x120.jpg" alt="menu-1">

                        <div class="title_detail">
                            <div class="title">
                                Pizza Margherita
                            </div>

                            <div class="detail">
                                Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                            </div>
                        </div>
                        
                        <div class="price">
                            $12.00
                        </div>

                    </article>
                    <!-- end pizza__margherita-article -->

                    <article class="italian__pasta-article">
                       
                       <img src="../image/menu-2-120x120.jpg" alt="menu-2">

                        <div class="title_detail">

                            <div class="title">
                                    Italian pasta
                            </div>

                            <div class="detail">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. 
                            </div>
                        </div>

                       <div class="price">
                           $20.00
                       </div>

                    </article>
                    <!-- end italian__pasta-article -->

                    <article class="Pizza__Prosciuto-article">
                       
                       <img src="../image/menu-3-120x120.jpg" alt="menu-3">

                        <div class="title_detail">

                            <div class="title">
                                    Pizza Prosciuto
                            </div>

                            <div class="detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                            </div>
                        </div>

                       <div class="Price">
                           $12.00
                       </div>

                    </article>
                    <!-- end italian__pasta-article -->

                    <article class="Broschettas__article"> 
                        <img src="../image/menu-4-120x120.jpg" alt="menu-4">

                        <div class="title_detail">

                            <div class="title">
                                    Broschettas
                            </div>

                            <div class="detail">
                                    Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis.
                            </div>
                        </div>

                        <div class="price">
                            $6.00
                        </div>

                    </article>
                    <!-- end Broschettas__article -->

                    <article class="Pizza__Margherita-article">
                            
                        <img src="../image/menu-5-120x120.jpg" alt="menu-5">

                        <div class="title_detail">

                            <div class="title">
                                Pizza Margherita
                            </div>

                            <div class="detail">
                                Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                            </div>
                        </div>

                        <div class="Price">
                            $12.00
                        </div>

                    </article>
                    <!-- end Pizza__Margherita-article -->

                    <article class="italian__pasta-article">
                            
                        <img src="../image/menu-6-120x120.jpg" alt="menu-6">

                        <div class="title_detail">
                            <div class="title">
                                Italian pasta
                            </div>

                            <div class="detail">
                                Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. 
                            </div>
                        </div>

                        <div class="price">
                            $20.00
                        </div>

                    </article>
                    <!-- end italian__pasta-article -->

                    <article class="Pizza__Prosciuto-article">
                        
                        <img src="../image/menu-7-120x120.jpg" alt="menu-7">

                        <div class="title_detail">
                            <div class="title">
                                Pizza Prosciuto
                            </div>

                            <div class="detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                            </div>
                        </div>

                        <div class="Price">
                            $12.00
                        </div>

                    </article>
                    <!-- end italian__pasta-article -->

                    <article class="Broschettas__article">
                        
                        <img src="../image/menu-8-120x120.jpg" alt="menu-8">
                       
                        <div class="title_detail">

                            <div class="title">
                                    Broschettas
                            </div>

                            <div class="detail">
                                    Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis.
                            </div>
                        </div>

                        <div class="price">
                            $6.00
                        </div>

                    </article>
                    <!-- end Broschettas__article -->

                </div>
                <!-- end pizza__pasta-section -->

        </div>
        <!-- end body__section -->

        <div class="salad__section">
             Add a fresh Salad to your order
        </div>     
        <!-- end salad section -->

        <div class="choose__pasta-section wrap__container">

            <div class="pasta__header">
                Choose from Pasta
            </div>

            <div class="pasta__leftright-article">
               
                <div class="left__article">

                    <figure class="left__article-leftside">
                        <img src="../image/pasta-1-300x300.png" alt="pasta-1">
                    </figure>

                    <div class="left__article-rightside">   

                        <div class="pasta__title">
                            Pizza Margherita
                        </div>
                        <div class="pasta__price">
                            $12.00
                        </div>
                        <div class="pasta__detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                        </div>

                    </div>

                </div>
                <!-- end left__article -->

                <div class="right__article">

                    <figure class="right__article-leftside">
                        <img src="../image/pasta-2-300x300.png" alt="pasta-2">
                    </figure>

                    <div class="right__article-rightside">   

                        <div class="pasta__title">
                            Pizza Margherita
                        </div>
                        <div class="pasta__price">
                            $12.00
                        </div>
                        <div class="pasta__detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                        </div>
                    </div>

                </div>
                <!-- end right__article -->

            </div>
            <!-- end pasta__leftright-article -->

        </div>           
        <!-- end choose__pasta-section-->

        <div class="last__pizza-section wrap__container">

            <article class="Pizza__Margherita-article">
                            
                <img src="../image/menu-5-120x120.jpg" alt="menu-5">
    
                    <div class="title_detail">
    
                        <div class="title">
                            Pizza Margherita
                        </div>
    
                        <div class="detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                        </div>

                    </div>
    
                    <div class="Price">
                        $12.00
                    </div>
    
            </article>
            <!-- end Pizza__Margherita-article -->
    
            <article class="italian__pasta-article">
                                
                <img src="../image/menu-6-120x120.jpg" alt="menu-6">
    
                    <div class="title_detail">
                        <div class="title">
                            Italian pasta
                        </div>
    
                        <div class="detail">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. 
                        </div>
                    </div>
    
                    <div class="price">
                        $20.00
                    </div>
    
            </article>
            <!-- end italian__pasta-article -->
    
            <article class="Pizza__Prosciuto-article">
                            
                <img src="../image/menu-7-120x120.jpg" alt="menu-7">
    
                    <div class="title_detail">
                        <div class="title">
                            Pizza Prosciuto
                        </div>
    
                        <div class="detail">
                            Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.
                        </div>
                    </div>
    
                    <div class="Price">
                        $12.00
                    </div>
    
            </article>
            <!-- end italian__pasta-article -->
    
            <article class="Broschettas__article">
                <img src="../image/menu-8-120x120.jpg" alt="menu-8">
                           
                    <div class="title_detail">
   
                        <div class="title">
                            Broschettas
                        </div>
   
                        <div class="detail">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis.
                        </div>
                    </div>
   
                    <div class="price">
                        $6.00
                    </div>
               
            </article>
            <!-- end Broschettas__article -->           
    
        </div>
        <!-- end last__pizza-section -->

    </main>
    <!-- end body__main -->
    
    
</div>

<?php
    include("../../private/required/body__footer.inc.php");
?>