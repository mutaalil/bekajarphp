<?php
$pemasukan=50000000;
$hutang_a=16500000;
$bunga_hutang_a=5/100 ;
$hutang_b=9500000;
$bunga_hutang_b=4.5/100 ;
$totalHutangA= $hutang_a*$bunga_hutang_a;
$totalHutangB= $hutang_b*$bunga_hutang_b;

$hasil1= $pemasukan-$hutang_a-$hutang_b-$totalHutangA-$totalHutangB;
$hasil2= $bunga_hutang_a+$bunga_hutang_b;
$hasil3= $hutang_a+$hutang_b;

echo "$hasil1 \n";
echo "$hasil2 \n";
echo "$hasil3 \n";