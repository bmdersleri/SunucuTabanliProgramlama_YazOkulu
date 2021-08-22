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

// Tablomuzdaki tüm verileri çekmek için gerekli sql sorgusu
$sql = "SELECT * FROM kitaplar ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // aldığımız tüm verileri alt alta ekrana bastırıyoruz.
  while($row = $result->fetch_assoc()) {
    echo "Kitap ID: " . $row["ID"]. " - Kitap İsmi " . $row["kitapAd"]. " - Kitap Yazarı " . $row["kitapYazar"]. " - Kitap Sayfa Sayısı " . $row["kitapSayfa"]."<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>