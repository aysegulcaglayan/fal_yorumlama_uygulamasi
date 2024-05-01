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
      <h1><a href="#" id="logo">İLETİŞİM</a></h1>
      <hr>
      <span class="byline">HER TÜRLÜ DESTEK İÇİN...</span> </header>
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



    <form action="fal_sonucu.php" method="post" enctype="multipart/form-data">
      
        <h2>Bize Ulaşın</h2>
        <div>
            <label for="isim_soyisim">İsim Soyisim:</label>
            <input type="text" name="isim_soyisim" id="isim_soyisim" required>
        </div>
        <div>
            <label for="mail">Mail Adresi:</label>
            <input type="email" name="mail" id="mail" required>
        </div>
        <div>
            <label for="destek">Destek Türü:</label>
            <select name="destek" id="destek" required>
                <option value="teknik">Teknik Destek</option>
                <option value="odeme">Ödeme</option>
                <option value="sikayet">Şikayet</option>
            </select>
        </div>
        <div>
            <label for="mesaj">Mesajınız:</label>
            <input type="text" name="mesaj" id="mesaj" required>
        </div>
       
       
       
        <button type="submit">Gönder</button>
    </form>
    <div style="text-align:center;">
    <p><img src="images/email.jpg" alt="Email Logo" style="width: 50px; margin-right: 10px;"><u><b>Email:</u></b> info@falim.com </p>
    <p> <img src="images/location.jpg" alt="Location Logo" style="width: 50px; margin-right: 10px;"><u><b>Konum:</u></b>Karabaş, 41040 İzmit/Kocaeli</p>
    <p><img src="images/telefon.jpg" alt="Phone Logo" style="width: 50px;"><u><b>Phone:</u></b> +90 262 558 24 57</p>
    
</div>
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
</body>
</html>