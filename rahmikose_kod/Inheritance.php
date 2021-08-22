<?php
class Insan {
    // İnsan adında bir class oluşturup içerisinde 3 adet property belirliyoruz.
    public $name;
    public $age;
    public $identityNo;
    public function __construct($name, $age,$identityNo) {
        // Oluşturulan proplar için constructor oluşturuyoruz ve $this ile bu sınıfın method ve özelliklerine
        // ulaşabilir oluyoruz
        $this->name = $name;
        $this->age = $age;
        $this->identityNo=$identityNo;
    }
    public function info() {
        // info adından bir fonksiyon oluşturuyoruz ve bunu kişi bilgilerinin doldurulduktan sonra kullanıp
        // değerleri ekrana yazdıracağız.
        // <b> ile başlık kısımlarını bold olarak yazdırdık.
        echo "<b>Kişi Bilgileri</b> :<br>";
        echo "<b>Ad:</b>  {$this->name} , <b>Yaş:</b>: {$this->age} , <b>TC-No:</b>:{$this->identityNo}";
    }
}

class Rahmi extends Insan {
    public function message() {
        //Insan sınıfından extend edilen Rahmi adında bir sınıf oluşturup içerisinde message adında bir fonksiyon
        // oluşturduk.
        // Bu fonksiyon ile kişi bilgilerinden önce ekrana bu sınıfın Insan sınıfından türetildiğini göstereceğiz.
        // Belirgin olması adına inline style kullanarak color:red ile  text'i kırmızı yaptık.
        echo '<span style="color:red;text-align:center;">Bu sınıf -İnsan- sınıfından türetilmiştir. </span>';
    }
}
class Serhat extends Insan {
    public function message() {
        //Insan sınıfından extend edilen Rahmi adında bir sınıf oluşturup içerisinde message adında bir fonksiyon
        // oluşturduk.
        // Bu fonksiyon ile kişi bilgilerinden önce ekrana bu sınıfın Insan sınıfından türetildiğini göstereceğiz.
        // Belirgin olması adına inline style kullanarak color:red ile  text'i kırmızı yaptık.
        echo '<span style="color:red;text-align:center;">Bu sınıf -İnsan- sınıfından türetilmiştir. </span>';
    }
}
class Ahmet extends Insan {
    public function message() {
        //Insan sınıfından extend edilen Rahmi adında bir sınıf oluşturup içerisinde message adında bir fonksiyon
        // oluşturduk.
        // Bu fonksiyon ile kişi bilgilerinden önce ekrana bu sınıfın Insan sınıfından türetildiğini göstereceğiz.
        // Belirgin olması adına inline style kullanarak color:red ile  text'i kırmızı yaptık.
        echo '<span style="color:red;text-align:center;">Bu sınıf -İnsan- sınıfından türetilmiştir. </span>';
    }
}
// Rahmi sınıfından rahmi adından bir referans/obje oluşturduk ve içerisinde istenilen 3 prop'u istediğimiz değerler
// ile doldurduk.
$rahmi = new Rahmi("Rahmi", "22","11111111111");
$serhat = new Serhat("Serhat", "27","22222222222");
$ahmet = new Ahmet("Ahmet", "52","33333333333");
//rahmi referansı üzerinden message fonksiyonunu çağırdık ve ekrana oluşturduğumuz bilgilendirme mesajı geldi.
$rahmi->message();
echo "<br>";
// rahmi referansı üzerinden info fonksiyonunu çağırıp kişi bilgilerini ekrana yazdırıyoruz.
$rahmi->info();
// <br> ile bir satır boşluk bırakıyoruz.
echo "<br>";
$serhat->message();
echo "<br>";
$serhat->info();
echo "<br>";
$ahmet->message();
echo "<br>";
$ahmet->info();
?>