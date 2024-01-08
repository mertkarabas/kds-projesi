<!DOCTYPE html>
<html lang="eng">




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
    <a class=cikisbutonu href=cikis.php><button type="submit" id="cikisbutonu">Çıkış Yap</button>
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
    <div id=tablolar>


    <table>
    <tr>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Yas</th>
            <th>Adres</th>
            <th>Mahalle</th>
            <th>Tel</th>
            <th>Boy</th>
            <th>Kilo</th>
            <th>Baslangıc Tarihi</th>
            <th>Bitis Tarihi</th>
    </tr>
    <?php
 require("baglanti.php");

 $sec="SELECT * FROM uyeler";
 $sonuc=$baglanti->query($sec);

 if($sonuc->num_rows>0)
 {
    while($cek=$sonuc->fetch_assoc()){
    
        echo "
        <tr>

            <td>".$cek['uye_ad']."</td>
            <td>".$cek['uye_soyad']."</td>
            <td>".$cek['uye_yas']."</td>
            <td>".$cek['uye_adres']."</td>
            <td>".$cek['uye_mahalle']."</td>
            <td>".$cek['uye_tel']."</td>
            <td>".$cek['uye_boy']."</td>
            <td>".$cek['uye_kilo']."</td>
            <td>".$cek['uye_ubaslangic']."</td>
            <td>".$cek['uye_ubitis']."</td>

        </tr>
           ";



    }





 }
 else echo "Veritabanınıza kayıtlı hiçbir veri bulunamamıştır. ";

 ?>


    </table>
    


    






    </div>





</body>




</html>
