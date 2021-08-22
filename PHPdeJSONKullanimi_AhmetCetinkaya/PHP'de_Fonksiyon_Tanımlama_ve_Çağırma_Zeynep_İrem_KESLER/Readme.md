# Konu Adı
PHP'de Fonksiyon Tanımlama ve Çağırma

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Konu ile ilgili Youtube Video Linki : https://www.youtube.com/watch?v=aB2_4KtpdhI
Kısa Bağlantı: https://bit.ly/32k9MnJ

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: Zeynep İrem Kesler

***PHP NEDİR?***

>>PHP, İnternet için üretilmiş, sunucu tabanlı ve nesne yönelimli, geniş kullanımlı ve geniş amaçlı bir programlama dilidir. 

>>HTML içerisine gömülebilen betik bir dildir.Önceleri PHP açılımı Personal Home Page yani “kişisel anasayfa” olarak geçerken artık Hypertext Preprocessor şeklinde kullanılıyor.

>>Bilgisayar programlamada fonksiyonlar önemlidir. Çünkü tekrar tekrar yazmamız gereken kodları fonksiyonlaştırıp kullanarak kod yapısını azaltırız, hem hızdan hem de zamandan kazanırız.

**Fonksiyon Tanımlama**
<?php

function fonksiyonismi() 
{
   //kodlar buraya yazılacak
}
?>

**Parametresiz Basit Bir Fonksiyon**	
<?php

function mesaj() 
{ 

echo "merhaba PHP dünyası "; 

} 

mesaj();  //fonksiyonu çağırma

mesaj();  //fonksiyonu çağırma

?> 	

**Parametre ve Argüman Kavramı**
<?php

// Fonksiyon bildiriliyor  

function topla($x,$y) // Burada x ve y parametre
   {
     return ($x+$y);
   }
    
//Fonksiyon çağrılıyor 
  
$t = topla( 7,3 ); // Burada 7 ve 3 argüman

?> 	

**Neden Fonksiyonlar?**
<?php

function derece($f) {
 
    $c = (5/9) * ($f-32);
    return $c;
}

echo derece(50)."<br>"; // 10

echo derece(80); // 26.6

?>

**Değer Döndürme**
<?php

function carp($sayi1, $sayi2)
{
	return $sayi1 * $sayi2;
}
echo carp(5,8) + carp(2,10) * carp(2,5); // 240

?>

**Varsayılan Değer**
<?php
// Fonksiyonu Tanımla
function customFont($font, $size=1.5){

 echo "<p style=\"font-family: $font; font-size: {$size}em;\">

 Merhaba Dünya!</p>";
}
 
// Fonksiyonu çağır

customFont("Arial", 2);

customFont("Times", 3);

customFont("Courier");
?>	

**Dizi Değer Döndürme**
<?php

function dizi()
{
	return ["Kitap", "Müzik", "Bilgisayar"];
}
list($a, $b, $c)=dizi();

echo "$c kullanırım, $a okurum, ve $b dinlerim";

?>	
**İç İçe Fonksiyon**
<?php

function topla($a,$b)
{
	function carp($a,$b)
	{
       echo "çarpma sonucu..:".($a*$b);
	}
	  echo "Toplama sonucu:".($a+$b);
}
topla(8,14); //22 

carp(8,3);//24

?>

**Fonksiyonlarda Global Değişken**
<?php

$x=10;

function topla($y)
{
   return $x + $y;
}

topla(5) // Undefined variable

?>
|||||
<?php

$x=10; $y=5;

function topla()
{
	global $x , $y;
	return $x + $y;
}

echo topla() //15

?>

**Özyineleme (recursive) Fonksiyonlar**
<?php

function faktoriyel ($i)
{
  if($i < 1)
   return 1;
  else
  return $i * faktoriyel($i-1);
}
echo faktoriyel(5); //120

?>

**Fonksiyonlarda Referans**
<?php

$x = "Merhaba Dünya";	

$y = &$x;

echo $x;

echo $y;

?>












































































































































