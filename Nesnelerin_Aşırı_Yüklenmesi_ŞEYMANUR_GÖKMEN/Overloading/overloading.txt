<?php
 
class Overloading {
 
   // Overloading yapılacak değişken
   private $data = [];
 
   // Overloading set edecek olan metodumuz
   public function __set($key, $val){
      $this->data[$key] = $val;
   }
 
   // Overloading get edecek metodumuz
   public function __get($key){
 
      if(array_key_exists($key, $this->data)){
         return $this->data[$key];
      }
 
   }
 
   // Overloading isset kontrolu yapacak metodumuz
   public function __isset($key){
      return isset($this->data[$key]);
   }
 
   // Overloading unset edecek metodumuz
   public function __unset($key){
      unset($this->data[$key]);
   }
 
 
   // Overloading call metodumuz
   public function __call($key, $detail){
 
      echo $key." adında metodun değeri:\n";
      print_r($detail);
 
   }
 
   // Overloading callStatic metodumuz
   public static function __callStatic($key, $detail){
 
      echo $key." adında metodun değeri:\n";
      print_r($detail);
 
   }
 
}
 
$overloading = New Overloading();
$overloading->dil = "php";
$overloading->konu = "overloading";
 
echo $overloading->dil;
echo "<br/>";
echo $overloading->konu;
echo "<br/>";
 
$overloading->olmayanmetot();
echo "<br/>";
unset($overloading->dil);
$overloading->deneme = array(1,2,3,4,5);
print_r($overloading->deneme);
 
?>