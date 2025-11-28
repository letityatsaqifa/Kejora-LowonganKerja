<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Admin - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Manajemen Administrator</h5>
                <div class="d-flex align-items-center">
                    <div class="me-3 text-end d-none d-md-block">
                        <h6 class="mb-0 text-dark fw-bold">Super Admin</h6>
                        <small class="text-muted">Online</small>
                    </div>
                    <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
                </div>
            </div>

            <div class="admin-body">
                <div class="table-card" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">Daftar Admin Sistem</h5>
                        <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah Admin</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Admin</th>
                                    <th>Email</th>
                                    <th>Role / Level</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial-1.jpg" class="rounded-circle me-2" width="35">
                                            <span class="fw-bold">Super Admin</span>
                                        </div>
                                    </td>
                                    <td>admin@kejora.com</td>
                                    <td><span class="badge bg-primary rounded-pill">Super Admin</span></td>
                                    <td><span class="badge bg-success rounded-pill">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-light text-secondary btn-sm" disabled><i class="fa fa-lock"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial-2.jpg" class="rounded-circle me-2" width="35">
                                            <span class="fw-bold">Joko Staff</span>
                                        </div>
                                    </td>
                                    <td>joko@kejora.com</td>
                                    <td><span class="badge bg-info text-dark rounded-pill">Moderator</span></td>
                                    <td><span class="badge bg-success rounded-pill">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
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