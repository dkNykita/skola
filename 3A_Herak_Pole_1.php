<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
<?php
date_default_timezone_set(UTC);
/*Projekt najdete zde:
http://dknykita.honsig.eu/skola/3A_Herak_Pole_1.php
*/

$zpracoval = "Dominik Herák ";
/*ČÁST 1*/
$cisla = array ();

for ($pocitadlo = -21; $pocitadlo <20; $pocitadlo++){
  $cisla[$pocitadlo] = $pocitadlo + 1;   }

foreach ($cisla as $value)
  {
  echo "<td> $value </td>";
  }
echo "<br /><br />";

for ($pocitadlo = -21; $pocitadlo < 22; $pocitadlo = $pocitadlo + 2){
echo "$cisla[$pocitadlo]  ";
}



echo "<br /><br /><br /><br />";

/*ČÁST 2*/
$day = array("Mon"=>"pondělí",
             "Tue"=>"úterý",
             "Wed"=>"středa",
             "Thu"=>"čtvrtek",
             "Fri"=>"pátek",
             "Sat"=>"sobota",
             "Sun"=>"neděle");
             
$month = array("1"=>"ledna",
               "2"=>"února",
               "3"=>"března",
               "4"=>"dubna",
               "5"=>"května",
               "6"=>"června",
               "7"=>"července",
               "8"=>"srpna",
               "9"=>"září",
               "10"=>"října",
               "11"=>"lisopadu",
               "12"=>"prosince");
 /*Příklad číslo 2/1*/
$den = date("d");
$mesic = date("m");
$rok = date("Y");
echo "Dnes je: $den."."$mesic."."$rok";               
                           
echo "<br><br><br><br>";
/*Příklad číslo 2/2*/
$dnes_den = date("j");
$dnes_mesic = date("n");
$den_3 = date("D");
$vypis_dne = $day[$den_3];
$vypis_mesice = $month[$dnes_mesic];
echo "Dnes je: $den. $vypis_mesice $rok a to je $vypis_dne";
echo "<br><br><br><br>";
echo "Zpracoval: ";
echo "<br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br><br>";

echo "$zpracoval 23.března.2017";            
?>
  </body>
</html>
