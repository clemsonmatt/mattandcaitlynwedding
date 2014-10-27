<?php 

$page = getenv('REQUEST_URI');

if ($page == "/our_story.php") {
    $our_story = 'active';
} elseif ($page == "/venue.php") {
    $venue = 'active';
} elseif ($page == "/photos.php") {
    $photo = 'active';
} elseif ($page == "/social.php") {
    $social = 'active';
} elseif ($page == "/honeymoon.php") {
    $honeymoon = 'active';
}

?>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <img src="images/matt_cait_logo2.fw.png" style="max-width:100%;" />
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="pull-right" style="margin-top:20px;">
            <a href="" class="dark-grey">
                Message Board
            </a>
            &nbsp;|&nbsp;
            <a href="contact.php" class="dark-grey">
                Contact Us
            </a>
        </div>
        <br>
        <div class="pull-right" style="margin-top:30px;">
            <a href="index.php" id="no-hover">
                <button class="btn btn-default">Home</button>
            </a>
            <a href="our_story.php" id="no-hover">
                <button class="btn btn-default <?php echo $our_story; ?>">Our Story</button>
            </a>
            <a href="venue.php" id="no-hover">
                <button class="btn btn-default <?php echo $venue; ?>">Venue</button>
            </a>
            <a href="honeymoon.php" id="no-hover">
                <button class="btn btn-default <?php echo $honeymoon; ?>">Honeymoon</button>
            </a>
            <a href="social.php" id="no-hover">
                <button class="btn btn-default <?php echo $social; ?>">Social</button>
            </a>
            <a href="photos.php" id="no-hover">
                <button class="btn btn-default <?php echo $photo; ?>">Photos</button>
            </a>
            <button class="btn btn-default">Registries</button>
        </div>
    </div>
</div>