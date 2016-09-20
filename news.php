<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rivers Lawyers Services</title>

        <!-- Meta Description -->
        <meta name="description" content="Rivers Lawyers Services Page">
        <meta name="keywords" content="Rivers Lawyers Services, Business">
        <meta name="author" content="Rivers Lawyers">

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-default navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <img src="img/RL_Brand.png"  alt="RIVERS LAWYER">
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- social media nav -->
                <div class = "hidden-sm hidden-xs hidden-md visible-lg">
                <nav class="collapse navbar-collapse navbar-right" role="navigation" >
                    <ul id ="social-media" class="nav navbar-nav">
                        <li class="icon"><a href="http://www.facebook.com" role="button" target="_blank"><i class="fa fa-facebook fa-border"></i><span></span></a>
                        <li class="icon"><a href="http://www.twitter.com" role="button" target="_blank"><i class="fa fa-twitter fa-border"></i><span></span></a>
                        <li class="icon"><a href="http://www.whatsapp.com" role="button" target="_blank"><i class="fa fa-whatsapp fa-border"></i><span></span></a>
                        <li class="icon"><a href="http://www.instagram.com" role="button" target="_blank"><i class="fa fa-instagram fa-border"></i><span></span></a>
                        <li class="icon"><a href="http://www.kakaotalk.com" role="button" target="_blank"><img src = "img/kakaotalk.png" alt="kakaotalk"><span></span></a>
                    </ul>
                </nav>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" id="nav-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" >
                        <li><a class="externallink" href="index.html">Home</a></li>
						<li><a class="externallink" href="expertise.html">Expertise</a></li>
                        <li><a class="externallink" href="index.html?tab=aboutus">About us</a></li>
                        <li><a class="externallink" href="form.html">Automated Legal Services</a></li>
						<li><a href="#body">News</a></li>
                        <li><a class="externallink" href="index.html?tab=contactus">Contact us</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        <!---banner section-->
        <div class="jumbotron banner-s">
            <h1>Rivers Lawyers</h1>
            <h2>Your Lawyer of Choice</h2>
        </div>

        <!--banner end-->

        <?php
            print ('whatsup mysql');
            print ($rows);
            echo 'Name 
            sdf
            sadf
            sadfsadf
            sadfsadffsad
            fclosesdaf
            sdaf
            sdf';


            mysql_connect('localhost','river936_kr','rivers');
            print ('whatsup mysql2');
            mysql_select_db("river936_RL_Account");
            print ('whatsup mysql3');
            $sql = "SELECT * FROM Account";
            print ('whatsup mysql4');
            $records = mysql_query($sql);
            print ('whatsup mysql5 test test');

            while($row = mysql_fetch_assoc($records)){
            
            }
            print ('whatsup mysql6');

            echo $row["username"]; 

            print ('whatsup mysql');
            print ($rows);
            echo 'Name 
            sdf
            sadf
            sadfsadf
            sadfsadffsad
            fclosesdaf
            sdaf
            sdf';
           
        ?>




        <footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>In development phase.</p>
						</div>
						<p>Copyright Rivers Lawyers. All rights reserved. Design and Developed By Wittawin and Ben</p>
					</div>
				</div>
			</div>
		</footer>

        <!-- Essential javascript Plugins
		================================================== -->
        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>