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

// Tablomuza veri eklemek için gerekli sql sorgusu
$sql = "INSERT INTO kitaplar (kitapAd, kitapYazar, kitapSayfa)
VALUES ('Facebook: Perde Arkasının Hikayesi', 'Steven Levy', 704)";

// Sorguyu Kontrol Et
if ($conn->query($sql) === TRUE) {
  echo "Yeni Kayıt Başarılı Şekilde Oluşturuldu";
} else {
  echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>