<?php

trait Insan {

}

trait Ogrenci {

}

class UniversiteOgrencisi {
  use Insan, Ogrenci;
}

$ben = new UniversiteOgrencisi();

?>









