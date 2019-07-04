<?php
  require 'connect.php';
  $conn = db_connect();

  @$id = $_POST["id"];
  @$Voornaam= $_POST["vname"];
  @$Achternaam = $_POST["aname"];
  @$Straat = $_POST["straat"];
  @$Hnum = $_POST["hnummer"];
  @$postcode = $_POST["postcode"];
  @$wPlaats = $_POST["wplaats"];
  @$Tnum = $_POST["tnum"];

  $sql = "INSERT INTO `persoon`(`Voornaam`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Telefoonnummer`)";
   $sql.= " VALUES ('$Voornaam', '$Achternaam', '$Straat', '$Hnum', '$postcode', '$wPlaats', $Tnum)";

  if (mysqli_query($conn, $sql)) {
    header('Location: eindopdracht.html');
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $conn->close();

?>
