<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">


    <title>Sean Flax</title>
</head>

<body>
    <header>
        <nav>
            <div id="nav" class="nav row">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Selected Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>

         <!--<ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
        </ul>-->

        <div class="row">
            <div class="hero-box">
                <h1>Sean Flax</h1>
            </div>

            <div class="hero-box-text">
                <h2>Award-Winning Producer</h2>
            </div>
        </div>


    </header>

    <section id="about" class="about">
        <div class="bio row">
                <h2>About</h2>
                <p>Sean Flax has worked for numerous multinational media corporations including the BBC, NPR, Eurovision, NHK, and Time Warner Cable (Spectrum) - where his content was seen by millions of viewers. Since leaving traditional journalism, he has co-founded two media startups, and his independent work has appeared on CBS, NBC Sports, USA Today, New York Magazine, Sports Illustrated and many other broadcast and digital platforms.</p><br>
                <p>Sean is based in New York City, where he was born, and graduated from the University of Michigan.</p>
        </div>


    </section>

    <section id="portfolio" class="portfolio">
        <h2>Selected Portfolio</h2>
        <div class="row">
            <div class="col span-1-of-3">
                    <a href="http://www.nbcsports.com/video/matt-tiffts-journey-rising-star-nascar" target=_blank><img src="resources/images/matttifft-web2.jpg" alt="Matt Tifft's triumphant return to racing"></a>
                <div class="caption">
                    <h3>BACK TO TRACK: THE MATT TIFFT STORY</h3>
                    <p>Executive Producer of a NBC Sports Network documentary on 20 year-old NASCAR driver Matt Tifft, who had a brain tumor removed and is now using his triumphant return to racing to raise brain tumor awareness.<p>
                </div>
            </div>

            <div class="col span-1-of-3">
                <a href="https://hypebeast.com/2015/10/proathlete-tv-youtube" target=_blank><img alt="ProAthleteTV" src="resources/images/proathlete4.jpg"></a>
                <h3>PROATHLETE TV</h3>
                <div class="caption">
                    <p>Head of Production for PROATHLETE TV, a media company that creates and distributes original and branded content starring professional athletes as lifestyle influencers in food, fashion, travel and more.</p>
                </div>
            </div>

            <div class="col span-1-of-3">
                <a href="http://www.twcnews.com/archives/nyc/all-boroughs/2013/09/16/one-on-1-profile--at-80-years-old--yoko-ono-shows-no-signs-of-slowing-down-NYC_188889.old.html" target=_blank><img src="resources/images/ny1-4.jpg" alt="An award-winning half-hour special profiling some of New York's most prominent and influential figures"></a>
                <h3>ONE ON 1 PROFILE SERIES</h3>
                <div class="caption">
                    <p>Former Producer for One on 1, an award-winning TV series featuring interview profiles of New York's prominent and influential figures.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-3">
                <a href="http://nymag.com/scienceofus/2014/09/happy-street-signs-newark-killy-kilford.html" target=_blank><img src="resources/images/loveup-web.jpg" alt="A short documentary (in progress) about a movement to increase the wellbeing of major city residents through government-backed art"></a>
                <h3>LOVE UP GUNS DOWN</h3>
                <div class="caption">
                    <p>Director/Producer of a documentary (in progress) about a movement to increase the wellbeing of major city residents through government-backed art.</p>
                </div>
            </div>

            <div class="col span-1-of-3">
                <a href="http://northfork.tv" target=_blank><img src="resources/images/northfork-web.jpeg" alt="North Fork TV Festival, whose mission is to create a market for independent TV show creators"></a>
                <h3>NORTH FORK TV FESTIVAL</h3>
                <div class="caption">
                    <p>Festival Coordinator for the founding season of the North Fork TV Festival, whose mission is to create a market for independent TV show creators.</p>
                </div>
            </div>

            <div class="col span-1-of-3">
                <a href="https://www.youtube.com/watch?v=BEvCcP7ws50" target=_blank><img src="resources/images/celebritywranglers-web2.jpeg" alt="Served as a panelist for a televised event with producers from CNN, ABC, and Fox"></a>
                <h3>CENTER FOR COMMUNICATION</h3>
                <div class="caption">
                    <p>Served as a panelist for a televised event with producers from CNN, ABC, and Fox.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contact</h2>
            <div class="row ">
                <div class="col span-1-of-2 email">
                    <span>Endless Roots Media</span><span><a href="mailto:hello@endlessroots.tv">hello@endlessroots.tv</a></span>
                </div>

            <div id="form" class="col span-1-of-2">
                <form method="post" action="mailer.php" class="contact-form">
                <div class="row">
                        <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you your message has been sent</div>";
                            }
                            if($_GET['success'] == - 1) {
                                echo "<div class=\"form-messages error\">Something went wrong! Please try again.</div>";
                            }

                        ?>
                </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Your Message</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Type Here"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="back row">
        <a href="#nav">Back to Top</a>
    </div>

    <script src="vendors/js/jquery-3.2.1.min.js"></script>
    <script src="vendors/js/jquery.scrollTo.min.js"></script>
    <script src="vendors/js/jquery.localScroll.min.js"></script>
    <script src="resources/js/index.js"></script>

</body>
</html>
