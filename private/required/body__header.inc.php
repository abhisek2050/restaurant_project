<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?> | Restaurant Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php base_url();?>css/bootstrap.css"> 
    <link rel="stylesheet" href="<?php base_url();?>css/responsive.css/large.css">
    <link rel="stylesheet" href="<?php base_url();?>css/responsive.css/medium.css">
    <link rel="stylesheet" href="<?php base_url();?>css/responsive.css/small.css">
    <link rel="stylesheet" href="<?php base_url();?>css/style.css">
    <?php
        if ($title == "service"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/service.css">
        <?php  
        }else if ($title == "news"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/news.css">
        <?php  
        } else if($title == "contact"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/contact.css">
        <?php
        }else if($title == "about_us"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/about_us.css">
        <?php
        }else if($title == "register"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/admin_css/register.css">
        <?php  
        }else if($title == "loginform"){
        ?>
            <link rel="stylesheet" href="<?php base_url();?>css/admin_css/loginform.css">
        <?php
        }
    ?>

</head>
<body>
    <div class="body__wrap">

        <div class="body__header">

            <div class="mobile__menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <!-- end mobile__menu -->

            <header class="wrap__container">

                <div class="header__logo">

                    <a href="index.html">
                        <img src="<?php base_url();?>image/logo-white.png" alt="logo">
                    </a>
                </div>
                <!-- end header__logo -->

                <nav class="header__nav">

                    <ul class="main__nav">

                        <li class="nav__list">
                            <a class="nav__link" href="<?php base_url();?>index.php">HOME</a>
                        </li>

                        <li class="nav__list">
                            <a class="nav__link" href="<?php base_url();?>about_us/index.php" target="">ABOUT US</a>
                        </li>

                        <li class="nav__list">
                            <a class="nav__link" href="<?php base_url();?>service/index.php">SERVICES</a>
                        </li>

                        <li class="nav__list">
                            <a class="nav__link" href="<?php base_url();?>news/index.php">NEWS</a>
                        </li>

                        <li class="nav__list">
                            <a class="nav__link" href="<?php base_url();?>contact/index.php" target="">CONTACT</a>
                        </li>
                        
                    </ul>
                    <!-- end main__nav -->

                </nav>
                <!-- header__nav -->
                <div class="header__button">
                    <a href="tel:+917978813614">ORDER:+7978813614</a>
                </div>
                <!-- end header__button -->

            </header>

        </div>
        <!-- end body__header -->