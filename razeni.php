<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta charset="utf-8">
  <title>funkce php</title>
  <?php 
  include("functions/zpracoval.php");
 // include ("style.css")
  ?>
  </head>
  <body>
<?php
date_default_timezone_set(UTC);
$jmena = array("Naďa", "Zdeněk", "Šárka", "Adam");
$cislo = 1;

echo "Matice <br><br>";
foreach ($jmena as $hodnota){
    echo "$cislo) $hodnota <br>";
    $cislo++;                              
                            }
 echo "<br>";                             
//řazení
echo "Řazení podle hodnoty vzestupně <br><br>";

//řazení vzestupně
sort($jmena, SORT_LOCALE_STRING);
echo "<br><br>";

foreach ($jmena as $hodnota){
    echo "$cislo) $hodnota <br>";
    $cislo++;
                            }
echo "<br><br>";
//řazení sestupně
echo "Řazení podle hodnoty sestupně <br><br>";                            
rsort($jmena, SORT_LOCALE_STRING);

foreach ($jmena as $hodnota){
    echo "$cislo) $hodnota <br>";
    $cislo++;
                            } 
 zpracoval("30. 3. 2017");
?>
  </body>
  </html>