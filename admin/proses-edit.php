<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nomorhp = $_POST['nomorhp'];
    $email = $_POST['email'];
    $kegiatan = $_POST['kegiatan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];

    // buat query update
    $sql = "UPDATE data_zoom SET nama='$nama', nomorhp='$nomorhp', email='$email', kegiatan='$kegiatan', nama_kegiatan='$nama_kegiatan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>