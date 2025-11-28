<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Lowongan Kategori - Kejora</title>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kategori: [Nama_Kategori]</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="job-list.php" class="text-white">Lowongan</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">[Nama_Kategori]</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl py-4">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-lg-4">
                        
                        <div class="bg-white rounded-custom p-4 border shadow-sm mb-4" style="background-color: #f8f9fa !important;">
                            <h5 class="mb-3 fw-bold text-dark">Tentang Kategori</h5>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-square bg-white rounded-circle border text-primary" style="width: 50px; height: 50px; font-size: 20px;">
                                    <i class="fa fa-tags"></i> 
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-bold">[Nama_Kategori]</h6>
                                    <small class="text-muted">[Jumlah] Lowongan Aktif</small>
                                </div>
                            </div>
                            <p class="text-muted small mb-0">
                                Temukan berbagai peluang karir terbaik di bidang [Nama_Kategori]. Sesuaikan dengan keahlian dan minat Anda.
                            </p>
                        </div>

                        <div class="bg-white rounded-custom p-4 border shadow-sm" style="background-color: #f8f9fa !important;">
                            <h5 class="mb-4 fw-bold text-dark">Filter Lowongan</h5>
                            
                            <form>
                                <div class="mb-3">
                                    <label class="small fw-bold text-muted mb-1">Cari Spesifik</label>
                                    <input type="text" class="form-control rounded-pill" placeholder="Contoh: Java, Sales...">
                                </div>

                                <div class="mb-3">
                                    <label class="small fw-bold text-muted mb-1">Lokasi</label>
                                    <select class="form-select rounded-pill">
                                        <option selected>Semua Kota</option>
                                        <option>[Kota 1]</option>
                                        <option>[Kota 2]</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="small fw-bold text-muted mb-1">Jenis Pekerjaan</label>
                                    <select class="form-select rounded-pill">
                                        <option selected>Semua Jenis</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Freelance</option>
                                    </select>
                                </div>

                                <button class="btn btn-primary w-100 rounded-pill fw-bold">Terapkan Filter</button>
                            </form>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="mb-0 fw-bold text-dark">Daftar Lowongan</h4>
                            <span class="text-muted small">Menampilkan [X] Pekerjaan</span>
                        </div>

                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4 w-100">
                                        <h5 class="mb-3">[Judul_Lowongan_1]</h5>
                                        <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                            [Deskripsi]
                                        </p>
                                        <div class="mb-2">
                                            <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>[Kota_Lowongan]</span>
                                            <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>[Jenis_Waktu]</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>[Nominal_Gaji]</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-between align-items-end">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3 rounded-circle" href=""><i class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary rounded-pill px-3" href="detail-job.php">Selengkapnya</a>
                                    </div>
                                    <small class="text-truncate text-muted"><i class="far fa-calendar-alt text-primary me-2"></i>Posting: [Tgl_Posting]</small>
                                </div>
                            </div>
                        </div>

                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4 w-100">
                                        <h5 class="mb-3">[Judul_Lowongan_2]</h5>
                                        <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                            [Deskripsi]
                                        </p>
                                        <div class="mb-2">
                                            <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>[Kota_Lowongan]</span>
                                            <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>[Jenis_Waktu]</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>[Nominal_Gaji]</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-between align-items-end">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3 rounded-circle" href=""><i class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary rounded-pill px-3" href="detail-job.php">Selengkapnya</a>
                                    </div>
                                    <small class="text-truncate text-muted"><i class="far fa-calendar-alt text-primary me-2"></i>Posting: [Tgl_Posting]</small>
                                </div>
                            </div>
                        </div>

                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4 w-100">
                                        <h5 class="mb-3">[Judul_Lowongan_3]</h5>
                                        <p class="text-muted mb-3" style="font-size: 14px; line-height: 1.6;">
                                            [Deskripsi]
                                        </p>
                                        <div class="mb-2">
                                            <span class="text-truncate me-1"><i class="fa fa-map-marker-alt text-primary me-2"></i>[Kota_Lowongan]</span>
                                            <span class="text-truncate me-1"><i class="far fa-clock text-primary me-2"></i>[Jenis_Waktu]</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>[Nominal_Gaji]</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-between align-items-end">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-light btn-square me-3 rounded-circle" href=""><i class="far fa-heart text-primary"></i></a>
                                        <a class="btn btn-primary rounded-pill px-3" href="detail-job.php">Selengkapnya</a>
                                    </div>
                                    <small class="text-truncate text-muted"><i class="far fa-calendar-alt text-primary me-2"></i>Posting: [Tgl_Posting]</small>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill fw-bold">Muat Lebih Banyak</a>
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