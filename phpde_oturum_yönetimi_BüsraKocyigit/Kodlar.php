<?php
session_start();
$_SESSION["oyun adi"]="çöl";
$_SESSION["puan"]=200;
//
$_SESSION["renkler"]=array("mavi","sarı","gri");
//
echo $_SESSION["oyun adi"];
echo"<pre>";
print_r($_SESSION["renkler"]);
//
$_SESSION["ad"]="büşra";
$_SESSION["ad"]="deniz";
echo $_SESSION["ad"];
//
$_SESSION["ad"]="büşra";
unset($_SESSION["ad"]);
echo $_SESSION["ad"];
//
$_SESSION["ad"]="deniz";
if(isset($_SESSION["ad"])){
    echo $_SESSION["ad"];
}
else{
    $_SESSION["ad"]="deniz-2";
    echo"yeni oluşturuldu";
}
//
$_SESSION["oyun adi"]="çöl";
$_SESSION["renkler"]=array("mavi","sarı","gri");
session_destroy();












