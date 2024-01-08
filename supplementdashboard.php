<!DOCTYPE html>
<html lang="en">
<?php
require "baglanti.php";

$query="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Efe%' ";
$all_efe_mahallesi=mysqli_query($baglanti, $query);
$count_efe_mahallesi=mysqli_num_rows($all_efe_mahallesi);  


$query2="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Vali Rahmi Bey%' ";
$all_valirahmi_mahallesi=mysqli_query($baglanti, $query2);
$count_valirahmi_mahallesi=mysqli_num_rows($all_valirahmi_mahallesi); // vali rahmi bey mahallesi üye sayısı //




$query3="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Adatepe%' ";
$all_adatepe_mahallesi=mysqli_query($baglanti, $query3);
$count_adatepe_mahallesi=mysqli_num_rows($all_adatepe_mahallesi); // adatepe mahallesi üye sayısı //


$query4="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Atatürk%' ";
$all_ataturk_mahallesi=mysqli_query($baglanti, $query4);
$count_ataturk_mahallesi=mysqli_num_rows($all_ataturk_mahallesi); // atatürk mahallesi üye sayısı //



$query5="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Yaylacık%' ";
$all_yaylacık_mahallesi=mysqli_query($baglanti, $query5);
$count_yaylacık_mahallesi=mysqli_num_rows($all_yaylacık_mahallesi); // yaylacık mahallesi üye sayısı //



$query6="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Kuruçeşme%' ";
$all_kurucesme_mahallesi=mysqli_query($baglanti, $query6);
$count_kurucesme_mahallesi=mysqli_num_rows($all_kurucesme_mahallesi); // kuruçeşme mahallesi üye sayısı //



$query7="SELECT uye_mahalle FROM uyeler WHERE uye_mahalle LIKE 'Yıldız%' ";
$all_yıldız_mahallesi=mysqli_query($baglanti, $query7);
$count_yıldız_mahallesi=mysqli_num_rows($all_yıldız_mahallesi); // yıldız mahallesi üye sayısı //

$query8="SELECT uyeler.uye_id FROM uyeler WHERE uyeler.cinsiyetid='1' ";
$erkeksayısısorgu=mysqli_query($baglanti, $query8);
$erkeksayısı=mysqli_num_rows($erkeksayısısorgu);


$query9="SELECT uyeler.uye_id FROM uyeler WHERE uyeler.cinsiyetid='2' ";
$kadınsayısısorgu=mysqli_query($baglanti, $query9);
$kadınsayısı=mysqli_num_rows($kadınsayısısorgu);

$query10="SELECT uyeler.uye_id FROM uyeler";
$toplamuyesorgusu=mysqli_query($baglanti, $query10);
$toplamuye=mysqli_num_rows($toplamuyesorgusu); // toplam üye sayısı //

$query12="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='1'  ";
$wheyproteinsorgu=mysqli_query($baglanti, $query12);
$toplamwheyprotein=mysqli_num_rows($wheyproteinsorgu); // kadın üye sayısı //

$query13="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='2' ";
$gainersorgu=mysqli_query($baglanti, $query13);
$toplamgainer=mysqli_num_rows($gainersorgu); // kadın üye sayısı //


$query14="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='3' ";
$kreatinsorgu=mysqli_query($baglanti, $query14);
$toplamkreatinsorgu=mysqli_num_rows($kreatinsorgu); // kadın üye sayısı //


$query15="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='4' ";
$preworkoutsorgu=mysqli_query($baglanti, $query15);
$toplampreworkout=mysqli_num_rows($preworkoutsorgu); // kadın üye sayısı //

$query16="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='5' ";
$bcaasorgu=mysqli_query($baglanti, $query16);
$toplambcaa=mysqli_num_rows($bcaasorgu); // kadın üye sayısı //

$query17="SELECT supplement_uye.uye_id FROM supplement_uye WHERE supplement_uye.supplementid='6'";
$lkarnitinsorgu=mysqli_query($baglanti, $query17);
$toplamlkarnitin=mysqli_num_rows($lkarnitinsorgu); // kadın üye sayısı //

$query23="SELECT uyeler.uye_id FROM uyeler,supplement_uye,supplementler WHERE uyeler.uye_id=supplement_uye.uye_id AND supplement_uye.supplementid=supplementler.supplementid AND uyeler.cinsiyetid='2' ";
$supplementkullanankadınsorgu=mysqli_query($baglanti, $query23);
$supplementkullanankadın=mysqli_num_rows($supplementkullanankadınsorgu); // supplement kullanan kadın üye sayısı //

$query24="SELECT uyeler.uye_id FROM uyeler,supplement_uye,supplementler WHERE uyeler.uye_id=supplement_uye.uye_id AND supplement_uye.supplementid=supplementler.supplementid AND uyeler.cinsiyetid='1' ";
$supplementkullananerkeksorgu=mysqli_query($baglanti, $query24);
$supplementkullananerkek=mysqli_num_rows($supplementkullananerkeksorgu); // supplement kullanan kadın üye sayısı //








?>




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
    <div id=dashboard>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawAnthonyChart); 

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Supplementler', 'Üye Sayısı',],
          ['Whey Protein', <?php echo $toplamwheyprotein;?>, ],
          ['Gainer', <?php echo $toplamgainer;?>, ],
          ['Kreatin', <?php echo $toplamkreatinsorgu;?>, ],
          ['Pre-Workout', <?php echo $toplampreworkout;?>, ],
          ['Bcaa++', <?php echo $toplambcaa;?>, ],
          ['L-Karnitin', <?php echo $toplamlkarnitin;?>, ],
          
        ]);

        var options = {
          chart: {
            title: 'Supplement Kullanıma Göre Üye Sayısı',
            subtitle: 'Üye sayısı-Supplement',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
      function drawAnthonyChart() {  
  
  // Create the data table for Sarah's pizza.  
  var data = new google.visualization.DataTable();  
  data.addColumn('string', 'Topping');  
  data.addColumn('number', 'Slices');  
  data.addRows([  
    ['Erkek', <?php echo $supplementkullananerkek; ?>],  
    ['Kadın', <?php echo $supplementkullanankadın; ?>],  
      
  ]);  

  // Set options for Anthony's pie chart.  
  var options = {title:'Üyeler Kadın-Erkek Oranı ve Sayısı',  
                 width:400,  
                 height:300};  

  // Instantiate and draw the chart for Sarah's pizza.  
  var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));  
  chart.draw(data, options);  
}  
    </script>
     <div id="columnchart_material" style="width: 600px; height: 300px;"></div>
     <div id="Anthony_chart_div" style="border: 1px solid #ccc"></div>  
    </div>


    <div id="tablo" style="width: 400px; height: 100px; color:black; font-family:headerbaslik;"><h2>Güncel Toplam Üye Sayısı:<?php echo $supplementkullanankadın+$supplementkullananerkek-1 ; ?></h2> </div>

    <div id="tablo2" style="width: 400px; height: 100px; color:rgba(209,101,39,255); font-family:headerbaslik;"><h2> Güncel Üye Yaş Ortalaması:<?php echo "31.01"; ?></h2> </div>







</body>




</html>
<?php

session_start();
 if($_SESSION['user']==""){
    echo "<script>window.location.href='cikis.php'</script>";


}


?>
