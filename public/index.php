    <?php
        $title = "home page";
        require("../private/config/db_connection.php");
        include("../private/config/config.php");
        include("../private/required/body__header.inc.php");
    ?>
        <div class="body__banner-home">

            <div class="banner__img">
                <img src="image/slider_1_1920_1200.jpg" alt="banner img">
            </div>

            <div class="banner__content">
                
                <div class="wrap__banner-content">
                   <span class="town"> BEST IN TOWN </span>
                   <span class="pizza">PIZZA & PASTA</span>
                

                    <div class="banner__button">
                        <button>SEE TODAYS MENU</button>
                    </div>
                </div>

            </div>

        </div>
        <!-- end body__banner -->

        <div class="body__container">

            <main class="body__main">
                
                <div class="section__ourstory">
                    <header class="section__header">
                        Our Story
                    </header>
                    <div class="ourstory__body wrap__container">
                        <div class="ourstory__paragraph-1">
                            <p>
                                Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae. Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis massa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus. Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id dapibus dolor, ac cursus nulla. 
                            </p>
                        </div>

                        <div class="ourstory__paragraph-2">
                            <p>
                                Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae. Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus. Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda pibus dolor, accursus nulla. 
                            </p>
                        </div>                       
                    </div>
                    <!-- end ourstory__body -->
                    
                </div>  
                <!-- end ourstory section -->

                <div class="section__bestseller">

                    <header class="section__header">
                        Best Sellers
                    </header>

                    <div class="upper__article wrap__container">
                        <?php 
                        
                            $query = "SELECT * FROM pizzas ";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){
                            
                        ?>

                        <article>
                        
                            <div class="article__header">
                                <img src="<?php echo $row["image"];?>" alt="<?php echo $row["name"];?>">
                            </div>

                            <div class="article__header-content">
                                <?php echo $row["name"];?>
                            </div>
                            
                            <div class="article__body">
                           $ <?php echo $row["price"];?>
                            </div>

                            <div class="article__footer">
                                <button>order Now</button>
                            </div>

                        </article>
                      <?php      
                        }
                      ?>

                    </div>
                    <!-- end upper article -->

                    <div class="bestseller__footer">
                        <button>SEE TODAYS MENU</button>
                    </div>

                </div>
                <!-- end best sellers section -->

                <div class="section__ourmenu">

                    <header class="section__header">
                        Our Menu
                    </header>

                        <ul class="unorder__list wrap__container">
                            
                            <li class="list active" data-food="all">
                                All
                            </li>

                            <li class="list" data-food="one">
                                PIZZA
                            </li>

                            <li class="list" data-food="two">
                                PASTA
                            </li>

                            <li class="list" data-food="three">
                                SALADS
                            </li>

                            <li class="list" data-food="four">
                                DESERTS
                            </li>
                            
                        </ul>

                        <div class="ourmenu__body wrap__container">

                            <article class="all one">

                                <figure class="ourmenu__left"><img src="image/menu-1-120x120.jpg" alt="menu-1"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Pizza Margherita  
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all two">

                                <figure class="ourmenu__left"><img src="image/menu-2-120x120.jpg" alt="menu-2"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Pizza Prosciuto 
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all four">

                                <figure class="ourmenu__left"><img src="image/menu-3-120x120.jpg" alt="menu-3"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Pizza Margherita  
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all three">

                                <figure class="ourmenu__left"><img src="image/menu-4-120x120.jpg" alt="menu-4"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Pizza Prosciuto 
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all one">

                                <figure class="ourmenu__left"><img src="image/menu-5-120x120.jpg" alt="menu-5"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Italian pasta 
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all two">

                                <figure class="ourmenu__left"><img src="image/menu-6-120x120.jpg" alt="menu-6"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Broschettas  
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all one">

                                <figure class="ourmenu__left"><img src="image/menu-7-120x120.jpg" alt="menu-7"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Italian pasta  
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                            <article class="all four three">

                                <figure class="ourmenu__left"><img src="image/menu-8-120x120.jpg" alt="menu-8"></figure>
                                
                                <div class="ourmenu__center">
                                    <header class="article__header">
                                        Broschettas 
                                    </header>

                                    <div class="article__body">
                                        Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. 
                                    </div>
                                </div>
                                <footer class="ourmenu__right">
                                    $12.00
                                </footer>

                            </article>

                        </div>
                    
                </div>
                <!-- end ourmenu section -->

            </main>
            <!-- end body__main -->

        </div>
        <!-- end body__container -->

       <?php
       
       include("../private/required/body__footer.inc.php");
       ?>