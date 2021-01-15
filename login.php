<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php
	session_start();
	include 'koneksi.php';

	//menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//mben
	//$grup = 'admin'
	//$grup	  = $_POST['grup'];

	//menyeleksi data pada tabel admin dengan username dan password yang sesuai
	$data = mysqli_query( $koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password' ");
	// $data1 = mysqli_query( $koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password' and grup='$grup' ");
	// $data2 = mysqli_query( $koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
	//menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	if( $cek > 0 ) {

		//ambil data user untuk jadi template
		// $datauser = mysql_query( $koneksi, "SELECT * FROM admin INNER JOIN data_user on admin.idUser = data_user.idUser WHERE admin.username='$username' ");
		// $namalengkap = data_user.nama;
		// $email = data_user.email;
		// $nipnim = data_user.nipnim;
		// $nohp = data_user.nomorhp;
		// $_SESSION['names'] = $names;
		// $_SESSION['email'] = $email;
		// $_SESSION['nipnim'] = $email;
		// $_SESSION['nohp'] = $nohp;


		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin/index.php");
		
	// } else if ( $cek2 > 0 ) {
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['status'] = "login";
	// 	header("location:user/index.php");

	} else {
	 	header("location:index.php?pesan=gagal");
	 	
	}
	
?>