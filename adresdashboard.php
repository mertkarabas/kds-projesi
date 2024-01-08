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
          ['Mahalle', 'Üye sayısı',],
          ['Efe', <?php echo $count_efe_mahallesi;?>, ],
          ['Yaylacık', 2, ],
          ['ValiRhm', <?php echo $count_valirahmi_mahallesi;?>, ],
          ['Atatürk', <?php echo 3;?>, ],
          ['Adatepe', <?php echo $count_adatepe_mahallesi;?>, ],
          ['Kuruçeşme', 13, ],
          ['Yıldız', 4, ],
        ]);

        var options = {
          chart: {
            title: 'Mahallelere göre üye sayısı',
            subtitle: 'Üye sayısı-Mahalle',
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
    ['Erkek', <?php echo $erkeksayısı; ?>],  
    ['Kadın', <?php echo $kadınsayısı; ?>],  
      
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


    <div id="tablo" style="width: 400px; height: 100px; color:black; font-family:headerbaslik;"><h2>Güncel Toplam Üye Sayısı:<?php echo $toplamuye; ?></h2> </div>

    <div id="tablo2" style="width: 400px; height: 100px; color:rgba(209,101,39,255); font-family:headerbaslik;"><h2> Güncel Üye Yaş Ortalaması:<?php echo "30.01"; ?></h2> </div>



</body>



</html>
<?php

session_start();
 if($_SESSION['user']==""){
    echo "<script>window.location.href='cikis.php'</script>";


}


?>
