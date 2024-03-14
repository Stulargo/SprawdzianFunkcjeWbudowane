<?php
//tablica wypelniona losowymi liczbami od <10;20> wlacznie a rozmiarem tablicy jest liczba z przedzialu od <5;10> napierw rozmiar wypisac potem elementy posortowac 
//malejaco potem wymieszac zawartosc tablciy wyswietlic ile razy dana wartosc wystepuje w tablicy na poczatek tablicy ustawic liczby 555 666 teraz pokazac ta tablice i
//usuwamy poczawszy od 2 elementy 3 elementy w tablcy i pokazujemy elementy usuniete i tablice po usunieciu tych elementow

$rozmiar = rand(5, 10);

$tablica = Array();
for ($i = 0; $i < $rozmiar; $i++) {
    $tablica[] = rand(10, 20);
}

echo "Rozmiar tablicy: $rozmiar\n";


rsort($tablica);

shuffle($tablica);

$wartosci = array_count_values($tablica);
foreach ($wartosci as $wartosc => $ile) {
    echo "<br>";
    echo "$wartosc występuje $ile razy";
}

echo "<br>";
array_unshift($tablica, 555, 666);

echo "Tablica po modyfikacjach: ";
foreach ($tablica as $element) {
    echo "$element ";
}
echo "<br>";


$usuniete = array_splice($tablica, 1,3);


echo "Usunięte elementy: ";
foreach ($usuniete as $element) {
    echo "$element ";
}
echo "<br>";
echo "Tablica po usunięciu elementów:";
foreach ($tablica as $element) {
    echo "$element ";
}
?>
