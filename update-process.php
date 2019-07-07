<?php
  require 'connect.php';
  $conn = db_connect();

   @$id = $_GET['numUpdate'];

   $sql="SELECT * FROM persoon WHERE id= $id";
   $result = $conn->query($sql);

   if($conn->query($sql)){
     if($row = $result->fetch_assoc()){
       $id = $row["id"];
       $Voornaam= $row["Voornaam"];
       $Achternaam = $row["Achternaam"];
       $Straat = $row["Straat"];
       $Hnumber = $row["Huisnummer"];
       $postCode = $row["Postcode"];
       $wPlaats = $row["Woonplaats"];
       $Tnum = $row["Telefoonnummer"];
     }
   }else{
     echo "id does not exist";
   }

     $conn->close();
?>
<form class="" action="update-query.php" method="post">
  <p>Id: <input type="text" name="id" value="<?php echo $id?>"></input></p>
  <p>Voornaam: <input type="text" name="vname" value="<?php echo $Voornaam?>"></input></p>
  <p>Achternaam: <input type="text" name="aname" value="<?php echo $Achternaam?>"></input></p>
  <p>Straat: <input type="text" name="straat" value="<?php echo $Straat?>"></input></p>
  <p>Huisnummer: <input type="text" name="hnummer" value="<?php echo $Hnumber?>"></input></p>
  <p>Postcode: <input type="text" name="postcode" value="<?php echo $postCode?>"></input></p>
  <p>Woonplaats: <input type="text" name="wplaats" value="<?php echo $wPlaats?>"></input></p>
  <p>Telefoonnummer: <input type="text" name="tnum" value="<?php echo $Tnum?>"></input></p>
  <input type="submit" name="edit" value="edit"></input><!--go to update-query.php-->
</form><!--goes to update-query.php-->
