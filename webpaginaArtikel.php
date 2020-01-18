<?php
session_start();
require("login.php");

try {
    $connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding is gemaakt! $nwl$nwl";
    //Pas query uitvoeren wanneer verbinding succesvol is.
    //bereid query voor
  //  $query = "SELECT id, modelshirt, kleur, maat, aantal_voorraad FROM artikelen ORDER BY id ASC";
$Maat = $_GET["Maat1"]="M";
$idNaam1= $_GET['m-hals1'] = "m-hals1";
   $query = "SELECT modelshirt, maat, aantal_voorraad FROM artikelen WHERE modelshirt= '".$idNaam1."' AND maat ='".$Maat."' AND aantal_voorraad >= 1 LIMIT 1";
    $statement = $connection->query($query);

} catch(PDOException $e) {
    echo 'Product niet voorradig, onze excuus voor het ongemak: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}
//SQL ondersteund geen n1+3 methode zodat alleen 1 model van ieder shirt wordt getoond: http://troels.arvin.dk/db/rdbms/#select-limit
foreach ($statement as $row)
{
  echo
  //Shirt1:
  "<b>Modelshirt</b>&#58; $row[0]$nwl
    <img src=\"splash/man/m/shirt1ManM.JPG\" alt=\"Shirt-man-1\" />

        $nwl Maat &#58; $row[1] $nwl
        Aantal_voorraad&#58; $row[2] $nwl$nwl";
}
?>
