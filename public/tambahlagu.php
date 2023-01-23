<?php 
require 'functions.php';

if( isset($_POST['tambahLagu']) ) {
  if( tambahLagu($_POST) > 0 ) {
   echo " <script>
   alert('Lagu Berhasil Ditambahkan!');
   document.location.href = 'index.php';
   </script>";
  } else {
    echo " <script>
    alert('Lagu Gagal Ditambahkan!');
    document.location.href = 'index.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Lagu</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../src/style/style.php" type="text/css" />
    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="mainContainer">
      <div class="container">
        <div class="tambahText">
          <h2>Tambah daftar lagu</h2>
          <p>Tambah data lagu favorit anda</p>
          <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Kembali ke daftar lagu</a>
        </div>
        <form method="post">
          <div class="judul">
            <label for="judul">Judul Lagu</label>
            <input type="text" id="judul" name="judul" />
          </div>
          <div class="genreArtist">
            <div class="genre">
              <label for="genre">Genre Lagu</label>
              <input type="text" id="genre" name="genre" />
            </div>
            <div class="artist">
              <label for="artist">Artist/Band</label>
              <input type="text" id="artist" name="artist" />
            </div>
          </div>
          <div class="cover">
            <label for="cover">Cover</label>
            <input type="text" id="cover" name="cover" />
          </div>
          <button type="submit" name="tambahLagu">Tambah Lagu</button>
        </form>
      </div>
    </div>
  </body>
</html>
