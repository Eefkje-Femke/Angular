<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "personen");

$result = $conn->query("SELECT Bedrijfsnaam, Adres, Woonplaats, Telnr FROM bedrijf");//sql query

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {//get result
  if ($outp != "") {$outp .= ",";}
   $outp .= '{"Bedrijfsnaam":"' . $rs["Bedrijfsnaam"] . '",';
   $outp .= '"Adres":"' . $rs["Adres"]  . '",';
   $outp .= '"Woonplaats":"'. $rs["Woonplaats"] . '",';
   $outp .= '"Telnr":"' . $rs["Telnr"]  . '"}';
 }
   $outp ='{"records":['.$outp.']}';

   $conn->close();

  echo($outp);//this is send

?>
