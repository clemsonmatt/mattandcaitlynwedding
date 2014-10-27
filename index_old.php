<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/assets/css/custom-menu.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="FlipClock-master/css/flipclock.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="FlipClock-master/js/flipclock/libs/base.js"></script>
<script src="FlipClock-master/js/flipclock/flipclock.js"></script>
<script src="FlipClock-master/js/flipclock/faces/dailycounter.js"></script>

</head>

<?php include('included/header.php'); ?>

    <!-- Navigation Bar -->
    <!--div class="navbar navbar-static-top navbar-inverse" style="margin-bottom:0px;">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Venue</a></li>
                    <li><a href="#">Honeymoon</a></li>
                    <li><a href="social_media.php">Check Us Out</a></li>
                    <li><a href="photos.php">Photos</a></li>
                    <li><a href="#">Registers</a></li>
                </ul>
            </div>
        </div>
    </div-->
    
    <nav>
        <ul class="fancyNav">
            <li class="selected"><a href="#">Home</a></li>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Venue</a></li>
            <li><a href="#">Honeymoon</a></li>
            <li><a href="social_media.php">Check Us Out</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="#">Registers</a></li>
        </ul>
    </nav>
    
    <div style="background-color:#FFF; background-color:#C60;">
        <img src="images/clothesLine.fw.png" style="max-width:100%;" />
    </div>
    <br />
    <div class="row">
    	<div class="col-lg-4 col-md-4 col-sm-4">
        	<div class="thumbnail">
            	<div class="caption">
                	<h3>Welcome!</h3>
                </div>
                <p>
                	Thanks for visiting our wedding website! We can't wait to see you on our big day! Thank you to all of our friends and family for your support over the years. We are so grateful
                    to have everyone in our lives.
                    <br /><br />
                    Please check back often as we'll be continuously updating the site!
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
        	<div class="thumbnail">
            	<div class="caption">
                	<h3>Countdown!</h3>
                </div>
                <p>
                	<?php
						date_default_timezone_set('America/New_York');
						$target = mktime(15, 0, 0, 12, 25, 2013) ;
						$today = time () ;
						$difference =($target-$today) ;
						$days =(int) ($difference/86400) ;
						$h = $difference/86400; while($h>1){ $h--; };
						echo '
							<h5>Today: '.date('l, F d, Y', $today).'</h5>
							<h5>Wedding: '.date('l, F d, Y', $target).'</h5>
							<hr />
							<h2 style="margin-left:15%;">'.$days.' Days</h2>
							<br />
							<table class="table">
								<tr>
									<td>
										<script language="JavaScript">
											TargetDate = "12/25/2013 3:00 PM";
											CountActive = true;
											CountStepper = -1;
											LeadingZero = true;
											DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
											
										</script>
										<script language="JavaScript" src="bootstrap/assets/js/mins_custom.js">
										</script>
									</td>
								</tr>
							</table>
						';
					?> 
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
        	<div class="thumbnail">
            	<div class="caption">
                	<h3>Thumbnail Label</h3>
                </div>
                <p>
                	
                </p>
            </div>
        </div>
    </div>
    
    <br /><br />
    
    <style>
		.btn-primary{
			margin:10px;	
		}
	</style>

	<center>
    	<button type="button" class="btn btn-primary">Home</button>
        <button type="button" class="btn btn-primary">Contact Us</button>
        <button type="button" class="btn btn-primary">RSVP</button>
    	<br />
    	<?php echo '<b>Ellis &copy;'.date('Y').'</b>'; ?>
    </center>

</div><!-- container -->
<br /><br />
</body>
</html>
