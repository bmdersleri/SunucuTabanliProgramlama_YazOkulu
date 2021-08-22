<?php

$oku = $db->prepare("INSERT INTO test (ad, soyad, email) 
VALUES (:ad, :soyad, :email)");

$oku->bindParam(':ad', $ad);

$oku->bindParam(':soyad', $soyad);

$oku->bindParam(':email', $email);

$oku->execute();

?>