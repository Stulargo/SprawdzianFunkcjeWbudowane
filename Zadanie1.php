<?php


//w php Z pliku pobrac 3 liczby calkowite wyznaczyc ich sume potem pierwiastek z sumy potem pierwiastek zaokraglic do 2 miejsc po przecinku wyznaczamy 
//potege 1 liczby do 2 (a do potegi b) ta potege przekonwertowac na binarna i system szestnastkowy wyznaczamy z 60 stopni


$file = fopen("zadanie1.txt", "r");


$a = fgets($file);
$b = fgets($file);
$c = fgets($file);


fclose($file);

$sum = $a+$b+$c;


$pierwiastek = round(sqrt($sum),2);

$potega = $a ** $b;


$binarna = decbin($potega);
$szestnastkowa = dechex($potega);


$sin60 = sin(deg2rad(60));


echo "Suma: $sum";
echo "<br>";
echo "Pierwiastek z sumy zaokraglony do 2 miejsc po przecinku: $pierwiastek";
echo "<br>";
echo "a do kwadratu b : $potega";
echo "<br>";
echo "Potega w sstemie binarnym: $binarna";
echo "<br>";
echo "Potega w systemie szesnastkowym: $szestnastkowa";
echo "<br>";
echo "Sinus 60 stopni: $sin60";
?>
