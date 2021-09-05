<?php
// Tanımlama
define ("Ad","Muhammet Ali");
// Ekrana Yazdırma
echo 'Merhaba Benim Adım   : '. Ad;
?>
<hr>
<?php
// Tanımlama
define ("Sabit","Merhaba dünya");
// Ekrana Yazdırma
echo Sabit;
?>
<hr>
<?php
// Tanımlama
define("UYE", "admin");
define("PAROLA", "123456");
// Ekrana Yazdırma
echo UYE."<br>";
echo PAROLA;
?>
<hr>
<?php 
// Tanımlama 
define("elma", "En sevdiğim meyvelerden bir tanesi",true); 
// Ekrana Yazdırma
echo ELMA; 

?>
<hr>
<?php 
// Tanımlama 
define("hava", "Ne kadar güzel bir hava",true); 
// Ekrana Yazdırma
echo HAVA; 

?>

<hr>
<?php
// Sabit dizisi
define('HAYVANLAR', array(
    'köpek',
    'kedi',
    'kuş'
));
echo HAYVANLAR[1]; 

?>
<hr>

<?php

define('Name', 'Muhammet',true);

if(defined("NAME"))
{
    echo NAME; 
}

?>
<hr>
