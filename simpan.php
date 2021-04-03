<?php
  include("koneksi.php"); //menyertakan file lain
  $nama=$_POST['nama']; //deklarasi variabel dan menyimpan data
  $email=$_POST['email']; //deklarasi variabel dan menyimpan data
  $isi = $_POST['isi']; //deklarasi variabel dan menyimpan data
  $sql="insert into buku_tamu(nama,email,isi) values ('$nama','$email','$isi')";
  //menambahkan data ke database
  mysqli_query($koneksi,$sql) or die (mysqli_error());
  header('location:buku_tamu.php'); //redirect ke file lain
?>
