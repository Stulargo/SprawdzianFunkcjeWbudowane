

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="miasto">Nazwa miasta</label><br>
    <input type="text" id="miasto" name="miasto"><br>
</form>

    
</body>
</html>



<?php

// z formularza pobieramy nazwe miejscowosci ktora moze zawierac spacje zwrocic kod ascii peirwszego znaku tej nazwy jezeli ten kod ascii jest parzysty
// to wysylamy go do pliku wszystkie znaki bedace mala literka a zamienamy na znak $ i wyswietlamy kazde slowo wystepujace w tej nazwie na duza litere a pozostale znaki
//pozostaly


$miasto = $_POST['miasto'];


$ascii = ord($miasto[0]);
$miasto = str_replace(range('a','a'), '$', $miasto);
$miasto = ucwords($miasto);



if($ascii % 2 == 0) {
    echo "Sformatowana nazwa miejscowości: $miasto";
}




                                                            

?>