<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kelola Pelamar - Kejora</title>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Pelamar Masuk</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pelamar Masuk</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl" style="position: relative; z-index: 2;">
            <div class="container">
                
                <div class="bg-white rounded-custom shadow-sm p-4 border mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="mb-0 text-primary fw-bold">Total Pelamar: 12 Kandidat</h5>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select rounded-pill border-0 bg-light">
                                <option selected>Semua Lowongan</option>
                                <option value="1">Software Engineer</option>
                                <option value="2">Marketing Manager</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <div class="applicant-card shadow-sm d-flex align-items-center">
                            <img src="img/testimonial-1.jpg" class="applicant-img me-4" alt="">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1 fw-bold">Sarah Amalia</h5>
                                        <p class="mb-1 text-muted small">Melamar: <span class="text-primary">Software Engineer</span></p>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> 2 Jam lalu</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm rounded-circle" type="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                            <li><a class="dropdown-item" href="#">Download CV</a></li>
                                            <li><a class="dropdown-item" href="#">Lihat Profil</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex gap-2">
                                    <button class="btn btn-primary btn-sm rounded-pill px-3">Interview</button>
                                    <button class="btn btn-outline-danger btn-sm rounded-pill px-3">Tolak</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="applicant-card shadow-sm d-flex align-items-center">
                            <img src="img/testimonial-2.jpg" class="applicant-img me-4" alt="">
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1 fw-bold">Budi Santoso</h5>
                                        <p class="mb-1 text-muted small">Melamar: <span class="text-primary">Marketing</span></p>
                                        <small class="text-muted"><i class="far fa-clock me-1"></i> Hari ini</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm rounded-circle" type="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                            <li><a class="dropdown-item" href="#">Download CV</a></li>
                                            <li><a class="dropdown-item" href="#">Lihat Profil</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex gap-2">
                                    <button class="btn btn-success btn-sm rounded-pill px-3 disabled">Diterima</button>
                                    <button class="btn btn-outline-secondary btn-sm rounded-pill px-3">Detail</button>
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