<!DOCTYPE HTML>
<html>
<head>
<title>FAL'IM</title>
<meta charset="utf-8">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<!--[if lte IE 8]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-panels.min.js"></script>
<script src="js/init.js"></script>
<noscript>
<link rel="stylesheet" href="css/skel-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-noscript.css">
</noscript>
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie8.css">
<![endif]-->
</head>
<body class="homepage">
<div id="header">
  <div class="inner">
    <header>
      <h1><a href="#" id="logo">YORUMLAMA EKRANI</a></h1>
      <hr>
      <nav id="nav">
    <ul>
      <li><a href="index.php">GERİ</a></li>
        
    </ul>
  </nav>

  </div>
  
</div>
    <div class="form-container">
    <form  method="post" enctype="multipart/form-data">
    
        <div>
            <label for="yorumcu">Yorumcu:</label>
            <select name="yorumcu" id="yorumcu" required>
            <option value="bos">Lütfen İsminizi Seçiniz</option>
                <option value="alisa">Alisa Yıldız</option>
                <option value="aziz">Aziz Çetin</option>
                <option value="zeliha">Zeliha Kurt</option>
                <option value="hale">Hale Tuna </option>
                <option value="elif">Elif Özsoy</option>
                <option value="ipek">İpek Demir</option>
                <option value="melike">Melike Balcı</option>
                <option value="can">Can Yılmaz</option>
            </select>
        </div>
        <div>
            <label for="yorumcu">Fal Türü</label>
            <select name="fal" id="fal" required>
            <option value="bos">Lütfen Fal Türünü Seçiniz</option>
                <option value="kahve">Kahve</option>
                <option value="tarot">Tarot</option>
                <option value="yildiz">Yıldızname</option>
                <option value="su">Su </option>
            </select>
        </div>
        <button type="submit" name="submit2">Görüntüle</button>
        
    </form><br><br>


<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    #header {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    #footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h1, h2 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

  

    button {
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }
    table {
        color: black; /* Tablodaki metinleri siyah yapar */
    }
    td,th{
        padding-left:70px;
    }
</style>

<?php
$servername = "localhost";
$username = "root"; // Kullanıcı adınızı buraya girin
$password = ""; // Şifrenizi buraya girin
$dbname = "falım"; // Veritabanı adınızı buraya girin

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// "submit2" adında bir POST isteği varsa
if (isset($_POST["submit2"])) {
    $yorumcu = $_POST['yorumcu'];
    $tur = $_POST['fal'];
     // Veritabanı sonuçlarını döngüyle işleyin ve tabloya ekleyin

    // Dosyaları gösterme işlemi
    $result = $conn->query("SELECT fal_tur,ad_soyad,mail,cinsiyet,iliski,dgm_tarih,foto1,foto2,foto3 FROM fal_bilgi WHERE falci=' $yorumcu' AND fal_tur='$tur'");
    if ($result->num_rows > 0) {
         // Başlık satırını yazdırın
     echo "<table border='3'>";
     echo "<tr><th>Fal Türü</th><th>Ad Soyad</th><th>Mail</th><th>Cinsiyet</th><th>İlişki Durumu</th><th>Doğum Tarihi</th><th>Fotoğraf 1</th><th>Fotoğraf 2</th><th>Fotoğraf 3</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><span style='color: black;'>".$row["fal_tur"]."</td>";
            echo "<td><span style='color: black;'>".$row["ad_soyad"]."</td>";
            echo "<td><span style='color: black;'>".$row["mail"]."</td>";
            echo "<td><span style='color: black;'>".$row["cinsiyet"]."</td>";
            echo "<td><span style='color: black;'>".$row["iliski"]."</td>";
            echo "<td><span style='color: black;'>".$row["dgm_tarih"]."</td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode($row['foto1'])."' height='150' width='150'/></td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode($row['foto2'])."' height='150' width='150'/></td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode($row['foto3'])."' height='150' width='150'/></td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "Veritabanında dosya bulunamadı.";
    }
}

$conn->close();
?>
