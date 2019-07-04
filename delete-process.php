<?php
  require 'connect.php';
  $conn = db_connect();

   @$id = $_GET['numDelete'];

   $result = $conn->query("DELETE FROM `persoon` WHERE id= $id");//sql query

    if($result) // will return true if succefull else it will return false
    {
      header('Location: eindopdracht.html');
    } else {
      echo "Something went wrong. Check if the id exists!";
    }

   $conn->close();

?>
