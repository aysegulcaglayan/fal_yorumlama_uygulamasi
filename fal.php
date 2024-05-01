<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Select File</td>
<td><input type="file" name="f1"></td>
<td><input type="file" name="f2"></td>
<td><input type="file" name="f3"></td>
</tr>
<tr>
<td><input type="submit" name="submit1" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>

<?php
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

if(isset($_POST["submit1"]))
{
    // Dosya yükleme işlemi
    $image1 = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
    $image2 = addslashes(file_get_contents($_FILES['f2']['tmp_name']));
    $image3 = addslashes(file_get_contents($_FILES['f3']['tmp_name']));
    $sql = "INSERT INTO fal_bilgi (fal_id,ad_soyad,mail, cinsiyet, iliski,falci_id, dgm_tarih,foto1,foto2,foto3)
  VALUES (' ','deneme', 'deneme@gmail.com', 'kadın','bekar','1', '2005-10-14','$image1','$image2','$image3')";

    if ($conn->query($sql) === TRUE) {
        echo "Dosya başarıyla yüklendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}


if(isset($_POST["submit2"]))
{
   // Dosyaları gösterme işlemi
   $result = $conn->query("SELECT * FROM fal_foto");
   if ($result->num_rows > 0) {
       echo "<table>";
       while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo "<td>"; 
           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" height="200" width="200"/>';
           echo "<br>";
           // Silme bağlantısı ekleme
           echo '<a href="delete.php?id='.$row["id"].'">Delete</a>';
           echo "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>"; 
           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image2']).'" height="200" width="200"/>';
           echo "<br>";
           // Silme bağlantısı ekleme
           echo '<a href="delete.php?id='.$row["id"].'">Delete</a>';
           echo "</td>";
           echo "</tr>";
           echo "<tr>";
           echo "<td>"; 
           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image3']).'" height="200" width="200"/>';
           echo "<br>";
           // Silme bağlantısı ekleme
           echo '<a href="delete.php?id='.$row["id"].'">Delete</a>';
           echo "</td>";
           echo "</tr>";
       }
       echo "</table>";
   } else {
       echo "Veritabanında dosya bulunamadı.";
   }
}

$conn->close();
?>
</body>
</html>
