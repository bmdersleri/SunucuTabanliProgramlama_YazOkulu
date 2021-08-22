<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=deneme;charset=utf8", "root", "13011813");
  
    echo "<h1>bağlantı başarılı</h1>"; 
    }
catch(PDOException $e)
    {
    echo "Bağlantı başarısız:" . $e->getMessage();
    }



    $pdo=null;

?>