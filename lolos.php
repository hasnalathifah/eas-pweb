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
$sql = "UPDATE calon_peserta SET status_dft='LOLOS' WHERE id='$id'";
$query = mysqli_query($db, $sql);
$sql2 = "SELECT calon_id FROM peserta_ujian WHERE calon_id='$id'";
$result = mysqli_query($db, $sql2);
$calon = mysqli_fetch_array($result);

if(!$calon || $calon['calon_id']==""){
    $sql3 = "SELECT id, tgl_lahir FROM calon_peserta WHERE id='$id'";
    $result = mysqli_query($db, $sql3);
    $data = mysqli_fetch_array($result);

    $tgl = date_create($data['tgl_lahir']);
    $date = date_format($tgl, "Ymd");
    $jadwalid = random_int(1, 3);
    $nop = "'$id-$jadwalid-$date'";
    $sql2 = "INSERT INTO peserta_ujian(no_peserta, calon_id, jadwal_id) VALUES ($nop,$id,$jadwalid)";
    $result = mysqli_query($db, $sql2);
}

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
