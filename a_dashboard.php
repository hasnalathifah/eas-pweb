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
            .e11_8 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                /* width:319px;
                height:46px; */
                /* position:absolute;
                left:0px;
                top:0px; */
                font-family:Spectral;
                text-align:left;
                font-size:36px;
                letter-spacing:0;
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
        <br><br>
        <div class="d-flex justify-content-center">
            <h1 class="e11_8" >Daftar Calon Peserta</h1>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <table class="table table-striped table-sm" border="1" >
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('config.php');
                $batas = 10;
                $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

                $previous = $halaman - 1;
                $next = $halaman + 1;
                
                $sql = "SELECT id, NIK, Nama, status_dft FROM calon_peserta ORDER BY id DESC";
                $query = mysqli_query($db, $sql);
                $jumlah_data = mysqli_num_rows($query);
                $total_halaman = ceil($jumlah_data / $batas);
                $sql = "SELECT id, NIK, Nama, status_dft FROM calon_peserta ORDER BY id DESC limit $halaman_awal, $batas";
                $data = mysqli_query($db, $sql);
                $nomor = $halaman_awal+1;
                while($calon = mysqli_fetch_array($data)){
                    echo "<tr>";
                    
                    echo "<td>".$nomor++."</td>";
                    echo "<td>".$calon['NIK']."</td>";
                    echo "<td>".$calon['Nama']."</td>";
                    echo "<td>".$calon['status_dft']."</td>";
                    echo "<td>"."<a href='verif.php?id=".$calon['id']."'>Lihat Berkas</a>"."</td>";
                    
                    echo "</tr>";
                }		
            ?>
            </tbody>
        </table>
        </div>
        <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item" style="background-color: white;">
                <a class="page-link" style="color: blue;" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
              </li>
              <?php 
                for($x=1;$x<=$total_halaman;$x++){
              ?> 
                  <li class="page-item" style="background-color: white;"><a class="page-link" style="color: blue;" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                  <?php
                }
                  ?>				
              <li class="page-item" style="background-color: white;">
                <a  class="page-link" style="color: blue;" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
              </li>
            </ul>
        </nav>
    </body>
</html>