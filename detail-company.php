<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Detail Perusahaan - Kejora</title>
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

        <div class="page-header">
            <div class="container text-center">
                <h1 class="display-4 text-white mb-3 fw-bold">Profil Perusahaan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="perusahaan.php" class="text-white">Perusahaan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-xxl py-4">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-lg-8">
                        
                        <div class="detail-card d-flex align-items-center flex-column flex-md-row text-center text-md-start">
                            <img class="company-logo-large mb-4 mb-md-0 me-md-4" src="img/com-logo-1.jpg" alt="Logo Perusahaan">
                            
                            <div class="flex-grow-1">
                                <h3 class="mb-3 fw-bold text-dark">[nama_perusahaan]</h3>
                                <div class="text-muted mb-4">
                                    <i class="fa fa-map-marker-alt me-2 text-primary"></i>[kota_perusahaan], [provinsi_perusahaan]
                                </div>
                                <div class="d-flex gap-2 justify-content-center justify-content-md-start flex-wrap">
                                    <span class="company-badge">
                                        <i class="fa fa-check-circle me-1"></i> Terverifikasi
                                    </span>
                                    <span class="company-badge">
                                        <i class="fa fa-building me-1"></i> Industri: Teknologi
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="detail-card">
                            <h4 class="section-title">Tentang Perusahaan</h4>
                            
                            <p class="text-muted mb-4" style="line-height: 1.8;">
                                [deskripsi_perusahaan - Paragraf 1: Penjelasan umum...]
                                <br><br>
                                [deskripsi_perusahaan - Paragraf 2: Visi dan Misi...]
                            </p>

                            <h5 class="mb-3 fw-bold text-dark">Kenapa Bergabung Bersama Kami?</h5>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i class="fa fa-star text-primary me-2"></i> Lingkungan kerja yang suportif</li>
                                <li class="mb-2"><i class="fa fa-star text-primary me-2"></i> Jenjang karir yang jelas</li>
                                <li class="mb-2"><i class="fa fa-star text-primary me-2"></i> Pengembangan diri karyawan</li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-4 fw-bold text-dark">Lowongan di [nama_perusahaan]</h4>
                            
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4 w-100">
                                            <h5 class="mb-3">[Judul Lowongan 1]</h5>
                                            
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>[kota_perusahaan]</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>[Jenis Waktu]</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>[Gaji]</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-between align-items-end">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Lamar Sekarang</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Deadline: [Tgl Akhir]</small>
                                    </div>
                                </div>
                            </div>

                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4 w-100">
                                            <h5 class="mb-3">[Judul Lowongan 2]</h5>
                                            
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>[kota_perusahaan]</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>[Jenis Waktu]</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>[Gaji]</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-between align-items-end">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="detail-job.php">Lamar Sekarang</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Deadline: [Tgl Akhir]</small>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">
                        
                        <div class="detail-card">
                            <h5 class="section-title">Informasi Kontak</h5>
                            
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-map-marked-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Alamat Kantor</p>
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 14px; line-height: 1.5;">
                                        [alamat_perusahaan]
                                    </h6>
                                </div>
                            </div>

                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Email Resmi</p>
                                    <h6 class="mb-0 fw-bold text-dark">[email_perusahaan]</h6>
                                </div>
                            </div>

                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Telepon</p>
                                    <h6 class="mb-0 fw-bold text-dark">[telepon_perusahaan]</h6>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="bg-light rounded-custom p-3 text-center border" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <span class="text-muted"><i class="fa fa-map me-2"></i>[Lokasi Peta]</span>
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
    <script src="js/main.js"></script>
</body>
</html>