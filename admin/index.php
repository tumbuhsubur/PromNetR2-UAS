<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php
	session_start();
    include 'koneksi.php';
    $sql = "SELECT * FROM data_reservasi INNER JOIN data_host on data_reservasi.idHost = data_host.idHost INNER JOIN data_user on data_reservasi.idUser = data_user.idUser";
    $query = mysqli_query($koneksi, $sql);
    $sql2 = "SELECT * FROM data_reservasi INNER JOIN data_user on data_reservasi.idUser = data_user.idUser WHERE data_reservasi.idHost IS NULL";
    $query2 = mysqli_query($koneksi, $sql2);
    $sql3tabel="SELECT * FROM data_reservasi INNER JOIN data_user on data_reservasi.idUser = data_user.idUser INNER JOIN admin on data_user.idUser = admin.idUser";
    $query3 = mysqli_query($koneksi, $sql3tabel);
    // $server = "localhost";
	// $user = "root";
	// $password = "";
	// $nama_database = "akademik";
	// $koneksi = mysqli_connect($server, $user, $password, $nama_database);
	// if($_SESSION['status'] !== "login") {
	// header("location:../index.php?pesan=belum_login");
	// }	 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Eka Januard Firdaus" />
    <title>Reservasi Zoom FTP UB</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/iconftp.png" />
    <!-- <link href="../css/styles.css" rel="stylesheet" /> -->
</head>

<body>
    <a class="navbar-brand js-scroll-trigger" float="left-top" href="#page-top" margin-left="20px" margin top="20px"><img src="../assets/img/navbar-logo.png" alt="" /></a>
	
	<center><h1>Halaman Admin!</h1>
	<h4>Selamat datang <?php echo $_SESSION['username']?>, Anda telah berhasil login</h4>
	<p>Sebelum menambahkan data, cek tabel data yang sudah tervalidasi dan tabel data yang belum tervalidasi</p><br>
    
    <h4>Data reservasi yang sudah tervalidasi</h4>
    <table border="1" cellpadding="3%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Kegiatan</th>
            <th>Judul Kegiatan</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Link Zoom</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php while($zoom = mysqli_fetch_assoc($query) ) : ?>
            <tr>
                <td><?= $i ; ?></td>
                <td><?= $zoom["nama"] ; ?></td>
                <td><?= $zoom["email"] ; ?></td>
                <td><?= $zoom["nomorhp"] ; ?></td>
                <td><?= $zoom["jenis_kegiatan"] ; ?></td>
                <td><?= $zoom["nama_kegiatan"] ; ?></td>
                <td><?= $zoom["tanggal"] ; ?></td>
                <td><?= $zoom["jam_mulai"] ; ?></td>
                <td><?= $zoom["jam_selesai"] ; ?></td>
                <td><?= $zoom["link_zoom"] ; ?></td>
                <td><a href="form-edit.php?id='<?= $zoom["id_reservasi"] ; ?>' ">Edit</a> | <a href="hapus.php?id='<?= $zoom["id_reservasi"] ; ?>' ">Hapus</a> </td>
            </tr>
        <?php $i++; ?>    
        <?php   endwhile; ?>

    </tbody>
    </table>
    <p>Total data reservasi sebanyak <?php echo mysqli_num_rows($query) ?> data.</p><br>

    <h4>Data reservasi yang belum tervalidasi</h4>
    <table border="1" cellpadding="3%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Kegiatan</th>
            <th>Judul Kegiatan</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Link Zoom</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1; ?>
        <?php while($zoom = mysqli_fetch_assoc($query2) ) : ?>
            <tr>
                <td><?= $i ; ?></td>
                <td><?= $zoom["nama"] ; ?></td>
                <td><?= $zoom["email"] ; ?></td>
                <td><?= $zoom["nomorhp"] ; ?></td>
                <td><?= $zoom["jenis_kegiatan"] ; ?></td>
                <td><?= $zoom["nama_kegiatan"] ; ?></td>
                <td><?= $zoom["tanggal"] ; ?></td>
                <td><?= $zoom["jam_mulai"] ; ?></td>
                <td><?= $zoom["jam_selesai"] ; ?></td>
                <td><?= $zoom["link_zoom"] ; ?></td>
                <td><a href="form-edit.php?id='<?= $zoom["id_reservasi"] ; ?>' ">Edit</a> | <a href="hapus.php?id='<?= $zoom["id_reservasi"] ; ?>' ">Hapus</a> </td>
            </tr>
        <?php $i++; ?>    
        <?php   endwhile; ?>
            
    </tbody>
    </table>

    <p>Total data reservasi sebanyak <?php echo mysqli_num_rows($query2) ?> data.</p><br>
    <a href="form-tambah.php">Tambah Reservasi Baru</a>
	<br><br>

<p>Data 3 tabel</p>
    <table border="1" cellpadding="3%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Judul Kegiatan</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Username</th>
            <th>Password</th>
            <th>Grup User</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1; ?>
        <?php while($zoom = mysqli_fetch_assoc($query3) ) : ?>
            <tr>
                <td><?= $i ; ?></td>
                <td><?= $zoom["jenis_kegiatan"] ; ?></td>
                <td><?= $zoom["nama_kegiatan"] ; ?></td>
                <td><?= $zoom["tanggal"] ; ?></td>
                <td><?= $zoom["jam_mulai"] ; ?></td>
                <td><?= $zoom["jam_selesai"] ; ?></td>
                <td><?= $zoom["nama"] ; ?></td>
                <td><?= $zoom["email"] ; ?></td>
                <td><?= $zoom["nomorhp"] ; ?></td>
                <td><?= $zoom["username"] ; ?></td>
                <td><?= $zoom["password"] ; ?></td>
                <td><?= $zoom["grup"] ; ?></td>
            </tr>
        <?php $i++; ?>    
        <?php   endwhile; ?>
            
    </tbody>
    </table>

    <p>Total data reservasi sebanyak <?php echo mysqli_num_rows($query3) ?> data.</p><br>

    <a href="logout.php">Keluar / Logout</a>
</center>
</body>

<footer class="footer py-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-auto text-lg-left">Copyright © <h5>Eka Januard Firdaus - 19510006</h5><h6>Universitas Gajayana Malang 2021</h6></div>
        </div>
    </div>
</footer>
</html>
