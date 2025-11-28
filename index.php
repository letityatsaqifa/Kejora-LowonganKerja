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
    <div class="container-fliud bg-color p-0">
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
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center hero-overlay">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Wujudkan Karir Impianmu Sekarang</h1>
                                    <p class="fs-5 text-white mb-4 pb-2 opacity-75">Jangan tunda lagi. Temukan ribuan peluang kerja yang sesuai passion dan skill kamu di sini.</p>
                                    
                                    <a href="#search-section" class="btn btn-secondary me-3 animated slideInLeft">Cari Lowongan</a>
                                    <a href="login-perusahaan.php" class="btn btn-primary animated slideInRight">Cari Perusahaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center hero-overlay">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Bekerja di Perusahaan Terbaik</h1>
                                    <p class="fs-5 text-white mb-4 pb-2 opacity-75">Dari startup berkembang hingga korporat besar. Hubungkan potensimu dengan perusahaan yang tepat.</p>
                                    
                                    <a href="#search-section" class="btn btn-secondary me-3 animated slideInLeft">Cari Lowongan</a>
                                    <a href="login-perusahaan.php" class="btn btn-primary animated slideInRight">Cari Perusahaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
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

        <!-- Category Start -->
        <div class="container-fliud py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Jelajahi Berdasarkan Kategori</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item p-4" href="jobs-by-category.php">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Lowongan</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->

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

                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill">Lihat Pekerjaan Lainnya</a>
                                </div>
                            </div>
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
                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill">Lihat Pekerjaan Lainnya</a>
                                </div>
                            </div>
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
                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill">Lihat Pekerjaan Lainnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

        <div class="container-xxl py-5">
            <div class="container" style="margin-top: 60px;">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Perusahaan Terpopuler</h1>
                
                <div class="row g-4">
                    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="company-item">
                            <img src="img/com-logo-1.jpg" alt="Logo Perusahaan">
                            
                            <h5>Tech Solution Inc.</h5>
                            
                            <span class="company-meta">
                                <i class="fa fa-building me-1"></i> IT Consultant &nbsp;|&nbsp; <i class="fa fa-map-marker-alt me-1"></i> Jakarta
                            </span>
                            
                            <div class="vacancy-badge">
                                <i class="fa fa-briefcase me-2"></i> 5 Lowongan Aktif
                            </div>
                            
                            <a href="detail-company.php" class="btn btn-company">Lihat Profil</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="company-item">
                            <img src="img/com-logo-2.jpg" alt="Logo Perusahaan">
                            <h5>Creative Agency</h5>
                            <span class="company-meta">
                                <i class="fa fa-building me-1"></i> Advertising &nbsp;|&nbsp; <i class="fa fa-map-marker-alt me-1"></i> Bandung
                            </span>
                            <div class="vacancy-badge">
                                <i class="fa fa-briefcase me-2"></i> 2 Lowongan Aktif
                            </div>
                            <a href="detail-company.php" class="btn btn-company">Lihat Profil</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="company-item">
                            <img src="img/com-logo-3.jpg" alt="Logo Perusahaan">
                            <h5>Fintech Global</h5>
                            <span class="company-meta">
                                <i class="fa fa-building me-1"></i> Keuangan &nbsp;|&nbsp; <i class="fa fa-map-marker-alt me-1"></i> Surabaya
                            </span>
                            <div class="vacancy-badge">
                                <i class="fa fa-briefcase me-2"></i> 8 Lowongan Aktif
                            </div>
                            <a href="detail-company.php" class="btn btn-company">Lihat Profil</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="company-item">
                            <img src="img/com-logo-4.jpg" alt="Logo Perusahaan">
                            <h5>E-Commerce Kita</h5>
                            <span class="company-meta">
                                <i class="fa fa-building me-1"></i> Retail &nbsp;|&nbsp; <i class="fa fa-map-marker-alt me-1"></i> Remote
                            </span>
                            <div class="vacancy-badge">
                                <i class="fa fa-briefcase me-2"></i> 12 Lowongan Aktif
                            </div>
                            <a href="detail-company.php" class="btn btn-company">Lihat Profil</a>
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