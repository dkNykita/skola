<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<?php
date_default_timezone_set(UTC);
include("functions/zpracoval.php");
/*Project can be found here:
http://dknykita.honsig.eu/skola/3A_Herak_Pole_1.php
*/

$me = "Dominik Herák ";
/*PART ONE*/
$numbers = array ();

for ($counter = -21; $counter <20; $counter++){
    $numbers[$counter] = $counter + 1;   }

foreach ($numbers as $value)
{
    echo "<td> $value </td>";
}
echo "<br /><br />";

for ($counter = -21; $counter < 22; $counter = $counter + 2){
    echo "$numbers[$counter]  ";
}



echo "<br /><br /><br /><br />";

/*PART TWO*/
$day = array(
    "Mon"=>"pondělí",
    "Tue"=>"úterý",
    "Wed"=>"středa",
    "Thu"=>"čtvrtek",
    "Fri"=>"pátek",
    "Sat"=>"sobota",
    "Sun"=>"neděle");

$month = array(
    "1"=>"ledna",
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
/*PART TWO/ONE*/
$day_1 = date("d");
$month_1 = date("m");
$year_1 = date("Y");
echo "Dnes je: $day_1."."$month_1."."$year_1";

echo "<br><br><br><br>";
/*PART TWO/TWO*/
$today_day = date("j");
$today_month = date("n");
$day_3 = date("D");
$today_day = $day[$day_3];
$today_month = $month[$today_month];
echo "Dnes je: $day_1. $today_month $year_1 a to je $day[$day_3]";
echo "<br><br><br><br>";
echo "Zpracoval: ";
echo "<br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br>↓<br><br><br>";

zpracoval("23.března.2017");
?>
</body>
</html>
