<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Lowongan - Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Manajemen Lowongan</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="table-card" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">Iklan Lowongan Kerja</h5>
                        <input type="text" class="form-control rounded-pill w-25 bg-white" placeholder="Cari Judul...">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Judul</th>
                                    <th>Perusahaan</th>
                                    <th>Gaji</th>
                                    <th>Tgl Berakhir</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-bold">Senior Java Dev</span><br><small class="text-muted">Full Time</small></td>
                                    <td>PT. Teknologi Maju</td>
                                    <td>Rp 15jt - 20jt</td>
                                    <td>30 Des 2025</td>
                                    <td><span class="badge bg-primary rounded-pill">Tayang</span></td>
                                    <td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-bold">Admin Gudang</span><br><small class="text-muted">Kontrak</small></td>
                                    <td>CV. Sejahtera</td>
                                    <td>Rp 4jt</td>
                                    <td>01 Jan 2025</td>
                                    <td><span class="badge bg-secondary rounded-pill">Tutup</span></td>
                                    <td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>