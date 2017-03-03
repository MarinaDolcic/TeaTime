<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Ubuntu:300,500" rel="stylesheet">
    <script src="https://use.fontawesome.com/b3185cef53.js"></script>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/scripts/functions.js"></script>

    <?php wp_head(); ?>
</head>

<body>
    <header class="flex row">

        <a href="#">
            <div id="logo" class="flex"><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png"></div>
        </a>
        <div id="navigation" class="flex column">
            <div id="top_nav" class="flex row">
                <nav id="main_nav" class="">

                    <?php wp_nav_menu( [
                        'theme_location' => 'main-nav'
                    ] ); ?>

                        


                </nav>
                <nav id="lang" class="flex">
                    <a href="">DK</a>

                    <a href="">EN</a>

                    <a href="">DE</a>
                </nav>



                <div class="social_btns flex"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></div>
            </div>

            <nav id="sub_nav" class="flex row">
                <a href="#family_img">Info</a>
                <a href="#charge_img">Events</a>
                <a href="#vacation">Iron age vacation</a>
                <a href="#connect">Connect</a>
                <?php 
                    get_search_form();
                ?>
            </nav>
            
<!-- small menu that is added to the mobile menu when the page loads-->
            <li id="home-menu"><a href="index.php">HOME</a>
            <ul id="burger-sub-nav">
                <li><a href="#family_img">- Info</a></li>
                <li><a href="#charge_img">- Events</a></li>
                <li><a href="#vacation">- Iron age vacation</a></li>
                <li><a href="#connect">- Connect</a></li>
            </ul>
            </li>
<!--    -->


        </div>
        <img class="burger-nav" src="<?php echo get_template_directory_uri(); ?>/images/burger-menu.png">

    </header>

    <?php wp_footer(); ?>.

      