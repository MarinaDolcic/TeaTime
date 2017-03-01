        <footer>
            <div class="column_container flex row">

                <?php $the_query = new WP_Query(array('category_name'=>'footer')); ?> 
                <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>

                <div id="footer_info" class="column_boxes footer_text flex column">
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>
                
                
            </div>
            <div class="social-btns-wrapper flex row">
                <div class="social_btns flex row">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>

        </footer>

    </main>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/functions.js"></script>
    <script>$(".burger-nav").on("click", function(){
       
       $("#top_nav").toggleClass("open");
       
   });
    //closing the mobile window
    $("a").on("click", function(){
       
       $("#top_nav").removeClass("open");
       
   });</script>
    

<?php wp_footer(); ?>
</body>