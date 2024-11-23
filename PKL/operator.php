<?php

$a = 8;
$b = 6;

$tambah = $a + $b;
echo $tambah . "<br>";
$kurang = $a - $b;
echo $kurang . "<br>";
$kali = $a * $b;
echo $kali . "<br>";
$bagi = $a / $b;
echo $bagi . "<br>";
$sisa_bagi = $a % $b;
echo $sisa_bagi . "<br>";
$eksponen = $a ** $b;
echo $eksponen . "<br>";
echo "<hr>";

//char
$char = "ekskul web";
echo "<h3>" . $char. "<h3>" . "<br>";

//operator aritmatika
//merupakan operator untuk melakukan operasi aritmatika 
//aritmatika + - * / % **
//+ untuk tambah
//- untuk kurang
//* untuk kali
// / untuk bagi
// % untuk sisa bagi
// ** bilangan berpangkat

$aa = 10;
$bb = 5;

$hasil = $aa + $bb;
echo "$aa + $bb = $hasil" . "<br> . ";
//echo "<hr>";
$hasil = $aa - $bb;
echo "$aa - $bb = $hasil" . "<br>";
//echo "<hr>";
$hasil = $aa * $bb;
echo "$aa * $bb = $hasil" . "<br>";
//echo "<hr>";
$hasil = "$aa / $bb";
echo "$aa / $bb = $hasil" . "<br>";
//echo "<hr>";
$hasil = $aa % $bb;
echo "$aa % $bb = $hasil" . "<br>";
//echo "<hr>";
// ** bilangan berpangkat
$hasil = $aa ** $bb;
echo "$aa ** $bb = $hasil" . "<br>";
echo "<hr>";

//operator assigment atau penugasan
//adalah operator untuk memberikan tugas kepada variabel.
//digunakan untuk mengisi nilai dan juga menghitung dengan operasi aritmatika.
// = pengisian nilai
// += pengisian dan penambahan
// -= pengisian dan pengurangan
// *= pengisian dan perkalian
// **= pengisian dan pemangkatan
// /= pengisian dan pembagian
// %= pengisian dan sisa bagi
// .= pengisian dan penggabungan (string)

$c = 40;

$c += 10;
echo $c . "<br>";
$c -= 60;
echo $c ."<br>";
$c *= -10;
echo $c . "<br>";
$c /= 20;
echo $c . "<br>";
$c %= 10;
echo $c . "<br>";
$c **= 2;
echo $c . "<br>";
echo "<hr>";

//misal $d = 10;
//$d += 10; (maka hasil dari d terbaru adalah 20)
//pengertian: jadi variabel d akan otomatis di tambah nilai dari samadengan

$coba = 4;
echo $coba . "<br>";
//echo "<hr>";
$coba += 4;
echo $coba . "<br>";
//echo "<hr>";
$coba -=10;
echo $coba . "<br>";
//echo "<hr>";
$coba *= -20;
echo $coba ."<br>";
//echo "<hr>";
$coba /= 4;
echo $coba ."<br>";
//echo "<hr>";
$coba %= 4;
echo $coba ."<br>";
//echo "<hr>";
$coba **= 2;
echo $coba ."<br>";
echo "<hr>";

//operator increment(-) & decrement(+)
//merupakan operator yg digunakan untuk menambah +1 (tambah 1) dan mengurangi -1 (kurang 1)
//increment menggunakan simbol ++ sedangkan decrement menggunakan simbol --
$saya = 110;
echo $saya . "<br>";
$saya ++;
echo $saya . "<br>";
$saya --;
echo $saya . "<br>";
echo "<hr>";

//operator relasi
//adalah operator untuk membandingkan dua buah nilai.
//operator relasi menghasilkan nilai dengan tipe data boolean yaitu true(benar) dan false(salah).
//jika benar maka mendapatkan nilai 1 untuk true sedangkan false tidak di tampilkan atau 0.
// > lebih besar
// < lebih kecil
// == atau === sama dengan
// != atau !== tidak sama dengan 
// >= lebih besar sama dengan
// <= lebih kecil sama dengan

$aku = 10;
$aku1 =2;

//operator relasi lebih besar
$hasil = $aku > $aku1; //true
echo "$aku > $aku1 : $hasil";
echo "<br>";
$hasil = $aku < $aku1; //false
echo "$aku < $aku1 : $hasil";
echo "<br>";
$hasil = $aku == $aku1; //false
echo "$aku ==$aku1 : $hasil";
echo "<br>";
$hasil = $aku != $aku1; //true
echo "$aku != $aku1 : $hasil";
echo "<br>";
$hasil = $aku >= $aku1; //true
echo "$aku >= $aku1 : $hasil";
echo "<br>";
$hasil = $aku <= $aku1; //false
echo "$aku <= $aku1 : $hasil";
echo "<hr>";

//string
$salam = "hello there";
//boolean
$lll = false;
//number
$num = 123;
//float
$float = 3.14; // float or double
//array
$arr = ['a', 'b', 3, true];
//null
$var = null;
//echo "<hr>";

$firstname = "john";
$lastname = "Doe";
$fullname = $firstname . " " . $lastname;
echo $fullname; // output: John Doe
echo "<hr>";
?>

<h1><?php echo $float ?></h1>
<h1><?php echo gettype($lll) ?></h1>
<h1><?php var_dump($float) ?></h1>
<hr>



