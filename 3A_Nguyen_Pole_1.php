<html>
<head>
    <meta
    "charset=UTF-8">
</head>
<body>
<?php
date_default_timezone_set(UTC);
//1. cvičení//
$cisla = array();
for ($zavitek = -21; $zavitek < 20; $zavitek++) {
    $cisla[$zavitek] = $zavitek + 1;
}

foreach ($cisla as $value) {
    echo " $value";
}
echo "<br><br/>";

for ($zavitek = -21; $zavitek < 22; $zavitek = $zavitek + 2)
    echo " $cisla[$zavitek] ";

echo "<br><br/><br><br/>";

//2. cvičení//
$day = array("Mon" => "pondělí",
    "Tue" => "úterý",
    "Wed" => "středa",
    "Thu" => "čtvrtek",
    "Fri" => "pátek",
    "Sat" => "sobota",
    "Sun" => "neděle");

$month = array("1" => "leden",
    "2" => "únor",
    "3" => "březen",
    "4" => "duben",
    "5" => "květen",
    "6" => "červen",
    "7" => "červenec",
    "8" => "srpen",
    "9" => "září",
    "10" => "říjen",
    "11" => "listopad",
    "12" => "prosinec");

//2.1 cvičení//
$den = date("D");
$dden = date("d");
$mesic = date("n");
$rok = date("Y");
echo "Dnes je: $dden." . "$mesic." . "$rok";
echo "<br><br><br><br>";
//Příklad 2.2//

echo "Dnes je $dden. $month[$mesic] $rok a to je $day[$den].";

echo "<br><br><br><br>";

echo "Zpracoval: ";
echo "Michael Nguyen 30.března.2017";
?>
</body>
</html>
