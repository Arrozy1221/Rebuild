<?php

require_once("koneksi.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); //nama
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING); //alamat
    $telp = filter_input(INPUT_POST, 'telp', FILTER_SANITIZE_STRING); //email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); //no tlp

    // menyiapkan query
    $sql = "INSERT INTO users (name, alamat, email, telp) 
            VALUES (:name, :alamat, :email, :telp)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":alamat" => $alamat,
        ":telp" => $telp,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: edmopay1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>EDMOPAY</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/skins/LOGO-01 2.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!--Animation-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/edmopay.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/skins/LOGO-01 2.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Product & Feature</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                        <li class="nav-item">
                            <div class="rectangle-rounded">
                                <a class="nav-link" href="#">Download</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Home-->
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="container-fluid animate-fadeIn">
                            <div class="masthead-heading ms-5">EDMOPAY</div>
                            <div class="masthead-subheading ms-5 mt-2">Bayar Mudah, Bayar Cepat, Bayar Aman dan Nyaman</div>
                        </div>
                    </div>
                </div>    
            </div>
                
        </header>

        <!--About-->
        <section class="page-section" id="about">
            <div class="container reveal">
                    <div class="row">
                    <div class="col">
                        <img src="assets/skins/LOGO-01 2.png" alt="">
                    </div>
                    <div class="col">
                        <h2 class="section-heading mt-5">Tentang EDMOPAY</h2>
                        <h3 class="about-text section-subheading">
                            EDMOPAY merupakan aplikasi pembayaran online berbasis android yang dapat memberikan kemudahan transaksi kepada masyarakat.
                        </h3>
                    </div>
            </div>
        </section>

        <!--Service-->
        <section class="page-section" id="service">
            <div class="container reveal">
                    <h2 class="section-heading text-center mb-5">Our Service</h2>
                    <h3 class="section-textlayout text-center">Saat ini EDMOPAY memiliki lebih dari 500+ produk 
                        dan layanan yang telah terintegrasi dan dapat dibayarkan melalui kios pembayaran. 
                        Jumlah tersebut akan terus bertambah seiring dengan semakin berkembangnya kerjasama yang dilakukan 
                        oleh MYX dengan berbagai penyedia layanan dan produk.</h3>
            </div>
        </section>

        <!-- Form-->
        <section class="page-section">
            <div class="container">
                <h2 class="section-heading text-center">BUAT AKUN SEKARANG</h2>
                
                <form action="" method="POST">
                    <!-- input nama -->
                    <div class="form-group w-100 mt-3">
                        <label for="name">Nama</label>
                        <input class="form-control mt-3 mb-3" type="text" name="name" placeholder="Masukan Nama Lengkap Anda *" data-sb-validations="required" />
                    </div>
                    
                    <!-- input alamat -->
                    <div class="form-group w-100 mt-3">
                        <label for="alamat">Alamat</label>
                        <input class="form-control mt-3 mb-3" type="text" name="alamat" placeholder="Masukan Alamat Lengkap Anda *" data-sb-validations="required" />
                    </div>

                    <!-- input email -->
                    <div class="form-group w-100 mt-3">
                        <label for="email">Email</label>
                        <input class="form-control mt-3 mb-3" type="email" name="email" placeholder="Masukan Email Anda *" data-sb-validations="required"/>
                    </div>      

                    <!-- input telp -->
                    <div class="form-group w-100 mt-3">
                        <label for="telp">No telphone</label>
                        <input class="form-control mt-3 mb-3" type="text" name="telp" placeholder="Masukan No. Telphone Anda *" data-sb-validations="required" />
                    </div>

                    <!-- daftar -->
                    <div class="text-center">
                        <input class="btn btn-primary btn-xl text-uppercase disable mt-3" type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
                    </div>
                                       
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form Berhasil Dikirim</div>
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->

                    <!-- Submit error message-->

                    <!-- This is what your users will see when there is-->
                    <!-- an error message-->
                    <!-- <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div> -->
                    
                    <!-- <div class="text-center">
                        <button class="btn btn-primary btn-xl text-uppercase disable mt-3" type="submit" name="Submit" value="Submit" >DAFTAR</button>
                    </div> -->

                </form>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start text-light">Copyright &copy; Mitra Yudha Xaviera</div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
