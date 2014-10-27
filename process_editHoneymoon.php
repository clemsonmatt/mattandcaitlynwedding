<?php

include('config.php');

if ($_POST['name'] == "" || $_POST['message'] == "") {
    header('Location: editHoneymoon.php?id='.$_POST["id"].'&error=1');
} else {
    $name   = str_replace("'", "\'", $_POST['name']);
    $message  = str_replace("'", "\'", $_POST['message']);
    $id     = $_POST['id'];

    /* put into db */
    $sql = "UPDATE honeymoon SET 
           `name` = '$name',
           `message` = '$message',
           `updated_at` = '$date' 
           WHERE id = '$id'";
    
    mysqli_query($con, $sql);

    header('location:admin.php?success=edit');
}
