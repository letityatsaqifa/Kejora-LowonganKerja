<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Pelamar - Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Manajemen Pelamar</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="table-card" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">List Pencari Kerja</h5>
                        <input type="text" class="form-control rounded-pill w-25 bg-white" placeholder="Cari Pelamar...">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Profil</th>
                                    <th>Email / Telepon</th>
                                    <th>Pendidikan</th>
                                    <th>Status Akun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial-1.jpg" class="rounded-circle me-2" width="40">
                                            <span class="fw-bold">Sarah Amalia</span>
                                        </div>
                                    </td>
                                    <td>sarah@mail.com<br><small class="text-muted">0812345678</small></td>
                                    <td>S1 Informatika</td>
                                    <td><span class="badge bg-success rounded-pill">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial-2.jpg" class="rounded-circle me-2" width="40">
                                            <span class="fw-bold">Budi Santoso</span>
                                        </div>
                                    </td>
                                    <td>budi@mail.com<br><small class="text-muted">0856789012</small></td>
                                    <td>D3 Manajemen</td>
                                    <td><span class="badge bg-secondary rounded-pill">Non-Aktif</span></td>
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