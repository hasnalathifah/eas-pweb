<?php

    require("phpfpdf/fpdf.php");

    include "config.php";
    session_start();
    $id = $_SESSION['id'];

    $pdf = new FPDF("l", "mm", "A4");

    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 16);
    $pdf->Cell(272, 7, "KARTU UJIAN CALON PEGAWAI", 0, 1, "C");
    $pdf->Cell(272, 10, "", 0, 1, "C");

    $query = "SELECT foto_diri, lokasi, NIK, no_peserta, Nama, Jenis_kelamin, tanggal, waktu FROM calon_peserta JOIN peserta_ujian ON calon_peserta.id=peserta_ujian.calon_id JOIN jadwal_ujian ON peserta_ujian.jadwal_id=jadwal_ujian.id WHERE calon_peserta.id='$id'";
    $result = mysqli_query($db,  $query);

    $data = mysqli_fetch_array($result);



    if ($result) {   
        $pdf->Image("images/image_3.png",10,4,20); 
        $pdf->Image("images/bc.png",210,15,50);   
        $pdf->Image("images/".$data['foto_diri'],210,60,50);      
        $pdf->SetFont("Times", "", 14);
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "Instansi", 0, 0, "L");
        $pdf->Cell(64, 15, ": Kementerian Perikanan dan Kelautan",  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "Lokasi", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data['lokasi'],  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "No. Peserta", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data['no_peserta'],  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "NIK", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data['NIK'],  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "Nama", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data["Nama"],  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "Jenis Kelamin", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data["Jenis_kelamin"],  0,  1,  "L");
        $pdf->Cell(30, 15, "", 0, 0, "L");
        $pdf->Cell(64, 15, "Tanggal / waktu ujian", 0, 0, "L");
        $pdf->Cell(64, 15, ": ".$data["tanggal"]." / ".$data['waktu'],  0,  1,  "L");

    }
    else {
        die("Gagal mengakses basis data...");
    }
// // Memberikan space kebawah agar tidak terlalu rapat
// $pdf->Cell(10, 7, "", 0, 1);

// $pdf->SetFont("Arial", "B", 10);
// $pdf->Cell(20, 6, "NIM", 1, 0);
// $pdf->Cell(85, 6, "NAMA MAHASISWA", 1, 0);
// $pdf->Cell(27, 6, "NO HP", 1, 0);
// $pdf->Cell(25, 6, "TANGGAL LHR", 1, 1);

// $pdf->SetFont("Arial", "", 10);

// include "koneksi.php";
// $mahasiswa = mysqli_query($connect,  "select * from mahasiswa");
// while ($row = mysqli_fetch_array($mahasiswa)){
//     $pdf->Cell(20, 6, $row["nim"], 1, 0);
//     $pdf->Cell(85, 6, $row["nama_lengkap"], 1, 0);
//     $pdf->Cell(27, 6, $row["no_hp"], 1, 0);
//     $pdf->Cell(25, 6, $row["tanggal_lahir"], 1, 1); 
// }

$pdf->Output();
?>