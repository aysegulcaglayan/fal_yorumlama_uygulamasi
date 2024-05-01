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

    .error-message {
        color: red;
        text-align: center;
    }
    .cards-container {
        max-width: 800px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        width: calc(16.66% - 10px);
        background-color: #fff;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    .card button {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color:rgba(96, 54, 112,0.5) ;
        cursor: pointer;
    }

    .card button:hover {
        background-color: #ddd;
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
    .error-message {
        color: red;
        text-align: center;
        display: none;
        padding: 10px;
    }
    
</style>
</head>
<body class="homepage">
<div id="header">
  <div class="inner">
    <header>
      <h1><a href="#" id="logo">TAROT FALI</a></h1>
      <hr>
      <span class="byline">KARTLARIN ENERJİSİNE GÜVENİN...</span> </header>
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

<h1>Kart Seçimi</h1>

<div class="cards-container">
    <?php for ($i = 1; $i <= 66; $i++) : ?>
        <div class="card">
            <img src="images/card.png" alt="Kart <?php echo $i; ?>">
            <button type="button" class="select-card" data-card="<?php echo $i; ?>">Kart Seç</button>
        </div>
    <?php endfor; ?>
</div>

<div class="error-message" id="error-message" style="display: none;">Daha fazla kart seçemezsiniz.</div>
<form    method="post" enctype="multipart/form-data">
<h2>Sorular</h2>
        <div>
            <label for="isim_soyisim">İsim Soyisim:</label>
            <input type="text" name="isim_soyisim" id="isim_soyisim" required>
        </div>
        <div>
            <label for="mail">Mail Adresi:</label>
            <input type="email" name="mail" id="mail" required>
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
                <option value="İlişkili">İlişkisi Var</option>
                <option value="Evli">Evli</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>
        <div>
            <label for="cinsiyet">Yorumcu:</label>
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
        <div>
            <label for="dogum_tarihi">Doğum Tarihi:</label>
            <input type="date" name="dogum_tarihi" id="dogum_tarihi" required>
        </div>
        <button type="submit" name="kayit">Devam Et</button>
    </form>
<script>
    var selectedCards = [];

var buttons = document.querySelectorAll('.select-card');
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        var cardNumber = this.getAttribute('data-card');
        var index = selectedCards.indexOf(cardNumber);
        if (index === -1) {
            if (selectedCards.length >= 10) {
                document.getElementById('error-message').style.display = 'block';
                return;
            }
            selectedCards.push(cardNumber);
            this.textContent = 'Seçildi';
            this.classList.add('selected');
        } else {
            selectedCards.splice(index, 1);
            this.textContent = 'Kart Seç';
            this.classList.remove('selected');
        }
    });
});
</script>
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
  $ad_soyad = $_POST['isim_soyisim'];
  $mail = $_POST['mail'];
  $dogum_tarihi = $_POST['dogum_tarihi'];
  $cinsiyet=$_POST['cinsiyet'];
  $iliski=$_POST['iliski_durumu'];
  $yorumcu=$_POST['yorumcu'];

  
  // Veritabanına ekleme


  $sql = "INSERT INTO fal_bilgi (fal_id,fal_tur,ad_soyad,mail, cinsiyet, iliski,falci, dgm_tarih,foto1,foto2,foto3)
  VALUES (' ','tarot','$ad_soyad', '$mail', '$cinsiyet','$iliski',' $yorumcu', '$dogum_tarihi',NULL,NULL,NULL)";


  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">window.location.href = "odeme.php";</script>';
    exit();

  } else {
    echo '<script type="text/javascript">alert("Kayıt oluşturulamadı!!!");</script>';
    exit();
  }


$conn->close();}
?>

</body>
</html>
