<?php

$toplam = 0;

for($i=1; $i<=7; $i++)

{

    echo "$i";

    $toplam =  $toplam + $i;

    if($i < 7)
    {
        echo  "+";
    }
    else
    {
        echo "=$toplam";
    }
}
?>