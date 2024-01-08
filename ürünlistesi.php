<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winners GYM</title>
    <link rel="stylesheet" type="text/css" href="anasayfa.css" >
    <link rel="icon" href="resim1.jfif">
    
    
    
    
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
    <form id="veriekleme" method="POST" action="">
        
         üye İD:  <br> <input type="text" name="id"> <br>
        Üye Ad: <br><input type="text" name="ad"><br>
        Üye Soyad <br><input type="text" name="soyad"><br>
        Üye Yaş: <br><input type="text" name="yas"><br>
        Üye Adres: <br><input type="text" name="adres"><br>
        Üye Mahalle: <br><input type="text" name="mahalle"><br>
        Üye Tel: <br> <input type="text" name="tel"><br>
        Üye Boy: <br> <input type="text" name="boy"><br>
        Üye Kilo: <br> <input type="text" name="kilo"><br>
        Üye Antrenman: <br> <input type="text" name="antrenmanid"><br>
        Üye Cinsiyet:<br><input type="text" name="cinsiyetid"><br>
         <br><input type="submit" name="buttton"><br>





     </form>
     
     <?php
          require("baglanti.php");
          if(isset($_POST["buttton"]))
          {
            $insert="INSERT INTO uyeler(uye_id,uye_ad,uye_soyad,uye_yas,uye_adres,uye_mahalle,uye_tel,uye_boy,uye_kilo,antrenmanid,cinsiyetid) VALUES ('".$_POST["id"]."','".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["yas"]."','".$_POST["adres"]."','".$_POST["mahalle"]."','".$_POST["tel"]."','".$_POST["boy"]."','".$_POST["kilo"]."','".$_POST["antrenmanid"]."','".$_POST["cinsiyetid"]."')";
            $sonucinsert=mysqli_query($baglanti,$insert);
            if($sonucinsert)
            {
                echo "verimiz eklendi";
            }
         
            else
            {
                echo "hata olustu ekleme olmadı";
            
            }
            

          }



      ?>
    


</body>




</html>

