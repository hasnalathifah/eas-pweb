<?php 

session_start();

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: a_dashboard.php');
}

// ambil id dari query string
$id = $_GET['id'];
// $id = "1";

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_peserta WHERE id='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

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
            .e40_455 { 
            	background-color:rgba(249.6875050663948, 249.6875050663948, 249.6875050663948, 1);
            	width:1423px;
            	height:1377px;
            	position:absolute;
            }
            .e40_456 { 
            	width:1423px;
            	height:114px;
            	position:absolute;
            	left:0px;
            	top:0px;
            }
            .e40_457 { 
            	background-color:rgba(176.4015519618988, 207.18058437108994, 243.31249594688416, 1);
            	width:1423px;
            	height:753px;
            	position:absolute;
            	left:0px;
            	top:0px;
            }
            .e40_458 { 
            	width:76px;
            	height:76px;
            	position:absolute;
            	left:27px;
            	top:19px;
            	background-image:url(images/image_3.png);
            	background-repeat:no-repeat;
            	background-size:cover;
            }
            .e40_459 { 
            	width:128.4513397216797px;
            	height:59px;
            	position:absolute;
            	left:1243.3687744140625px;
            	top:27px;
            }
            .e40_460 { 
            	box-shadow:0px 1px 3px rgba(0, 0, 0, 0.10000000149011612);
            	background-color:rgba(49.00000087916851, 46.000001057982445, 129.00000751018524, 0.800000011920929);
            	width:128.4513397216797px;
            	height:59px;
            	position:absolute;
            	left:0px;
            	top:0px;
            	border-top-left-radius:5px;
            	border-top-right-radius:5px;
            	border-bottom-left-radius:5px;
            	border-bottom-right-radius:5px;
            }
            .e40_461 { 
            	color:rgba(255, 255, 255, 1);
            	width:128.38648986816406px;
            	height:27px;
            	position:absolute;
            	left:0.021116133779287338px;
            	top:18px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:18px;
            	letter-spacing:0;
            }
            .e40_462 { 
            	box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25);
            	color:rgba(255, 255, 255, 1);
            	width:342px;
            	height:33px;
            	position:absolute;
            	left:885px;
            	top:41px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:22px;
            	letter-spacing:0;
            }
            .e40_463 { 
            	box-shadow:0px 4px 4px rgba(0, 0, 0, 0.25);
            	color:rgba(255, 255, 255, 1);
            	width:540.9005737304688px;
            	height:33px;
            	position:absolute;
            	left:65px;
            	top:41px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:22px;
            	letter-spacing:0;
            }
            .e40_472 { 
            	width:1263px;
            	height:1117px;
            	position:absolute;
            	left:80px;
            	top:167px;
            }
            .e40_473 { 
            	background-color:rgba(219.93750303983688, 219.93750303983688, 219.93750303983688, 1);
            	width:1263px;
            	height:1117px;
            	position:absolute;
            	left:0px;
            	top:0px;
            	border-top-left-radius:48px;
            	border-top-right-radius:48px;
            	border-bottom-left-radius:48px;
            	border-bottom-right-radius:48px;
            }
            .e40_479 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:65px;
            	height:31px;
            	position:absolute;
            	left:530px;
            	top:178px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_480 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:153px;
            	height:31px;
            	position:absolute;
            	left:530px;
            	top:248px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_481 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:153px;
            	height:31px;
            	position:absolute;
            	left:530px;
            	top:318px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_482 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:48px;
            	height:31px;
            	position:absolute;
            	left:526px;
            	top:108px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_502 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:95px;
            	height:31px;
            	position:absolute;
            	left:50px;
            	top:93px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_504 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:106px;
            	height:31px;
            	position:absolute;
            	left:50px;
            	top:544px;
            	font-family:Spectral;
            	text-align:center;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_484 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:77px;
            	height:31px;
            	position:absolute;
            	left:530px;
            	top:388px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_485 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:214px;
            	height:31px;
            	position:absolute;
            	left:527px;
            	top:458px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_486 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:228px;
            	height:31px;
            	position:absolute;
            	left:527px;
            	top:528px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_487 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	width:147px;
            	height:31px;
            	position:absolute;
            	left:530px;
            	top:598px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_493 { 
            	height:286px;
            	position:absolute;
            	left:25px;
            	top:172px;
            	background-repeat:no-repeat;
            	background-size:cover;
            }
            .e40_503 { 
            	height:200px;
            	position:absolute;
            	left:25px;
            	top:621px;
            	background-repeat:no-repeat;
            	background-size:cover;
            }
            .e40_507 { 
            	width:230px;
            	height:55px;
            	position:absolute;
            	left:917px;
            	top:972px;
            }
            .e40_508 { 
            	background-color:rgba(61.70025318861008, 192.31249898672104, 113.94516214728355, 1);
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
            .e40_509 { 
            	color:rgba(255, 255, 255, 1);
            	width:107px;
            	height:31px;
            	position:absolute;
            	left:60px;
            	top:12px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_510 { 
            	width:230px;
            	height:55px;
            	position:absolute;
            	left:214px;
            	top:1139px;
            }
            .e40_511 { 
            	background-color:rgba(247.55513548851013, 32.54897743463516, 32.54897743463516, 1);
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
            .e40_512 { 
            	color:rgba(255, 255, 255, 1);
            	/* width:62px; */
            	height:31px;
            	position:absolute;
            	left:84px;
            	top:12px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_494 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:317px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:765px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_505 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:81px; */
            	height:31px;
            	position:absolute;
            	left:606px;
            	top:835px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_506 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:144px; */
            	height:31px;
            	position:absolute;
            	left:879px;
            	top:835px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_495 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:344px; */
            	height:31px;
            	position:absolute;
            	top:345px;
                left:883px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_496 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:82px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:415px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_497 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:153px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:625px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_498 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:204px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:695px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_499 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:228px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:275px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_500 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:134px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:485px;
            	font-family:Spectral;
            	text-align:left;
            	font-size:24px;
            	letter-spacing:0;
            }
            .e40_501 { 
            	color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
            	/* width:72px; */
            	height:31px;
            	position:absolute;
            	left:883px;
            	top:555px;
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
        <div class=e40_455>
            <div class=e40_472>
                <div class="e40_473"></div>
                <span  class="e40_482">NIK</span>
                <span  class="e40_479">Nama</span>
                <span  class="e40_480">TTL</span>
                <span  class="e40_481">Jenis Kelamin</span>
                <span  class="e40_484">Agama</span>
                <span  class="e40_485">Berat/Tinggi Badan</span>
                <span  class="e40_486">Tanggal Pendaftaran</span>
                <span  class="e40_487">Alamat email</span>
                <span  class="e40_502">Foto diri</span>
                <?php
                    $query = "SELECT foto_diri FROM calon_peserta WHERE id='$id'";
                    $sql=mysqli_query($db,$query);
                    $result=mysqli_fetch_array($sql);
                    if ($result['foto_diri'] == "") {
                        echo "<img src='images/image_4.png' class='e40_493' alt='foto'>";
                    } else {
                        echo "<img src='images/".$result['foto_diri']."' class='e40_493' alt='foto'>";
                    }
                ?>
                <?php
                    $query = "SELECT foto_ktp FROM calon_peserta WHERE id='$id'";
                    $sql=mysqli_query($db,$query);
                    $result=mysqli_fetch_array($sql);
                    if ($result['foto_ktp'] == "") {
                        echo "<img src='images/image_4.png' class='e40_503' alt='foto'>";
                    } else {
                        echo "<img src='images/".$result['foto_ktp']."' class='e40_503' alt='foto'>";
                    }
                ?>
                <span  class="e40_504">Foto KTP</span>
                <a class='btn e40_507'  <?php  echo "href='lolos.php?id=$id'";?> role='button'>
                    <div class="e40_508"></div>
                    <span  class="e40_509">Lolos</span>
                </a>
            </div>
            <a class='btn e40_510'  <?php  echo "href='tolak.php?id=$id'";?> role='button'>
                <div class="e40_511"></div>
                <span  class="e40_512">Tolak</span>
            </a>
            <span  class="e40_505">No telp</span>
            <span  class="e40_499">
                <?php echo " : " . $data['NIK']; ?>
            </span>
            <span  class="e40_495">
                <?php echo " : ".$data['Nama']; ?>
            </span>
            <span  class="e40_496">
                <?php echo " : " .$data['tempat_lahir']." / ". $data['tgl_lahir']; ?>
            </span>
            <span  class="e40_500">
                <?php echo " : " . $data['jenis_kelamin']; ?>
            </span>
            <span  class="e40_501">
                <?php echo " : " . $data['agama']; ?>
            </span>
            <span  class="e40_497">
                <?php echo " : " . $data['berat_badan'] ." Kg". " / " . $data['tinggi_badan']." cm"; ?>
            </span>
            <span  class="e40_498">
                <?php echo " : " . $data['tgl_daftar']; ?>
            </span>
            <span  class="e40_494">
                <?php echo " : ".$data['email']; ?>
            </span>
            <span  class="e40_506">
                <?php echo " : ".$data['no_telp']; ?>
            </span>

        </div>
    </body>
</html>