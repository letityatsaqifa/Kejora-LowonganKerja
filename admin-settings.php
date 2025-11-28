<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Pengaturan Akun - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Pengaturan Akun</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="row g-4">
                    
                    <div class="col-md-4">
                        <div class="table-card text-center h-100" style="background-color: #f8f9fa;">
                            <div class="mb-3 position-relative d-inline-block">
                                <img src="img/testimonial-1.jpg" class="rounded-circle border border-3 border-white shadow-sm" width="120" height="120">
                                <button class="btn btn-primary btn-sm rounded-circle position-absolute bottom-0 end-0"><i class="fa fa-camera"></i></button>
                            </div>
                            <h5 class="fw-bold">Super Admin</h5>
                            <p class="text-muted small">Administrator Utama</p>
                            <hr>
                            <div class="text-start px-3">
                                <p class="small mb-2"><i class="fa fa-envelope me-2 text-primary"></i> admin@kejora.com</p>
                                <p class="small mb-2"><i class="fa fa-clock me-2 text-primary"></i> Login Terakhir: Hari ini</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="table-card h-100" style="background-color: #f8f9fa;">
                            <h5 class="fw-bold mb-4 pb-2 border-bottom text-primary">Edit Informasi</h5>
                            
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Nama Lengkap</label>
                                        <input type="text" class="form-control rounded-pill" value="Super Admin">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Email</label>
                                        <input type="email" class="form-control rounded-pill" value="admin@kejora.com">
                                    </div>
                                    
                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold text-danger mb-3">Ganti Password</h6>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Password Lama</label>
                                        <input type="password" class="form-control rounded-pill">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Password Baru</label>
                                        <input type="password" class="form-control rounded-pill">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold small">Ulangi Password</label>
                                        <input type="password" class="form-control rounded-pill">
                                    </div>

                                    <div class="col-12 text-end mt-4">
                                        <button type="submit" class="btn btn-primary rounded-pill px-4 fw-bold">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>