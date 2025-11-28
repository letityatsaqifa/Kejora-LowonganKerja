<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Daftar Perusahaan - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container-fluid bg-white p-0">
        
        <?php include 'navbar.php'; ?>

        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Daftar Perusahaan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Perusahaan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white rounded-custom shadow p-4 border">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-text border-0 bg-white text-primary ps-3"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control border-0 py-3" placeholder="Cari nama perusahaan...">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary border-0 w-100 h-100 rounded-pill fw-bold">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
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

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill">Muat Lebih Banyak</a>
                    </div>
                </div>

            </div>
        </div>
        <?php include 'footer.php'; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>