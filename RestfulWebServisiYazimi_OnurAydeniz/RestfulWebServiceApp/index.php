<?php
include "db.php";
include "function.php";
$islem = isset($_GET["islem"]) ? addslashes(trim($_GET["islem"])) : null;
$jsonArray = array(); // array değişkenimiz bunu en alta json objesine çevireceğiz. 
$jsonArray["hata"] = FALSE; // Başlangıçta hata yok olarak kabul edelim. 

$_code = 200; // HTTP Ok olarak durumu kabul edelim. 
$_method = $_SERVER["REQUEST_METHOD"]; // client tarafından bize gelen method
if($_SERVER['REQUEST_METHOD']  == "POST") {
    $name = addslashes($_POST["name"]);
    $surname = addslashes($_POST["surname"]);
    $email = addslashes($_POST["email"]);

    $uyeler = $db->query("SELECT * from users WHERE  email='$email'");
 
    if(empty($name) || empty($surname) || empty($email)) {
        $_code = 400; 
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "Boş Alan Bırakmayınız."; // Hatanın neden kaynaklı olduğu belirtilsin.
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $_code = 400;
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "Geçersiz E-Posta Adresi"; // Hatanın neden kaynaklı olduğu belirtilsin. 
    }else if($uyeler->rowCount() !=0) {
        $_code = 400;
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "E-Posta Alınmış."; 
    }else {
        $ex = $db->prepare("INSERT INTO users set  
            name= :formname, 
            surname= :formsurname, 
            email= :formemail");
        $ekle = $ex->execute(array(
            "formname" => $name,
            "formsurname" => $surname,
            "formemail" => $email));
        if($ekle) {
            $_code = 201;
            $jsonArray["mesaj"] = "Ekleme Başarılı.";
        }else {
            $_code = 400;
            $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
            $jsonArray["hataMesaj"] = "Sistem Hatası.";
        }
    }
}
else if($_SERVER['REQUEST_METHOD'] == "PUT") {
    $gelen_veri = json_decode(file_get_contents("php://input")); // veriyi alıp diziye atadık.
    if( isset($gelen_veri->name) && isset($gelen_veri->surname) && isset($gelen_veri->email) && isset($gelen_veri->user_id) ) { 
        if($db->query("select * from users where id='$gelen_veri->user_id'")->rowCount() == 0 ) {
            $_code = 400;
            $jsonArray["hata"] = TRUE;
            $jsonArray["hataMesaj"] = "Belirtilen id de üye bulunamadı.";
        }else if(!filter_var($gelen_veri->email,FILTER_VALIDATE_EMAIL)) {
            $_code = 400;
            $jsonArray["hata"] = TRUE;
            $jsonArray["hataMesaj"] = "Geçersiz E-mail adresi.";
        }    
        else { 
            $q = $db->prepare("UPDATE users SET name= :formname, surname= :formsurname, email= :formemail WHERE id= :formuser_id ");
            $update = $q->execute(array(
                "formname" => $gelen_veri->name,
                "formsurname" => $gelen_veri->surname,
                "formemail" => $gelen_veri->email,
                "formuser_id" => $gelen_veri->user_id 
            ));
            if($update) {
                $_code = 200;
                $jsonArray["mesaj"] = "Güncelleme Başarılı";
            }
            else {
                $_code = 400;
                $jsonArray["hata"] = TRUE;
                $jsonArray["hataMesaj"] = "Sistemsel Bir Hata Oluştu";
            }
        }
    }else {
        $_code = 400;
        $jsonArray["hata"] = TRUE;
        $jsonArray["hataMesaj"] = "name,surname,email,user_id Verilerini json olarak göndermediniz.";
    }
}
else if($_SERVER['REQUEST_METHOD'] == "DELETE") {
    if(isset($_GET["user_id"]) && !empty(trim($_GET["user_id"]))) {
        $user_id = intval($_GET["user_id"]);
        $userVarMi = $db->query("select * from users where id='$user_id'")->rowCount();
        if($userVarMi) {
            $sil = $db->query("delete from users where id='$user_id'");
            if( $sil ) {
                $_code = 200;
                $jsonArray["mesaj"] = "Üyelik Silindi.";
            }else {
                $_code = 400;
                $jsonArray["hata"] = TRUE;
                $jsonArray["hataMesaj"] = "Sistemsel Bir Hata Oluştu";
            }
        }else {
            $_code = 400; 
            $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
            $jsonArray["hataMesaj"] = "Geçersiz id"; // Hatanın neden kaynaklı olduğu belirtilsin.
        }
    }else {
        $_code = 400;
        $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
        $jsonArray["hataMesaj"] = "Lütfen user_id değişkeni gönderin"; // Hatanın neden kaynaklı olduğu belirtilsin.
    }
}
else if($_SERVER['REQUEST_METHOD'] == "GET") {
    if(isset($_GET["user_id"]) && !empty(trim($_GET["user_id"]))) {
        $user_id = intval($_GET["user_id"]);
        $userVarMi = $db->query("select * from users where id='$user_id'")->rowCount();
        if($userVarMi) {
            $bilgiler = $db->query("select * from  users where id='$user_id'")->fetch(PDO::FETCH_ASSOC);
            $jsonArray["uye-bilgileri"] = $bilgiler;
            $_code = 200;
        }else {
            $_code = 400;
            $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
            $jsonArray["hataMesaj"] = "Üye bulunamadı"; // Hatanın neden kaynaklı olduğu belirtilsin.
        }
    }else {
        $bilgiler = $db->query("select * from  users ")->fetchAll(PDO::FETCH_ASSOC);
        $jsonArray["uye-listesi"] = $bilgiler;
        $_code = 200;
    }
}
else {
    $jsonArray["hata"] = TRUE; // bir hata olduğu bildirilsin.
    $jsonArray["hataMesaj"] = "Girilen İşlem Bulunmuyor."; // Hatanın neden kaynaklı olduğu belirtilsin. 
}

SetHeader($_code);
$jsonArray[$_code] = HttpStatus($_code);
echo json_encode($jsonArray);
?>