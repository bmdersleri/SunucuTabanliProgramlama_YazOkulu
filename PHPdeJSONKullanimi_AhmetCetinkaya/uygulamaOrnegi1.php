<?php

$jsonVeri = file_get_contents("kullanici.json");
echo $jsonVeri, "<br>";

$kullanici = json_decode($jsonVeri);
echo $kullanici->yas, "<br>";

$kullanici->yas = 22;
echo $kullanici->yas, "<br>";

$yeniJsonVeri = json_encode($kullanici);
echo $yeniJsonVeri;

?>