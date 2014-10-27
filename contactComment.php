<?php

/* get the db credentials */
include('config.php');

if ($_POST['name'] == "" || $_POST['message'] == "") {
    header('location:contact.php?error=1');
} else {

    $name = str_replace("'", "\'", $_POST['name']);
    $email = str_replace("'", "\'", $_POST['email']);
    $message = str_replace("'", "\'", $_POST['message']);

    /* put into db */
    mysqli_query(
        $con,
        "INSERT INTO email (`name`, `email`, `message`, `created_at`)
        VALUES ('$name', '$email', '$message', '".date('Y-m-d H:i:s')."')"
    );

    mysqli_close($con);

    header('location:contact.php?success=1');
}

/* email me */
// $to      = 'mlellis@clemson.edu';
// $subject = 'Wedding Website';
// $message = 'A message from your wedding website
//             <br><br>
//             Name: &nbsp; '.$_POST['name'].'
//             <br><br>
//             Message: &nbsp; '.$_POST['message'];
// $headers = 'From: '. $_POST['email'] . "\r\n" .
//            'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// mail($to, $subject, $message, $headers);
