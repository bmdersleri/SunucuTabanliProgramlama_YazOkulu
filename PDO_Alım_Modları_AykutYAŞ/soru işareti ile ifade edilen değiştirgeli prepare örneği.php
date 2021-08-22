<?php

$oku = $db->prepare("INSERT INTO test (ad, soyad, email) VALUES (?, ?, ?)");

$oku->bindParam(1, $ad);

$oku->bindParam(2, $soyad);

$oku->bindParam(3, $email);

$oku->execute();

?>