<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kejora - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fliud bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include 'navbar.php'; ?>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fliud py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Kami Menghubungkan Talenta Terbaik dengan Peluang Emas</h1>
                        <p class="mb-4">Hadir sebagai jembatan antara pencari kerja ambisius dan perusahaan visioner. Kami mempermudah proses rekrutmen dengan sistem yang transparan, cepat, dan terpercaya. Tidak perlu bingung lagi mencari karir impian Anda.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lowongan Terupdate Setiap Hari</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Perusahaan Bonafit & Terverifikasi</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Proses Lamaran Satu Klik</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Kenapa Memilih Kejora?</h1>
                    <p>Kami berkomitmen memberikan pengalaman pencarian kerja terbaik dengan fitur-fitur unggulan.</p>
                </div>
                <div class="row g-4">
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center">
                            <div class="feature-icon">
                                <i class="fa fa-2x fa-user-shield"></i>
                            </div>
                            <h5 class="mb-3">100% Aman</h5>
                            <p class="text-muted mb-0">Data Anda dilindungi dengan sistem keamanan enkripsi terkini.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item text-center">
                            <div class="feature-icon">
                                <i class="fa fa-2x fa-search-dollar"></i>
                            </div>
                            <h5 class="mb-3">Transparan</h5>
                            <p class="text-muted mb-0">Info gaji dan detail pekerjaan ditampilkan secara jelas tanpa ada yang ditutupi.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item text-center">
                            <div class="feature-icon">
                                <i class="fa fa-2x fa-headset"></i>
                            </div>
                            <h5 class="mb-3">Support 24/7</h5>
                            <p class="text-muted mb-0">Tim kami siap membantu kendala Anda kapan saja, di mana saja.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-item text-center">
                            <div class="feature-icon">
                                <i class="fa fa-2x fa-rocket"></i>
                            </div>
                            <h5 class="mb-3">Respon Cepat</h5>
                            <p class="text-muted mb-0">Proses lamaran langsung diteruskan ke HRD agar Anda cepat dapat panggilan.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>