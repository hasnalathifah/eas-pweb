<?php include("config.php");
 
// Starting the session, to use and
// store data in session variable
session_start();
  
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
  
// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['nik']);
    header("location: login.php");
}
$id = $_SESSION['id'];
?>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Kementrian Kelautan dan Perikanan</title>
        <meta name="description" content="Pendaftaran Pegawai">
        <link href="https://fonts.googleapis.com/css?family=Spectral&display=swap" rel="stylesheet">
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet"/>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
      <!-- <link rel="stylesheet" href="styles.css"> -->
      
      <style>
            /* .e8_95 { 
                background-color:rgba(249.6875050663948, 249.6875050663948, 249.6875050663948, 1);
                width:1423px;
                height:1500px;
                position:absolute;
            } */
            .e8_103 { 
                width:1423px;
                height:114px;
                position:absolute;
                left:0px;
                top:0px;
            }
            /* .e8_104 { 
                background-color:rgba(176.4015519618988, 207.18058437108994, 243.31249594688416, 1);
                width:1423px;
                height:753px;
                position:absolute;
                left:0px;
                top:0px;
            } */
            .e8_106 { 
                width:76px;
                height:76px;
                position:absolute;
                left:27px;
                top:19px;
                background-image:url(images/image_3.png);
                background-repeat:no-repeat;
                background-size:cover;
            }
            .e10_2 { 
                width:128.4513397216797px;
                height:59px;
                position:absolute;
                left:1243.3687744140625px;
                top:27px;
            }
            .e10_3 { 
                box-shadow:0px 1px 3px rgba(0, 0, 0, 0.10000000149011612);
                background-color:rgba(49.00000087916851, 46.000001057982445, 129.00000751018524, 0.800000011920929);
                /* width:128.4513397216797px;
                height:59px; */
                /* position:absolute;
                left:0px;
                top:0px; */
                border-top-left-radius:5px;
                border-top-right-radius:5px;
                border-bottom-left-radius:5px;
                border-bottom-right-radius:5px;
            }
            .e10_4 { 
                color:rgba(255, 255, 255, 1);
                width:128.38648986816406px;
                height:27px;
                /* position:absolute;
                left:0.021116133779287338px;
                top:30px;  */
                font-family:Spectral;
                text-align:center;
                font-size:18px;
                letter-spacing:0;
            }
            .e10_5 { 
                /* box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25); */
                color:rgba(255, 255, 255, 1);
                width:342px;
                height:33px;
                /* position:absolute;
                left:885px;
                top:41px; */
                font-family:Spectral;
                text-align:center;
                font-size:22px;
                letter-spacing:0;
            }
            .e10_6 { 
                /* box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25); */
                color:rgba(255, 255, 255, 1);
                width:540.9005737304688px;
                height:33px;
                /* position:absolute;
                left:65px;
                top:41px; */
                font-family:Spectral;
                text-align:center;
                font-size:22px;
                letter-spacing:0;
            }
            .e11_26 { 
                width:1263px;
                height:300px;
                position:absolute;
                left:123px;
                top:1130px;
            }
            .e11_8 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:319px;
                height:46px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:36px;
                letter-spacing:0;
            }
            .e11_17 { 
                transform: rotate(0.36291378574508265deg);
                width:1263.025390625px;
                height:0px;
                position:absolute;
                left:0px;
                top:60px;
            }
            .e11_18 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:307px;
                height:31px;
                position:absolute;
                left:73px;
                top:112px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_41 { 
                width:230px;
                height:55px;
                position:absolute;
                left:415px;
                top:99px;
            }
            .e11_20 { 
                background-color:rgba(240.00000089406967, 171.00000500679016, 32.00000189244747, 1);
                width:230px;
                height:55px;
                position:absolute;
                left:0px;
                top:0px;
                border-top-left-radius:16px;
                border-top-right-radius:16px;
                border-bottom-left-radius:16px;
                border-bottom-right-radius:16px;
            }
            .e11_20_ { 
                background-color: lime;
                width:230px;
                height:55px;
                position:absolute;
                left:0px;
                top:0px;
                border-top-left-radius:16px;
                border-top-right-radius:16px;
                border-bottom-left-radius:16px;
                border-bottom-right-radius:16px;
            }
            .e11_39 { 
                color:rgba(255, 255, 255, 1);
                width:206px;
                height:31px;
                position:absolute;
                left:27px;
                top:12px;
                font-family:Spectral;
                text-align:left;
                font-size:18px;
                letter-spacing:0;
            }
            .e11_39_ { 
                color:rgba(255, 255, 255, 1);
                width:206px;
                height:31px;
                position:absolute;
                left:50px;
                top:14px;
                font-family:Spectral;
                text-align:left;
                font-size:18px;
            }
            .e11_36 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:420px;
                height:51px;
                position:absolute;
                left:613px;
                top:161px;
                font-family:Spectral;
                text-align:left;
                font-size:40px;
                letter-spacing:0;
            }
            .e11_22 { 
                width:1263px;
                height:804px;
                position:absolute;
                left:123px;
                top:257px;
            }
            .e11_7 { 
                background-color:rgba(219.93750303983688, 219.93750303983688, 219.93750303983688, 1);
                width:1263px;
                height:804px;
                position:absolute;
                left:0px;
                top:0px;
                border-top-left-radius:48px;
                border-top-right-radius:48px;
                border-bottom-left-radius:48px;
                border-bottom-right-radius:48px;
            }
            .e11_35 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:317px;
                height:31px;
                position:absolute;
                left:640px;
                top:563px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_25 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:344px;
                height:31px;
                position:absolute;
                left:640px;
                top:137px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_28 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:21px; */
                height:31px;
                position:absolute;
                left:640px;
                top:213px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_33 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:21px; */
                height:31px;
                position:absolute;
                left:640px;
                top:423px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_34 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:21px; */
                height:31px;
                position:absolute;
                left:640px;
                top:493px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_10 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:65px; */
                height:31px;
                position:absolute;
                left:384px;
                top:143px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_11 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:153px; */
                height:31px;
                position:absolute;
                left:384px;
                top:213px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_12 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:153px; */
                height:31px;
                position:absolute;
                left:384px;
                top:283px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_9 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:48px; */
                height:31px;
                position:absolute;
                left:380px;
                top:73px;
                font-family:Spectral;
                text-align:center;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_13 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:228px; */
                height:31px;
                position:absolute;
                left:640px;
                top:73px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_14 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:77px; */
                height:31px;
                position:absolute;
                left:384px;
                top:353px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_15 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:214px; */
                height:31px;
                position:absolute;
                left:381px;
                top:423px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_16 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:228px;
                height:31px;
                position:absolute;
                left:381px;
                top:493px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_31 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:147px; */
                height:31px;
                position:absolute;
                left:387px;
                top:563px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_29 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:134px; */
                height:31px;
                position:absolute;
                left:640px;
                top:283px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_32 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:21px; */
                height:31px;
                position:absolute;
                left:640px;
                top:353px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_38 { 
                width:319px;
                height:59px;
                position:absolute;
                left:532px;
                top:665px;
            }
            .e11_19 { 
                background-color:rgba(248.62500607967377, 105.66562682390213, 105.66562682390213, 1);
                width:319px;
                height:59px;
                position:absolute;
                left:0px;
                top:0px;
                border-radius:16px;
            }
            .e11_19_ { 
                background-color: yellowgreen;
                width:319px;
                height:59px;
                position:absolute;
                left:0px;
                top:0px;
                border-radius:16px;
            }
            .e11_37 { 
                color:rgba(255, 255, 255, 1);
                /* width:219px; */
                height:31px;
                position:absolute;
                left:50px;
                top:14px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e11_44 { 
                width:218px;
                /* height:286px; */
                position:absolute;
                left:88px;
                top:83px;
                background-repeat:no-repeat;
                background-size:cover;
            }
          
        body {background-color:rgba(249.6875050663948, 249.6875050663948, 249.6875050663948, 1);}
      </style>
    
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(176.4015519618988, 207.18058437108994, 243.31249594688416, 1);">
            <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" href="#"> <img src="images/image_3.png" alt="logo" width="76px" height="76px"></a>
        
              <!-- Toggle button -->
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
        
              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <span  class="e10_6">Kementrian Kelautan dan Perikanan</span>
                </ul>
        
                <!-- Icons -->
                <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#">
                            <span class="e10_5">
                                <?php echo $_SESSION['nama'];?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="btn e10_3" href="logout.php" role="button"><span  class="e10_4">Logout</span></a>
                    </li>
                </ul>
                
              </div>
            </div>
        </nav>
        <div class="container-fluid">
            <!-- <div class=e8_103>
                <div class="e8_104"></div>
                <div class="e8_106"></div>
            </div> -->
            <span  class="e11_36">Selamat Datang!</span>
            <div class="e11_22 mb-4">
                <div class="e11_7"></div>
                <span  class="e11_35">
                    <?php
                        $query = "SELECT email FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        echo " : ".$result['email'];
                    ?>
                </span>
                <span  class="e11_25">
                    <?php
                        $query = "SELECT Nama FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        echo " : ".$result['Nama'];
                    ?>
                </span>
                <span  class="e11_28">
                    <?php
                        $query = "SELECT tgl_lahir FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['tgl_lahir'] == ""){
                            echo " : -";
                        } else {
                            echo " : " . $result['tgl_lahir'];
                        }
                    ?>
                </span>
                <span  class="e11_33">
                    <?php
                        $query = "SELECT berat_badan, tinggi_badan FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['berat_badan'] == "") {
                            echo " : -";
                        } else {
                            echo " : " . $result['berat_badan'] ." Kg". " / " . $result['tinggi_badan']." cm";
                        }
                    ?>
                </span>
                <span  class="e11_34">
                    <?php
                        $query = "SELECT tgl_daftar FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['tgl_daftar'] == "") {
                            echo " : -";
                        } else {
                            echo " : " . $result['tgl_daftar'];
                        }
                    ?>
                </span>
                <span  class="e11_10">Nama</span>
                <span  class="e11_11">Tanggal Lahir</span>
                <span  class="e11_12">Jenis Kelamin</span>
                <span  class="e11_9">NIK</span>
                <span  class="e11_13">
                    <?php
                        $query = "SELECT NIK FROM calon_peserta WHERE id='$id';";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['NIK'] == "") {
                            echo " : -";
                        } else {
                            echo " : " . $result['NIK'];
                        }
                    ?>
                </span>
                <span  class="e11_14">Agama</span><span  class="e11_15">Berat/Tinggi Badan</span>
                <span  class="e11_16">Tanggal Pendaftaran</span>
                <span  class="e11_31">Alamat email</span>
                <span  class="e11_29"><?php
                        $query = "SELECT jenis_kelamin FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['jenis_kelamin'] == "") {
                            echo " : -";
                        } else {
                            echo " : " . $result['jenis_kelamin'];
                        }
                    ?></span>
                <span  class="e11_32">
                    <?php
                        $query = "SELECT agama FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['agama'] == "") {
                            echo " : -";
                        } else {
                            echo " : " . $result['agama'];
                        }
                    ?>
                </span>
                    <?php
                        $query = "SELECT tgl_daftar FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['tgl_daftar'] == "") {
                            echo "<div class=e11_38>";
                            echo "   <div class=e11_19></div>";
                            echo "   <span  class=e11_37>Data belum lengkap!</span>";
                            echo "</div>";
                        } else {
                            echo "<div class=e11_38>";
                            echo "   <div class=e11_19_></div>";
                            echo "   <span  class=e11_37>Data sudah lengkap!</span>";
                            echo "</div>";
                        }
                    ?>
                <div>
                <?php
                        $query = "SELECT foto_diri FROM calon_peserta WHERE id='$id'";
                        $sql=mysqli_query($db,$query);
                        $result=mysqli_fetch_array($sql);
                        if ($result['foto_diri'] == "") {
                            echo "<img src='images/image_4.png' class='e11_44' alt='foto'>";
                        } else {
                            echo "<img src='images/".$result['foto_diri']."' class='e11_44' alt='foto'>";
                        }
                    ?>
                </div>
            </div>
            <div class="e11_26 mb-4" style="margin-bottom: 20px;">
                <span  class="e11_8">Status Pendaftaran</span>
                <div class="e11_17"></div>
                <?php
                    $query = "SELECT status_dft FROM calon_peserta WHERE id='$id'";
                    $sql=mysqli_query($db,$query);
                    $result=mysqli_fetch_array($sql);
                    if ($result['status_dft'] == "TUNGGU") {
                        echo "<span  class=e11_18>Menunggu verifikasi</span>";
                    } else if ($result['status_dft'] == "LOLOS"){
                        echo "<span  class=e11_18>Pendaftaran berhasil!</span>";
                        echo "<a class='btn e11_41'  href='laporan-pdf.php' role='button'>";
                        echo "   <div class='e11_20_'></div>";
                        echo "<span  class=e11_39_>Cetak kartu</span>";
                        echo "</a>";
                    }else if ($result['status_dft'] == "TOLAK"){
                        echo "<span  class=e11_18>Berkas anda ditolak!<br>Periksa kembali berkas anda</span>";
                        echo "<a class='btn e11_41'  href='berkas.php' role='button'>";
                        echo "   <div class='e11_20'></div>";
                        echo "<span  class=e11_39>Lengkapi Berkas</span>";
                        echo "</a>";
                    }else {
                        echo "<span  class=e11_18>Berkas anda belum lengkap!</span>";
                        echo "<a class='btn e11_41'  href='berkas.php' role='button'>";
                        echo "   <div class='e11_20'></div>";
                        echo "<span  class=e11_39>Lengkapi Berkas</span>";
                        echo "</a>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>