<?php
// Perulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Perulangan ke-" . ($i + 1) . "<br>";
}

// Perulangan while
$angka = 5;
while ($angka > 0) {
    echo "Hitung mundur: $angka <br>";
    $angka--;
}

// Perulangan foreach
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

echo "Daftar Buah:<br>";
foreach ($buah as $nama_buah) {
    echo "- " . $nama_buah . "<br>";
}
?>