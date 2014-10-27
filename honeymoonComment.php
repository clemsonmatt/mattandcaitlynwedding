<?php

/* get the db credentials */
include('config.php');

if ($_POST['name'] == "" || $_POST['message'] == "") {
    header('location:honeymoon.php?error=1');
} else {

    $name = str_replace("'", "\'", $_POST['name']);
    $message = str_replace("'", "\'", $_POST['message']);

    /* put into db */
    mysqli_query(
        $con,
        "INSERT INTO honeymoon (`name`, `message`, `created_at`)
        VALUES ('$name', '$message', '".date('Y-m-d H:i:s')."')"
    );

    header('location:honeymoon.php?success=1');
}
