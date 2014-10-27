<?php

include('config.php');

/* error checking */
if ($_POST['name'] == "" || $_POST['phone'] == "" || $_POST['yes-no'] == "") {
    header('Location: rsvp.php?error=1');
} elseif ($_POST['number'] == "" && $_POST['yes-no'] == 'yes') {
    header('Location: rsvp.php?error=2');
} else {
    $yes_no = $_POST['yes-no'];
    $name   = str_replace("'", "\'", $_POST['name']);
    $phone  = str_replace("'", "\'", $_POST['phone']);
    $number = str_replace("'", "\'", $_POST['number']);
    $email  = str_replace("'", "\'", $_POST['email']);
    $date   = date('Y-m-d H:i:s');

    /* put into db */
    $sql = "INSERT INTO rsvp 
           (`name`, `phone`, `number`, `email`, `response`, `created_at`) 
           VALUES('$name', '$phone', '$number', '$email', '$yes_no', '$date')";

    mysqli_query($con, $sql);

    if ($yes_no == 'yes') {
        header('Location: venue.php?rsvp=yes');
    } else {
        header('Location: venue.php?rsvp=no');
    }
}
