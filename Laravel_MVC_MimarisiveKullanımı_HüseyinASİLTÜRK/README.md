 

# Beni Oku

![](https://yt3.ggpht.com/ytc/AKedOLRmyYH2VRQSugP4Xy7ihrD980YRAYZEYYBJ_Cp1=s88-c-k-c0x00ffffff-no-rj)
 

|   |   |
| ------ | ------ |
| Konu Anlatım Videosu = | https://youtu.be/q8Q04hG7ZRk  |
| BMDersleri  =  | https://www.youtube.com/bmdersleri |
| Github Adresimiz =  | https://github.com/bmdersleri | 
| Hazırlayan =  | Hüseyin ASİLTÜRK | 
 
 
## _Laravel MVC Mimarisi ve Kullanımı_
 
 # Giriş
 
 >Eğer bir yazılım geliştiriciyseniz, muhtemelen uygulamalarınızı geliştirmek için bir framework öğrenmeye yönlendirildiniz.

 >Bu sunumuzda php framework’ü olan laravel hakkında konuşacağız. Kurulması için gerekenler, kurulumu ve yapısından bahsedeceğiz. Sonrasında Bootstrap ile yazılmış ücretsiz lisansa sahip adminLTE paneli laravel blade yapısına göre parçalayacağız.

   # Laravel Nedir?
   
>PHP dilinin içerisinde kullanıcıların işlerini kolaylaştıran ve güvenlik açısından destek sağlayan birçok framework bulunur.

 >”Web Sanatçılarının PHP Framework’ü” sloganıyla Laravel bu framework yapılarında ilk sıralarda gelir. Web uygulamaları geliştirilirken büyük bir kullanım oranına sahiptir.
 
 >Taylor Otwell önderliğinde geliştirmektedir.  Söz dizimi basit ve anlamlıdır. Bu sebeple öğrenmesi daha kolaydır. Laravel içinde birçok yapıyı ve özelliği barındırır. Bunun sonucunda basit web uygulamalarında ya da karmaşık web sayfalarında rahatlıkla kullanılabilir.
 
 >2015 ve 2016 yıllarında sitepoint tarafından yapılan en popüler framework anketinde üst üste iki sene liderliği göğüsledi.
Öğrenmek isteyen birisi HTML / CSS ve orta seviyede PHP bilmesi yeterli olacaktır. 
 
 # Laravel Avantajları?
>Web uygulamaları daha ölçeklendirilebilir hale gelmektedir. Aynı zamanda geliştirme sürecinde diğer framework’lerin kullanımına izin vermesi sayesinde zamandan tasarruf da sağlanmaktadır. Kaynakları yönetmek ve organize etmek için ise ad alanları ve arayüzler de kullanılabilmektedir. Ayrıca içerisinde yer alan Composer ve Artisan gibi araçlar da bu avantajlar arasında yer almaktadır. Composer tüm kütüphanelerin ve kaynakların yer aldığı araçtır ve üçüncü parti kütüphanelerin kullanımına izin vermektedir. Laravel içindeki komut satırı ise Artisan’dır. Web uygulaması geliştirme sürecinde yardımcı olmaktadır.


 # Laravel SSS
>Laravel Frontend mi Backend mi?

 Kısaca cevap vermemiz gerekirse, Laravel backend’dir. Daha uzun bir şekilde açıklamamız gerekirse, Laravel PHP iyice kavranmadan verimli kullanılamaz. PHP’yi iyi kavrayan bir yazılımcı Laravel’i, kullanıcı hesapları, dışa aktarma, sipariş yönetimi gibi backend gerektiren özelliklere sahip bir uygulama oluştururken kullanabilir.

>Laravel PHP Bilmeden Öğrenilir mi?

Daha önce de söyledik, tekrar edelim. Laravel özünde PHP’dir. PHP bilmeden Laravel’i kullanmak, onun tüm fonksiyonlarını ve işlevlerini kullanamamak anlamına gelir. Potansiyelinin tamamını keşfettiğinizde, Laravel’le harikalar yaratabilirsiniz. Temel seviyede php ile de kodlanabilir. Fakat tam anlamıyla kullanılması için php gereklidir.

>Laravel’i Nasıl Öğrenebilirsiniz??

Laravelin bir güzel yanı da bir çok Türkçe kaynak bulunması. Bunun yanında laravel.com üzerinde ayrıntılı bir dökümantasyön bulunmaktadır.  


 # Laravel Özellikleri?
>Eloquent

Eloquent yapısı ORM sistemi üzerine kurulmuş Aktif Kayıt mekanizmasıyla çalışan güzel bir veritabanı sistemidir. Her veritabanı tablosu Model adı verilen obje sınıflarıyla haberleşir ve Birbirleriyle bağ kurar. Bu sayede sql cümleleri yazmadan veritabanı sisteminden bağımsız olarak çalışabilirsiniz. Örneğin Mysql ile başladığınız sistemi ileride kolayca PostgreSQL, Oracle, SQLite veya MSSql sistemine çevirebilirsiniz.

>Route

Route yapısı oldukça gelişmiş olan url yönetim sistenmi laravelde kullanılmaktadır. Hangi url hangi methoda gidecek hangi yöntemle gidecek veya hangi middleware ile çalışacak burada tanımlanmaktadır. Bu sayede post ile erişilen yere get ile erişilmez veya diğer bir ifade ile aynı urlde birden çok method ile farklı işlemler yapabilirsiniz. GET,POST,PUT,DELETE gibi methodlar ile kolaylıkla api rotası oluşturarak mobil uygulamalarınızla tam bir uyum içinde çalışabilirsiniz.

>Blade Engine


View yapısı olarak Laravelde blade engine tercih edilmiştir. Frameworklerde MVC yapısı ile kod geliştirdiğiniz zaman Controller kısmında işlediğiniz veriyi View kısmına göndererek kullanabilirsiniz. Genel olarak array kullanılan bu yapılardan php echo veya foreach gibi metodlar için blade syntaxları kullanılır.


>Migrations


Migrate sistemi veritabanı için tablo oluşturup güncellediğiniz geri aldığınız en temel anlamda versiyonlama gibi çalıştırabileceğiniz sistemdir. Veritabanı oluştururken herhangi bir veritabanı arayüzü olmadan kolaylıkla tabloları oluşturup çalışabilirsiz. Ayrıca bu sistem Git sistemi ile çalışıyorsanız sadece uygulamanızın kodlarını tutarak kolaylıkla tekrar tekrar kurulum yapılmasını kolaylaştırır. Ayrıca olması gereken verileri DB Seed sistemi ile veritabanına kolaylıkla aktarabilirsiz.

>   Form Doğrulama

Bir çok php projesinde doğrulama işlemleri sıkıntılı evrelerdir. Seçeneklerin çokluğu sebebiyle oldukça zahmetli ve ciddi zaman ayırılması gerek bir iştir. Ama laravel ile ister tarih ister ip ister url isterseniz veritabanında bir değerin olup olmadığını sorgulayın hiç sıkıntı yaşamazsınız. Saniyeler için formunuzu ekleyebilirsiniz.
    

 

 # Sonuç
 
- Framwork içerisinde bir basit kimlik doğrulama sistemi ile gelir.
- Kolay bir mail gönderim altyapısı sağlar.
- Artisan adında çok gelişmiş bir komut satırı arayüzü (CLI) sağlar. MVC altyapısı sayesinde kodu ve görünüm katmanını birbirinden ayırır.
- Eloquent ORM sayesinde veritabanı işlemleri çok kolay hale gelmiştir.
- Laravel işlemleri yönetebilmek için gelişmiş bir kuyruk yapısı ve zamanlayıcı özellikleri sunar.
- Basit ve kullanışlı bir yönlendirme altyapısı sağlar.
- Blade şablon oluşturma öotoru sayesinde çok temiz frontend kodları yazabilirsiniz.
- Gelişmiş bir dökümantasyon sağlar.
- Laravel'in aktif bir topluluğu vardır. Herhangi bir sorun yaşadığınızda yardım edecek birilerini bulabilirsiniz.
 
 
 
