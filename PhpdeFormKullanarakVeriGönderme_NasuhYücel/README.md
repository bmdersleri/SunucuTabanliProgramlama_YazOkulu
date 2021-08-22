

![](https://yt3.ggpht.com/ytc/AKedOLRmyYH2VRQSugP4Xy7ihrD980YRAYZEYYBJ_Cp1=s88-c-k-c0x00ffffff-no-rj)
 
# Beni Oku

|   |   |
| ------ | ------ |
| Konu Anlatım Videosu = | https://youtu.be/Y8CU9HLYJyc  |
| BMDersleri  =  | https://www.youtube.com/bmdersleri |
| Github Adresimiz =  | https://github.com/bmdersleri | 
| Hazırlayan =  | Nasuh YÜCEL | 
 
 
## _Php’de Form Kullanarak Veri Gönderme_
 
 # Php Form nedir?
 
 >Kullanıcının verileri ekleyebileceği alanların bir bütün olarak toplandığı belgeye form denir.

 >PHP ‘de ziyaretçilerden ve kullanıcılardan bilgi almak için form dediğimiz yapılar kullanılmaktadır.Web siteleri kullanıcı etkileşimine sahip olmak için formları kullanır.Formlar web sitelerini daha dinamik bir yapı haline getirmektedir.Formlara girilen bilgiler e-mail adreslerinde gönderileceği gibi veri tabanı veya kayıtların tutulduğu farklı bölgelerede gönderilebilir.
 
 # Temel HTML Form Elemanları
 
 >Bütün form elemanları  <form>………..</form> tagları arasında olur.


 >İnput=Kullanıcının veri girişi yapabileceği giriş alanı olarak tanımlanır.Giriş alanları type değerlerine bağlı olarak farklı çeşitlerde olabilmektedir. Tanımlanması<input type="…" /> olarak gerçekleşir.

 >Select,option=Seçim listesi ve seçim listesinin seçenekleri olarak bilinmektedir.	<select><option>"…"</option></select>



 >Textarea=Geniş metin alanı olarak bilinmektedir. Tanımlanması <textarea>…..<textarea> olarak gerçekleşir.


 # PHP’de Form nasıl yapılır
 
 - Bilnmesi gereken önemli parametreler
. 

 >name=her bir form elemanında bu parametre olmak zorundadır.Bu parametre o elemanın ismini belirtir.Her bir form elemanını bu parametreye yazacağımız isim sayesinde erişiriz.


 >type=HTML ögesinin özellik tipini belirtmek için kullanırız.Örn(text,submit,radio vb.)



 >İd=HTML ögesinde tek bir element için kullanılan tanımlamadır.Aynı id ile ikinci bir element bulunamaz.

 >class=HTML nesnesine bir veya birden fazla(aralında boşluk bırakarak) özellik atamak için kullanırız.

 >value= Form elemanlarının değerini belirlemek için veya yazdığım inputlardaki type değerlerine göre değerlerini belirlemek için value parametresini kullanırız.

 # İndex.php
 ```php
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container">
  <center><h2>PHP FORM</h2></center>
  
  <form action="gonder.php" method="POST">
    <div class="form-group" style="margin: 30px;">
     
      <input type="text" class="form-control" id="ad" placeholder="Ad" name="ad">
    </div>
    <div class="form-group" style="margin: 30px;">
      
      <input type="text" class="form-control" id="soyad" placeholder="Soyad" name="soyad">
    </div>
    <div class="form-group"style="margin: 30px;">
      
      <input type="text" class="form-control" id="tel" placeholder="Telefon" name="tel">
    </div>

    <div class="form-group" style="margin: 30px;">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-check" style="margin: 30px;">
  <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Erkek
  </label>
</div>
<div class="form-check" style="margin: 30px;">
  <input class="form-check-input" name="cinsiyet" type="radio" value="Kadın" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Kadın
  </label>
</div>
<center><button type="submit" class="btn btn-primary">Kaydet</button></center>
  </form>
</div>
```

 # gonder.php
 ```php
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Telefon</th>
      <th scope="col">Email</th>
      <th scope="col">Cinsiyet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_POST["ad"];?></td>
      <td><?php echo $_POST["soyad"];?></td>
      <td><?php echo $_POST["tel"];?></td>
      <td><?php echo $_POST["email"];?></td>
      <td><?php echo $_POST["cinsiyet"];?></td>
    </tr>
  </tbody>
</table> 
```

 # Form Gönderme Metodları
 

 >Form elemanları ilk sayfada bahsettiğim gibi <form>…..</form> tagları arasına yazılmaktadır.Bu form taglarına özellikler tanımlarız bu özellikler verimizin gönderilme biçimini ve gönderildiği dosya uzantıları veya adresini belirtmek içindir.
action=Bu özellik formdaki bilgilerin gönderildiği php dosyasının uzantısı temsil etmektedir.
method= Buradaki özelliğimiz ise formdaki girdiğimiz bilgilerin gönderilme yöntemini tanımlamaktadır.2 çeşit veri gönderme tipi vardır.



 # Form verilerini POST yöntemi ile gönderme
 

 >POST = HTML Form üzerinden gönderilen verileri kullanıcıya göstermeden gönderim yapılmasını sağlamaktadır.PHP form işlemlerini daha güvenli yaptığı için çok tercih edilen bir yöntemdir.Temel sebebi ise veri girişlerini arka planda yapıyor olmasıdır.
Gönderdiğimiz veriler browser üzerinde gönderilerek kullanıcı tarafından görülmeden arka planda gerçekleşir.
URL de gösterimi ise  http://www.nasuhyucel.com/index.php şeklinde olacaktır.

 # Form verilerini GET yöntemi ile gönderme
 

 >GET = PHP form işlemlerinde bu kullanım tercihlerimize göre işlevsel bir form gönderme yöntemi olarak karşımıza çıkmaktadır.Form üzerinde verileri URL şeklinde göndermenizi sağlamaktadır.
Kullanılacak bazı alanlarda sorun oluşturabilme potansiyeli vardır fakat kullanım alanına göre işlevsel bir hal almaktadır.
Örneğin GET yöntemi ile göndereceğimiz veriler URL kısmında şu şekilde gösterilecektir.
 http://www.nasuhyucel.com/index.php?isim=musa&cinsiyet=e&mesaj=selam



## Sonuç

- Sonuç olarak PHP’de form gönderme işlemleri için iki temel süper global değişkeni bilmemiz gerekmetedir.Bunlar GET ve POST metodlarıdır.Verilerimizi yerine göre daha güvenli bir şekilde iletmek istiyorsak POST methodu bizim için uygun olanıdır.Fakat güvenlik endişesi duymadan verilerimizi göndermek istediğimiz zaman süper global bir değişken olarak GET metodunuda kullanabiliriz.









