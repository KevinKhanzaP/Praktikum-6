<?php
  $servername = "localhost"; //deklarasi variabel
  $username = "root"; //deklarasi variabel
  $password = ""; //deklarasi variabel

  $conn = mysqli_connect($servername, $username, $password); //membuat koneksi

  if (!$conn) { //deklarasi kondisi pengecekan koneksi jika gagal
    die("Connection failed : " . mysqli_connect_error()); //menuliskan text dari fungsi
  }

  $sql = "CREATE DATABASE myDB"; //membuat database
  if (mysqli_query($conn, $sql)) { //seleksi kondisi
    echo "Database created successfully";
  } else {
    echo "Error creating database : " . mysqli_error($conn); //menuliskan text dari fungsi
  }

  mysqli_close($conn); //menutup koneksi
 ?>
