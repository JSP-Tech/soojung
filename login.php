<!doctype html>
<html lang="en">
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <title>Login | Soojung</title>    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">    
    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />    
    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />    
    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />    
    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />    
    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" media="all" />    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />    
    <!-- Google Fonts For Stylesheet --> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />    
    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/navigation.css">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-62711679-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body>
	<!-- Page Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            	<div id="object"></div>
            </div>
        </div>
    </div>
    <?php
        session_start();
        if(!isset($_SESSION['user']))
      {
    ?>
    <!-- Page Preloader Ends /-->
     <?php }
      else
      {
         $_SESSION['user']=$_SESSION['user'];
         header("location:admin/dashboard");
      }?>
    
<?php 
    include ("admin/includes/connect.php");
    if (isset($_POST['submit'])) 
    {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $query = mysqli_query($con, "SELECT * FROM usersinfo where (Username ='{$Username}' and Password ='{$Password}')  limit 1");
        if(!$query) die(mysqli_error($con));
        if(mysqli_num_rows($query)==1)
        {
            $_SESSION['user']=$Username;
            header('Location: admin/dashboard');
        }
        else
            echo "wrong password";
    }
    if(isset($_REQUEST['cancel'])){
            header("location:index");
        }
?>

	<!-- Main Container -->
    <div class="main-container">
        <!-- Blog Posts Ends /-->
        <div class="medium-9 small-12 columns" style="margin-top: 100px; margin-left: 25%">
                        <h2 style="margin-left: 15px">Login</h2>
                        <form action="login" method="post" class="contact-form">
                        

                            <div class="row">
                                <div class="medium-6 small-12 columns">
                                    <label>
                                        Username*
                                        <input type="text" name="Username" value="" placeholder="Enter Username here..." required/>
                                    </label>    
                                </div>                                
                            </div><!-- Row Ends /-->
                            <div class="row">
                                <div class="medium-6 small-12 columns">
                                    <label>
                                        Password*
                                        <input type="Password" name="Password" value="" placeholder="Enter Password here..." required/>
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            <div class="row">
                                <div class="medium-12 small-12 columns">
                                    <input type="submit" name="submit" class="button success" value="Login" />
                                    <input type="submit" name="cancel" class="button secondary" value="Cancel" />
                                </div>
                            </div><!-- Row Ends /-->

                        <!-- Contact form /-->
                        </form>
                    </div><!-- Right Column Ends /-->

                    <div class="clearfix"></div>
                </div>
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container /-->
	
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="js/foundation.min.js"></script>
    
    <!-- Including Owl Carousel File -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- Webful JS -->
    <script src="js/webful.js"></script>
    
    <!-- Including LightBox Plugin Delete if not using -->
    <script src="js/lightbox.min.js"></script>
    
    <!-- REVOLUTION JS FILES Delete if Not Using Revolution Slider -->
	<script type="text/javascript" src="lib/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
         The following part can be removed on Server for On Demand Loading) -->	
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- Mirrored from www.webfulcreations.com/envato/webful_education/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 11:40:31 GMT -->
</html>
