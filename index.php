<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="description"
        content="Writer/Author, GW Latimer, Walking Through Brambles: a narrative of circumspection.">
    <meta name="keywords" content="GW Latimer, writer, author, ui designer, walking through brambles">
    <meta name="author" content="thefogandwave.com">
    <title>HOME - thefogandwave.com - G.W. Latimer</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="../resources/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="../resources/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="../resources/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../resources/img/ico/apple-touch-icon-57-precomposed.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="../resources/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../resources/fonts/iconfont/material-icons.css" rel="stylesheet">
    <link href="../resources/css/animate.min.css" rel="stylesheet">
    <link href="../resources/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="../resources/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../resources/flexSlider/flexslider.css" rel="stylesheet">
    <link href="../resources/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../resources/css/fogwave.css" rel="stylesheet">
    <link href="../resources/css/fogwave-components.min.css" rel="stylesheet">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="../resources/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="../resources/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../resources/revolution/css/navigation.css">
</head>

<body id="top" data-spy="scroll" data-target="#materialize-menu" data-offset="100">
    <div class="topwrap">
        <header id="header" class="tt-nav">
            <?php include 'sitewide/top-nav.php'; ?>
        </header>
        <hr />
        <!-- start revolution slider 5.0 -->
        <section id="home" class="rev_slider_wrapper mt-xs-46">
            <?php include 'inc/book/book.php'; ?>
            <!-- end revolution slider -->
        </section>
        <hr class="ftr" />
        <section id="testimonials" class="padding-top-110 section-padding wow fadeInUp"
            data-stellar-background-ratio="0.5">
            <?php include 'inc/reviews.php'; ?>
        </section>
        <hr />
        <section id="perfection-slider" class="padding-top-100 padding-bottom-50 banner-5">
            <div class="container">
                <div class="flexslider wow fadeInDown">
                    <ul class="slides">
                        <li class="back-slider1"><br />&nbsp;<br />
                            <span class="slider1">"All of life's perfections...</span>
                        </li>
                        <li class="back-slider3"><br />&nbsp;<br />
                            <span class="slider2">distilled to its finest hour...</span>
                        </li>
                        <li class="back-slider4"><br />&nbsp;<br />
                            <span class="slider3">...is now"</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <hr />
        <section id="about" class="section-padding banner-6 parallax-bg bg-fixed overlay">
            <?php include 'inc/about.php'; ?>
        </section>
        <hr />
        <section id="writer-teacher" class="section-padding">
            <?php include 'inc/writer.php'; ?>
        </section>
        <hr />
        <section id="blog" class="section-padding banner-10 parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">
            <?php include 'inc/blog.php'; ?>
        </section>
        <hr />
        <section id="ontheweb" class="section-padding">
            <?php include 'inc/ontheweb.php'; ?>
            <!-- /.container -->
        </section>
        <hr />
        <section id="contact" class="section-padding contact-form-wrapper">
            <?php include 'inc/reachout.php'; ?>
        </section>
        <hr />

        <section class="footer">
            <?php include 'sitewide/footer.php'; ?>
            <p id="counter" class="text-center">
                <span>
                    sesid=fogwave.v2:&nbsp; <?php
/* counter */
/* opens countlog.txt to read the number of hits */
$data = fopen("counter.txt", "r");
$count = fgets($data,1000);
fclose($data);
$count = $count + 1;
echo "$count";
echo "\n";
/* opens countlog.txt to change new hit number */
$data = fopen("counter.txt", "w");
fwrite($data, $count);
fclose($data);
?> &nbsp;.030320
                </span>
            </p>
        </section>
        <div style="text-align:center;margin:0 auto;padding:30px 0;">
            <p>
                Since much of my work is pro-bono, please consider helping me offset production/hosting costs by
                donating whatever pocket change you can spare.<br>
                Thank You!<br /><a href="http://www.irisandpith.com/" target="_blank">www.irisandpith.com</a>

            </p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="QTYGANBK64WFU" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"
                    name="submit" title="PayPal - The safer, easier way to pay online!"
                    alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
            </form>


        </div>
        <p>&nbsp;</p>
        <section id="disqus" class="section no-padding">
            <div class="container comments wow fadeInUp">
                <div id="disqus_thread"></div>
                <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://thefogandwave-com.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                        powered by Disqus.</a></noscript>
            </div>
        </section>
        <div class="secondary-footer">
            <div class="container">
                <span class="copy-text">Copyright &copy; 2019 <a href="#">thefogandwave.com</a> &nbsp; | &nbsp; All
                    Rights Reserved &nbsp; | &nbsp; Built From Scratch By <a href="#">UI Design
                        Engineering</a></span>

            </div>
        </div>
    </div>

    <div id="preloader">
        <div class="preloader-position">
            <img src="../resources/img/logo.png" alt="logo">
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
    <div class="links-sites">
        <h1>Adam L Marsh - http://www.adam-marsh.com</h1>
        <h1>Adam L Marsh - http://www.ui-design-engineering.com</h1>
        <h1>GW Latimer - Author, Walking Through Brambles</h1>
        <h1>G. Webster Latimer - Author, Walking Through Brambles</h1>
        <h1>Adam L Marsh - http://www.milkandbourbon.com</h1>
        <h1>Adam L Marsh - http://www.myuikit.com</h1>
        <h1>G.W. Latimer - http://www.thefogandwave.com</h1>
    </div>
    <!-- End Preloader -->
    <!-- jQuery -->
    <script src="../resources/js/jquery-2.1.3.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/materialize/js/materialize.min.js"></script>
    <script src="../resources/js/menuzord.js"></script>
    <script src="../resources/js/bootstrap-tabcollapse.min.js"></script>
    <script src="../resources/js/jquery.easing.min.js"></script>
    <script src="../resources/js/jquery.sticky.min.js"></script>
    <script src="../resources/js/smooth-menu.js"></script>
    <script src="../resources/js/jquery.stellar.min.js"></script>
    <script src="../resources/js/imagesloaded.js"></script>
    <script src="../resources/js/jquery.inview.min.js"></script>
    <script src="../resources/js/jquery.shuffle.min.js"></script>
    <script src="../resources/js/wow.min.js"></script>
    <script src="../resources/owl.carousel/owl.carousel.min.js"></script>
    <script src="../resources/flexSlider/jquery.flexslider-min.js"></script>
    <script src="../resources/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../resources/js/fogwave.js"></script>
    <script>
    new WOW({
        mobile: false
    }).init();
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: false
        });
    });
    </script>
    <!-- RS5.0 Core JS Files -->
    <script src="../resources/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../resources/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- RS5.0 Init  -->
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".materialize-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 9000,
            responsiveLevels: [1240, 1024, 768, 480],
            gridwidth: [1140, 1024, 768, 480],
            gridheight: [800, 800, 900, 900],
            disableProgressBar: "on",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            }
        });
    });
    </script>

</body>

</html>