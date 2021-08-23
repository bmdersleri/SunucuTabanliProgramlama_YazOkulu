

<?php 


date_default_timezone_set('Etc/GMT-3');  
setlocale(LC_TIME, 'tr_TR');

print date('H:i');
$saat = date('H');

if (date($saat) < 12){
  echo "<br>günaydın";
}
 else 
{
  echo "<br>iyi akşamlar";
}

?>

