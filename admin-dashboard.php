<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Dashboard Admin - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <div class="admin-container">
        
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Dashboard Overview</h5>
                
                <div class="d-flex align-items-center">
                    <div class="me-3 text-end d-none d-md-block">
                        <h6 class="mb-0 text-dark fw-bold">Admin Super</h6>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <img src="img/testimonial-1.jpg" class="rounded-circle border" style="width: 40px; height: 40px;">
                </div>
            </div>

            <div class="admin-body">
                
                <div class="row g-4 mb-4">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-blue-soft"><i class="fa fa-users"></i></div>
                            <div>
                                <h3 class="mb-0 fw-bold">1,250</h3>
                                <small class="text-muted">Total Pelamar</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-green-soft"><i class="fa fa-building"></i></div>
                            <div>
                                <h3 class="mb-0 fw-bold">45</h3>
                                <small class="text-muted">Perusahaan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-yellow-soft"><i class="fa fa-briefcase"></i></div>
                            <div>
                                <h3 class="mb-0 fw-bold">120</h3>
                                <small class="text-muted">Lowongan Aktif</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-icon bg-red-soft"><i class="fa fa-file-alt"></i></div>
                            <div>
                                <h3 class="mb-0 fw-bold">3,400</h3>
                                <small class="text-muted">Total Lamaran</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">Pendaftaran Perusahaan Terbaru</h5>
                        <a href="#" class="btn btn-primary btn-sm rounded-pill px-3">Lihat Semua</a>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Email</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/com-logo-1.jpg" class="rounded me-2" width="30">
                                            <span class="fw-bold">PT. Teknologi Maju</span>
                                        </div>
                                    </td>
                                    <td>hrd@tekno.com</td>
                                    <td>24 Nov 2025</td>
                                    <td><span class="badge bg-success rounded-pill">Terverifikasi</span></td>
                                    <td>
                                        <button class="btn btn-light btn-sm text-primary"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-light btn-sm text-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/com-logo-2.jpg" class="rounded me-2" width="30">
                                            <span class="fw-bold">CV. Sejahtera Abadi</span>
                                        </div>
                                    </td>
                                    <td>info@sejahtera.com</td>
                                    <td>23 Nov 2025</td>
                                    <td><span class="badge bg-warning text-dark rounded-pill">Pending</span></td>
                                    <td>
                                        <button class="btn btn-light btn-sm text-primary"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-light btn-sm text-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>