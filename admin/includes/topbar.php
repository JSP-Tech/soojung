        <?php
         session_start();
        ?>
        <div class="topBar">
        	<div class="row">            
            	<div class="large-6 medium-6 small-12 columns left-side">
                	<p><strong>Questions?</strong>&nbsp &nbsp<i class="fa fa-phone"></i>  091-525040</p>
                </div><!-- Left Column Ends /-->            
            	<div class="large-6 medium-6 small-12 columns">
                    <ul class="menu text-right">
                        <li><i class="fa fa-user"></i> Welcome : <?php echo $_SESSION['user'];?></li>
                        <li><a href="../index"> Log Out</a></li>
                    </ul>
                </div><!-- Right column Ends /-->            
            </div><!-- Row ends /-->
        </div>