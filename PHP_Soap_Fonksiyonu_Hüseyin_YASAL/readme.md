--soap kurulumu

Youtube Kanalımız: BMDersleri

Bağlantı: https://www.youtube.com/channel/UCIdYgV-XFjv9q0IHtzUTtQw

Konu ile ilgili Youtube Video Linki : 

Github Adresimiz: https://github.com/bmdersleri

Hazırlayan: Hüseyin Yasal



<?php
if(extension_loaded("soap")){
echo "soap kurulu ";
}
else{
echo"soap kurulu değil";
}
?>

<?php

echo php_ini_loaded_file();
?>

--soap veri çekme--

<?php
try{
$istek= new SoapClient('http://localhost/sunucu.php?WSDL');
print_r($istek->kisiler());
}
catch(Exeption $exc){
echo $exc->getMessage();
}
?>