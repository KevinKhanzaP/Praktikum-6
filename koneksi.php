<?php
  $host="localhost"; //deklarasi variabel
  $user_db="root"; //deklarasi variabel
  $pass_db=""; //deklarasi variabel
  $db="praktikum6"; //deklarasi variabel database

  $koneksi=mysqli_connect ($host,$user_db,$pass_db) or die (mysqli_error());
  //membuat koneksi terhadap database
  mysqli_select_db ($koneksi,$db) or die (mysqli_error());
  //melakukan koneksi terhadap database
?>
