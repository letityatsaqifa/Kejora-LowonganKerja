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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Daftar Pekerjaan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pekerjaan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Search Start -->
        <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -60px; padding: 35px; background-color: var(--primary);" id="search-section">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text border-0 bg-white-start-pill ps-4 text-primary"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control border-0 py-3-end-pill ps-2" placeholder="Kata kunci (mis: Web Dev)">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text border-0 bg-white-start-pill ps-4 text-primary"><i class="fa fa-list-alt"></i></span>
                                    <select class="form-select border-0 py-3-end-pill ps-2">
                                        <option selected>Pilih Kategori</option>
                                        <option value="1">Marketing</option>
                                        <option value="2">Customer Service</option>
                                        <option value="3">Human Resource</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text border-0 bg-white-start-pill ps-4 text-primary"><i class="fa fa-map-marker-alt"></i></span>
                                    <select class="form-select border-0 py-3-end-pill ps-2">
                                        <option selected>Pilih Lokasi</option>
                                        <option value="1">Jakarta</option>
                                        <option value="2">Bandung</option>
                                        <option value="3">Remote (WFA)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <button class="btn btn-secondary border-0 w-100 py-3-pill text-white fw-bold shadow-sm btn-search-hover">
                            Cari Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->

        <!-- Jobs Start -->
        <div class="container-fliud py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">List Pekerjaan</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Unggulan</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
    
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Kami mencari Software Engineer berpengalaman untuk bergabung dalam tim pengembangan produk digital kami. Kandidat ideal harus menguasai PHP, Laravel, dan ReactJS.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Bertanggung jawab merancang strategi pemasaran digital dan konvensional. Memimpin tim marketing untuk mencapai target penjualan bulanan dan meningkatkan brand awareness.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Mencari desainer UI/UX yang kreatif untuk merancang antarmuka aplikasi mobile yang intuitif. Harus menguasai Figma, Adobe XD, dan prinsip-prinsip desain modern.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Memimpin tim kreatif dalam mengembangkan konsep visual untuk kampanye iklan berskala nasional. Pengalaman minimal 5 tahun di agensi periklanan.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Dibutuhkan developer Wordpress untuk maintenance dan kustomisasi tema website klien. Jam kerja fleksibel, bisa remote.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-primary py-3 px-5" href="job-list.php">Lihat Pekerjaan Lainnya</a>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Kami mencari Software Engineer berpengalaman untuk bergabung dalam tim pengembangan produk digital kami. Kandidat ideal harus menguasai PHP, Laravel, dan ReactJS.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Bertanggung jawab merancang strategi pemasaran digital dan konvensional. Memimpin tim marketing untuk mencapai target penjualan bulanan dan meningkatkan brand awareness.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Mencari desainer UI/UX yang kreatif untuk merancang antarmuka aplikasi mobile yang intuitif. Harus menguasai Figma, Adobe XD, dan prinsip-prinsip desain modern.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Memimpin tim kreatif dalam mengembangkan konsep visual untuk kampanye iklan berskala nasional. Pengalaman minimal 5 tahun di agensi periklanan.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Dibutuhkan developer Wordpress untuk maintenance dan kustomisasi tema website klien. Jam kerja fleksibel, bisa remote.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5" href="job-list.php">Lihat Pekerjaan Lainnya</a>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Software Engineer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Kami mencari Software Engineer berpengalaman untuk bergabung dalam tim pengembangan produk digital kami. Kandidat ideal harus menguasai PHP, Laravel, dan ReactJS.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Marketing Manager</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Bertanggung jawab merancang strategi pemasaran digital dan konvensional. Memimpin tim marketing untuk mencapai target penjualan bulanan dan meningkatkan brand awareness.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Product Designer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Mencari desainer UI/UX yang kreatif untuk merancang antarmuka aplikasi mobile yang intuitif. Harus menguasai Figma, Adobe XD, dan prinsip-prinsip desain modern.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Creative Director</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Memimpin tim kreatif dalam mengembangkan konsep visual untuk kampanye iklan berskala nasional. Pengalaman minimal 5 tahun di agensi periklanan.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-start">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Wordpress Developer</h5>
                                            <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                                Dibutuhkan developer Wordpress untuk maintenance dan kustomisasi tema website klien. Jam kerja fleksibel, bisa remote.
                                            </p>
                                            <div class="mb-3">
                                                <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surakarta, Jawa Tengah</span>
                                                <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>1.000.000 - 2.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Selengkapnya</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5" href="job-list.php">Lihat Pekerjaan Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

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