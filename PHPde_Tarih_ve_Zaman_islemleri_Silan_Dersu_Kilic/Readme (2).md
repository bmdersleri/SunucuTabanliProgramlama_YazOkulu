**PHP’de Tarih ve Zaman İşlemleri #22**

**PHP’de Tarih ve Zaman Fonksiyonları**

-PHP’de tarih ve saat işlemleri sık sık kullandığımız fonksiyonlardandır. PHP tarih ve saat işlemlerinde unix zaman damgasını (unix timestamp) kullanır. 

-Unix formatı 1 Ocak 1970 00:00:00 tarihinden itibaren geçen saniye sayısını tutan integer(tamsayı) bir değerdir. Yani bir sayacımız olduğunu düşünürsek sayaç 1 ocak 1970 te sıfır değerindeyken şimdi baktığımızda  1629623418 gibi bir değere ulaşmıştır.  Bu değer unix zaman damgası (unix timestamp) olarak adlandırılır.

**Bölgeye göre Zaman Diliminin Ayarlanması**

\- Tarih verilerini kullanmaya başlamadan önce doğru zamanı göstermek için yapmamız gereken bir takım ayarlar var. Doğru saat ve tarihe ulaşabilmek için hangi ülke ya da zaman diliminde olduğumuzu sunucuya belirtmemiz gerekir. Bunun için date\_default\_timezone\_set fonksiyonunu ayarlamamız gerekir.

**time() Fonksiyonu**

\- PHP time fonksiyonu ile şimdiki zamanı unix zaman damgası cinsinden saniye değeri olarak öğrenebileceğimiz bir fonksiyondur. Bildiğimiz üzere Unix zaman cinsi 1 Ocak 1970 00:00:00 tarihinden bu yana geçen zaman diliminin saniye cinsinden değeridir.

**date() Fonksiyonu**

\- PHP’de  date() fonksiyonu, betiğinizdeki tarih - saati formatlamak için gereklidir. date() fonksiyonu bize o anki zamanı gün ay yıl saat dakika saniye cinsinden verir ve çok esnek bir fonksiyondur istediğimiz sırayla bize çıktı verebilir. Zaman biçimini daha okunaklı olacak şekilde biçimlendirmek için kullanılır.

**Mktime Fonksiyonu**

\- Girilen zaman değerlerine göre unix zaman damgası biçiminde zaman değeri oluşturmak için kullanılır. Parametre kullanılmadan mktime fonksiyonu kullanılır ise time fonksiyonu ile aynı işlevi görür. Mktime içerisine girilen parametrelerin düzeni: Saat, dakika, saniye, ay, gün, yıl şeklindedir.

**Türkçe Karakterli Tarih Fonksiyonları**

\- Türkçe karakterli tarih yazdırmak için 2 adet farklı kullanımlarda kod örneği göstereceğim. İlk yöntem, setlocate ile Türkçe karakteri tanımlatıp, çıktısını utf-8 ile latin harfleri tanımlayabileceği şekilde ayarlanması ile elde edilmiştir.

\- İkinci yöntem, İngilizce günleri tek tek Türkçe anlamları şeklinde tanımlatarak elde edilen ve bu şekilde Türkçe karakterli tarih şeklinde görüntüleyebildiğimiz bir formattır.

**Sonuç**

-PHP’de tarih ve saat işlemleri sık sık kullandığımız fonksiyonlardandır. PHP tarih ve saat işlemlerinde unix zaman damgasını (unix timestamp) kullanır.  Unix formatı 1 Ocak 1970 00:00:00 tarihinden itibaren geçen saniye sayısını tutan integer (tamsayı) bir değerdir.

-Tarih verilerini kullanmaya başlamadan önce doğru zamanı göstermek için hangi ülke ya da zaman diliminde olduğumuzu sunucuya belirtmemiz gerekir. Bunun için date\_default\_timezone\_set fonksiyonunu ayarlamamız gerekir.

-PHP time fonksiyonu ile şimdiki zamanı unix zaman damgası cinsinden saniye değeri olarak öğrenebileceğimiz bir fonksiyondur.

-PHP’de  date() fonksiyonu, zaman biçimini daha okunaklı olacak şekilde biçimlendirmek için kullanılır.

-Mktime fonksiyonu, girilen zaman değerlerine göre unix zaman damgası biçiminde zaman değeri oluşturmak için kullanılır.


**Youtube Kanalımız:** BMDersleri

**Bağlantı:** https://www.youtube.com/bmdersleri

**Konu ile ilgili Youtube Video Linki :** https://www.youtube.com/watch?v=7G\_rj2Ir1PQ

**Kısa Bağlantı**: https://bit.ly/32k9MnJ

**Github Adresimiz:** https://github.com/bmdersleri

**Hazırlayan:** Şilan Dersu Kılıç


