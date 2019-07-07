<?php
  require 'connect.php';
  $conn = db_connect();

   @$id = $_GET['numDelete'];//get id that should be deleted

   $result = $conn->query("DELETE FROM `persoon` WHERE id= $id");//sql query

    if($result) // if true, goes to eindopdracht.html
    {
      header('Location: eindopdracht.html');
    } else {
      echo "Something went wrong. Check if the id exists!";
    }

   $conn->close();

?>
