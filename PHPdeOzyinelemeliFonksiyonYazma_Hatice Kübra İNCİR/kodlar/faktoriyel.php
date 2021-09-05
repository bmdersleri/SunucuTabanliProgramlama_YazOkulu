<?php
function faktoriyel($sayi)
{
	if($sayi>1)
		return $sayi * faktoriyel($sayi-1);
	else
		return $sayi;
}
echo "5! = " . faktoriyel(5);

?>
