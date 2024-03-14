<?php


//napisac skrypt ktory policzy nam ile jest dni do 31 marca


$aktualnaData = time();

$marzec31 = mktime(0, 0, 0, 3, 31, date('Y'));

$roznicaWDniach = ($marzec31 - $aktualnaData) / (60*60*24);

if($roznicaWDniach <=0){
    Echo "Twoja data przekroczyla 31 marca";
}
else{
    echo "Liczba dni do 31 marca: $roznicaWDniach dni";
}


?>