<?php 

//variabel bangun ruang prisma alas segitiga
$alas = 8.9;
$tinggi_alas = 7.9;
$tinggi_prisma = 5.4;

// Hitung luas alas segitiga
$luas_alas = 0.5 * $alas * $tinggi_alas;

// Hitung volume prisma
$volume = $luas_alas * $tinggi_prisma;

// Tampilkan hasil dengan 3 desimal
echo "Volume prisma segitiga: " . number_format($volume, 3) . " m3";
?>