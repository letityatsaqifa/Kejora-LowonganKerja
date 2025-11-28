<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Lokasi - Admin</title>
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
                <h5 class="mb-0 fw-bold text-dark">Master Data Lokasi</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <div class="table-card h-100" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0 text-primary">Data Provinsi</h6>
                                <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                                <thead class="table-light"><tr><th>ID</th><th>Nama Provinsi</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    <tr><td>1</td><td>Jawa Barat</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>2</td><td>DKI Jakarta</td><td><a href="#" class="text-danger">
                                    <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>3</td><td>Jawa Timur</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="table-card h-100" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0 text-primary">Data Kota / Kabupaten</h6>
                                <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <select class="form-select mb-3 form-select-sm rounded-pill">
                                <option>Filter: Semua Provinsi</option>
                                <option>Jawa Barat</option>
                            </select>
                            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                                <thead class="table-light"><tr><th>Kota</th><th>Provinsi</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    <tr><td>Bandung</td><td>Jawa Barat</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>Bekasi</td><td>Jawa Barat</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>Jakarta Selatan</td><td>DKI Jakarta</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>