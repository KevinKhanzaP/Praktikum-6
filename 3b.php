<?php
$servername = "localhost"; //deklarasi variabel
$username = "root"; //deklarasi variabel
$password = ""; //deklarasi variabel
$dbname = "myDB"; //deklarasi variabel

$conn = mysqli_connect($servername, $username, $password, $dbname); //membuat koneksi

if (!$conn) { //seleksi kondisi jika koneksi gagal
  die("Connection failed : " . mysqli_connect_error()); //menuliskan text dari fungsi
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('jer', 'Jerman', '4')";

if (mysqli_query($conn, $sql)) { //seleksi kondisi jika variabel terpenuhi
  echo "New record created successfully"; //menuliskan text
} else {
  echo "Error : " . $sql . "<br>" . mysqli_error($conn); //menuliskan text dari fungsi
}

mysqli_close($conn); //menutup koneksi
 ?>
