<html>
  <head>
    <title>Koneksi Database MySQL</title>
  </head>
  <body>
    <h1>Demo Koneksi Database MySQL</h1> <!-- menampilkan text -->
    <?php
      $con = mysqli_connect("localhost","root","","my_db");
      //memulai koneksi
      if (mysqli_connect_errno()) { //deklarasi kondisi pengecekan koneksi
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit(); //fungsi untuk keluar
      }
     ?>
  </body>
</html>
