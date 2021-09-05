<?php
$host = "localhost";
$user = "root";
$pass = "Merve.1770";
$db = "restful_web_service";
 
try {
 $db = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $db->query("SET CHARACTER SET utf8");
}catch(PDOException $e) {
 die( $e->getMessage());
}
 
?>