<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Hubungi Kami - Kejora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container-fluid bg-white p-0">
        
        <?php include 'navbar.php'; ?>

        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Hubungi Kami</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Butuh Bantuan? Hubungi Kami!</h1>
                    <p>Punya pertanyaan seputar lowongan, akun, atau kerjasama perusahaan? Tim support kami siap membantu Anda.</p>
                </div>

                <div class="row g-4">
                    
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="bg-light p-5 rounded-custom mb-4" style="border-radius: 25px;">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Alamat Kantor</h5>
                                        <p class="mb-0">Jl. Jendral Sudirman No. 123, Jakarta Selatan, Indonesia</p>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Email Support</h5>
                                        <p class="mb-0">support@kejora.com</p>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Telepon / WhatsApp</h5>
                                        <p class="mb-0">+62 812 3456 7890</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-custom overflow-hidden shadow-sm" style="border-radius: 25px; border: 1px solid #eee;">
                                <iframe class="w-100" style="height: 300px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.290764403612!2d106.80039031431027!3d-6.225341962699199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sGelora%20Bung%20Karno%20Main%20Stadium!5e0!3m2!1sen!2sid!4v1633683028347!5m2!1sen!2sid" 
                                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-white p-5 rounded-custom shadow-sm contact-form" style="border-radius: 25px; border: 1px solid #f0f2f5;">
                            <h3 class="mb-4 fw-bold text-primary">Kirim Pesan</h3>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Nama Kamu">
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email Kamu">
                                            <label for="email">Alamat Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subjek">
                                            <label for="subject">Subjek / Judul Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Tulis pesan disini" id="message" style="height: 150px"></textarea>
                                            <label for="message">Isi Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3 rounded-pill fw-bold" type="submit">Kirim Pesan Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>