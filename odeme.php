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
      <h1><a href="#" id="logo">ÖDEME SAYFASI</a></h1>
      <hr>
  </div>
  <nav id="nav">
    <ul>
      <li><a href="index.php">Anasayfaya Dön</a></li>
        
    </ul>
  </nav>
</div>


<div class="form-container">
    <form   action="bilgi.php" method="post" enctype="multipart/form-data">
    <h3>Ücret: 200 TL</h3>
        <div>
            <label for="kart_no" style="color:black">Kart Numarası</label>
            <input type="password" name="kart_no" id="kart_no" required>
        </div>
        <div>
            <label for="kart_gun" style="color:black">Son Kullanma Tarihi</label>
            <input type="date" name="kart_gun" id="kart_gun" required>
        </div>
        <div>
            <label for="giris_sifre" style="color:black">CVV</label>
            <input type="password" name="cvv" id="cvv" required>
        </div>
       <br>
        <button type="submit" name="giris">Ödeme Yap</button>

    </form>

   
   
   


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


</body>
</html>
