<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// $conn = new mysqli("localhost", "root", "", "personen");
//
// $result = $conn->query("DELETE persoon WHERE ID='Alfreds Futterkiste'");//sql query
//
//    $conn->close();




/*
  * Collect all Details from Angular HTTP Request.
  */
   $request= json_decode(file_get_contents("php://input"));
   @$id = $request->id;
   echo $id; //this will go back under "data" of angular call.

?>
