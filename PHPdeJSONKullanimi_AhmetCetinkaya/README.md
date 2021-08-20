# PHP'de JSON Kullanımı


# Hakımızda

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Konu ile ilgili Youtube Video Linki : https://youtu.be/UEP324FeN_o

Kısa Bağlantı: https://bit.ly/32k9MnJ

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: Ahmet Çetinkaya - https://ahmetcetinkaya.info


## Giriş
Bu sunumda, PHP'de JSON kullanımı göstermeye yöneliktir. Sunum ile birlikte JSON nedir, JSON kullanım alanları, JSON veri yapısı, PHP JSON fonksiyonları konularını öğrenecek ve örnekler ile pekiştireceksiniz. Ayrıca ilgili örnekleri indirebilir kendiniz denemeler yapabilirsiniz.

## JSON Nedir?
- JSON; bütün programlama dilleri arasında, yapılandırılmış verileri saklamayı ve transfer etmeyi kolaylaştıran bir metin biçimidir. 

- JSON, Javascript Object Notation’ın kısaltmasıdır.

- JavaScript dilinin bir alt kümesi olan nesnelerin yapısına dayanmaktadır. 

- Bir JSON dosyası sadece metin kapsar ve .json uzantısını kullanır.

## JSON Kullanım Alanları
- JSON, genellikle sunucu ve istemci arasında veri transferi sağlanması amaçla kullanılır.

![JSON](https://user-images.githubusercontent.com/53148314/129279742-9764b034-1fd6-49e6-a09d-1dc9297ec3dc.png)

- Masaüstü uygulamalar, web uygulamalar, mobil uygulamalar, IoT cihazlar, yapay zeka gibi verinin bulunduğu her alanda kullanılabilmektedir.

![JSON Kullanım Alanları](https://user-images.githubusercontent.com/53148314/129279805-8c041db7-ce4e-4fc3-b7ce-1e7453381a88.png)

## JSON Veri Yapısı
- JSON içerisindeki ana yapı nesne ve dizi olmak üzere ikiye ayrılır.

- **Nesne:** “{“ ile başlar, içerisine “Anahtar” : Değer şeklinde veriler girilir ve  “}” ile biter. Anahtar-değer çiftleri birbirinden virgül ile ayrılırlar.

![array](https://user-images.githubusercontent.com/53148314/129279913-ef6499eb-a7ab-40cd-8e9a-914fff22fb2c.png)

```json
{
  "ad": "Ahmet",
  "soyad": "Cetinkaya"
}
```

- Dizi: “[“ ile başlar, içerisine Değer şeklinde veriler girilir ve  “]” ile biter. Değerler birbirinden virgül ile ayrılırlar.

![object](https://user-images.githubusercontent.com/53148314/129279915-9dd0b61a-e7e9-412b-a670-e93711749d6f.png)

```json
[
  {
    "ad": "Ahmet",
    "soyad": "Cetinkaya"
  },
  {
    "ad": "Efe Mustafa",
    "soyad": "Tabur"
  }
]
```

- Değerler yazı (string), sayı, nesne (object), dizi (array), true (doğru), false (yanlış) veya null (boş değer) olabilir.

![value](https://user-images.githubusercontent.com/53148314/129279928-4562033d-79fe-49d6-8404-be45629dcabe.png)

```json
[
  "Ahmet",
  22,
  {
    "ad": "Ahmet",
    "soyad": "Cetinkaya"
  },
  ["Antalya", "Burdur"],
  true,
  false,
  null
]
```

## PHP’de JSON Fonksiyonları

- PHP içersinde JSON formatıyla çalışmak için 2 adet temel fonksiyon, 2 adet de yardımcı fonksiyon bulunmaktadır.

- json_decode : Bir JSON formatındaki veriyi çözümler ve PHP nesnesine veya dizisine çevirir. 

- İkinci parametre false (yanlış) belirtilirse JSON nesneleri nesne olarak dönüştürülür. true (doğru) olduğu zaman JSON nesneleri bir ilişkisel dizilere dönüştürülür. 

```php
$json_verisi = '{    
    "ad":"Ahmet",    
    "soyad":"Cetinkaya",    
    "yas":22   
}';
$nesne = json_decode($json_verisi);
echo $nesne->ad; // Ahmet
```

```php
$json_verisi = '{
    "ad":"Ahmet",
    "soyad":"Cetinkaya",
    "yas":22   
}';
$dizi = json_decode($json_verisi, true);
echo $dizi["ad"]; // Ahmet
```

- json_encode : PHP nesnesi veya dizisini JSON formatına dönüştürür. 

```php
$nesne = (object)[
    "ad" => "Ahmet",
    "soyad" => "Cetinkaya",
    "yas" => 22
];
$jsonVerisi = json_encode($nesne);
echo $jsonVerisi;
```
**Sonuç:**
```json
{"ad":"Ahmet","soyad":"Cetinkaya","yas":22}
```

<br>

```php
$json_verisi = '{
    "ad":"Ahmet",
    "soyad":"Cetinkaya",
    "yas":22   
}';
$dizi = json_decode($json_verisi, true);
echo $dizi["ad"]; // Ahmet
```
**Sonuç:**
```json
["Ahmet","Cetinkaya",22]
```

<br>

- json_last_error : En son kullanılan json_decode veya json_encode fonksiyonların işlem sırasında oluşan hatanın numarasını döndürür. Bu sayısal değerler sırasıyla aşağıdaki sabitleri temsil etmektedir.

- json_last_error_msg : En son kullanılan json_decode veya json_encode fonksiyonların işlem sırasında oluşan hatanın mesajını döndürür.

```php
$json_verisi = '[
    "Ahmet",
    "Cetinkaya",
    22    
';
$dizi = json_decode($json_verisi);
echo json_last_error(); // 4
echo json_last_error_msg(); // Syntax error
```

|     Sabit                               |     Anlamı                                                            |   |   |   |   |
|-----------------------------------------|-----------------------------------------------------------------------|---|:-:|:-:|:-:|
|     JSON_ERROR_NONE                     |     Hata   bulunamadı                                                 |   |   |   |   |
|     JSON_ERROR_DEPTH                    |     Azami   yığın derinliği aşıldı                                    |   |   |   |   |
|     JSON_ERROR_STATE_MISMATCH           |     Geçersiz   ya da bozuk JSON                                       |   |   |   |   |
|     JSON_ERROR_CTRL_CHAR                |     Denetim   karakteri hatası, muhtemelen yanlış kodlanmış           |   |   |   |   |
|     JSON_ERROR_SYNTAX                   |     Sözdizimi   hatası                                                |   |   |   |   |
|     JSON_ERROR_UTF8                     |     Bozuk   UTF-8 karakterler, muhtemelen yanlış kodlanmış            |   |   |   |   |
|     JSON_ERROR_RECURSION                |     Kodlanacak   değerde bir veya daha fazla özyinelemeli gönderim    |   |   |   |   |
|     JSON_ERROR_INF_OR_NAN               |     Kodlanacak   değerde bir veya daha fazla NAN veya INF değeri      |   |   |   |   |
|     JSON_ERROR_UNSUPPORTED_TYPE         |     Kodlanamayan   türde bir değer belirtilmiş                        |   |   |   |   |
|     JSON_ERROR_INVALID_PROPERTY_NAME    |     Kodlanamayan   bir özellik ismi belirtilmiş                       |   |   |   |   |
|     JSON_ERROR_UTF16                    |     Bozuk   UTF-16 karakterler, muhtemelen yanlış kodlanmış           |   |   |   |   |

## Uygulama Örneği -1 
- İçerisinde kişisel bilgilerimin bulunduğu kullanici.json adında bir JSON dosyası bulunmakta. Örneğimizde kişisel bilgilerimin arasında yanlış girilen veriyi değiştirerek düzeltmemiz gerekiyor.

```php
$jsonVeri = file_get_contents("kullanici.json");
echo "JSON Verisi: ", $jsonVeri, "<br>";

$kullanici = json_decode($jsonVeri);
echo "Hatalı veri: ", $kullanici->yas, "<br>";

$kullanici->yas = 22;
echo "Düzeltilmiş veri: ", $kullanici->yas, "<br>";

$yeniJsonVeri = json_encode($kullanici);
echo "Yeni JSON verisi: ", $yeniJsonVeri;
```
**file_get_contents()** fonksiyonu bir dosyanın içeriğini okumak için kullanılır.

**Sonuç:**
```json
JSON Verisi: { "ad": "Ahmet", "soyad": "Cetinkaya", "yas": 0 }
Hatalı veri: 0
Düzeltilmiş veri: 22
Yeni JSON verisi: {"ad":"Ahmet","soyad":"Cetinkaya","yas":22}
```

## Uygulama Örneği -2
- Bir araba kiralama firmasında, arabalar arabalar.json adındaki JSON dosyasında saklanmaktadır. Örneğimizde listeye yeni bir araba girmesi dahilinde JSON verisi güncellenmesi gerekiyor.

```php
$jsonVeri = file_get_contents("arabalar.json");
echo "JSON verisi: ", $jsonVeri, "<br>";

$arabalar = json_decode($jsonVeri);

function ekranaYazdir($arabalar)
{
    foreach ($arabalar as $araba)
        echo "Araba: ", $araba->marka, " ",
        $araba->ad, " ",
        $araba->yil, "<br>";
    echo "<br>";
}

ekranaYazdir($arabalar);

$yeniAraba = (object)["marka" => "Fiat", "ad" => "Fullback", "yil" => 2016];
array_push($arabalar, $yeniAraba);

ekranaYazdir($arabalar);

$yeniJsonVeri = json_encode($arabalar);
echo "Yeni JSON Verisi: ", $yeniJsonVeri;
```
**array_push()** fonksiyonu bir dizine yeni bir değer eklemek için kullanılır.

**Sonuç:**
```json
JSON verisi: [ { "marka": "Ford", "ad": "Mustang", "yil": 1967 }, { "marka": "Tesla", "ad": "Model s", "yil": 2012 } ]
Araba: Ford Mustang 1967
Araba: Tesla Model s 2012

Araba: Ford Mustang 1967
Araba: Tesla Model s 2012
Araba: Fiat Fullback 2016

Yeni JSON Verisi: [{"marka":"Ford","ad":"Mustang","yil":1967},{"marka":"Tesla","ad":"Model s","yil":2012},{"marka":"Fiat","ad":"Fullback","yil":2016}]
```

## Sonuç

- JSON yapılandırılmış verileri saklamayı ve transfer etmeyi kolaylaştıran bir metin biçimidir. 

- Nesne yapısında “{“ ile “}” işaretleri arasına “Anahtar” : Değer şeklinde veriler girilir. 

- Dizi yapısında ise “[“ ile “]” işaretleri arasına sıralı bir şekilde Değerler veriler girilir.

- Değerler yazı (string), sayı, nesne (object), dizi (array) true (doğru), false (yanlış) veya null (boş değer), olabilir.

- PHP dili içerisinde JSON için 2 ana fonksiyon ve 2 yardımcı fonksiyon bulunmaktadır. 

- json_decode fonksiyonu ile bir JSON formatındaki veri çözümlenebilir ve PHP dili içerisinde kullanılabilir.

- json_encode fonksiyonu ile PHP nesnesi veya dizisi JSON formatına dönüştürülebilir.

- Çözümleme ve dönüşüm işlemlerinde oluşan hataları takip edebilmek için, json_last_error ve json_last_error_msg fonksiyonları bulunmaktadır.


## Kaynaklar

- [JSON](http://json.org/json-tr.html)
- [PHP: JSON İşlevleri - Manual](https://www.php.net/manual/tr/ref.json.php)
- [PHP: Dosya Sistemi İşlevleri - Manual ](https://www.php.net/manual/tr/ref.filesystem.php)
- [PHP: Array - Manual](https://www.php.net/manual/tr/book.array.php)


