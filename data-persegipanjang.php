<?php
require_once "class-persegipanjang.php";
$persegipanjang1 = new persegipanjang(15,5);
$persegipanjang2 = new persegipanjang(20,5);

echo "<br/>Persegi Panjang 1 Memiliki Nilai P : 15 L: 5 ";
echo "<br/>Persegi Panjang 1 Memiliki Nilai P : 25 L: 10 ";

echo "<br/>Luas Persegi Panjang 1 : ".$persegipanjang1->getluas();
echo "<br/>Luas Persegi Panjang 2 : ".$persegipanjang1->getluas();

echo "<br/>Keliling Persegi Panjang 1 : ".$persegipanjang1->getkeliling();
echo "<br/>Keliling Persegi Panjang 2 : ".$persegipanjang1->getkeliling();

?>