<?php
include("config.php");
session_start();
// Load file koneksi.php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "db_calonpgw"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
// Ambil Data yang Dikirim dari Form
$notelp = $_POST['notelp'];
$tmplahir = $_POST['tmplahir'];
$tgllahir = $_POST['tgllahir'];
$agama = $_POST['agama'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$foto = $_FILES['foto']['name'];
$tmpf = $_FILES['foto']['tmp_name'];
$ktp = $_FILES['ktp']['name'];
$tmpp = $_FILES['ktp']['tmp_name'];
$status_dft = "TUNGGU";
$tgldft = date("Y/m/d");
$id = $_SESSION['id'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fd = "fd".date('dmYHis').$foto;
$kt = "kt".date('dmYHis').$ktp;
// Set path folder tempat menyimpan fotonya
$pathf = "images/".$fd;
$pathk = "images/".$kt;
// Proses upload
if(move_uploaded_file($tmpf, $pathf)){ // Cek apakah gambar berhasil diupload atau tidak
    if(move_uploaded_file($tmpp, $pathk)){
         // Proses simpan ke Database
        $sql = $pdo->prepare("UPDATE calon_peserta SET no_telp=:notelp, tempat_lahir=:tmplahir, tgl_lahir=:tgllahir, agama=:agama, tinggi_badan=:tinggi, berat_badan=:berat, foto_diri=:foto, foto_ktp=:ktp, status_dft=:status_dft, tgl_daftar=:tgldft WHERE id=:id");
        $sql->bindParam(':notelp', $notelp);
        $sql->bindParam(':tmplahir', $tmplahir);
        $sql->bindParam(':tgllahir', $tgllahir);
        $sql->bindParam(':agama', $agama);
        $sql->bindParam(':tinggi', $tinggi);
        $sql->bindParam(':berat', $berat);
        $sql->bindParam(':foto', $fd);
        $sql->bindParam(':ktp', $kt);
        $sql->bindParam(':tgldft', $tgldft);
        $sql->bindParam(':status_dft', $status_dft);
        $sql->bindParam(':id', $id);
        $sql->execute(); // Eksekusi query insert
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            header("location: c_dashboard.php"); // Redirect ke halaman index.php
        }else{
            // Jika Gagal, Lakukan :
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='berkas.php'>Kembali Ke Form</a>";
        }
    }
    else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='berkas.php'>Kembali Ke Form</a>";
    }
 
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='berkas.php'>Kembali Ke Form</a>";
}
?>