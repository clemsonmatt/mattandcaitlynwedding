<?php 

$page = getenv('REQUEST_URI');

if ($page == "/our_story.php") {
    $our_story = 'active';
} elseif (strpos($page, "rsvp.php")) {
    $rsvp = 'active';
} elseif (strpos($page, "about.php")) {
    $about = 'active';
} elseif ($page == "/photos.php") {
    $photo = 'active';
} elseif ($page == "/honeymoon.php") {
    $honeymoon = 'active';
} elseif ($page == "/registries.php") {
    $registries = 'active';
} elseif ($page == "/" || $page == "/index.php") {
    $home = 'active';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Matt &amp; Caitlyn</title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/dist/css/custom.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/custom.js"></script>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container_old">
            <div class="navbar-header color-white">
                <a class="navbar-brand color-white" href="#">Matthew &amp; Caitlyn</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav-pills nav-justified">
                    <li class="<?php echo $home; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="<?php echo $rsvp; ?>">
                        <a href="rsvp.php">RSVP</a>
                    </li>
                    <!-- <li class="<?php echo $our_story; ?>">
                        <a href="our_story.php">Story</a>
                    </li> -->
                    <li class="<?php echo $about; ?>">
                        <a href="about.php">About</a>
                    </li>
                    <li class="<?php echo $honeymoon; ?>">
                        <a href="honeymoon.php">Honeymoon</a>
                    </li>
                    <li class="<?php echo $photo; ?>">
                        <a href="photos.php">Photos</a>
                    </li>
                    <li class="<?php echo $registries; ?>">
                        <a href="registries.php">Registries</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
