<?php
  require 'connect.php';
  $conn = db_connect();

  // header("Access-Control-Allow-Origin: *");
  // header("Content-Type: application/json; charset=UTF-8");
  //
  /*
  * Collect all Details from Angular HTTP Request.
  */
   // $request= json_decode(file_get_contents("php://input"));
   // @$id = $request->id;
   // echo "Do you want to delete id" + $id;


   @$id = $_GET['numDelete'];

  //  // $conn = new mysqli("localhost", "root", "", "personen");

  //  $result = $conn->query("DELETE FROM `persoon` WHERE id= $id");//sql query

      if($result) // will return true if succefull else it will return false
      {
        echo "Succesfully deleted!";
      } else {
        echo "Something went wrong. Check if the id exists!";
      }

  //  $conn->close();

?>
