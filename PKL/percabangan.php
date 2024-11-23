<?php

$nilai = 75;
$kkm = 75;

if ($nilai >= $kkm) {
    echo "nilai lebih besar dari kkm";
}else{
    echo "nilai kurang dari kkm";
}
echo "<hr>";

$jumlah_makanan = 10;
$jumlah_minuman = 20;

if ($jumlah_minuman >= $jumlah_makanan) {
    echo "jumlah makanan lebih banyak dari minuman";
}else{ 
    echo "jumlah minuman kurang dari makanan";
}
echo "<hr>";

$jumlah_kelinci = 20;
$jumlah_kucing = 15;

if ($jumlah_kucing >= $jumlah_kelinci) {
    echo "jumlah kucing lebih banyak dari kelinci";
}else{ 
    echo "jumlah kucing kurang dari kelinci";
}
echo "<hr>";

$nilai = 80;

if ($nilai > 80) {
    echo "Kategori A";
}else if ($nilai > 70 && $nilai <= 80) {
    echo "Kategori B";
}else if ($nilai > 60 && $nilai <= 70) {
    echo "Kategori C";
}else if ($nilai > 50 && $nilai <= 60) {
    echo "Kategori D";
}else{
    echo "Kategori E";
}
echo "<hr>";
$sapu = 30;

if ($sapu > 35) { //A
    echo "Kategori A";
}else if ($sapu> 20 && $sapu <= 30) {//B
    echo "Kategori B";
}else if ($sapu > 15 && $sapu <= 20){ //C 
    echo "Kategori C";
}else if ($sapu > 10 && $sapu <= 5){ //D 
    echo "Kategori D";
}else{
    echo "Kategori E";
}
echo "<hr>";

?>