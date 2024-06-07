<?php
$n = 3;
for ($i = 1; $i <= $n * 2 - 1; $i++) {
     // Hitung indeks baris aktual dalam pola segitiga
    $row = $i <= $n ? $i : $n * 2 - $i;
    
     // Hitung jumlah spasi di awal setiap baris
    $spasi = $n - $row;
        
    // Hitung jumlah bintang yang harus dicetak
    $bintang = 2 * $row - 1;
        
    // Cetak spasi di awal baris
    for ($j = 1; $j <= $spasi; $j++) {
        echo " ";
    }
        
    // Cetak bintang
    for ($j = 1; $j <= $bintang; $j++) {
        echo "*";
    }
        
    // Pindah ke baris baru
    echo "\n";
}

?>
