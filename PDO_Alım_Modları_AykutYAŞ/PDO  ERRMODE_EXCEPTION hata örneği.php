<?php

try {  

  // veritabanına bağlantı

 $db = new PDO('mysql:host=localhost;dbname=deneme;charset=utf8mb4',
 
'root', '');
//SQL hataları yakalamak için aşağıdaki kodları ekleyin

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
   
  # SELECT! Yerine DELECT yazdık!
 
$db->prepare('DELECT ad FROM test')->execute();  
}  
catch(PDOException $e) { 
 
 echo "mesaj...: ".$e->getMessage(); //hata çıktısı 

}

?>