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
        <link rel="stylesheet" href="css/animate.css">
        <!-- bxSlider CSS file -->
        <link rel="stylesheet" href="css/jquery.bxslider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-default navbar-fixed-top jumbotron">
            <div class="container-fluid">
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
                        <li><a class="externallink" href="index.html?tab=autoservices">Automated Legal Services</a></li>
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

        <div class="container newsheader">
            <?php
                /* news header */
                $dir = 'news/';
                
                $folders = glob($dir . '*', GLOB_BRACE);
                $folders = array_combine($folders, array_map("filemtime", $folders));
                arsort($folders);
                $folders = (array_keys($folders));
                $num_news = count($folders);
                $first_news = 1;
                $firsttitle = '';
                $firstimg = '';
                $firstcontent= '';

                if($num_news > 0) {
                    echo '<ul class="newsslider">';

                    foreach($folders as $folder)
                    {
                        $image = glob($folder . '/*.{gif,png,jpg,jpeg}', GLOB_BRACE);
                        $image = $image[0];
                        $content = glob($folder . '/*.txt', GLOB_BRACE);
                        $content = $content[0];
                        $currcontent = '';

                        $handle = fopen($content, "r");
                        if ($handle) {
                            if(($line = fgets($handle)) !== false) {
                                $title = $line;
                            }
                            while((($line = fgets($handle)) !== false)) {
                                $currcontent .= $line . '<br>';
                            }
                            fclose($handle);
                        } else {
                            echo "File error";
                        }
                        echo "<li><div class='news'>
                                <div class='content' style='display:none;'>".$currcontent."</div>
                                <img src=".$image." id='".$image."'><br>
                                <b class='title' id='".$content."'>".$title."</b><br>
                                Published on ".date('d M y', filemtime($content)) ."
                            </div></li>"; //display image
                        
                        /* first news */
                        if($first_news===1){
                            $firsttitle = $title;
                            $firstcontent = $currcontent;
                            $firstimg = $image;
                            $first_news = 0;
                        }
                    } 
                    echo '</ul></div>';
                    
                    /*content*/
                    echo '<div class="container">
                            <div class = "row tab-content service-panel">
                                <div class="col-md-8 col-sm-6 col-xs-12 service-content">
                                    <div class="news-title">
                                        <h1>'.$firsttitle.'</h1>
                                    </div><br>

                                    <div class="newscontent">
                                        <img src="'.$firstimg.'" alt="Picture"><br>
                                        <p>'.$firstcontent.'</p>
                                    </div>
                                </div>';
                } else {
                    echo '<div class="container">
                            <div class="row tab-content service-panel">
                                <div class="col-md-8 col-sm-6 col-xs-12 service-content">
                                    <div class="news-title">
                                        <h1><em>Please stay tuned for updates...</em></h1>  
                                    </div>
                                </div>';
                }
            ?>
                    <!--contact sidebar-->
                    <aside class="col-md-4 col-sm-6 col-xs-12 contact-panel">
                        <div class="title">
                          <h2>Contact Us</h2>
                        </div>
                        <div class="contact-panel-content">
                          <p> Rivers Lawyers</p>
                          <p> Suite 609, 530 Little Collins Street, Melbourne VIC 3000</p>
                          <p> PO Box: 147 Collins Street West, Melbourne VIC 3000</p>
                          <p> Enquiry: +61 (0) 416 880 088</p>
                          <p> Email: kevin.kang@riverslawyers.com.au</p>
                        </div><br>
                        <div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="http://www.facebook.com" target="_blank">
                                    <i class="fa fa-facebook fa-border2 fa-2x"></i>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.twitter.com" target="_blank">
                                    <i class="fa fa-twitter fa-border2 fa-2x"></i>
                                </a></li>
                                <li class="wow animated zoomIn"><a href="http://www.instagram.com" target="_blank">
                                    <i class="fa fa-instagram fa-border2 fa-2x"></i>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.whatsapp.com" target="_blank">
                                    <img src = "img/whatsapp.png" alt="whatsapp"><span></span>
                                </a></li>
								<li class="wow animated zoomIn"><a href="http://www.wechat.com" target="_blank">
                                    <img src = "img/wechat.png" alt="wechat">
                                </a></li>
                                <li class="wow animated zoomIn"><a href="http://www.kakaotalk.com" target="_blank">
                                    <img src = "img/kakaotalk.png" alt="kakaotalk"><span></span>
                                </a></li>
							</ul>
						</div><br><br>
                </div>
            </div>
                <br><br>
            <!--content end-->

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
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>