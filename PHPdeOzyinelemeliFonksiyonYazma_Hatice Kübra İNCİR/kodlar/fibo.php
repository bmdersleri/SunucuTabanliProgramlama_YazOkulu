<?php
function fibo($sayi)
{
	if($sayi<2)
		return $sayi; 
	
	return fibo($sayi-1) +fibo($sayi-2);
}
for($i=0;$i<13;$i++)
{
	echo fibo($i) . " ";
}

?>
