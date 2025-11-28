<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Detail Lowongan - Kejora</title>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Rincian Pekerjaan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="job-list.php" class="text-white">Lowongan</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl py-4">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-lg-8">
                        
                        <div class="detail-card">
                            
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid rounded-3 border p-1 me-3 shadow-sm" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                <div>
                                    <h3 class="mb-1 fw-bold text-dark">[judul_lowongan]</h3>
                                    <div class="text-muted small">
                                        <i class="fa fa-building me-1 text-primary"></i> [Nama Perusahaan] &bull; 
                                        <i class="fa fa-map-marker-alt me-1 text-primary"></i> [kota_lowongan], [provinsi_lowongan]
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3 mb-4 align-items-center">
                                <span class="badge bg-success rounded-pill px-3 py-2">
                                    <i class="fa fa-check-circle me-1"></i> [status_lowongan]
                                </span>
                                
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <i class="fa fa-clock me-1"></i> [id_jenis]
                                </span>

                                <div class="salary-box ms-auto">
                                    <i class="fa fa-money-bill-wave me-2"></i> [gaji]
                                </div>
                            </div>

                            <img src="img/carousel-1.jpg" alt="Poster Lowongan" class="job-poster-img">

                            <h4 class="section-title">Deskripsi Pekerjaan</h4>
                            <p class="text-muted mb-4" style="line-height: 1.8;">
                                [deskripsi_lowongan - Paragraf 1: Penjelasan umum tentang role ini...]
                                <br><br>
                                [deskripsi_lowongan - Paragraf 2: Detail pekerjaan sehari-hari...]
                            </p>

                            <h4 class="section-title mt-5">Kualifikasi & Syarat</h4>
                            <ul class="list-unstyled qualification-list mb-4">
                                <li>[kualifikasi - Poin 1: Minimal Pendidikan]</li>
                                <li>[kualifikasi - Poin 2: Pengalaman Kerja]</li>
                                <li>[kualifikasi - Poin 3: Skill Teknis]</li>
                                <li>[kualifikasi - Poin 4: Soft Skill]</li>
                                <li>[kualifikasi - Poin 5: Domisili/Kesediaan]</li>
                            </ul>

                            <div class="mt-5 pt-4 border-top text-center">
                                <h5 class="fw-bold mb-3">Apakah Anda kandidat yang tepat?</h5>
                                <div class="d-flex justify-content-center gap-3">
                                    <button class="btn btn-outline-secondary rounded-pill px-4 py-3 fw-bold">
                                        <i class="far fa-heart me-2"></i> Simpan
                                    </button>
                                    <button class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow-sm">
                                        <i class="fa fa-paper-plane me-2"></i> Lamar Sekarang
                                    </button>
                                </div>
                                <p class="text-muted small mt-3 mb-0">
                                    <i class="fa fa-clock me-1"></i> Ditutup pada: <strong>[tanggal_berakhir]</strong>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        
                        <div class="detail-card p-4 mb-4">
                            <h5 class="section-title">Ringkasan</h5>
                            
                            <div class="info-box mb-3 py-2 bg-white border-0 ps-0">
                                <div class="info-icon bg-light text-primary" style="width: 45px; height: 45px; font-size: 18px;">
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Tanggal Posting</p>
                                    <h6 class="mb-0 fw-bold text-dark">[tanggal_posting]</h6>
                                </div>
                            </div>

                            <div class="info-box mb-3 py-2 bg-white border-0 ps-0">
                                <div class="info-icon bg-light text-primary" style="width: 45px; height: 45px; font-size: 18px;">
                                    <i class="fa fa-layer-group"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Kategori</p>
                                    <h6 class="mb-0 fw-bold text-dark">[id_kategori]</h6>
                                </div>
                            </div>

                            <div class="info-box mb-3 py-2 bg-white border-0 ps-0">
                                <div class="info-icon bg-light text-primary" style="width: 45px; height: 45px; font-size: 18px;">
                                    <i class="fa fa-map-marked-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-muted">Lokasi Lengkap</p>
                                    <h6 class="mb-0 fw-bold text-dark" style="font-size: 14px; line-height: 1.4;">[lokasi]</h6>
                                </div>
                            </div>

                        </div>

                        <div class="detail-card p-4 text-center">
                            <h5 class="section-title mb-4">Tentang Perusahaan</h5>
                            <img class="img-fluid rounded-3 border p-2 mb-3" src="img/com-logo-1.jpg" alt="" style="width: 100px;">
                            <h5 class="fw-bold text-dark mb-1">[Nama Perusahaan]</h5>
                            <p class="text-muted small mb-4">[kota_lowongan], [provinsi_lowongan]</p>
                            
                            <a href="detail-company.php" class="btn btn-outline-primary rounded-pill w-100 fw-bold">
                                Lihat Profil Perusahaan
                            </a>
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