<?php

try {
  $dsn = "mysql:host=localhost;dbname=test;charset=utf8mb4";
  $user = "root";
  $passwd = "";

  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM deneme");

  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  foreach ($oku as $row) {
  extract($row);
  echo "Adı:..$ad Soyad:..$soyad Email:..$email<br>";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }

?>