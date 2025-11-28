<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Masuk - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <div class="auth-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        
                        <div class="auth-card">
                            <div class="auth-header text-center mb-4">
                                <h2>Selamat Datang!</h2>
                                <p>Silakan masuk untuk melanjutkan.</p>
                            </div>

                            <form class="auth-form">
                                <div>
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="nama@email.com">
                                </div>
                                <div>
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="••••••••">
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label text-muted small" for="remember" style="margin:0;">Ingat Saya</label>
                                    </div>
                                    <a href="#" class="small fw-bold text-primary">Lupa Sandi?</a>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold mb-4 shadow-sm">Masuk Sekarang</button>
                            </form>

                            <div class="text-center mt-4">
                                <p class="text-muted small">Belum punya akun? <a href="register.php" class="switch-link text-secondary">Daftar</a></p>
                                <hr class="my-3 text-muted opacity-25">
                                <p class="text-muted small mb-1">Ingin cari karyawan</p>
                                <a href="register-company.php" class="fw-bold text-dark" style="font-size:14px;">Daftar sebagai Perusahaan <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>

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