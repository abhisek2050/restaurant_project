<?php
        $title = "news";

    include("../../private/config/config.php");
    include("../../private/required/body__header.inc.php");
?>

        <div class="body__banner">

            <div class="banner__img">
                <img src="<?php base_url();?>image/slider_1_1920_1200.jpg" alt="banner img">
            </div>

            <div class="banner__content">
                
                <div class="wrap__banner-content">
                   <span class="town">THE BEST IN TOWN </span>
                   <span class="blog">Our Blog</span>
                

                    <!-- <div class="banner__button">
                        <button>SEE TODAYS MENU</button>
                    </div> -->
                </div>

            </div>

        </div>
        <!-- end body__banner -->

        <div class="body__container wrap__container">

            <main class="body__main page__news">

                <div class="section">

                    <div class="italian__pizza-article">

                        <figure class="article__figure">
                            <img src="<?php base_url();?>image/blog-1-1000x400.jpg" alt="logo">
                        </figure>

                        <div class="article__header">
                            The secret of the perfect italian pizza
                        </div>

                        <div class="header__content">
                            By Admin in Recipes 3 Comments 
                        </div>

                        <div class="article__body">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. Enean porttitor eros non ultrices convallis. Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem. Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus
                        </div>
                    </div>
                    <!-- end italian pizza article -->

                    <div class="raviolli__pesto-article">

                        <figure class="article__figure">
                            <img src="<?php base_url();?>image/blog-2-1000x400.jpg" alt="image">

                        </figure>
                        
                        <div class="article__header">
                            The best recipe for raviolli with pesto
                        </div>

                        <div class="header__content">
                            By Admin in Recipes 3 Comments 
                        </div>
                        <div class="article__body">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. Enean porttitor eros non ultrices convallis. Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem. Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus
                        </div>

                    </div>
                    <!-- end raviolli__pesto-article -->

                    <div class="tomato__pasta-article">

                        <figure class="article__figure">
                            <img src="<?php base_url();?>image/blog-3-1000x400.jpg" alt="">
                        </figure>
                        <div class="article__header">
                            Recipe of the week: Tomato pastas
                        </div>

                        <div class="header__content">
                            By Admin in Recipes 3 Comments 
                        </div>
                        <div class="article__body">
                            Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. Enean porttitor eros non ultrices convallis. Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem. Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus
                        </div>

                    </div>
                    <!-- end tomato__pasta-article -->
                    
                    <div class="date">
                        01.02.03
                    </div>
                </div>
                <!-- end left section -->

            </main>
            <!-- end body__main -->

            <aside class="body__aside">

                <div class="search">
                
                    <label class="search__btn">
                        <a href="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </label>
                    <input type="text"  placeholder="search"  class="search__field" id="search">
                </div>

                <div class="body__article">
                    <figure class="aside__figure">
                        <img src="<?php base_url();?>image/sidebar-1-400x600.jpg" alt="logo">
                    </figure>
                </div>
                <!-- end body__article -->

                <div class="subscribe__article">

                    <div class="header__subscribe">
                        Subscribe to our newsletter
                    </div>

                    <label for="subscribe"></label>
                    <input type="email" placeholder="your e-mail here"  class="subscribe" id="subscribe">

                    <div class="subscribe__button">
                        <button> subscribe</button>
                    </div>
                </div>
                <!-- end subscribe__article -->

                <div class="Recipes__article">

                    <div class="recipes__article-header">
                        Latest Posts
                    </div>

                    <div class="recipes__1">

                        <figure class="recipes1__figure">
                            <img src="../image/recipes1.jpg" alt="image">
                        </figure>

                        <div class="recipes1__detail">
                            <div class="recipes__header">
                                Recipes
                            </div>

                            <div class="recipes__header-content">
                                The best recipe for pasta
                            </div>

                            <div class="recipes__footer">
                                May 22, 2020
                            </div>

                        </div>   

                    </div>

                    <div class="recipes__2">
                        <figure class="recipes2__figure">
                            <img src="../image/recipes2.jpg" alt="image">
                        </figure>

                        <div class="recipes2__detail">

                            <div class="recipes__header">
                                Recipes
                            </div>

                            <div class="recipes__header-content">
                                The secret to amazing food
                            </div>

                            <div class="recipes__footer">
                                May 22, 2020
                            </div>

                        </div>   

                    </div>

                    <div class="recipes__3">

                        <figure class="recipes3__figure">
                            <img src="../image/recipes3.jpg" alt="image">
                        </figure>

                        <div class="recipes3__detail">

                            <div class="recipes__header">
                                Recipes
                            </div>
                            <div class="recipes__header-content">
                                Orange lemonade 
                            </div>
                            <div class="recipes__footer">
                                May 22, 2020
                            </div>

                        </div>            
                          
                    </div>


                </div>
                <!-- end recipes__article -->

                <div class="buy1get1__article">

                    <div class="buy1get1__header">
                        <div class="one__plus">1+1</div>
                        <span class="buy1get1">Buy one get one</span>
                    </div>
                    <figure class="buy1get1__figure">
                        <img src="<?php base_url();?>image/sidebar-2-400x600.jpg" alt="image">
                    </figure>

                </div>
                <!-- end buy1get1__article -->
                
            </aside>
            <!-- end body__aside -->

        </div>
        <!-- end body__container -->
<?php
    include("../../private/required/body__footer.inc.php");
?>

