<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php
	require 'koneksi.php';
	$dbValidasi = "SELECT * FROM data_reservasi INNER JOIN data_host on data_reservasi.idHost = data_host.idHost INNER JOIN data_user on data_reservasi.idUser = data_user.idUser";
	$sql = query ($dbValidasi);
    $hitsql = mysqli_query($koneksi, $dbValidasi);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Eka Januard Firdaus" />
    <title>Reservasi Zoom FTP UB</title>
	<link rel="icon" type="image/x-icon" href="assets/img/iconftp.png" />
<!-- 	<link href="css/styles.css" rel="stylesheet" /> -->
</head>

<body>
	<a class="navbar-brand js-scroll-trigger" float="left-top" href="#page-top" margin-left="20px" margin top="20px"><img src="assets/img/navbar-logo.png" alt="" /></a>	
	
	
<center>
	<h1>Reservasi Zoom FTP</h1>
	<!-- <a href="admin\index.php">halaman admin</a> -->

	<h4>Data reservasi yang sudah tervalidasi</h4>
    <table border="1" cellpadding="3%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Kegiatan</th>
            <th>Judul Kegiatan</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Link Zoom</th>
        </tr>
    </thead>
    <tbody>
    	<?php $i = 1; ?>
        <?php foreach($sql as $row) : ?>
        <!-- while($zoom = mysqli_fetch_assoc($query) ) : ?> -->
            <tr>
            	<td><?= $i ; ?></td>
	            <td><?= $row["nama"] ; ?></td>
	            <td><?= $row["email"] ; ?></td>
	            <td><?= $row["nomorhp"] ; ?></td>
	            <td><?= $row["jenis_kegiatan"] ; ?></td>
	            <td><?= $row["nama_kegiatan"] ; ?></td>
	            <td><?= $row["tanggal"] ; ?></td>
	            <td><?= $row["jam_mulai"] ; ?></td>
	            <td><?= $row["jam_selesai"] ; ?></td>
	            <td><?= $row["link_zoom"] ; ?></td>
	        </tr>
        <?php $i++; ?>    
        <?php	endforeach; ?>
        

    </tbody>
    </table>

   
    <p>Total data reservasi sebanyak <?php echo mysqli_num_rows($hitsql) ?> data.</p>
    <p>Silahkan hubungi tim akademik jika data anda masih belum tervalidasi pada halaman <a href="kontak.php">kontak.</a></p>
    <p>Silakan login, jika hendak melakukan reservasi</p><br>
    <form float="left" action="login.php" method="post";>
		
			 <label for="username">username :</label> <input type="text" name="username" id="username"> <button type="submit" name="login">Masuk</button> <br>
			 <label for="password">password :</label> <input type="password" name="password" id="password">
			 <button type="submit" name="signup">Daftar</button>
	</form>
	<br><br><br>
    <!-- <a href="form-tambah.php">Tambah Reservasi Baru</a> -->
    
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