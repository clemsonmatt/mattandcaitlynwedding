<?php

include('config.php');

if ($_POST['name'] == "" || $_POST['phone'] == "" || $_POST['yes-no'] == "") {
    header('Location: editRsvp.php?id='.$_POST['id'].'&error=1');
} elseif ($_POST['number'] == "" && $_POST['yes-no'] == 'yes') {
    header('Location: editRsvp.php?id='.$_POST['id'].'&error=2');
} else {
    $yes_no = $_POST['yes-no'];
    $name   = str_replace("'", "\'", $_POST['name']);
    $phone  = str_replace("'", "\'", $_POST['phone']);
    $number = str_replace("'", "\'", $_POST['number']);
    $date   = date('Y-m-d H:i:s');
    $id     = $_POST['id'];

    /* put into db */
    $sql = "UPDATE rsvp SET 
           `name` = '$name',
           `phone` = '$phone',
           `number` = '$number',
           `response` = '$yes_no',
           `updated_at` = '$date' 
           WHERE id = '$id'";
    
    mysqli_query($con, $sql);

    header('location:admin.php?success=edit');
}
