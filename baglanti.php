<?php
$sunucu="localhost";
$username="root";
$password="";
$tablo="winnersgym2";


$baglanti=mysqli_connect($sunucu, $username, $password, $tablo);


if(!$baglanti){
    die("Bağlantı Hatası: " . mysqli_connect_error());

}



  






















?>