<!-- UAS PromNetR2 -    Nama    : Eka Januard Firdaus 
                        NIM     : 19510006 -->
<?php 
	session_start();
	//menghapus semua session
	$_SESSION = [];
	session_unset();
	session_destroy();

	//mengalihkan halaman dan mengirim pesan logout
	header("Location:../index.php?");
?>