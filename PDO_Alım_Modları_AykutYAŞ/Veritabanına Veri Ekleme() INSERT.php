<?php

try {
  $dsn = "mysql:host=localhost;dbname=test;charset=utf8mb4";
  $user = "root";
  $passwd = "";

  $db = new PDO($dsn, $user, $passwd);
  //SQL gibi hatalarıda almak için aşağıdaki kod yazılır.
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);

  $ekle = $db->exec("INSERT INTO test ( adi, soyadi)
  VALUES ( '$ad', '$soyad')");

          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }

?>