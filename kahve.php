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
      <h1><a href="#" id="logo">KAHVE FALI</a></h1>
      <hr>
      <span class="byline">TELVEDEN GELECEĞE...</span> </header>
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
    <form  method="post" enctype="multipart/form-data">
    <h2>Fal Fotoğrafları</h2>
        <div>
            <label for="fal_foto_1"><u>Fal Fotoğrafı 1:</u></label>
            <input type="file" name="foto1" id="foto1"  required>
        </div>
        <div>
            <label for="fal_foto_2"><u>Fal Fotoğrafı 2:</u></label>
            <input type="file" name="foto2" id="foto2"  required>
        </div>
        <div>
            <label for="fal_foto_3"><u>Fal Fotoğrafı 3:</u></label>
            <input type="file" name="foto3" id="foto3"  required>
        </div>
      
        <h2>Sorular</h2>
        <div>
            <label for="ad_soyad">Ad Soyad:</label>
            <input type="text" name="ad_soyad" id="ad_soyad" required>
        </div>
        <div>
            <label for="mail">Mail Adresi:</label>
            <input type="email" name="mail" id="mail" required>
        </div>
       
        <div>
            <label for="dogum_tarihi">Doğum Tarihi:</label>
            <input type="date" name="dogum_tarihi" id="dogum_tarihi" required>
        </div>
        <div>
            <label for="cinsiyet">Cinsiyet:</label>
            <select name="cinsiyet" id="cinsiyet" required>
                <option value="Erkek">Erkek</option>
                <option value="Kadın">Kadın</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>
        <div>
            <label for="iliski_durumu">İlişki Durumu:</label>
            <select name="iliski_durumu" id="iliski_durumu" required>
                <option value="Bekar">Bekar</option>
                <option value="İlişkisi var">İlişkisi Var</option>
                <option value="Evli">Evli</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>
        <div>
            <label for="yorumcu">Yorumcu:</label>
            <select name="yorumcu" id="yorumcu" required>
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
        <button type="submit" name="kayit">Gönder</button>
    </form>


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
</style>




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
if(isset($_POST['kayit'])){
  $ad_soyad = $_POST['ad_soyad'];
  $mail = $_POST['mail'];
  $dogum_tarihi = $_POST['dogum_tarihi'];
  $cinsiyet=$_POST['cinsiyet'];
  $iliski=$_POST['iliski_durumu'];
  $yorumcu=$_POST['yorumcu'];

  // Dosya yükleme işlemi
  $image1 = addslashes(file_get_contents($_FILES['foto1']['tmp_name']));
  $image2 = addslashes(file_get_contents($_FILES['foto2']['tmp_name']));
  $image3 = addslashes(file_get_contents($_FILES['foto3']['tmp_name']));
  // Veritabanına ekleme


  $sql = "INSERT INTO fal_bilgi (fal_id,fal_tur,ad_soyad,mail, cinsiyet, iliski,falci, dgm_tarih,foto1,foto2,foto3)
  VALUES (' ','kahve','$ad_soyad', '$mail', '$cinsiyet','$iliski',' $yorumcu', '$dogum_tarihi','$image1','$image2','$image3')";


  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">window.location.href = "odeme.php";</script>';
  } else {
    echo '<script type="text/javascript">alert("Kayıt oluşturulamadı!!!");</script>';
    exit();
  }


$conn->close();}
?>


</body>
</html>
