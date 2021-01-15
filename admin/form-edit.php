<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php

include("koneksi.php");

// kalau tidak ada id di query string
// if( !isset($_GET['id_reservasi']) ){
//     header('Location: index.php');
// }

//ambil id dari query string
$id = $_POST['id_reservasi'];
echo "$id";

// buat query untuk ambil data dari database
$sqledit = "SELECT * FROM data_resevasi WHERE id_reservasi='$id'";
$query = mysqli_query($db, $sqledit);
$zoom = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Reservasi Zoom</title>
</head>

<body>
    <header>
        <h1>Edit Data Reservasi Zoom Meeting Room FTP UB</h1>
    </header>
    <nav>
        <a href="index.php">Listing Data Reservasi</a>
        <a href="form-tambah.php">Tambah Reservasi Baru</a>
    </nav>
    <br>
    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $zoom['id'] ?>" />

        <table>

             <tr>
                <td>Nama</td>
                <td>Nomor HP</td>
                <td>Email</td>
                <td>Kegiatan</td>
                <td>Judul Kegiatan</td>
            </tr>
            <tr>
                <td><input type="text" name="nama"   value="<?php echo $zoom['nama'] ?>" /></td>
                <td><input type="text" name="nomorhp" value="<?php echo $zoom['nomorhp'] ?>" /></td>
                <td><input type="text" name="email" value="<?php echo $zoom['email'] ?>" /></td>
                <td><select name="kegiatan">
                        <option>Kuliah</option>
                        <option>Ujian</option>
                        <option>Seminar</option>
                        </select></td>
                <td><input type="text" name="nama_kegiatan"   value="<?php echo $zoom['nama_kegiatan'] ?>" /></td>
            </tr>
            <tr><td></td></tr>
            <tr>
                <td><input type="submit" value="Simpan" name="simpan" /></td>
            </tr>

        
        </table>
        </fieldset>


    </form>

    </body>
</html>