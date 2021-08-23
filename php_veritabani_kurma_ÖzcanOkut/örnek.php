<?php

$baglanti = new mysqli("localhost", "root", "13011813", "örnek");

if (!$baglanti) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

echo "Bağlantı başarılı";

$baglanti->close();

?>