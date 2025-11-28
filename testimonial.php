<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kejora - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fliud bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include 'navbar.php'; ?>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid page-header mb-5 p-0">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Apa Kata Mereka?</h1>
                <div class="owl-carousel testimonial-carousel">
                    
                    <div class="testimonial-item bg-light p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Awalnya susah banget cari kerja pasca lulus. Tapi lewat Kejora, saya langsung dapat panggilan interview dalam 3 hari. Fiturnya mudah dipahami!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Sarah Amalia</h5>
                                <small>Web Developer</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-light p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Sebagai HRD, saya terbantu banget buat screening kandidat. Kualitas pelamar di sini jauh lebih oke dibanding platform lain. Sangat recommended!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Budi Santoso</h5>
                                <small>HR Manager</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-light p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Suka banget sama fitur filter gajinya, jadi nggak perlu nebak-nebak lagi. Sekarang saya sudah bekerja di perusahaan startup impian saya.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Andini Putri</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item bg-light p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Proses melamarnya cepat, nggak ribet harus isi form berulang-ulang. Update status lamarannya juga transparan. Terima kasih Kejora!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Rian Pratama</h5>
                                <small>Digital Marketer</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-primary rounded-custom p-5 wow fadeInUp" data-wow-delay="0.1s" style="border-radius: 25px !important;">
                    <div class="row g-4 align-items-center">
                        
                        <div class="col-lg-7 text-start">
                            <h1 class="text-white mb-3">Ingin Menjadi Kisah Sukses Berikutnya?</h1>
                            <p class="text-white mb-0 fs-5 opacity-75">Bergabunglah dengan ribuan talenta lainnya dan temukan karir impianmu hari ini bersama Kejora.</p>
                        </div>
                        
                        <div class="col-lg-5 text-lg-end text-center">
                            <a class="btn btn-light text-primary py-3 px-5 rounded-pill fw-bold shadow-sm" href="register.php">
                                Buat Akun Gratis <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include 'footer.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {

            function initTestimonialCarousel() {
                let $carousel = $(".testimonial-carousel");

                if ($(window).width() > 768) {
                    // Desktop: Jalankan Owl
                    $carousel.owlCarousel({
                        autoplay: true,
                        smartSpeed: 1000,
                        items: 3,
                        dots: true,
                        loop: true,
                        margin: 25
                    });
                } else {
                    // HP: Hancurkan carousel + hapus clone
                    if ($carousel.hasClass("owl-loaded")) {
                        $carousel.trigger('destroy.owl.carousel');
                        $carousel.find('.owl-stage-outer').children().unwrap();    // unwrap stage
                        $carousel.removeClass("owl-carousel owl-loaded");
                        $carousel.find(".owl-item").children().unwrap();           // hapus wrapper owl-item
                        $carousel.find(".cloned").remove();                        // hapus cloned items
                    }
                }
            }

            initTestimonialCarousel();

            $(window).on("resize", function () {
                initTestimonialCarousel();
            });
        });
    </script>
</body>

</html>