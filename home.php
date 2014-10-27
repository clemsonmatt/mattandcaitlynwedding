<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/assets/css/custom-menu.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="FlipClock-master/css/flipclock.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/modal.js"></script>

</head>

<style>
.bg_gray{
	background-color:#555555;
	color:#FFFFFF;
}
</style>

<?php // include('included/modal.php'); ?>
<body style="background-color:#FFF;"><!-- #F4DB8C --><!-- #8AD2FD -->

<div class="modal fade" id="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h3>Save the Date</h3>
    </div>    
    <div class="modal-body">
            <label>Wedding</label>
            
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="container" style="background-color:#FFF;"><!-- #EADCCE --><!-- #E5E5E5 -->
	<!-- Header -->
    <div class="row">
        <center>
        	<img src="images/matt_cait_logo3.fw.png" style="max-width:100%;" />
        </center>
    </div>
    <hr style="margin-top:65px;" />
    <div class="row">
    	<div class="col-lg-4 col-md-4 col-sm-4">
        	<center>
                <button class="btn" style="min-width:30%;">Our Story</button>
                <button class="btn" style="min-width:30%;">Venue</button>
                <button class="btn" style="min-width:30%;">Honeymoon</button>
            </center>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
    		<center>
        		<a href="#myModal" data-toggle="modal"><img src="images/button.fw.png" style="max-height:250px; margin-top:-75px;" name="button" id="button" onmouseover="this.src='images/button_pressed.fw.png'" onmouseout="this.src='images/button.fw.png'" /></a>
        	</center>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
        	<center>
                <a href="social_media.php"><button class="btn" style="min-width:30%;">Social</button></a>
                <button class="btn" style="min-width:30%;">Photos</button>
                <button class="btn" style="min-width:30%;">Registers</button>
            </center>
        </div>
    </div>
    <!--div style="background-color:#FFF;">
        <img src="images/clothesLine.fw.png" style="max-width:100%;" />
    </div-->
    
    <img src="images/_MG_01791.jpg" style="max-width:300px;" />
    <img src="images/_MG_03561.jpg" style="max-width:450px;" />
    
    <style>
		.btn-primary{
			margin:10px;	
		}
	</style>

	<center>
    	<button type="button" class="btn bg_gray" style="min-width:10%;">Home</button>
        <button type="button" class="btn bg_gray" style="min-width:10%;">Contact Us</button>
        <button type="button" class="btn bg_gray" style="min-width:10%;">RSVP</button>
    	<br />
    	<?php echo '<b>Ellis &copy; '.date('Y').'</b>'; ?>
    </center>

</div><!-- container -->
<br />
</body>
</html>
