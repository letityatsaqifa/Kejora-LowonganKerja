<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Perusahaan - Kejora</title>
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
                        
                        <div class="auth-card" style="border-top: 5px solid var(--secondary);"> <div class="auth-header text-center mb-4">
                                <span class="badge bg-secondary rounded-pill mb-2 px-3 py-2">Perusahaan / HRD</span>
                                <h2>Akun Perusahaan</h2>
                                <p>Rekrut talenta terbaik untuk tim Anda.</p>
                            </div>

                            <form class="auth-form">
                                <input type="hidden" name="role" value="employer">

                                <div>
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control" placeholder="PT. Sukses Makmur">
                                </div>
                                <div>
                                    <label>Nama HRD</label>
                                    <input type="text" class="form-control" placeholder="Nama Anda">
                                </div>
                                <div>
                                    <label>Email Perusahaan</label>
                                    <input type="email" class="form-control" placeholder="hrd@kantor.com">
                                </div>
                                <div>
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Buat sandi">
                                </div>
                                
                                <button type="submit" class="btn btn-secondary w-100 py-3 rounded-pill fw-bold mt-3 shadow-sm">Daftar Perusahaan</button>
                            </form>

                            <div class="text-center mt-4">
                                <p class="text-muted small">Sudah punya akun? <a href="login.php" class="switch-link text-secondary">Masuk</a></p>
                                <hr class="my-3 text-muted opacity-25">
                                <p class="text-muted small mb-1">Ingin cari kerja?</p>
                                <a href="register.php" class="fw-bold text-dark" style="font-size:14px;">Daftar sebagai Pelamar <i class="fa fa-arrow-right"></i></a>
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