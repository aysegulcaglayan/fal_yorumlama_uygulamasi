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
        
      <h1><a href="#" id="logo">YORUMCU EKLEME EKRANI</a></h1>
      <hr>
      
  </div>
  <nav id="nav">
    <ul>
      <li><a href="adminpanel.php">GERİ</a></li>
        
    </ul>
  </nav>
</div>
  
</div>

<br><br><br>

<div class="form-container">
    <form  method="get" enctype="multipart/form-data">
        <h2>Yorumcu Ekle</h2>
        <div>
            <label for="ad_soyad">Ad Soyad:</label>
            <input type="text" name="ad_soyad" id="ad_soyad" required>
        </div>
        <div>
            <label for="aciklama">Açıklama</label>
            <input type="aciklama" name="aciklama" id="aciklama" required>
        </div><br><br>
       
        <button type="submit" name="ekle">Ekle</button>
    </form>

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
if(isset($_GET['ekle'])){
  $ad_soyad = $_GET['ad_soyad'];
  $aciklama = $_GET['aciklama'];
 

  // Veritabanına ekleme
  $sql = "INSERT INTO yorumcular(falci_id,falci_adsoyad,falci_aciklama)
  VALUES (' ','$ad_soyad', '$aciklama')";

  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Kayıt başarıyla oluşturuldu");</script>';
  
  }

  $conn->close();
}
