
<?php get_header(); ?>

    <main>
        <section id="landing" class="flex">
            <div id="land_intro" class="flex column">
                <h2>WELCOME TO ODINS ODENSE!</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            </div>
        </section>

        <section id="intro" class="flex column">
            <img src="images/rings.png" id="rings">
            <div id="intro_text" class="center_txt flex column">
                <h1>EXPLORE YOUR PAST</h1>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nibh euismod tincidunt ut laoreet dolore magna aliquam erat facilis.</p>
            </div>
            <div  id="family_img"></div>

        </section>

        <section id="info">
            <div class="pris-flex-container flex row column_container">
                <div class="pris-flex-item column_boxes">
                    <img class="circle-icon" src="images/Ring%20symbols-02.png" alt="Ring Symbol">

                    <div class="center-content flex">
                        <div class="center-width pris-headline">Priser</div>
                        <div class="center-width pris-bodytext">
                            <b>1. marts – 7. april</b>
                            <br> - Voksne 40 kr. Børn over sværdhøjde 20 kr.
                            <br>
                            <br> <b>8. april – 22. oktober</b>
                            <br> - Voksne 60 kr. Børn over sværdhøjde 30 kr.
                        </div>
                    </div>
                </div>
                <div class="pris-flex-item column_boxes">
                    <img class="circle-icon" src="images/Ring%20symbols-03.png" alt="Ring Symbol">

                    <div class="center-content flex">
                        <div class="center-width pris-headline">Åbningstider</div>
                        <div class="center-width pris-bodytext">
                            <b>1. marts – 7. april</b>
                            <br> - hverdage 10 – 14, fredag lukket.
                            <br>
                            <br> <b>8. april – 22. oktober</b>
                            <br> - lørdag - torsdag 10 – 16, fredag lukket.
                        </div>
                    </div>
                </div>
                <div class="pris-flex-item column_boxes">
                    <img class="circle-icon" src="images/Ring%20symbols-04.png" alt="Ring Symbol">

                    <div class="center-content flex">
                        <div class="center-width pris-headline">Hvor er vi?</div>
                        <div class="center-width pris-bodytext">
                            <b>STORE KLAUS 40  <br><br>  DK-5270 ODENSE N</b>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="feat_event" class="flex column">
            <div id="charge_img"></div>
            <div id="f_ev_text" class="center_txt flex column">
                <h1>JOIN US AT THE VIKING MARKET!</h1>
                <h2>20.-21.5.2017.</h2>
                <p>Join us for two glorious days of fighting, feasting, drinking and trading goods and get in touch with your inner viking.</p>
                <h3>Admission fees and opening times</h3>
            </div>
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
            <div class="visit_text flex column">
                <h4>Vacation in the Iron age village</h4>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <a href="" title="Vacation in the Iron age village" class="visit_links">Read more...</a>
            </div>
        </div>
        <div class="visit_columns column_boxes flex column" id="visit_tours">
            <div class="visit_text flex column">
                <h4>Guided tours</h4>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <a href="" title="Guided tours" class="visit_links">Read more...</a>
            </div>
        </div>
        <div class="visit_columns column_boxes flex column" id="visit_school">
            <div class="visit_text flex column">
                <h4>School trips</h4>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <a href="" title="School trips" class="visit_links">Read more...</a>
            </div>
        </div>
        </section>

<?php get_footer(); ?>