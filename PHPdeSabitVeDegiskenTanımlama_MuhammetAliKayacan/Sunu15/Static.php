<!DOCTYPE html>
<html>
<body>
 
<?php
function sayac()
{
   static $i = 0;
   $i++;
   echo "$i ";
   if ($i < 5) {
     sayac();
   }
  
}
sayac();
?>
 
</body>
</html>