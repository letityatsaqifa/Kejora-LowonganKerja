<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Lamaran - Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="admin-container">
        <?php include 'admin-sidebar.php'; ?>

        <div class="admin-content">
            <div class="admin-topbar">
                <h5 class="mb-0 fw-bold text-dark">Log Lamaran Masuk</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="table-card" style="background-color: #f8f9fa;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0 fw-bold">Riwayat Lamaran</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Pelamar</th>
                                    <th>Melamar Ke</th>
                                    <th>Posisi</th>
                                    <th>Status Terkini</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>24 Nov 2025</td>
                                    <td>Sarah Amalia</td>
                                    <td>PT. Teknologi Maju</td>
                                    <td>Java Developer</td>
                                    <td><span class="badge bg-info text-dark rounded-pill">Interview</span></td>
                                    <td><a href="#" class="btn btn-light btn-sm text-primary">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>23 Nov 2025</td>
                                    <td>Budi Santoso</td>
                                    <td>CV. Sejahtera</td>
                                    <td>Sales Marketing</td>
                                    <td><span class="badge bg-danger rounded-pill">Ditolak</span></td>
                                    <td><a href="#" class="btn btn-light btn-sm text-primary">Lihat</a></td>
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