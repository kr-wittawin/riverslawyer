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
                        <li class="icon"><a href="http://www.instagram.com" role="button" target="_blank"><i class="fa fa-instagram fa-border"></i><span></span></a>
                    </ul>
                </nav>
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" id="nav-collapse" role="navigation">
                    <ul id="nav" class="nav navbar-nav" >
                        <li><a class="externallink" href="index.html">Home</a></li>
                        <li><a class="externallink" href="aboutus.html">About us</a></li>
						<li><a class="externallink" href="expertise.html">Expertise</a></li>
                        <li><a class="externallink" href="form.php">Automated Legal Services</a></li>
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

        <!-- news header-->

        <div class="container newsheader">
            <ul>
                <?php
                    $dir = 'news/';
                    $images = glob($dir . '*.{gif,png,jpg,jpeg}', GLOB_BRACE); 
                    $contents = glob($dir . '*.{txt}', GLOB_BRACE);

                    $num_of_files = 3; //number of images to display

                    foreach($contents as $content)
                    {
                        $index = 3 - $num_of_files; 

                        $handle = fopen($content, "r");
                        if ($handle) {
                            if(($line = fgets($handle)) !== false) {
                                $title = $line;
                            }
                            fclose($handle);
                        } else {
                            echo "File error";
                        } 

                        if($num_of_files > -1) 
                        echo "<li class='bignews'>
                                <br><img src=".$images[$index]."><br>
                                <b>".$title."</b><br>
                                Created on ".date('d M y', filemtime($content)) ."
                            </li>"; //display images
                        else
                        break;

                        $num_of_files--;
                    }

                ?>
                <li class="smallnews">
                    <b>Little News</b>
                    <ul>
                        <li style="display: block">Other News4</li>
                        <li style="display: block">Other News5</li>
                        <li style="display: block">Other News6</li>
                        <li style="display: block">Other News7</li>    
                        <li style="display: block">Other News8</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- news header end -->

        <!--content start-->
            <div class="container">
                <div class = "row tab-content service-panel">
                    <div class="col-md-8 col-sm-6 col-xs-12 service-content">
                        <div class="content-title">
                            <h1>News</h1>
                        </div>
                        
                        <div>
                            <img scr="news/img3.jpeg" alt="Picture">

                            <h2>Title 1</h2>
                            <P> Ut mollis blandit mi, vel ultricies arcu iaculis in. Vestibulum pellentesque volutpat sem quis mattis. Morbi egestas suscipit sem ut lacinia. Morbi interdum, orci et lacinia lacinia, nibh sapien blandit leo, a ornare lectus nulla in urna mauris, quis hendrerit mi hendrerit quis. Lorem ipsu.</P>
                            <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>
                        </div>
                    </div>

                    <aside class="col-md-4 col-sm-6 col-xs-12 contact-panel">
                        <div class="title">
                          <h2>Contact Us</h2>
                        </div>
                        <div class="contact-panel-content">
                          <P> Rivers Lawyers</P>
                          <P> Suite 609, 530 Little Collins Street,</br> Melbourne VIC 3000</P>
                          <P> Enquiry: +61 (0) 423 950 250</P>
                          <P> Email: kevin.kang@riverslawyers.com.au<P>
                        </div>
                        <div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="http://www.facebook.com" target="_blank">
                                    <i class="fa fa-facebook fa-border2 fa-2x"></i>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.twitter.com" target="_blank">
                                    <i class="fa fa-twitter fa-border2 fa-2x"></i>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.whatsapp.com" target="_blank">
                                    <img src = "img/whatsapp.png" alt="whatsapp"><span></span>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.instagram.com" target="_blank">
                                    <i class="fa fa-instagram fa-border2 fa-2x"></i>
                                </a></li>
                                <li class="wow animated zoomIn"><a href="http://www.kakaotalk.com" target="_blank">
                                    <img src = "img/kakaotalk.png" alt="kakaotalk"><span></span>
                                </a></li>
							</ul>
						</div>
                    </aside>
                </div>
            </div>
                <br><br>
            <!--content end-->

        <!-- <?php

            $db = mysqli_connect('localhost','root','','test');
            $sql = "SELECT * FROM test_table";
            if($result = mysqli_query($db,$sql)){
                if($result->num_rows) {
                    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
                    
                    foreach($rows as $row) {
                        echo '/..........', $row['user'], ' ', $row['color'],  '<br>';
                    }
                }
            }
           
        ?>-->

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