<?php 
    
    include("config.php");

    if (isset($_POST["daftar"])) {
        $nik = $_POST["nik"];
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jk"];
        $email = $_POST["email"];
    $uname = $_POST['uname'];
        $pwd = $_POST["pwd"];
        $pwd2 = $_POST["pwd2"];
        if ($pwd != $pwd2) {
            $message = 'Password tidak sama!';
            echo "<SCRIPT> //not showing me this
                alert('$message')
                window.location.replace('register.php');
            </SCRIPT>";
        }

        $query = "INSERT INTO calon_peserta (NIK, uname, Nama, jenis_kelamin, email, password) VALUE ('$nik','$uname', '$nama', '$jenis_kelamin', '$email', '$pwd')";

        $result = mysqli_query($db, $query);

        if ($result) {
            header("Location: ./login.php?status=sukses");
        } else {
            header("Location: ./register.php?status=gagal");
        }
    }
    else {
        header("HTTP/1.0 403 Forbidden");
    }
?>