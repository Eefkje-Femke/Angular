<?php

// $conn = new mysqli("localhost", "root", "", "personen");
//
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

function db_connect(){
  //connecting with database
  $servername='localhost';
  $databasename= 'personen';
  $username= 'root';
  $password= '';

  // creat connection
  $conn = new mysqli($servername, $username, $password, $databasename);
  // check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  return $conn;
}

?>
