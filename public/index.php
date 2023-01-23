<?php 
require "functions.php";

$songData = query("SELECT * FROM tb_lagu");

if( isset($_POST['cariLagu']) ) {
  $songData = cariLagu($_POST['inputKeyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laguingab</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../src/style/style.php" type="text/css"/>
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
    <div class="header">
      <div class="search">
        <form method="post">
          <input type="text" name="inputKeyword" placeholder="Cari lagu favoritmu" />
          <button type="submit" name="cariLagu">Cari Lagu</button>
        </form>
      </div>
      <div class="user">
        <div class="profile">
          <img src="../src/img/cover/wish.jpg" />
        </div>
        <div class="userPopup">
          <a href="tambahlagu.php"><i class="fa-solid fa-plus"></i>   Tambah Lagu</a>
          <hr />
          <a href=""><i class="fa-solid fa-right-from-bracket"></i>   Logout</a>
        </div>
      </div>
    </div>
    <div class="songContainer">
      <?php foreach( $songData as $song  ) : ?>
      <div class="songCard">
        <div class="cover">
          <img src="../src/img/cover/<?= $song['cover']?>" />
        </div>
        <div class="detail">
          <span class="genre"><?= $song['genre']?></span>
          <h3><?= $song['judul']?></h3>
          <p><?= $song['artist']?></p>
          <div class="buttons">
            <a href="./updatelagu.php?id=<?= $song['id'] ?>" class="update">Update</a>
            <a href="./deleteprocess.php?id=<?= $song['id'] ?>" class="delete" onclick="return confirm('Ingin menghapus lagu ini?')"><i class="fa-solid fa-trash"></i></a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
    <script src="../src/js/script.js"></script>
  </body>
</html>
