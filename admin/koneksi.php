<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "akademik";
	$koneksi = mysqli_connect($server, $user, $password, $nama_database);
	if( !$koneksi ){
	    die("Gagal terhubung dengan database: " . mysqli_connect_error());
	} else {
		 	// echo "Koneksi database berhasil";
			}

	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows [] = $row;
		}
		return $rows;
	}

?>