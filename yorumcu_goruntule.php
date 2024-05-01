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
    margin: 80px;
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
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333;
    color: white;
}

</style>
</head>
<body class="homepage">
<div id="header">  
  <div class="inner">
    <header>
        
      <h1><a href="#" id="logo">YORUMCU GÖRÜNTÜLEME  EKRANI</a></h1>
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
// Kullanıcıları seçme sorgusu
$sql = "SELECT * FROM yorumcular";
$result = $conn->query($sql);


?>

<table>
  <tr>
    <th>ID</th>
    <th>Ad-SOYAD</th>
    <th>AÇIKLAMA</th>
    
  </tr>
<?php
if ($result->num_rows > 0) {
    // Her bir satırı al
    while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $row["falci_id"]; ?></td>
    <td><?php echo $row["falci_adsoyad"]; ?></td>
    <td><?php echo $row["falci_aciklama"]; ?></td>
    
  </tr>
<?php
    }
} else {
    echo "<tr><td colspan='3'>Kullanıcı bulunamadı.</td></tr>";
}
?>
</table>
</body>
</html>