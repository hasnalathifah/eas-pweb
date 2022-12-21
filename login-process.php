<?php 
include 'config.php';
 
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$login = mysqli_query($db, "select id, Nama from panitia where username='$uname' and password='$pwd'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);
if($cek > 0){
	session_start();
    $_SESSION['id'] = $data['id'];
    $_SESSION['uname'] = $uname;
	$_SESSION['nama'] = $data['Nama'];
	$_SESSION['status'] = "login";
	header("location:a_dashboard.php");
}
 
$login2 = mysqli_query($db, "select id, Nama from calon_peserta where uname='$uname' and password='$pwd'");
$cek2 = mysqli_num_rows($login2);
$data2 = mysqli_fetch_array($login2);
 
if($cek2 > 0){
	session_start();
    $_SESSION['id'] = $data2['id'];
    $_SESSION['uname'] = $uname;
	$_SESSION['nama'] = $data2['Nama'];
	$_SESSION['status'] = "login";
	header("location:c_dashboard.php");
}else{
	$message = 'username atau password salah!';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('login.php');
    </SCRIPT>";
}
 
?>