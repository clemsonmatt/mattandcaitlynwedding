<?php

date_default_timezone_set('America/New_York');

if (getenv('REMOTE_ADDR') == '127.0.0.1') {
    $dbhost = '127.0.0.1';
    $dbname = 'wedding';
    $dbuser = 'root';
    $dbpass = null;
} else {
    $dbhost = 'localhost';
    $dbname = 'wedding';
    $dbuser = 'matte';
    $dbpass = 'mynameisM@tt1';
}

//$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//$dbh = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
