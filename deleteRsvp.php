<?php

include('config.php');

  $id = $_GET['id'];

  /* put into db */
  $sql = "DELETE FROM rsvp WHERE id = '$id'";
  
  mysqli_query($con, $sql);

  header('location:admin.php?success=delete');
