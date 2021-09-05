<?php
// Boolean
$bool = true;
echo "$bool <br>";
// Integer yani tam sayı değişkeni
$sayi = 5;
echo "$sayi <br>";

// Float yani ondalıklı sayılar
$ondalik = 5.5;
echo "$ondalik <br>";

// String yani alfanumerik değerler
$degisken = '1,2,3 Merhaba Dünya! ';
echo "$degisken<br>";

// Array (Diziler)
$dizi = array(
    "merhaba" => "Merhaba",
    "dunya" => "Dünya",
);
echo "$dizi<br>";

// Object (Nesne)
class kategoriler {
    function listele() {
        echo "Kategori";
    }
}
$kategori = new kategoriler;
$kategori -> listele();

// NULL (Değersiz)
$bos = null;
  
  
// Değişkene Merhaba değerini atayalım.
$degisken = "Merhaba";

// Aynı değişkene Dünya değerini atayarak kolayca değiştirebiliriz.
$degisken = "Dünya";


$degisken = "Merhaba";
unset($degisken);

?>
<hr>
<?php
// İki veya daha fazla integer değişken arasında + - * / kullanarak 4 işlemi uygulayabiliriz.
$sayi1 = 10;
$sayi2 = 15;

$toplam = $sayi1 + $sayi2;
echo "$toplam <br>	";
// Veya ekrana yazdırabiliriz.
echo "$sayi2 - $sayi1 <br>";

// Birden fazla değişken veya ifadeyi nokta . kullanarak birleştirebiliriz.
$degisken1 = 'Merhaba';
$degisken2 = 'Dünya';

$merhaba_dunya = $degisken1 . $degisken2;
echo "$merhaba_dunya <br>";
// Veya farklı ifadeler ekleyebiliriz.
$merhaba_dunya = $degisken1 . ' ' . $degisken2 . '!'; // Merhaba Dünya!
echo "$merhaba_dunya <br>";
?>

<hr>
<?php
$x = 5; // global tanımlama yapılmış
 
function yaz() {
	$x = 6; // local tanımlama yapılmış
    echo " Local Değişken x: $x  <br>"; //değişken fonksiyon içindeki değerini alır
}
 
yaz();// local 
echo "Global Değişken x: $x"; // global 
?>
<hr>
<?php
$x = 5;
$y = 10;
 
Function test() {
    global $x, $y;
    $y = $x + $y;
}
 
test();
echo $y; // 15 değeri görüntülenir.
?>
<hr>
<?php
 
function deneme() {
    static $x = 0;
    echo "$x  <br>";
    $x++;
}
 
deneme(); // Ekrana 0 yazılır.
deneme(); //Ekrana 1 yazılır.
?>
