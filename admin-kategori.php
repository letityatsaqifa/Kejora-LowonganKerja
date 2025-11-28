<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kategori & Jenis - Admin</title>
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
                <h5 class="mb-0 fw-bold text-dark">Master Kategori & Jenis</h5>
                <img src="img/testimonial-1.jpg" class="rounded-circle border" width="40">
            </div>

            <div class="admin-body">
                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <div class="table-card h-100" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0 text-primary">Kategori Pekerjaan</h6>
                                <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                                <thead class="table-light"><tr><th>ID</th><th>Nama Kategori</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    <tr><td>1</td><td>IT & Software</td><a href="#" class="text-danger"><td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </a></td></tr>
                                    <tr><td>2</td><td>Marketing</td><a href="#" class="text-danger"><td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </a></td></tr>
                                    <tr><td>3</td><td>Accounting</td><a href="#" class="text-danger"><td>
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="table-card h-100" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0 text-primary">Jenis Pekerjaan</h6>
                                <button class="btn btn-primary btn-sm rounded-pill px-3"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <table class="table table-hover align-middle bg-white rounded shadow-sm">
                                <thead class="table-light"><tr><th>ID</th><th>Nama Jenis</th><th>Aksi</th></tr></thead>
                                <tbody>
                                    <tr><td>1</td><td>Full Time</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>2</td><td>Part Time</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>3</td><td>Freelance</td><td><a href="#" class="text-danger">
                                        <button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-light text-danger btn-sm"><i class="fa fa-trash"></i></button></i></a></td></tr>
                                    <tr><td>4</td><td>Internship</td><td><a href="#" class="text-danger"
                                    ><button class="btn btn-light text-primary btn-sm"><i class="fa fa-edit"></i></button>
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