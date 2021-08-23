<?php
function toplama($sayi)
{
	if($sayi>=1)
		return $sayi + toplama($sayi-1);
	
	return $sayi;
}
echo "8'e kadar olan sayıların toplamı = " . toplama(8);

?>
