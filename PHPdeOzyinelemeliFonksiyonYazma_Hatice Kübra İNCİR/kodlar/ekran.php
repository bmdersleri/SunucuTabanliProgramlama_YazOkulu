<?php
function ekran($sayi)
{
	if($sayi<=6)
	{
		echo $sayi . "<br/>";
		ekran($sayi+1);
	}
}
ekran(1);

?>
