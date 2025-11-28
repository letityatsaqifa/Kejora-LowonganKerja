<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Perusahaan - Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Manajemen Perusahaan</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="table-card" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">List Perusahaan Terdaftar</h5>
                        <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah Manual</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Logo</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kontak HRD</th>
                                    <th>Lokasi</th>
                                    <th>Verifikasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/com-logo-1.jpg" class="rounded" width="40"></td>
                                    <td class="fw-bold">PT. Teknologi Maju</td>
                                    <td>hrd@tekno.com</td>
                                    <td>Jakarta Selatan</td>
                                    <td><span class="badge bg-success rounded-pill">Verified</span></td>
                                    <td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="img/com-logo-2.jpg" class="rounded" width="40"></td>
                                    <td class="fw-bold">CV. Maju Mundur</td>
                                    <td>boss@maju.com</td>
                                    <td>Bandung</td>
                                    <td><span class="badge bg-warning text-dark rounded-pill">Pending</span></td>
                                    <td>
                                        <button class="btn btn-success btn-sm rounded-pill px-2" title="ACC"><i class="fa fa-check"></i></button>
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