$oku = $db->prepare("INSERT INTO test (ad, soyad, email) VALUES (?, ?, ?)");

$oku->execute([$ad,$soyad,$email]);