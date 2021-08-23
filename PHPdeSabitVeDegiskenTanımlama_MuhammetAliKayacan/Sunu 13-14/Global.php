<!DOCTYPE html>
<html>
<body>
 
<?php
 
$sayi = 12;
echo "İlk Değer: ".$sayi."<br>";
function deneme(){
   $GLOBALS['sayi']=33;
}
deneme();
echo "Son Değer: ".$sayi;
 
?>
 
</body>
</html>