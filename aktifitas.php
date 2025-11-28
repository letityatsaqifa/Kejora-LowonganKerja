<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Aktivitas Saya - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container-fluid p-0">
        
        <?php include 'navbar.php'; ?>

        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Aktifitas Saya</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pekerjaan Saya</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl" position: relative; z-index: 2;>
            <div class="container">
                
                <div class="bg-white p-4 rounded-custom shadow-sm border">
                    
                    <div class="tab-class text-center mb-4">
                        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-4">
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-saved">
                                    <h6 class="mt-n1 mb-0"><i class="far fa-bookmark me-2"></i>Disimpan</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-applied">
                                    <h6 class="mt-n1 mb-0"><i class="far fa-paper-plane me-2"></i>Lamaran Terkirim</h6>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="tab-content text-start">
                            
                            <div id="tab-saved" class="tab-pane fade show active">
                                <div class="row g-4">
                                    
                                    <div class="col-lg-6">
                                        <div class="job-item p-4 mb-0 h-100">
                                            <div class="row g-4">
                                                <div class="col-sm-12 d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                                    <div class="text-start ps-4 w-100">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <h5 class="mb-3">Software Engineer</h5>
                                                            <a href="#" class="btn-delete" title="Hapus"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        <span class="text-truncate me-3 badge"><i class="fa fa-map-marker-alt me-2"></i>Jakarta</span>
                                                        <span class="text-truncate me-0 badge"><i class="far fa-money-bill-alt me-2"></i>Rp 15 Jt</span>
                                                        
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                                            <small class="text-muted">Disimpan: 2 Hari lalu</small>
                                                            <a class="btn btn-primary rounded-pill px-4 btn-sm" href="detail-job.php">Lamar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="job-item p-4 mb-0 h-100">
                                            <div class="row g-4">
                                                <div class="col-sm-12 d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                                    <div class="text-start ps-4 w-100">
                                                        <div class="d-flex justify-content-between align-items-start">
                                                            <h5 class="mb-3">Marketing Manager</h5>
                                                            <a href="#" class="btn-delete" title="Hapus"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt me-2"></i>Bandung</span>
                                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt me-2"></i>Rp 10 Jt</span>
                                                        
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                                            <small class="text-muted">Disimpan: Hari ini</small>
                                                            <a class="btn btn-primary rounded-pill px-4 btn-sm" href="detail-job.php">Lamar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="tab-applied" class="tab-pane fade">
                                <div class="row g-4">
                                    
                                    <div class="col-lg-6">
                                        <div class="job-item p-4 mb-0 h-100 border-start border-5 border-warning"> <div class="row g-4">
                                                <div class="col-sm-12 d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                                    <div class="text-start ps-4 w-100">
                                                        <h5 class="mb-2">UI/UX Designer</h5>
                                                        <p class="mb-2 text-muted small">PT. Kreatif Digital</p>
                                                        
                                                        <div class="mb-3">
                                                            <span class="status-badge status-pending">
                                                                <i class="far fa-clock me-1"></i> Menunggu Review
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                            <small class="text-muted">Dikirim: 10 Jan 2025</small>
                                                            <a href="#" class="text-primary fw-bold small">Lihat Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="job-item p-4 mb-0 h-100 border-start border-5 border-info">
                                            <div class="row g-4">
                                                <div class="col-sm-12 d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                                    <div class="text-start ps-4 w-100">
                                                        <h5 class="mb-2">Backend Developer</h5>
                                                        <p class="mb-2 text-muted small">Tokopedia</p>
                                                        
                                                        <div class="mb-3">
                                                            <span class="status-badge status-interview">
                                                                <i class="far fa-comments me-1"></i> Panggilan Interview
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                            <small class="text-muted">Dikirim: 05 Jan 2025</small>
                                                            <a href="#" class="text-primary fw-bold small">Lihat Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="job-item p-4 mb-0 h-100 border-start border-5 border-danger">
                                            <div class="row g-4">
                                                <div class="col-sm-12 d-flex align-items-center">
                                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                                    <div class="text-start ps-4 w-100">
                                                        <h5 class="mb-2">Data Analyst</h5>
                                                        <p class="mb-2 text-muted small">Gojek Indonesia</p>
                                                        
                                                        <div class="mb-3">
                                                            <span class="status-badge status-rejected">
                                                                <i class="far fa-times-circle me-1"></i> Lamaran Ditolak
                                                            </span>
                                                        </div>
                                                        
                                                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                                            <small class="text-muted">Dikirim: 01 Jan 2025</small>
                                                            <a href="#" class="text-primary fw-bold small">Lihat Detail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
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