


<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winners GYM</title>
    <link rel="stylesheet" type="text/css" href="anasayfa.css" >
    <link rel="icon" href="resim1.jfif">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    
    
    
</head>




<body>
    <header id="Başlık">
    <a class="headeryazi">Winners Gym <font>yetkili paneli</font></a>
    <a href=cikis.php><button type="submit" id="cikisbutonu">Çıkış Yap</button>
     </a>
    
   


    </header>
    <div id="menüler">
        <div id="resimalani">
            <img src="resim1.jfif" width="100%" height="120" alt="logo resmi">
        </div>
        <a class=menüa href="anasayfa.php">Anasayfa</a>  
        <a class=menüa href="dinamikform.php">Dinamik Form</a>  
        <a class=menüa href="adresdashboard.php">Adres Dashboard</a> 
        <a class=menüa href="antrenmanprogramıdashboard.php">Antrenman Programı Dashboard</a>  
        <a class=menüa href="supplementdashboard.php">Supplement Dashboard</a> 
        <a class=menüa href="ürünlistesi.php">Veri Ekleme</a>




    </div>
    





</body>




</html>
<?php

session_start();
 if($_SESSION['user']==""){
    echo "<script>window.location.href='cikis.php'</script>";


}


?>
