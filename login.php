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
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
select,
input[type="date"],
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
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

.form-container {
    display: flex;
    justify-content: space-between;
}

.form-container form {
    flex: 0 0 48%;
}

</style>
</head>
<body class="homepage">
<div id="header">
  <div class="inner">
    <header>
      <h1><a href="#" id="logo">ÜYE GİRİŞİ</a></h1>
      <hr>
      
  </div>
  <nav id="nav">
    <ul>
      <li><a href="index.php">ANASAYFA</a></li>
      <li> <span>FAL TÜRLERİ </span>
        <ul>
          <li><a href="kahve.php">KAHVE FALI</a></li>
          <li><a href="tarot.php">TAROT FALI</a></li>
          <li><a href="yildizname.php">YILDIZNAME FALI</a></li>
          <li><a href="su.php">SU FALI</a></li>
        </ul>
      </li>
      <li><a href="yorumcu.php">YORUMCULAR</a></li>
      <li><a href="iletisim.php">İLETİŞİM</a></li>
      <li><a href="login.php">ÜYE GİRİŞİ</a></li>
    </ul>
  </nav>
</div>

<div class="form-container">
    <form  method="get" enctype="multipart/form-data">
        <h2>Üye Ol</h2>
        <div>
            <label for="ad_soyad">Ad Soyad:</label>
            <input type="text" name="ad_soyad" id="ad_soyad" required>
        </div>
        <div>
            <label for="mail">Mail Adresi:</label>
            <input type="email" name="mail" id="mail" required>
        </div>
        <div>
            <label for="sifre">Şifre:</label>
            <input type="password" name="sifre" id="sifre" required>
        </div>
        <div>
            <label for="sifre_tekrar">Şifre Tekrar:</label>
            <input type="password" name="sifre_tekrar" id="sifre_tekrar" required>
        </div>
        <div>
            <label for="dogum_tarihi">Doğum Tarihi:</label>
            <input type="date" name="dogum_tarihi" id="dogum_tarihi" required>
        </div>
        <button type="submit" name="kayit">Kayıt Ol</button>
    </form>

    <form action="index.php" method="post">
        <h2>Giriş Yap</h2>
        <div>
            <label for="giris_mail">Mail Adresi:</label>
            <input type="email" name="giris_mail" id="giris_mail" required>
        </div>
        <div>
            <label for="giris_sifre">Şifre:</label>
            <input type="password" name="giris_sifre" id="giris_sifre" required>
        </div><br>
        <button type="submit" name="giris">Giriş Yap</button>
    </form>
   
    <div style="text-align: center;">
    <button onclick="window.location.href='adminlogin.php'" type="submit" name="admin_giris" style="width:200px;height:100px;background-color:rgba(96, 54, 112,0.7); border:none;cursor:pointer; margin-bottom: 10px;">
        Yönetici Girişi
    </button>
    <br>
    <button onclick="window.location.href='yorumcu_login.php'" type="submit" name="yorumcu_giris" style="width:200px;height:100px;background-color:rgba(96, 54, 112,0.7); border:none;cursor:pointer;">
        Yorumcu Girişi
    </button>
</div>


</div>

<div id="footer">
    <div class="row">
      <div class="12u">
        <section class="contact">
          <header>
            <h3>Bizi sosyal medya hesaplarımızdan takip edebilirsiniz...</h3>
          </header>
          
          <ul class="icons">
            <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="icon icon-instagram"><span>İnstagram</span></a></li>
           
          </ul>
        </section>
        <div class="copyright">
          <ul class="menu">
            <li>&copy; Tüm Hakları Saklıdır</li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root"; // Kullanıcı adınızı buraya girin
$password = " "; // Şifrenizi buraya girin
$dbname = "falım"; // Veritabanı adınızı buraya girin

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
  die("Bağlantı hatası: " . $conn->connect_error);
}

// Kayıt işlemi
if(isset($_GET['kayit'])){
  $ad_soyad = $_GET['ad_soyad'];
  $mail = $_GET['mail'];
  $sifre = $_GET['sifre'];
  $sifre_tekrar = $_GET['sifre_tekrar'];
  $dogum_tarihi = $_GET['dogum_tarihi'];

  // Şifre kontrolü
  if ($sifre != $sifre_tekrar) {
    echo '<script type="text/javascript">alert("Şifreler uyuşmuyor!");</script>';
    exit();
  }
  // E-posta adresinin var olup olmadığını kontrol et
  $check_query = "SELECT * FROM kullanicilar WHERE mail = '$mail'";
  $check_result = $conn->query($check_query);



  // Veritabanına ekleme
  $sql = "INSERT INTO kullanicilar (kullanici_id,isim_soyisim, mail, sifre, dgm_tarihi)
  VALUES (' ','$ad_soyad', '$mail', '$sifre', '$dogum_tarihi')";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Kayıt başarıyla oluşturuldu");</script>';
  
  }

  $conn->close();
}

// Giriş işlemi
if (isset($_GET['giris'])) {
  $giris_mail = $_GET['giris_mail'];
  $giris_sifre = $_GET['giris_sifre'];

  // Kullanıcıyı veritabanında kontrol et
  $check_query = "SELECT * FROM kullanicilar WHERE mail = '$giris_mail' AND sifre = '$giris_sifre'";
  $check_result = $conn->query($check_query);

  if ($check_result->num_rows > 0) {
    echo "Giriş başarılı. Hoş geldiniz!";
  } else {
    echo '<script type="text/javascript">alert("Hatalı e-posta veya şifre. Lütfen tekrar deneyin.");</script>';
  }

  $conn->close();
}
?>

</body>
</html>
