<?php
include_once "class-persegipanjang.php";
$persegipanjang1 = new Persegipanjang(8, 9);
$persegipanjang2 = new Persegipanjang(10, 7);

echo "<br/> Persegi Panjang 1 (Panjang = 8, Lebar = 9)";
echo "<br/> Persegi Panjang 2 (Panjang = 10, Lebar = 7) ";

echo "<br/> Luas Persegi Panjang 1 : " .$persegipanjang1->getLuas();
echo "<br/> Luas Persegi Panjang 2 : " .$persegipanjang2->getLuas();

echo "<br/> Keliling Persegi Panjang 1 : " .$persegipanjang1->getKeliling();
echo "<br/> Keliling Persegi Panjang 2 : " .$persegipanjang2->getKeliling();
?>