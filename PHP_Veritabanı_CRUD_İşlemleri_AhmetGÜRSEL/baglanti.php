<?php
$serverName = "localhost";
$userName = "ahmetgursel"; //mysql kullanıcı adı
$password = "123456"; // mysql şifresi
$dbName = "ahmetgurselDb"; // oluşturduğumuz database


// Bağlantı Oluştur
$conn = new mysqli($serverName, $userName, $password, $dbName);
// Bağlantıyı Kontrol Et
if ($conn->connect_error) {
  die("Bağlantı Hatası: " . $conn->connect_error);
}
?>