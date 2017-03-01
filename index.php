
<?php get_header(); ?>

    <main>
        <section id="landing" class="flex">
        <!-- shortcode for the image carousel on the landing page -->
        <?php echo do_shortcode("[metaslider id=30]"); ?>

            <!-- welcome message on the landing page -->
            <?php $the_query = new WP_Query(array('category_name'=>'welcome')); ?> 
            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?> 
                    <div id="land_intro" class="flex column">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile; ?>
            
        </section>



        <section id="intro" class="flex column">
            
            <?php $the_query = new WP_Query(array('category_name'=>'intro')); ?> 
            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?> 

                <div id="rings">
                <?php the_post_thumbnail() ?>
                </div>

                <div id="intro_text" class="center_txt flex column">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                </div>
            <?php endwhile; ?>

            <div  id="family_img"></div>

        </section>


        <!-- gen_info category section for prices, opening hours and whereabouts-->
        <section id="info">
            <div class="pris-flex-container flex row column_container">
               

            <?php $the_query = new WP_Query(array('category_name'=>'gen_info')); ?> 
            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?> 

                <div class="pris-flex-item column_boxes circle-icon">
                    <div class="circle-icon">
                        <?php the_post_thumbnail() ?>
                    </div>

                    <div class="center-content flex">
                        <div class="center-width pris-headline"><?php the_title(); ?></div>
                        <div class="center-width pris-bodytext">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            </div>
        </section>

<!-- featured event section -->
        <section id="feat_event" class="flex column">
            <div id="charge_img"></div>

            <?php $the_query = new WP_Query(array('category_name'=>'feat_event')); ?> 
            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
            <div id="f_ev_text" class="center_txt flex column">
            
                <h1><?php the_title(); ?> </h1>

                <?php the_content(); ?>

            </div>
            <?php endwhile; ?>
        </section>



        <section id="upc_event">
            <div class="goldenborder"></div>
            <div class="eventContainer">
                <div class="bigEvent eventHover" onclick=openStory(1)>
                    <img class="imageCenter" src="images/market.png">
                    <div class="eventGradient">
                        <div class="headerBigEvent"><b>Iron Age Market</b></div>
                    </div>
                </div>
                <div class="smallEvent eventHover" onclick=openStory(2)>
                    <img class="imageCenter" src="images/summer.jpg">
                    <div class="eventGradient">
                        <div class="headerSmallEvent"><b>Summer Festival</b></div>
                    </div>
                </div>
                <div class="smallEvent eventHover" onclick=openStory(3)>
                    <img class="imageCenter" src="images/bard.png">
                    <div class="eventGradient">
                        <div class="headerSmallEvent"><b>Bard Festival</b></div>
                    </div>
                </div>
                <div class="smallEvent eventHover" onclick=openStory(4)>
                    <img class="imageCenter" src="images/winter.png">
                    <div class="eventGradient">
                        <div class="headerSmallEvent"><b>Winter Solstice</b></div>
                    </div>
                </div>
                <div class="smallEvent eventHover" onclick=openStory(5)>
                    <img class="imageCenter" src="images/blot.jpg">
                    <div class="eventGradient">
                        <div class="headerSmallEvent"><b>Blót</b></div>
                    </div>
                </div>

            </div>

          
            <div class="goldenborder"></div>

            <div id="calendar-btn" class="flex row"><a href="" class="calendar-btn-style">See Calendar</a></div>
        </section>

<!-- Connect and support section  -->

        <section id="connect">
            <div id="social" class="center_txt flex column">
                <h2>CONNECT WITH ODINS ODENSE</h2>
                <p>Follow us on Facebook to get the latest news and see the latest photos and videos!</p>
                <div id="gold_btns" class="flex row">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
            <div id="shield"></div>
            <div id="support" class="center_txt flex column">
                <p>The existance of Odins Odense depends on the support of our community, please check what you can do to make sure this place is preserved for generations to come!</p>
                <div id="support_btns" class="flex row">
                    <div class="support_btn center_txt">
                        <a href="#">Become a sponsor!</a>
                    </div>
                    <div class="support_btn center_txt">
                        <a href="#">Become a volunteer!</a>
                    </div>
                </div>
            </div>
        </section>

<!-- Visit section -->

        <section class="column_container flex row">
        <div class="visit_columns column_boxes flex column" id="visit_vacation">

        <?php $the_query = new WP_Query(array('category_name'=>'visit')); ?> 
        <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>

            <div class="visit_text flex column">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
                <a href="" class="visit_links">Read more...</a>
            </div>
        <?php endwhile; ?>
        </div>

       
        </section>

<?php get_footer(); ?>