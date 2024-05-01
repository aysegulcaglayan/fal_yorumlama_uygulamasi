<!DOCTYPE HTML>
<html>
<head>
<title>FAL'IM | YORUMCULAR</title>
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
  .card {
    width: calc(25% - 20px); /* Kartların yüzde 25'lik genişliği, kenar boşlukları da eklenmiştir */
    margin: 10px; /* Kartlar arasındaki boşluk */
    float: left; /* Kartları yatay olarak hizalamak için */
    background-color: rgba(96, 54, 112,0.3); /* Kart arka plan rengi */
    padding: 10px; /* Kart içeriğinden kenarlara uzanan iç boşluk */
    box-sizing: border-box; /* Padding alanını genişlik ve yükseklik hesabına dahil etmek için */
    cursor: pointer; /* Fare imleci kartların üzerine gelince el biçimine dönüşsün */
    transition: background-color 0.3s; /* Arka plan rengi değişiminde yumuşak bir geçiş efekti */
  }
  
  .card:hover {
    background-color: #e0e0e0; /* Kartın üzerine gelince arka plan rengini değiştir */
  }
  
  .card img {
    width: 30%; /* Resmi kartın genişliğine tamamen yay */
    border-radius: 50%; /* Resmin köşelerini yuvarlat */
  }

  .modal {
    display: none; /* Başlangıçta açılır pencereyi gizle */
    position: fixed; /* Ekranın üstüne sabitle */
    z-index: 1; /* Diğer elementlerden üstte olmasını sağla */
    padding-top: 100px; /* Açılır pencerenin üst boşluğu */
    left: 0;
    top: 0;
    width: 100%; /* Ekranın tam genişliği */
    height: 100%; /* Ekranın tam yüksekliği */
    overflow: auto; /* Ekran dışına taşan içerik için kaydırma çubuğu ekle */
    background-color: rgb(0,0,0); /* Siyah arka plan */
    background-color: rgba(0,0,0,0.4); /* Siyah arka planın yarı saydam hali */
  }

  .modal-content {
    background-color: #fefefe; /* Açılır pencerenin içerik arka plan rengi */
    margin: auto; /* İçeriği dikey ve yatay olarak hizala */
    padding: 20px;
    border: 1px solid #888; /* Kenar çizgisi */
    width: 80%; /* İçeriğin genişliği */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); /* Gölge efekti */
    animation-name: animatetop; /* Açılır pencerenin animasyonu */
    animation-duration: 0.4s; /* Animasyon süresi */
  }

  /* Açılır pencerenin animasyonu */
  @keyframes animatetop {
    from {top: -300px; opacity: 0} 
    to {top: 0; opacity: 1}
  }

  .close {
    color: #aaa; /* Kapatma düğmesi rengi */
    float: right; /* Sağ üst köşeye hizala */
    font-size: 28px; /* Yazı boyutu */
    font-weight: bold; /* Yazı kalınlığı */
  }

  .close:hover,
  .close:focus {
    color: black; /* Kapatma düğmesi rengini değiştir */
    text-decoration: none; /* Kapatma düğmesi altını çizme */
    cursor: pointer; /* Fare imleci kapatma düğmesinin üzerine gelince el biçimine dönüşsün */
  }
</style>
</head>
<body class="left-sidebar">
<div id="header">
  <div class="inner">
  <header>
      <h1><a href="#" id="logo">YORUMCULAR</a></h1>
      
      <hr>
      <p>Yorumcularımız hakkında daha çok bilgi edinmek için kutucuğuna tıklamanız yeterli...</p>
  </div>
  <nav id="nav">
    <ul>
      <li><a href="index.php">ANASAYFA</a></li>
      <li> <span>FAL TÜRLERİ </span>
        <ul>
          <li><a href="kahve.php">KAHVE FALI</a></li>
          <li><a href="tarot.php">TAROT FALI</a></li>
          <li><a href="yildizname.php">YILDIZNAME FALI</a></li>
          <li><a href="#">SU FALI</a></li>
        </ul>
      </li>
      <li><a href="yorumcu.php">YORUMCULAR</a></li>
      <li><a href="iletisim.php">İLETİŞİM</a></li>
      <li><a href="login.php">ÜYE GİRİŞİ</a></li>
    </ul>
  </nav>
</div>

<div id="content">
  <div class="container">
    <div class="card" onclick="openModal(1)">
      <img src="images/alisa.jpeg" alt="Yorumcu 1"><br>
      <b>ALİSA YILDIZ</b>
      <p>Tekrardan buradayız, hayatınızdaki her zorluğu cevaplandırmak adına ...<p>

    </div>
    <div class="card" onclick="openModal(2)">
      <img src="images/aziz.jpeg" alt="Yorumcu 2"><br>
      <b>AZİZ ÇETİN</b>
      <p>Tüm bakımlarımı sarkaç tekniği ile destekliyorum her sorunuz için buradayım...</p>
    </div>
    <div class="card" onclick="openModal(3)">
      <img src="images/zeliha.jpeg" alt="Yorumcu 3"><br>
      <b>ZELİHA KURT</b>
      <p>Kaliteli fal ve astroloji deneyiminde tek adres...</p>
    </div>
    <div class="card" onclick="openModal(4)">
      <img src="images/hale.jpeg" alt="Yorumcu 4"><br>
      <b>HALE TUNA</b>
      <p>Özel bakımlar, nazar ritüelleri,kahve falında enerjisel bağlar,tarot kartları ve nicesi...</p>
    </div>
    <div class="card" onclick="openModal(5)">
      <img src="images/elif.jpeg" alt="Yorumcu 5"><br>
      <b>ELİF ÖZSOY</b>
      <p>Her ne derdiniz, sorununuz varsa gelin beraber çözelim...</p>
    </div>
    <div class="card" onclick="openModal(6)">
      <img src="images/ipek.jpeg" alt="Yorumcu 6"><br>
      <b>İPEK DEMİR</b>
      <p>Negatif enerjiye kesinlikle hayır diyen ben, tüm enerjimle buradayım...</p>
    </div>
    <div class="card" onclick="openModal(7)">
      <img src="images/melike.jpeg" alt="Yorumcu 7"><br>
      <b>MELİKE BALCI</b>
      <p>Merhaba, fallarınızı Klasik Tarot ve Duru görü ile destekliyorum...</p>
    </div>
    <div class="card" onclick="openModal(8)">
      <img src="images/can.jpeg" alt="Yorumcu 8"><br>
      <b>CAN YILMAZ</b>
      <p>Aşk,İş ,Gelecek ve özel hayatınız hakkında merak ettiğiniz her şeyin cevabı burada...</p>
    </div>
  </div>
  
  <!-- Açılır pencere -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modalContent"></div>
    </div>
  </div>
</div>

<script>
  // Açılır pencereyi aç ve içeriği doldur
  function openModal(cardId) {
    var modal = document.getElementById("myModal");
    var modalContent = document.getElementById("modalContent");

    // Kart ID'sine göre içeriği değiştir
    switch(cardId) {
      case 1:
        modalContent.innerHTML = "<h2>ALİSA YILDIZ</h2><p>Hakkımda </p><p>Öncelikle merhabalar dostlarım, ben Mars Ateş. 24 yaşındayım. Evliyim, gündelik hayatımda Pratisyen Hekimim. Fal ve Astroloji benim için bir hobi haline dönüştü. Yol göstermeyi seviyorum. Başak burcuyum. Hislerime güveniyorum ve yaklaşık 3 yılı profesyonel olmak üzere 7 yıldır fal bakımı gerçekleştiriyorum. Başlarda sadece arkadaş ortamında olan hiçbir bilgim yokken başladığım, sadece hislerimle harmanlayarak gördüklerimi söylemem sonucu söylediklerim gerçekleştiğinde fal denen şeyin gördüğümüz simgeleri yorumlamaktan ibaret olmadığını anladım. Bu spiritüel doğamı şimdi de sizlerle birleştirmeye hazırım. </p>";
        break;
      case 2:
        modalContent.innerHTML = "<h2>AZİZ ÇETİN</h2><p>Hakkımda</p><p>40 yıldır sizlerin derdine derman oluyorum. Hem bilgim hem de tecrübem ile burada sizlerleyim. Tüm bakımlarımı duru görüm ve safranlı kalemim ile destekleyerek alışılmışın dışında bir bakım sürecim var. Aklınıza gelebilecek her konuda size destek olmak için burada sizleri bekliyorum. Sorularınızı net ve ayrıntılı şekilde sorarsanız olumlu veya olumsuz tüm cevaplarla sizinleyim.</p>";
        break;
      case 3:
        modalContent.innerHTML = "<h2>ZELİHA KURT</h2><p>Hakkımda</p><p>Herkese merhaba ben Zeliha Kurt. Atalarımdan bana geçen empatlığım ve durugörüm ile desteklediğim tüm fallarınızı bekliyorum. Astrolog , Nümerolog ve Tarot & Katına Uzmanı kimliğim ile sorularınızı ve tüm öğrenmek istediklerinizi olumlu, olumsuz ve net bir şekilde aktarmak için buradayım. Geleceğinizin geçmişinizden çok daha parlak olması dileğiyle… Sizleri bekliyor olacağım.</p>";
        break;
      case 4:
        modalContent.innerHTML = "<h2>HALE TUNA</h2><p>Hakkımda</p><p>Uzun yıllardır kahve, tarot, katina, su ve yıldızname falı bakıyorum. Durugörümle kişilik analizi konusunda da son derece iyiyim.</p>";
        break;
      case 5:
        modalContent.innerHTML = "<h2>ELİF ÖZSOY</h2><p>Hakkımda</p><p>Digital pazarlama ve marka yöneticisi olarak çalışıyorum. Kendime ait bir e-ticaret şirketim var. Ayrıca, spiritüel konularla ilgileniyorum ve bu alanda 15 yıllık deneyime sahibim. Daha fazla kişiye ulaşmak ve birçok kişiye ışık olmak niyetiyle buradayım. Hayatınızla ilgili ne merak ediyorsunuz? Sevgiliniz sizi seviyor mu? Evlilik planınız var mı? Eski sevgiliniz geri dönecek mi? İş hayatınız ve kariyeriniz nasıl olacak? Hepsi ve daha fazlası her ne derdiniz, sorununuz varsa gelin beraber çözelim.</p>";
        break;
      case 6:
        modalContent.innerHTML = "<h2>İPEK DEMİR</h2><p>Hakkımda</p><p>Özel hayatınız konusunda merak ettikleriniz; ne zaman evleneceğiniz, nasıl biriyle evleneceğiniz, nerede nasıl tanışacağınız, mutlu olacak mısınız, sevdiğiniz ile kader çizgileriniz bir mi ilerliyor? sorularına net cevap alabiliyoruz.</p>";
      break; 
      case 7:
        modalContent.innerHTML = "<h2>MELİKE BALCI</h2><p>Hakkımda</p><p>Merhaba ben Melike, 1984 doğumlu, akrep kadınıyım. Doğuştan gelen yeteneklerim ve hislerim ile 16 yıldır kahve ve su falı bakıyorum. Aldığım eğitimler ile birlikte tarot, katina, osho zen, baş meleklerin gücü tarot, enerji kehanet kartları okumaktayım.Fallarınızı kendi klasik tarot kartlarım ve duru görü ile destekliyorum. Hayatınızla ilgili yeni cevaplar mı arıyorsunuz?Merak ettikleriniz için Fal'ımdayım.</p>";
        break;
      case 8:
        modalContent.innerHTML = "<h2>CAN YILMAZ</h2><p>Hakkımda</p><p>Astroloji, Yıldızname,Gök ve Doğa bilimleri adına yetenek ve fal deneyimim çok geçmiş yıllara dayanıyor, bu işi profesyonel şekilde yapıyorum. Sorulan her soru ve merak edilen her şey benim için çok kıymetlidir.</p>";
      break;    
    }

    modal.style.display = "block";
  }

  // Açılır pencereyi kapat
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
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
</body>
</html>

</body>
</html>
