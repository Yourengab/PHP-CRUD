<?php 
$conn = mysqli_connect("localhost","root",'',"db_musik");

function query($query) {
    global $conn;
    
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahLagu($data) {
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $cover = htmlspecialchars($data['cover']);
    $genre = htmlspecialchars($data['genre']);
    $artist = htmlspecialchars($data['artist']);

    $query = "INSERT INTO tb_lagu VALUES (
        '',
        '$cover',
        '$judul',
        '$genre',
        '$artist'
    );";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function delete($query) {
    global $conn;

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function cariLagu($keyword) {
    $query =  "SELECT * FROM tb_lagu WHERE
    judul LIKE '%$keyword%' OR
    genre LIKE '%$keyword%' OR
    artist LIKE '%$keyword%'";

    return query($query);
}

function updateLagu($data) {
    global $conn;

    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $cover = htmlspecialchars($data['cover']);
    $genre = htmlspecialchars($data['genre']);
    $artist = htmlspecialchars($data['artist']);

    $query = "UPDATE tb_lagu set
    id = $id,
    cover = '$cover',
    judul = '$judul',
    genre = '$genre',
    artist = '$artist'
    WHERE id=$id";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

?>