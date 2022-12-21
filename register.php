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
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
            }

            @media (min-width: 1025px) {
            .h-custom-2 {
            height: 100%;
            }
        }
          
        body {background-color:rgba(249.6875050663948, 249.6875050663948, 249.6875050663948, 1);}
      </style>
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img src="images/Capture.JPG"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left; background-color: rgba(176.4015519618988, 207.18058437108994, 243.31249594688416, 1)">
                    </div>
                    <div class="col-sm-6 text-black">

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4">

                            <form action="register-process.php" method="post" style="width: 23rem;" id="frm-regis">

                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Buat Akun</h3>

                                <div class="form-outline mb-4">
                                    <input type="text" id="nama" class="form-control form-control-lg" name="nama" required />
                                    <label class="form-label" for="nama">Nama Lengkap</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="nik" class="form-control form-control-lg" name="nik" required/>
                                    <label class="form-label" for="nik">NIK</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="uname" class="form-control form-control-lg" name="uname" required/>
                                    <label class="form-label" for="uname">username</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
                                    <label class="form-label" for="email">email</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label">Jenis Kelamin</label><br>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="radio1" name="jk" value="Perempuan" required/>
                                        <label class="form-check-label" for="radio1">Perempuan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="radio2" name="jk" value="Laki-laki" required/>
                                        <label class="form-check-label" for="radio2">Laki-laki</label>
                                    </div>
                                </div>
                                <!-- <div class="form-outline mb-4">
                                    <input type="password" id="pwd" class="form-control form-control-lg" name="pwd" required/>
                                    <label class="form-label" for="pwd">Password</label>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" id="pwd" class="form-control" name="pwd" required/>
                                        <label class="form-label" for="pwd">Password</label>
                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="password" id="pwd2" class="form-control" name="pwd2" required/>
                                        <label class="form-label" for="pwd2">Confirm Password</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-info btn-lg btn-block" type="submit" name="daftar">Daftar</button>
                                </div>

                                <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                                <p>Sudah punya akun? <a href="login.php" class="link-info">Log in</a></p>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </body>
</html>