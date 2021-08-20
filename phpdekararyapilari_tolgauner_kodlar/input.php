

<body>
 
<form method="post">

sayıyı girin<input type="text" name="n"/><hr/>
	
<input type="submit" value="kontrol et"/>
	
</form>

</body>


<?php
	
$num=$_POST['n'];
	
if($num>0)
	 
{
	   
echo $num." pozitif bir sayıdır";	
	 
}

  elseif ($num==0)

{
   echo ("sayı 0");

}

	
else
	
{
	   
echo $num." negatif bir sayıdır";
	
} 

?>


