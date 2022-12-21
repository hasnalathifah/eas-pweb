<?php 

// session_start();

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: verif.php');
}

// ambil id dari query string
$id = $_GET['id'];
// $id = "1";

// buat query untuk ambil data dari database
$sql = "UPDATE calon_peserta SET status_dft='TOLAK' WHERE id='$id'";
$query = mysqli_query($db, $sql);
if( $query ) {
    // kalau berhasil alihkan ke halaman dengan status=sukses
    header('Location: a_dashboard.php?status=sukses');
} else {
    // kalau gagal alihkan ke halaman dengan status=gagal
    header('Location: verif.php?status=gagal');
}

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
