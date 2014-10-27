<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<style>
.bg_gray{
	background-color:#555555;
	color:#FFFFFF;
}
</style>

<body><!-- #F4DB8C -->

<div class="container">
	<!-- Header -->
    <div class="row">
    	<div class="col-lg-4 col-md-4 col-sm-4">
    		<img src="images/matt_cait_logo2.fw.png" style="max-width:100%;" />
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">
        	<br /><br /><br />
            <div class="pull-right">
        	<a href="home.php"><button class="btn" style="min-width:10%;">Home</button></a>
        	<button class="btn" style="min-width:10%;">Our Story</button>
            <button class="btn" style="min-width:10%;">Venue</button>
            <button class="btn" style="min-width:10%;">Honeymoon</button>
        	<button class="btn active" style="min-width:10%;">Social</button>
            <button class="btn" style="min-width:10%;">Photos</button>
            <button class="btn" style="min-width:10%;">Registers</button>
            </div>
        </div>
    </div>
    <!-- His and Hers -->
    <br />
    <legend class="col-lg-12"><h3>Check us out on Social Media</h3></legend>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="modal-header" style="background-color:#555">
                    <h2 style="color:#FFF;">Hers</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="modal-header" style="background-color:#555">
                    <h2 style="color:#FFF;">His</h2>
                </div>
                <div class="modal-body" style="max-width:100%;">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/matt.ellis.5076" target="_blank" style="font-family: 
                    &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; 
                    font-weight: normal; color: #3B5998; text-decoration: none;" title="Matt Ellis">Matt Ellis</a><br/>
                    <a href="https://www.facebook.com/matt.ellis.5076" target="_blank" title="Matt Ellis">
                    <img src="https://badge.facebook.com/badge/1371414786.3776.1152332707.png" style="border: 0px; max-width:100%;" /></a>
                    <br /><br /><br />
                    <!-- Twitter -->
                    <a class="twitter-timeline"  href="https://twitter.com/matte_1"  data-widget-id="390209154196832257">Tweets by @matte_1</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
					{js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}
					(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </div>
    </div>
    <br /><br />
	<center>
    	<button type="button" class="btn bg_gray" style="min-width:10%;">Home</button>
        <button type="button" class="btn bg_gray" style="min-width:10%;">Contact Us</button>
        <button type="button" class="btn bg_gray" style="min-width:10%;">RSVP</button>
    	<br />
    	<?php echo '<b>Ellis &copy; '.date('Y').'</b>'; ?>
    </center>
</div>
<br />
</body>
</html>