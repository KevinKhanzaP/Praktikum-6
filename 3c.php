<!DOCTYPE html>
<html>
  <body>

    <?php
    $servername = "localhost"; //deklarasi variabel
    $username = "root"; //deklarasi variabel
    $password = ""; //deklarasi variabel
    $dbname = "myDB"; //deklarasi variabel

    $conn = mysqli_connect($servername, $username, $password, $dbname); //membuat koneksi

    if (!$conn) { //seleksi kondisi jika koneksi gagal
      die("Connection failed : " . mysqli_connect_error()); //menuliskan text dari fungsi
    }

    $sql = "SELECT kode, negara, champion FROM liga"; //mengakses db dengan fungsi select from
    $result = mysqli_query($conn, $sql); //deklarasi variabel result

    if (mysqli_num_rows($result) >0) { //seleksi kondisi
      while($row = mysqli_fetch_assoc($result)) { //mengambil data dari db
        echo "kode : " . $row["kode"] . " - Negara : " . $row["negara"] . " " .
        $row["champion"] . "<br>"; //menuliskan text dari variabel
      }
    } else { //jika seleksi tidak terpenuhi
      echo "0 results"; //menuliskan text
    }

    mysqli_close($conn); //menutup koneksi
     ?>
  </body>
</html>
