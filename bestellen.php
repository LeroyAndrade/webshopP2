<?php
session_start();

if (isset($_GET['verstuur1']))
{
  $idNaam1= $_GET['m-hals1'] = "m-hals1";
  if ($_GET['Maat1'] === "s" || $_GET['Maat1']==="m" ||$_GET['Maat1']==="l" ||$_GET['Maat1']==="xl")
  {
  

    echo $idNaam1;

    header("Location:webpaginaArtikel.php");


//START/



  }

  if ($_GET['Maat1'] === "wit")
  {
  echo $_GET['Maat1'];
  }
  if ($_GET['Maat1'] === "rood")
  {
  echo $_GET['Maat1'];
  }
}

if (isset($_GET['verstuur2']))
{
  $idNaam2= $_GET['m-hals2'] = "m-hals2";
  if ($_GET['Maat2'] === "s" || $_GET['Maat2']==="m" ||$_GET['Maat2']==="l" ||$_GET['Maat2']==="xl")
  {
    echo $_GET['Maat2'] . '<br/>';
    echo $idNaam2;
  }
  if ($_GET['Maat2'] === "wit")
  {
  echo $_GET['Maat2'];
  }
  if ($_GET['Maat2'] === "rood")
  {
  echo $_GET['Maat2'];
  }
}

if (isset($_GET['verstuur3']))
{
  $idNaam3= $_GET['m-hals3'] = "m-hals3";
  if ($_GET['Maat3'] === "s" || $_GET['Maat3']==="m" ||$_GET['Maat3']==="l" ||$_GET['Maat3']==="xl")
  {
    echo $_GET['Maat3'] . '<br/>';
    echo $idNaam3;
  }
  if ($_GET['Maat3'] === "wit")
  {
  echo $_GET['Maat3'];
  }
  if ($_GET['Maat3'] === "rood")
  {
  echo $_GET['Maat3'];
  }
}

?>
