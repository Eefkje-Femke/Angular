Voornaam: <input type="text" name="vname"></input>
Achternaam: <input type="text" name="aname"></input>
Straat: <input type="text" name="straat"></input>
Huisnummer: <input type="text" name="hnummer"></input>
Postcode: <input type="text" name="postcode"></input>
Woonplaats: <input type="text" name="wplaats"></input>
Telefoonnummer: <input type="text" name="tnum"></input>


<div align="center">
      <form class="" action="edit-process.php" method="post">
        <h3>Verander hier uw Verjaardag!</h3>
        <p>Voornaam:
          <input type="text" name="Voornaam" value="<?php echo $Voornaam?>"/>
        </p>
        <p> Achternaam:
          <input type="text" name="Achternaam" value="<?php echo $Achternaam?>"/>
        </p>
        <p> Datum:
          <input type="date" name="Datum" value="<?php echo $Datum?>"/>
        </p>
        <input type="hidden" name="id" value="<?php echo $id?>">
          <input type="submit" name="edit" value="edit">
            <br />
      </form>
  </div>
