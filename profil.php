<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Profil Saya - Kejora</title>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Profil Anda</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Profil Anda</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl" style="margin-top: -20px; position: relative; z-index: 2;">
            <div class="container">
                
                <div class="row g-4"> 
                    
                    <div class="col-lg-4">
                        <div class="profile-card p-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                            
                            <div class="profile-img-container mb-3">
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar" style="padding: 10px; background: #f8f9fa;">
                                
                                <a href="#" class="btn btn-sm btn-primary rounded-circle position-absolute bottom-0 end-0 border-white border border-3" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-camera"></i>
                                </a>
                            </div>
                            
                            <h4 class="fw-bold mb-1">Nama Pelamar</h4>
                            
                            <hr class="my-4">

                            <ul class="profile-info-list text-start">
                                <li>
                                    <i class="fa fa-envelope"></i> 
                                    <a href="#" class="text-muted text-decoration-none small">Tambahkan Email</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> 
                                    <a href="#" class="text-primary fw-bold text-decoration-none small">+ Isi Telepon</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i> 
                                    <a href="#" class="text-primary fw-bold text-decoration-none small">+ Isi Alamat</a>
                                </li>
                                <li>
                                    <i class="fa fa-venus-mars"></i> 
                                    <a href="#" class="text-primary fw-bold text-decoration-none small">+ Pilih Gender</a>
                                </li>
                                <li>
                                    <i class="fa fa-birthday-cake"></i> 
                                    <a href="#" class="text-primary fw-bold text-decoration-none small">+ Isi Tgl Lahir</a>
                                </li>
                            </ul>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="small text-muted mb-2">Sosial Media</p>
                                <a href="#" class="btn btn-outline-light text-primary border border-dashed rounded-pill btn-sm w-100">
                                    <i class="fa fa-plus me-1"></i> Tautkan Akun
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        
                        <div class="profile-card p-4 p-md-5 wow fadeInUp mb-5" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h5 class="mb-0 fw-bold text-primary"><i class="fa fa-user me-2"></i>Tentang Saya</h5>
                            </div>
                            
                            <div class="empty-state">
                                <i class="fa fa-pen-fancy empty-state-icon"></i>
                                <p class="text-muted small mb-2">Anda belum menulis deskripsi diri.</p>
                                <a href="#" class="btn btn-outline-primary btn-add-data">
                                    <i class="fa fa-plus me-1"></i> Isi Deskripsi Diri
                                </a>
                            </div>
                        </div>

                        <div class="row g-4 mb-4">
                            
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="profile-card p-4 h-100 d-flex flex-column">
                                    <h5 class="fw-bold text-primary mb-4"><i class="fa fa-briefcase me-2"></i>Pengalaman</h5>
                                    
                                    <div class="empty-state flex-grow-1"> <i class="fa fa-building empty-state-icon"></i>
                                        <p class="text-muted small mb-2">Belum ada pengalaman kerja.</p>
                                        <a href="#" class="btn btn-outline-primary btn-add-data">
                                            <i class="fa fa-plus me-1"></i> Tambah Pengalaman
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="profile-card p-4 h-100 d-flex flex-column">
                                    <h5 class="fw-bold text-primary mb-4"><i class="fa fa-graduation-cap me-2"></i>Pendidikan</h5>
                                    
                                    <div class="empty-state flex-grow-1">
                                        <i class="fa fa-university empty-state-icon"></i>
                                        <p class="text-muted small mb-2">Riwayat pendidikan kosong.</p>
                                        <a href="#" class="btn btn-outline-primary btn-add-data">
                                            <i class="fa fa-plus me-1"></i> Tambah Pendidikan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card p-4 mb-5 wow fadeInUp" data-wow-delay="0.5s">
                            <h5 class="fw-bold text-primary mb-4"><i class="fa fa-tools me-2"></i>Keahlian & Sertifikasi</h5>
                            
                            <div class="mb-5">
                                <h6 class="small text-uppercase text-muted fw-bold mb-3">Skill / Keahlian</h6>
                                
                                <div class="empty-state py-3">
                                    <p class="text-muted small mb-2">Apa keahlian utamamu?</p>
                                    <a href="#" class="btn btn-sm btn-primary btn-add-data text-white">
                                        <i class="fa fa-plus me-1"></i> Tambah Skill
                                    </a>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <h6 class="small text-uppercase text-muted fw-bold mb-3">Sertifikat</h6>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="empty-state py-3">
                                            <p class="text-muted small mb-2">Upload sertifikat pendukung karir.</p>
                                            <a href="#" class="btn btn-sm btn-outline-primary btn-add-data">
                                                <i class="fa fa-upload me-1"></i> Upload Sertifikat
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card p-4 wow fadeInUp" data-wow-delay="0.5s">
                            <h5 class="fw-bold text-primary mb-4"><i class="fa fa-folder-open me-2"></i>Proyek / Portofolio</h5>
                            
                            <div class="empty-state">
                                <i class="fa fa-images empty-state-icon"></i>
                                <p class="text-muted small mb-2">Pamerkan hasil karyamu di sini.</p>
                                <a href="#" class="btn btn-outline-primary btn-add-data">
                                    <i class="fa fa-plus me-1"></i> Tambah Proyek
                                </a>
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
    <script src="js/main.js"></script>
</body>
</html>