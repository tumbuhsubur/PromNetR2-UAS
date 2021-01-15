<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

include ("koneksi.php");

// cek tombol tambah sudah diklik atau belum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorhp'];
    $jenis_kegiatan = $_POST['kegiatan'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $tanggal = $_POST['tanggal'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];

    // membuat query
    $sqluser = "SELECT * FROM data_user WHERE data_user.nomorhp = $nomorhp";
    $queryUser = mysqli_query($db, $sqlreservasi);
    $idUser = mysqli_fetch_assoc(queryUser);
    //
    $sqlreservasi = "INSERT INTO data_reservasi (id_reservasi, idUser, jenis_kegiatan, nama_kegiatan, tanggal, jam_mulai, jam_selesai) VALUE ('', '$idUser' $jenis_kegiatan', '$nama_kegiatan', '$tanggal', '$jam_mulai', '$jam_selesai')";
        
    $queryRes = mysqli_query($db, $sqlreservasi);
    
    // status query simpan
    if( $queryRes ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>