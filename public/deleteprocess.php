<?php 
require "functions.php";

$songId = $_GET['id'];

delete("DELETE FROM tb_lagu WHERE id=$songId");
if ( $songId > 0 ) {
    echo "<script>
    alert('Lagu Berhasil di Hapus');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Lagu Gagal di Hapus');
    document.location.href = 'index.php';
    </script>";
}
?>