<?php
//type data string
echo'Nama : ';
echo'budi';
echo"\n";

echo"Nama : " ;
echo"budi\t utomo\n";

//pengertian haredoc

echo <<< Budi
ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER secara manual,
"Dan bisa untuk membuat quote juga lo"
Budi;

//pengertian nowdoc
echo <<<'Budi'
ini adalah contoh string yang sangat panjang,
dan juga tidak perlu mengetik ENTER secara manual,
"Dan bisa untuk membuat quote juga lo"
Budi;

?>