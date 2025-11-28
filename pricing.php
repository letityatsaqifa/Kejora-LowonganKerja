<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Harga Paket - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container-fluid p-0">
        <?php include 'navbar.php'; ?>

        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Paket Rekrutmen</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Paket Rekrutmen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl" style="position: relative; z-index: 2;">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="pricing-item">
                            <h5 class="mb-3">Basic</h5>
                            <h1 class="display-5 mb-3 text-primary">Rp 0</h1>
                            <small class="text-muted">Selamanya (Terbatas)</small>
                            <ul class="list-unstyled mt-3 mb-4 text-start mx-auto" style="max-width: 200px;">
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>1 Iklan Lowongan</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Tayang 7 Hari</li>
                                <li class="text-muted"><i class="fa fa-times me-2"></i>Akses Database</li>
                            </ul>
                            <a href="" class="btn btn-outline-primary rounded-pill px-5 py-2 fw-bold">Pilih Paket</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="pricing-item recommended">
                            <div class="d-inline-block bg-white text-primary rounded-pill px-3 py-1 mb-3 fw-bold small">Paling Laris</div>
                            <h5 class="mb-3 text-white">Professional</h5>
                            <h1 class="display-5 mb-3 text-white">Rp 500rb</h1>
                            <small class="text-white-50">Per Bulan</small>
                            <ul class="list-unstyled mt-3 mb-4 text-start mx-auto text-white" style="max-width: 200px;">
                                <li class="mb-2"><i class="fa fa-check me-2"></i>10 Iklan Lowongan</li>
                                <li class="mb-2"><i class="fa fa-check me-2"></i>Tayang 30 Hari</li>
                                <li class="mb-2"><i class="fa fa-check me-2"></i>Fitur Urgent</li>
                                <li class="mb-2"><i class="fa fa-check me-2"></i>Akses Database Pelamar</li>
                            </ul>
                            <a href="" class="btn btn-light rounded-pill px-5 py-2 fw-bold">Pilih Paket</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="pricing-item">
                            <h5 class="mb-3">Enterprise</h5>
                            <h1 class="display-5 mb-3 text-primary">Hubungi Kami</h1>
                            <small class="text-muted">Untuk Korporat Besar</small>
                            <ul class="list-unstyled mt-3 mb-4 text-start mx-auto" style="max-width: 200px;">
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Unlimited Iklan</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Akun HRD Banyak</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Support Prioritas</li>
                            </ul>
                            <a href="contact.php" class="btn btn-primary rounded-pill px-5 py-2 fw-bold">Kontak Sales</a>
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
    <script src="js/main.js"></script>
</body>
</html>