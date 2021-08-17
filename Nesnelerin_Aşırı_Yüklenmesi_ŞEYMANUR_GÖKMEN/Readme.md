# Konu Adı
Nesnelerin Aşırı Yüklenmesi

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Konu ile ilgili Youtube Video Linki : 
Kısa Bağlantı: https://bit.ly/32k9MnJ

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: Şeymanur Gökmen

AŞIRI YÜKLEME NEDİR ?
Farklı parametre tipleri alabilen metotlar yazmak gerektiğinde ya da eski yazılan metotlara yeni özellikler eklemek gerektiğinde aşırı yükleme kullanılır.


PHP DE NESNELERİN AŞIRI YÜKLENMESİ
PHP’de aşırı yükleme, dinamik olarak özellikler(property) ve yöntemler(method)  oluşturmak için kullanılır. Bu dinamik varlıklar da, çeşitli eylem türleri için bir sınıfta kullanılabilen sihirli yöntemlerle işlenir.

ÖZELLİK AŞIRI YÜKLEME
Sınıf örneğiyle ilişkilendirilen ve sınıfın kapsamında bildirilmeyen bir özellik, aşırı yüklenmiş özellik olarak kabul edilir.

YÖNTEM AŞIRI YÜKLEME
Sınıf kapsamında bildirilmeyen dinamik yöntemler oluşturmak içindir.Bu işlem, benzer işlemleri farklı parametelerle yapan iki metot için yapılır.

SİHİRLİ METOTLAR
Aşırı yükleme kapsamında oluşabilen hataları minimize etmek ve ileride oluşabilecek sorunların önüne geçmek için overloading konusunda PHP’nin bize sunmuş olduğu bazı metotlar bulunmaktadır.
Bu metotlar:  __get, __set, __isset, __unset, __call ve __callStatic metotlarıdır.
Bu metotların bazıları parametre aldığı gibi bazıları da void olarak yani parametresiz olarak çalışabilir.
1)__get: Sınıf içerisinde olmayan bir değişkenden veri almaya çalıştığımızda tetiklenen metot.
2)__set: Sınıf içerisinde olmayan bir değişkene veri atamaya çalıştığımızda tetiklenen metot.
3)__isset: Sınıf içerisinde olmayan bir değişken veya metot için isset ve empty kontrolleri yapıldığında tetiklenen metot.
4)__unset:  Sınıf içerisinde olmayan bir değişken için unset komutu çağrıldığında tetiklenir.
5)__call: Sınıf içerisinde olmayan bir metot çağrıldığında tetiklenen metot.
6)__callStatic: Bir üstte ki metodumuzla aynı işi yapar ancak static olarak çalışmaktadır.

