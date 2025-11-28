<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Cari Kandidat - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white"> <div class="container-fluid p-0">
        <?php include 'navbar.php'; ?>

        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Temukan Talenta Terbaik</h1>
                    <p class="text-white fs-5 mb-0">Cari ribuan kandidat siap kerja untuk perusahaan Anda.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5 wow fadeIn" data-wow-delay="0.1s" id="search-section">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-text border-0 bg-white ps-4 text-primary">
                                <i class="fa fa-user-tie"></i>
                            </span>
                            <input type="text" class="form-control border-0 py-3 ps-2" placeholder="Cari Nama Kandidat, Skill (PHP, Java), atau Posisi...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary border-0 w-100 py-3 text-white fw-bold shadow-sm">
                            Cari Kandidat
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                
                <div class="d-flex justify-content-between align-items-center mb-4 candidate-header">
                    <h4 class="mb-0 fw-bold text-primary">Kandidat Tersedia</h4>
                    <div class="d-flex gap-2 filter-wrapper">
                        <select class="form-select rounded-pill border bg-light" style="width: auto;">
                            <option selected>Semua Lokasi</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Remote</option>
                        </select>
                        <select class="form-select rounded-pill border bg-light" style="width: auto;">
                            <option selected>Pengalaman</option>
                            <option>Fresh Graduate</option>
                            <option>1-3 Tahun</option>
                            <option>Senior</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded-custom shadow-sm border p-4 text-center" style="background-color: #f8f9fa;">
                            
                            <div class="overflow-hidden mb-3 mx-auto" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle border border-3 border-white shadow-sm" src="img/team-1.jpg" style="width:100%; height:100%; object-fit:cover;" alt="">
                            </div>
                            
                            <h5 class="mb-1 fw-bold text-dark">Riko Simanjuntak</h5>
                            
                            <p class="text-muted small mb-2">S1 Teknik Informatika, UGM</p>
                            
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill small">Minat: Web Developer</span>
                            </div>
                            
                            <div class="mb-4">
                                <span class="badge bg-white text-dark border">PHP</span>
                                <span class="badge bg-white text-dark border">Laravel</span>
                                <span class="badge bg-white text-dark border">MySQL</span>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <a href="profile.php" class="btn btn-outline-primary rounded-pill btn-sm fw-bold">Lihat CV</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded-custom shadow-sm border p-4 text-center" style="background-color: #f8f9fa;">
                            
                            <div class="overflow-hidden mb-3 mx-auto" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle border border-3 border-white shadow-sm" src="img/team-2.jpg" style="width:100%; height:100%; object-fit:cover;" alt="">
                            </div>
                            
                            <h5 class="mb-1 fw-bold text-dark">Jessica Mila</h5>
                            
                            <p class="text-muted small mb-2">D3 Komunikasi, UI</p>
                            
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill small">Minat: Digital Marketing</span>
                            </div>
                            
                            <div class="mb-4">
                                <span class="badge bg-white text-dark border">Copywriting</span>
                                <span class="badge bg-white text-dark border">SEO</span>
                                <span class="badge bg-white text-dark border">Canva</span>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <a href="profile.php" class="btn btn-outline-primary rounded-pill btn-sm fw-bold">Lihat CV</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded-custom shadow-sm border p-4 text-center" style="background-color: #f8f9fa;">
                            
                            <div class="overflow-hidden mb-3 mx-auto" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle border border-3 border-white shadow-sm" src="img/team-3.jpg" style="width:100%; height:100%; object-fit:cover;" alt="">
                            </div>
                            
                            <h5 class="mb-1 fw-bold text-dark">Agus Permana</h5>
                            
                            <p class="text-muted small mb-2">SMK Desain Grafis</p>
                            
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill small">Minat: Graphic Design</span>
                            </div>
                            
                            <div class="mb-4">
                                <span class="badge bg-white text-dark border">Photoshop</span>
                                <span class="badge bg-white text-dark border">Illustrator</span>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <a href="profile.php" class="btn btn-outline-primary rounded-pill btn-sm fw-bold">Lihat CV</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded-custom shadow-sm border p-4 text-center" style="background-color: #f8f9fa;">
                            
                            <div class="overflow-hidden mb-3 mx-auto" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle border border-3 border-white shadow-sm" src="img/team-4.jpg" style="width:100%; height:100%; object-fit:cover;" alt="">
                            </div>
                            
                            <h5 class="mb-1 fw-bold text-dark">Siti Aminah</h5>
                            
                            <p class="text-muted small mb-2">S1 Akuntansi, UNAIR</p>
                            
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill small">Minat: Staff Admin</span>
                            </div>
                            
                            <div class="mb-4">
                                <span class="badge bg-white text-dark border">Excel</span>
                                <span class="badge bg-white text-dark border">MYOB</span>
                                <span class="badge bg-white text-dark border">Tax</span>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <a href="profile.php" class="btn btn-outline-primary rounded-pill btn-sm fw-bold">Lihat CV</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-outline-primary py-3 px-5 rounded-pill fw-bold">
                            Muat Lebih Banyak
                        </a>
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