<?php
echo "Namaku alil";
?>

<?php
$nama = "Alil";
echo $nama;
?>

<?php
$a = "Saya belajar PHP";
$b = 5 ;

print $a;
echo $b;
?>

<? 
$a=5;
$b="Sedang belajar php $a"
echo $b;
//Hasil: Saya sedang belajar php 5
?>

<?php
$umur=19;
$harga=10000;
$rugi=-20000;

echo "$umur \n" ; //19
echo "$harga \n"; //10000
echo "$rugi \n"; //20000
?>

<?php
$c=21;
$d=19;
$e= $c + $d; 
echo $e; //40

$f= $c - $d;
echo $f; //2
?>

<?php
$angka_float1=0.78;
$angka_float2=14.99;
$angka_scientific1=0.314E1;
$angka_scientific2=0.33665E-3;

echo "$angka_float1 \n"; //0.78
echo "$angka_float2 \n"; //14.99
echo "$angka_scientific1\n"; //3.14
echo "$angka_scientific2 \n"; //0.0003365
?>

<?php
$g=10.66;
$h=12.4;
$i= $g + $h;
echo $i; //23.06

$j= $g / $h;
echo $j; //0.85967741935484
?>

<?php
$string1 = 'ini adalah string sederhana';
$string2 = "ini adalah string
yang bisa memiliki beberapa
baris";
$string3 ='dia berkata : "I\ Il be back"';

echo $string1; echo "/n";
echo $string2; echo "/n";
echo $string3; echo "/n";
?>

<?php
$benar=true;
$salah=false;

echo "benar = $benar, salah = $salah";
//hasil output: benar = 1, salah =
?>

<?php
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-4.5;
$hasil4=2*5;
$hasil5=3+8/5-3;
$hasil6=10 % 4 ;

echo "$hasil1 \n"; var_dump($hasil1);
echo "$hasil2 \n"; var_dump($hasil2);
echo "$hasil3 \n"; var_dump($hasil3);
echo "$hasil4 \n"; var_dump($hasil4);
echo "$hasil5 \n"; var_dump($hasil5);
echo "$hasil6 \n"; var_dump($hasil6);
?>