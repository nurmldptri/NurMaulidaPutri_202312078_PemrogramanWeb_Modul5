<?php
// Fungsi menghitung diskon
function hitung_diskon($harga, $persen_diskon) {
    $potongan = $harga * ($persen_diskon / 100);
    return $harga - $potongan;
}

// Fungsi ucapan salam
function sapa($nama, $waktu) {
    echo "Selamat $waktu, $nama!<br>";
}

// Memanggil fungsi diskon
$harga_baju = 150000;
$harga_setelah_diskon = hitung_diskon($harga_baju, 10); // Diskon 10%
echo "Harga akhir: Rp " . $harga_setelah_diskon . "<br>";

// Memanggil fungsi sapa
sapa("Diva", "Pagi");
?>