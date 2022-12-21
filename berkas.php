<?php include('config.php'); 
    session_start();
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
            .e8_103 { 
                width:1423px;
                height:114px;
                position:absolute;
                left:0px;
                top:0px;
            }
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
            /* .e11_45 { 
                background-color:rgba(249.6875050663948, 249.6875050663948, 249.6875050663948, 1);
                width:1423px;
                height:1357px;
                position:absolute;
            } */
            .e11_46 { 
                width:1423px;
                height:114px;
                position:absolute;
                left:0px;
                top:0px;
            }
            .e11_47 { 
                background-color:rgba(176.4015519618988, 207.18058437108994, 243.31249594688416, 1);
                width:1423px;
                height:753px;
                position:absolute;
                left:0px;
                top:0px;
            }
            .e11_48 { 
                width:76px;
                height:76px;
                position:absolute;
                left:27px;
                top:19px;
                background-image:url(images/image_3.png);
                background-repeat:no-repeat;
                background-size:cover;
            }
            .e11_49 { 
                width:128.4513397216797px;
                height:59px;
                position:absolute;
                left:1243.3687744140625px;
                top:27px;
            }
            .e11_50 { 
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
            .e11_51 { 
                color:rgba(255, 255, 255, 1);
                width:128.38648986816406px;
                height:27px;
                position:absolute;
                left:0.02135355956852436px;
                top:18px;
                font-family:Spectral;
                text-align:center;
                font-size:18px;
                letter-spacing:0;
            }
            .e11_52 { 
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
            .e11_53 { 
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
            .e12_84 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:388px;
                height:41px;
                position:absolute;
                left:584px;
                top:180px;
                font-family:Spectral;
                text-align:left;
                font-size:36px;
                letter-spacing:0;
            }
            .e12_172 { 
                width:276px;
                height:72px;
                position:absolute;
                left:630px;
                top:800px;
            }
            .e12_147 { 
                background-color:rgba(255, 115.00000074505806, 29.000000171363354, 1);
                width:276px;
                height:72px;
                position:absolute;
                left:0px;
                top:0px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_148 { 
                color:rgba(239.0625, 239.0625, 239.0625, 1);
                width:106px;
                height:49px;
                position:absolute;
                left:84px;
                top:12px;
                font-family:Spectral;
                text-align:center;
                font-size:32px;
                letter-spacing:0;
            }
            .e40_454 { 
                width:903px;
                height:970px;
                position:absolute;
                left:260px;
                top:301px;
            }
            .e12_162 { 
                width:903px;
                height:106px;
                position:absolute;
                left:0px;
                top:0px;
            }
            .e12_133 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:903px;
                height:63px;
                position:absolute;
                left:0px;
                top:43px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_137 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:89px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_163 { 
                width:903px;
                height:106px;
                position:absolute;
                left:0px;
                top:134px;
            }
            .e12_136 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:903px;
                height:63px;
                position:absolute;
                left:0px;
                top:43px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_138 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_164 { 
                width:903px;
                height:94px;
                position:absolute;
                left:0px;
                top:280px;
            }
            .e12_134 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:903px;
                height:63px;
                position:absolute;
                left:0px;
                top:31px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_139 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_165 { 
                width:903px;
                height:106px;
                position:absolute;
                left:0px;
                top:402px;
            }
            .e12_135 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:903px;
                height:63px;
                position:absolute;
                left:0px;
                top:43px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_140 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_166 { 
                width:400px;
                height:106px;
                position:absolute;
                left:0px;
                top:536px;
            }
            .e12_141 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:400px;
                height:63px;
                position:absolute;
                left:0px;
                top:43px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_142 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_167 { 
                width:400px;
                height:106px;
                position:absolute;
                left:503px;
                top:536px;
            }
            .e12_144 { 
                background-color:rgba(244.0000006556511, 242.00000077486038, 242.00000077486038, 1);
                width:400px;
                height:63px;
                position:absolute;
                left:0px;
                top:43px;
                border-top-left-radius:22px;
                border-top-right-radius:22px;
                border-bottom-left-radius:22px;
                border-bottom-right-radius:22px;
            }
            .e12_145 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_168 { 
                width:333px;
                height:86px;
                position:absolute;
                left:0px;
                top:670px;
            }
            .e12_143 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_149 { 
                /* background-color:rgba(95.00000193715096, 157.0000058412552, 247.00000047683716, 1);
                width:179px;
                height:43px; */
                position:absolute;
                left:0px;
                top:43px;
                /* border-top-left-radius:13px;
                border-top-right-radius:13px;
                border-bottom-left-radius:13px;
                border-bottom-right-radius:13px; */
            }
            .e12_151 { 
                color:rgba(255, 255, 255, 1);
                width:127px;
                height:31px;
                position:absolute;
                left:20px;
                top:49px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_152 { 
                color:rgba(30.00000011175871, 30.00000011175871, 30.00000011175871, 1);
                width:134px;
                height:26px;
                position:absolute;
                left:199px;
                top:54px;
                font-family:Spectral;
                text-align:left;
                font-size:20px;
                letter-spacing:0;
            }
            .e12_169 { 
                width:333px;
                height:86px;
                position:absolute;
                left:503px;
                top:670px;
            }
            .e12_146 { 
                color:rgba(23.000000528991222, 70.00000342726707, 162.00000554323196, 1);
                width:199px;
                height:31px;
                position:absolute;
                left:0px;
                top:0px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
                letter-spacing:0;
            }
            .e12_150 { 
                /* background-color:rgba(95.00000193715096, 157.0000058412552, 247.00000047683716, 1);
                width:179px;
                height:43px; */
                position:absolute;
                left:0px;
                top:43px;
                /* border-top-left-radius:13px;
                border-top-right-radius:13px;
                border-bottom-left-radius:13px;
                border-bottom-right-radius:13px; */
            }
            .e12_153 { 
                color:rgba(30.00000011175871, 30.00000011175871, 30.00000011175871, 1);
                width:134px;
                height:26px;
                position:absolute;
                left:199px;
                top:54px;
                font-family:Spectral;
                text-align:left;
                font-size:20px;
                letter-spacing:0;
            }
            .e12_154 { 
                color:rgba(255, 255, 255, 1);
                width:127px;
                height:31px;
                position:absolute;
                left:20px;
                top:49px;
                font-family:Spectral;
                text-align:left;
                font-size:24px;
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
        <div class=e11_45>
            <span  class="e12_84">Upload Berkas</span>
            <form action="berkas-process.php" method="post" enctype="multipart/form-data">
                <div class=e40_454>
                    <div class=e12_162>
                        <input type="text" class="e12_133"  name="notelp"  required>
                        <span  class="e12_137">No telp</span>
                    </div>
                    <div class=e12_163>
                        <input type="text" class="e12_136"  name="tmplahir"  required>
                        <span  class="e12_138">Tempat Lahir</span>
                    </div>
                    <div class=e12_164>
                        <input type="date" class="e12_134"  name="tgllahir"  required>
                        <span  class="e12_139">Tanggal Lahir</span>
                    </div>
                    <div class=e12_165>
                        <input type="text" class="e12_135"  name="agama"  required>
                        <span  class="e12_140">Agama</span>
                    </div>
                    <div class=e12_166>
                        <input type="text" class="e12_141"  name="tinggi"  required>
                        <span  class="e12_142">Tinggi (cm)</span>
                    </div>
                    <div class=e12_167>
                        <input type="text" class="e12_144"  name="berat"  required>
                        <span  class="e12_145">Berat (Kg)</span>
                    </div>
                    <div class=e12_168>
                        <span  class="e12_143">Foto diri</span>
                        <input type="file" class="e12_149" name="foto">
                        <!-- <div class="e12_149"></div>
                        <span  class="e12_151">Choose File</span>
                        <span  class="e12_152">No file Chosen</span> -->
                    </div>
                    <div class=e12_169>
                        <span  class="e12_146">Foto KTP</span>
                        <input type="file" class="e12_150" name="ktp">
                        <!-- <div class="e12_150"></div>
                        <span  class="e12_153">No file Chosen</span>
                        <span  class="e12_154">Choose File</span> -->
                    </div>
                    <div class=e12_172>
                        <input type="submit" class="e12_147" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>