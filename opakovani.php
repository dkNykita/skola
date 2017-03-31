<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta charset=windows-1250">
  <title></title>
  <style>
  table, th, td {
    border: 2px solid #ff1600;
    border-collapse: collapse;
}
  </style>
  </head>
  <body>
    <div>
      <?php
$jetu = "Andariel";
$cisla = array ();   
for ($pocitadlo = 0; $pocitadlo <50; $pocitadlo++){
  $cisla[$pocitadlo] = $pocitadlo + 1;   }
  echo "<table><tr>";
  
  
foreach ($cisla as $value)
  {
  echo "<td>$value </td>";
  }
echo "</tr></table><br /><br />";


echo "<table><tr>";
for ( $pocitadlo = 4;$pocitadlo <=50 ; $pocitadlo = $pocitadlo+5 ) {
  echo "<td>$cisla[$pocitadlo] </td>";  	 
}
echo "</tr></table>";      
echo "<br /> <br /> <br /> <br /> ";
$lide = array (   /*základní matice*/
  "Dominik",
  "Daniel",
  "David",
  "Marek",
  "Zidan",
  "Martina",
  "Simona",
  "Milan"
                );
foreach ($lide as $jmena){    /*výpis základní matice*/
  echo "$jmena <br />";  
                          }

echo "<br /><br />";
                          
$lide1 = array();          /*jedna možnost záměny*/
$lide1[0] = $lide[1];
$lide1[1] = $lide[0];
for ($cislo = 2; $cislo <=8; $cislo++){
  $lide1[$cislo] = $lide[$cislo];


                                        }

foreach ($lide1 as $jmena){     /*výpis*/
  echo "$jmena <br />";
                          }
echo "<br /><br />";
                          
$lide[0] = 'Daniel';            /*ruční záměna*/
$lide[1] = 'Dominik';
echo "<br /><br />";
foreach ($lide as $jmena){
  echo "$jmena <br />";
                          }
                          
echo "<br /><br />";
                          
foreach ($lide as $jmena){      /*vyhledávání v poli a porovnávání*/
  if ($jmena == $jetu){         /*Je? vypiš*/
  echo "Jméno $jetu bylo nalezeno";
                        }
                        }
  if ($jmena !== $jetu){        /*Není? vypiš*/
    echo"Jméno $jetu nebylo nalezeno";
                        }
                                                    
                                
      ?>
    </div>
  </body>
</html>
