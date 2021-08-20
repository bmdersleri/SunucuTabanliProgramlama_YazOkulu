<?php

$jsonVeri = file_get_contents("arabalar.json");
echo $jsonVeri, "<br>";

$arabalar = json_decode($jsonVeri);

function ekranaYazdir($arabalar)
{
    foreach ($arabalar as $araba)
        echo "Araba: ", $araba->marka, " ",
        $araba->ad, " ", $araba->yil, "<br>";
    echo "<br>";
}

ekranaYazdir($arabalar);

$yeniAraba = (object)["marka" => "Fiat", "ad" => "Fullback", "yil" => 2016];
array_push($arabalar, $yeniAraba);
ekranaYazdir($arabalar);

$yeniJsonVeri = json_encode($arabalar);
echo $yeniJsonVeri, "<br>";
?>