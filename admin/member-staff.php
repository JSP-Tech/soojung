<!doctype html>
<html lang="en">

<!-- Mirrored from www.webfulcreations.com/envato/webful_education/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 11:40:48 GMT -->
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Our Team | Soojung</title>
    
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
    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    
    <!-- Google Fonts For Stylesheet --> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700" rel="stylesheet" type="text/css" />
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
    <!-- Page Preloader Ends /-->
<?php include ("includes/connect.php");?>
	<!-- Main Container -->
    <div class="main-container">
        <!-- Top Bar Starts -->
        <?php require 'includes/topbar.php' ?>
        <!-- Top bar Ends /-->
        <!-- Header Starts -->
        <?php require 'includes/header.php' ?>
        <!-- Header Ends /--> 
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
                <div class="small-12 columns">
                    <h1>Management Team & Teachers</h1>                    
                </div><!-- Top Row /-->                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->     
        
        <!-- Content section -->
        <div class="content-section space-section module testimonial-page">
        	
            <div class="row">                
            	<div class="medium-3 small-12 columns sidebar">
                    <?php 
                        if (isset($_GET['team'])) {
                            $teamid = $_GET['team'];
                            $query = mysqli_query($con, "SELECT * FROM team WHERE teamid=$teamid");
                            while ($result = mysqli_fetch_array($query)) {
                                $fullname = $result['fullname'];
                                $teampost = $result['teampost'];
                                $type = $result['type'];
                                $aboutteam = $result['aboutteam'];
                            }
                    ?>
                                <div class="widget">
                                <h2><i class="fa fa-user-plus"></i> Update or Delete </h2>
                                <div class="widget-content">
                                    <form method="post" action="#" enctype="multipart/form-data">
                                        <input type="text" name="teamid" value="<?php echo $teamid;?>" readonly />
                                        <input type="text" name="fullname" value="<?php echo $fullname;?>" placeholder="Enter Name..." required />
                                        <input type="text" name="teampost" value="<?php echo $teampost;?>" placeholder="Enter Post ...." required/>
                                        <select name="type">                                            
                                            <option <?php if($type=="Management Team") echo "Selected";?>>Management Team</option>
                                            <option <?php if($type=="Teachers") echo "Selected";?>>Teachers</option>
                                            <option <?php if($type=="Both") echo "Selected";?>>Both</option>
                                        </select>
                                        <textarea name="aboutteam" rows="3" required><?php echo $aboutteam;?></textarea>
                                        <img src="load_image.php?pic_id=<?php echo $teamid; ?>" alt="" style="width:150px; height:150px;"></br>
                                        <label>Select Your Image
                                            <input type="file" name="afile" required/>
                                       </label>
                                       <input type="submit" name="update" class="button primary" value="Update" />  
                                       <input type="submit" name="delete" class="button secondary" value="Delete" />   
                                    </form>
                                </div>                        
                            </div>
                        <?php }

                        else {?>
                            <div class="widget">
                                <h2><i class="fa fa-user-plus"></i> Add New Members</h2>
                                <div class="widget-content">
                                    <form method="post" action="#"  enctype="multipart/form-data">
                                        <input type="text" name="fullname" placeholder="Enter Name..." required />
                                        <input type="text" name="teampost" placeholder="Enter Post ...." required/>
                                        <select name="type">
                                            <option>Management Team</option>
                                            <option>Teachers</option>
                                            <option>Both</option>
                                        </select>
                                        <textarea name="aboutteam" placeholder="About description..." rows="3" required></textarea>
                                        <label>Select Your Image
                                            <input type="file" name="afile" />
                                       </label>
                                       <input type="submit" name="submit" class="button primary" />     
                                    </form>
                                </div>                        
                            </div><!-- widget Ends /-->
                        <?php }?>                    
                </div><!-- right bar ends here /-->

<!-- Add new team start/-->
<?php
    if (isset($_REQUEST['submit'])) {
        $fullname = $_POST['fullname'];
        $teampost = $_POST['teampost'];
        $type = $_POST['type'];
        $aboutteam = $_POST['aboutteam'];        
       
        
            $content=file_get_contents($_FILES['afile']['tmp_name']);
            $content=mysql_escape_string($content);
            @list(, , $imtype, ) = getimagesize($_FILES['afile']['tmp_name']);
            if ($imtype == 3){
                $ext="png"; 
            }elseif ($imtype == 2){
                $ext="jpeg";
            }elseif ($imtype == 1){
                $ext="gif";
            }
             $query=mysqli_query($con,"INSERT INTO team(fullname, teampost, type, aboutteam, photo, ext)
                                                VALUES ('{$fullname}','{$teampost}','{$type}','{$aboutteam}', '{$content}', '{$ext}')"); 
        
       
            echo "New member Added successfully";
              
    }
?>
<!-- Add new team end/-->
<!-- update team end/-->
<?php 
    if (isset($_REQUEST['update'])) {
       
       $teamid = $_POST['teamid'];
        $fullname = $_POST['fullname'];
        $teampost = $_POST['teampost'];
        $type = $_POST['type'];
        $aboutteam = $_POST['aboutteam']; 
       if($fullname!="" and $teampost!="" and $type!="" and $aboutteam!="") {
       
        $query = mysqli_query($con, "UPDATE team SET fullname='{$fullname}', teampost='{$teampost}', type='{$type}', aboutteam='{$aboutteam}' WHERE teamid='{$teamid}'");
        
        if(mysqli_affected_rows($con)==1)
        echo "Member updated successfully !";
        else echo "Member Not updated !";
             
        }
        else{
            echo "data fields are empty !";
        } 
        
    }
?>
<!-- update team end/-->

<!-- Delete team end/-->
<?php
    if (isset($_REQUEST['delete'])) {
        $teamid=$_POST["teamid"];
        mysqli_query($con, "DELETE FROM team WHERE teamid='{$teamid}'");
        echo "Member Deleted Successfully";
    }
?>
<!-- Delete team end/-->
                <!-- list of our team/-->
                <div class="medium-9 small-12 columns test-wrap"> 
                        <?php 
                            $query = mysqli_query($con, "SELECT * FROM team");
                            while ( $result=mysqli_fetch_array($query)) {
                                $teamid = $result['teamid'];
                                $fullname = $result['fullname'];
                                $teampost = $result['teampost'];
                                $type = $result['type'];
                                $aboutteam = $result['aboutteam'];
                        ?>
                    <div class="medium-12 small-12 columns">
                        <div class="testimonial">
                            <div class="testimonial-thumb">
                               
                                <?php if($result['photo']=="") { ?>
                                    <img src="images/help/first_testimonial.jpg" alt="" />
                                <?php } else { ?>
                                <img src="load_image.php?pic_id=<?php echo $teamid; ?>"/> <?php } ?>
                            </div><!-- Testimonial Thumb /-->
                            <div class="testimonial-detail">
                                <h4><a href="member-staff.php?team=<?php echo $teamid?>"><?php echo $fullname;?></a></h4>
                                <p><?php echo $aboutteam;?></p>
                                <cite><?php echo $teampost; ?></cite>
                            </div><!-- Testimonial Detail /-->
                            <div class="clearfix"></div>
                         </div> <!-- Testimonial /-->
                     </div><!-- Column Ends /-->
                    <?php }?>
                </div><!-- testimonial wrap /-->
            </div><!-- Row Ends /-->
        </div>
        <!-- Content Section Ends /-->        
        <?php require 'includes/footer.php' ?>
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
</body>

<!-- Mirrored from www.webfulcreations.com/envato/webful_education/testimonials.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 11:40:48 GMT -->
</html>
