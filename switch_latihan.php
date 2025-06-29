<?php
// Switch pertama: level user
$level_user = "admin";
switch ($level_user) {
    case "admin":
        echo "Selamat datang, Administrator!<br>";
        break;
    case "editor":
        echo "Selamat datang, Editor!<br>";
        break;
    default:
        echo "Selamat datang, Pengguna!<br>";
}

// Switch kedua: ukuran baju
$ukuran_baju = "L";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran kecil (Small)";
        break;
    case "M":
        echo "Ukuran sedang (Medium)";
        break;
    case "L":
        echo "Ukuran besar (Large)";
        break;
    case "XL":
        echo "Ukuran sangat besar (Extra Large)";
        break;
    default:
        echo "Ukuran tidak dikenal";
}
?>