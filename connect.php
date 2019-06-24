<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "personen");

$result = $conn->query("SELECT ID, Voornaam, Achternaam, Straat, Huisnummer, Postcode, Woonplaats, Telefoonnummer,TijdToegevoegd FROM persoon");//sql query

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {//get result
  if ($outp != "") {$outp .= ",";}
   $outp .= '{"Id":"' . $rs["ID"] . '",';
   $outp .= '"Voornaam":"' . $rs["Voornaam"]  . '",';
   $outp .= '"Achternaam":"'. $rs["Achternaam"] . '",';
   $outp .= '"Straat":"' . $rs["Straat"]  . '",';
   $outp .= '"Huisnummer":"'. $rs["Huisnummer"] . '",';
   $outp .= '"Postcode":"'. $rs["Postcode"] . '",';
   $outp .= '"Woonplaats":"' . $rs["Woonplaats"]  . '",';
   $outp .= '"Telefoonnummer":"'. $rs["Telefoonnummer"] . '",';
   $outp .= '"Tijd toegevoegd":"' . $rs["TijdToegevoegd"]  . '"}';
 }
   $outp ='{"records":['.$outp.']}';

   $conn->close();

  echo($outp);//this is send

?>
