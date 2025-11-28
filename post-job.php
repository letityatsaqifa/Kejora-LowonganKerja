<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Pasang Iklan - Kejora</title>
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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Pasang Lowongan</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Post Job</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-xxl" position: relative; z-index: 2;>
            <div class="container">
                
                <form action="proses_tambah_lowongan.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="tanggal_posting" value="<?php echo date('Y-m-d'); ?>">
                    <input type="hidden" name="status_lowongan" value="aktif">

                    <div class="row g-4">
                        
                        <div class="col-lg-8">
                            <div class="bg-white rounded-custom shadow-sm p-4 p-md-5 border mb-4">
                                
                                <div class="section-title">
                                    <i class="fa fa-info"></i> Informasi Dasar
                                </div>
                                
                                <div class="row g-4 mb-4">
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark">Judul Lowongan</label>
                                        <input type="text" name="judul_lowongan" class="form-control rounded-pill py-3" placeholder="Contoh: Senior Graphic Designer" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark">Kategori</label>
                                        <select name="id_kategori" class="form-select rounded-pill py-3" required>
                                            <option selected disabled>Pilih Kategori</option>
                                            <option value="1">IT & Software</option>
                                            <option value="2">Marketing</option>
                                            <option value="3">Design</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark">Jenis Pekerjaan</label>
                                        <select name="id_jenis" class="form-select rounded-pill py-3" required>
                                            <option selected disabled>Pilih Tipe</option>
                                            <option value="1">Full Time</option>
                                            <option value="2">Part Time</option>
                                            <option value="3">Freelance</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="section-title mt-5">
                                    <i class="fa fa-map-marker-alt"></i> Lokasi Penempatan
                                </div>

                                <div class="row g-4 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark">Provinsi</label>
                                        <input type="text" name="provinsi_lowongan" class="form-control rounded-pill py-3" placeholder="Jawa Barat">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark">Kota / Kabupaten</label>
                                        <input type="text" name="kota_lowongan" class="form-control rounded-pill py-3" placeholder="Bandung">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark">Alamat Lengkap</label>
                                        <textarea name="lokasi" class="form-control rounded-3 p-3" rows="2" placeholder="Gedung X, Lantai 2, Jl. Sudirman No..."></textarea>
                                    </div>
                                </div>

                                <div class="section-title mt-5">
                                    <i class="fa fa-align-left"></i> Detail Pekerjaan
                                </div>

                                <div class="row g-4">
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark">Deskripsi Pekerjaan</label>
                                        <textarea name="deskripsi_lowongan" class="form-control rounded-3 p-3" rows="5" placeholder="Jelaskan tanggung jawab utama..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark">Kualifikasi / Syarat</label>
                                        <textarea name="kualifikasi" class="form-control rounded-3 p-3" rows="5" placeholder="- Pendidikan min. S1&#10;- Pengalaman 2 tahun&#10;- Menguasai Tool X"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            
                            <div class="bg-white rounded-custom shadow-sm p-4 border mb-4">
                                <div class="section-title">
                                    <i class="fa fa-money-bill-wave"></i> Penawaran Gaji
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label fw-bold text-dark small">Gaji Minimum</label>
                                    <div class="input-group salary-input-group">
                                        <span class="input-group-text start-radius">Rp</span>
                                        <input type="number" name="gaji_min" class="form-control end-radius py-3" placeholder="5.000.000">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label fw-bold text-dark small">Gaji Maksimum</label>
                                    <div class="input-group salary-input-group">
                                        <span class="input-group-text start-radius">Rp</span>
                                        <input type="number" name="gaji_max" class="form-control end-radius py-3" placeholder="10.000.000">
                                    </div>
                                </div>

                                <div class="form-check form-switch mt-3">
                                    <input class="form-check-input" type="checkbox" id="hideSalary">
                                    <label class="form-check-label small text-muted" for="hideSalary">Sembunyikan gaji di iklan</label>
                                </div>
                            </div>

                            <div class="bg-white rounded-custom shadow-sm p-4 border mb-4">
                                <div class="section-title">
                                    <i class="fa fa-calendar-alt"></i> Tanggal Penting
                                </div>
                                <label class="form-label fw-bold text-dark small">Batas Akhir Lamaran</label>
                                <input type="date" name="tanggal_berakhir" class="form-control rounded-pill py-3 text-center">
                            </div>

                            <div class="bg-white rounded-custom shadow-sm p-4 border">
                                <div class="section-title">
                                    <i class="fa fa-image"></i> Poster Lowongan
                                </div>
                                
                                <div class="upload-zone">
                                    <input type="file" name="gambar_lowongan" accept="image/*">
                                    <div class="upload-icon">
                                        <i class="fa fa-cloud-upload-alt"></i>
                                    </div>
                                    <h6 class="fw-bold mb-1">Klik atau Seret Gambar</h6>
                                    <p class="text-muted small mb-0">Format JPG/PNG, Max 2MB</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill fw-bold shadow-sm">
                                    <i class="fa fa-check-circle me-2"></i> Terbitkan Iklan
                                </button>
                                <a href="index.php" class="btn btn-outline-secondary w-100 py-3 rounded-pill fw-bold mt-2 border-0">Batal</a>
                            </div>

                        </div>

                    </div>
                </form>

            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>