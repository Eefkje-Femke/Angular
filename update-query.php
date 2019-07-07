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

  //sql query
  $sql="UPDATE `persoon` SET `Voornaam`= '$Voornaam', `Achternaam`= '$Achternaam', `Straat` = '$Straat', `Huisnummer` = '$Hnum', ";
  $sql.= "`Postcode` = '$postcode', `Woonplaats` = '$wPlaats',`Telefoonnummer` = '$Tnum' WHERE id=$id ";

  if (mysqli_query($conn, $sql)) {
    header('Location: eindopdracht.html');
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $conn->close();

?>
