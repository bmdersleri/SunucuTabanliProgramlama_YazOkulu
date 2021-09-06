# php-rastgele-sayi-uretme
php'de rastgele sayı üretme mekanizmaları örnek kodlar

//RAND() FONKSİYONU
$sayi = rand();
echo $sayi; 

echo '<br><br>';

$sayi2 = rand(10,20);
echo $sayi2;

//---------------------------------

//GETRANDMAX() FONKSİYONU
echo getrandmax(); 

//-------------------------------

//MT_RAND() FONKSİYONU
$sayi = mt_rand();
echo $sayi; 

$sayi2 = mt_rand(20,50);
echo $sayi2; 
echo mt_getrandmax(); 

//--------------------------------

//SRAND() FONKSİYONU
srand(time());
echo rand(); 

srand(1);
echo rand(); 

