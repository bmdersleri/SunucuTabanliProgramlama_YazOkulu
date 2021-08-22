<?php
class User
{
  public $ad;
  public $soyad;
  public $email;
  public function showInfo()
  {
  echo "<br>".$this->ad."<br>".$this->soyad."<br>".$this->email."<br>";
  }
}
$oku = $db->query("SELECT * FROM test");  

$result = $oku->FETCHALL(PDO::FETCH_CLASS, "User");

foreach($result as $user)
{
    $user->showInfo();
}
?>