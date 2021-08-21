PHP de Trait
<?php
trait mesaj1 {
  public function msj1() {
    echo "Merhaba Dünya! "; 
  }
}

trait mesaj2 {
  public function msj2() {
    echo "Ben FIRAT"; 
  }
}

class Hoşgeldiniz1 {
  use mesaj1;
}

class Hoşgeldiniz2 {
  use mesaj1, mesaj2;
}

$obj = new Hoşgeldiniz1();
$obj->msj1();
echo "<br>";


$obj2 = new Hoşgeldiniz2();
$obj2->msj1();
echo "<br>";
$obj2->msj2();
?>