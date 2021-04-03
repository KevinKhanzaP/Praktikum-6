<html>
<head>
  <title>Buku Tamu Praktikum 6</title>

  <!-- Pengaturan style untuk tag body, fieldset, serta input -->
<style>
  body{font-family:'Arial';font-size:18px;margin:0}
  input[type=text]{margin:5px auto 15px;padding:10px;color:#444;width:300px}
  fieldset{border:1px solid #ccc;width:50%;margin-left:auto;margin-right:auto;
    margin-top:10px;}
  input[type=submit]{color:#FFF;padding:0 20px;margin:10px 0 5px;cursor:pointer;
    background-color:#333;border:0;height:30px}
  input[type=submit]:hover{background-color:#444}
  input[type=submit]:active{position:relative;top:2px}
</style>

</head>
<body>
  <fieldset>
    <legend>Buku Tamu</legend> <!-- menuliskan text dalam fieldset -->
    <form action="simpan.php" method="post"> <!-- pembuatan form -->
      <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <!-- menulis text dengan spasi -->
      <input placeholder="Nama lengkap Anda" type="text" name="nama" required/>
      <!-- membuat kolom input wajib -->
      </p>
      <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <!-- menulis text dengan spasi -->
      <input placeholder="ikevin.kkp@gmail.com" type="text" name="email"/>
      <!-- membuat kolom input wajib -->
      </p>
      <p>Isi : <!-- menulis text -->
      <textarea placeholder="Ketikan pesan Anda" cols="90" rows="10" name="isi" required>
        <!-- membuat kolom tulis wajib -->
      </textarea>
      <input type="submit" value="Simpan"/> <!-- membuat tombol simpan -->
      </p>
    </form>

    <?php
      include("koneksi.php"); //menyertakan file lain
      $query=mysqli_query($koneksi,'select * from buku_tamu'); //mengambil data dari database
      while($data=mysqli_fetch_array($query)) //mengambil record dari tabel
      {
      $nama = $data['nama']; //deklarasi var untuk pengisian
      $email= $data['email']; //deklarasi var untuk pengisian
      $isi = $data['isi']; //deklarasi var untuk pengisian
      echo "<b>$nama</b> said <br/> <i class='ganti'>'$isi'</i> <br/>";}
      //menuliskan text berupa data dari variabel
    ?>

  </fieldset>
</body>
</html>
