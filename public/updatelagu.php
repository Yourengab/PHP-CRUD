<?php 
require 'functions.php';

$songId = $_GET['id'];

$updateLagu = query("SELECT * FROM tb_lagu WHERE id=$songId");

if( isset($_POST['updateLagu']) ) {

    if (updateLagu($_POST) > 0 ) {
        echo "<script>
        alert('Lagu Berhasil Diupdate!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Lagu Gagal Diupdate!');
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
    <title>Update Lagu</title>
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
          <h2>Update daftar lagu</h2>
          <p>Update data lagu favorit anda</p>
          <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> Kembali ke daftar lagu</a>
        </div>
        <form method="post">
        <input type="hidden" id="id" name="id" value="<?= $updateLagu[0]['id']?>"/>
          <div class="judul">
            <label for="judul">Judul Lagu</label>
            <input type="text" id="judul" name="judul" value="<?= $updateLagu[0]['judul']?>"/>
          </div>
          <div class="genreArtist">
            <div class="genre">
              <label for="genre">Genre Lagu</label>
              <input type="text" id="genre" name="genre" value="<?= $updateLagu[0]['genre']?>"/>
            </div>
            <div class="artist">
              <label for="artist">Artist/Band</label>
              <input type="text" id="artist" name="artist" value="<?= $updateLagu[0]['artist']?>"/>
            </div>
          </div>
          <div class="cover">
            <label for="cover">Cover</label>
            <input type="text" id="cover" name="cover" value="<?= $updateLagu[0]['cover']?>"/>
          </div>
          <button type="submit" name="updateLagu">Update Lagu</button>
        </form>
      </div>
    </div>
  </body>
</html>
