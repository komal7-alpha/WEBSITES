<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.html");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Delightful Decor a Interior And Furniture</title>
        <!-- for-mobile-apps -->
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
    </head>

    <body>
        <!-- banner -->
        <div class="banner1">
            <div class="container">
                <div class="header-nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo">
                                <a class="navbar-brand" href="index.html">Delightful Decor <span>Modern Home</span></a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav cl-effect-14">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index.php">Sign In</a></li>
                                <li class="active"><a href="about.html" class="active">About</a></li>
                                <li><a href="Store.html">Store</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi'
                                        <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <div class="banner-info1">
                    <br><br><br><br><br>
                    <h3>Welcome To <span>Modern Home</span></h3>
                    <p>Welcome to Modern Homes Realty, the alternative to other traditional real estate brokerages. We are motivated by the desire to preserve these homes and a passion for design and for all those that share in our aesthetic.</p>
                </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- about -->
        <div class="about">
            <div class="container">
                <div class="about-grid">
                    <div class="col-md-6 about-grid-left">
                        <h3>Welcome to our website !</h3>
                        <p>Modern Homes Realty is the alternative to other traditional real estate brokerages. We are motivated by a passion for design and for all those that share in our aesthetic.</p>

                    </div>
                    <div class="col-md-6 about-grid-right">
                        <img src="images/5.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //about ->
<!-testimonials -->

        <h1>Modern Homes Realty</h1>
        <p>
            <br>Modern Homes Realty offers a fresh take on real estate sales. <br>Broker, Monique Lombardelli, has a passion for exceptional architecture which carries over into all facets of her business, utilizing innovative marketing to showcase the
            incredible homes we sell and providing the most services for the company's mid-century modern niche.<br> Compelling videos go beyond standard virtual tour imagery and set a new standard for real estate, putting you inside these lovely homes.
            <br> We know your home is a treasure, and that's how we present it, to entice the best buyers to provide you with premium pricing. <br> In addition, our extensive efforts in the field of mid-century modern architectural preservation have garnered
            national press and helped inspire a "mid-mod movement" among enthusiasts of these beautiful homes. <br> Between our efforts in developing the first new Eichler homes in decades and our acclaimed documentary film productions, our work embodies
            the homes for which we are named. <br> Our real estate agents are trained professionals with an extensive knowledge and enthusiasm for architecture and design, ensuring above-and-beyond service for all of your real estate needs.
            <br> <br>
        </p>
        <div class="col-md-6 ">
            <img src="images/2016.jpg" alt=" " class="img-responsive" />
        </div>
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-row">
                    <div class="col-md-4 footer-grids">
                        <h4><a href="index.html">Delightful Decor <span>Modern Home</span></a></h4>
                        <ul class="social-icons">
                            <li>
                                <a href="https://mail.google.com/mail/" class="g"></a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/in/govind-patidar-2b636b112" class="in"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="t"></a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com/" class="facebook"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grids">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="Store.html">Store</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-grids">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Mobile No:7891581931</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Address</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-grids">
                        <h3>Contact us</h3>
                        <ul>
                            <li>Bangalore</li>
                            <li><a href="gmail.com">dd@gmail.com</a></li>
                            <li>Electronic City 560100</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>© 2020-21 www.DelightfulDecor.com
                    <a href="#"></a>
                </p>
            </div>
        </div>
        <!--//footer-->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear' 
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //here ends scrolling icon -->
    </body>

    </html>