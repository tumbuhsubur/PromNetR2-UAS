<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // mengambil id dari query string
    $id = $_GET['id'];

    // membuat query hapus
    $sql = "DELETE FROM data_reservasi WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // status query hapus berhasil atau gagal?
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>