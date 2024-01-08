<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winners GYM</title>
    <link rel="stylesheet" type="text/css" href="index.css" >
    <link rel="icon" href="resim1.jfif">
    
    
    
    
</head>




<body>
    <header id="Başlık">
    <a class="headeryazi">Winners Gym <font>yetkili paneli</font></a>
   


    </header>
    <section>
        <div id="giris">
          <h2>Giriş Paneli</h2> 
          <form action="index.php" method="POST">
          Kullanıcı Adı:<br><br>
          <input type="text" name="kullanıcı_adı" placeholder="Kullanıcı adı"> <br><br>
          Parola:<br><br>
          <input type="password" name="parola" placeholder="Parola"> <br><br>
          
          <input type="submit" name="Giriş Yap" id="buton">
        
        
          </form>




        </div>
       
    </section>
    





</body>




</html>

<?php 
session_start();

if(isset($_POST["kullanıcı_adı"], $_POST["parola"]))
{

    if($_POST["kullanıcı_adı"]=="winnersgym" && $_POST["parola"]=="123456789winner")
    {   $_SESSION['user']=$_POST["kullanıcı_adı"];
        header("location:anasayfa.php");
    }
     
    else 
    echo"<script>alert('Kullanıcı adı veya şifre hatalı')</script>";
}



?>