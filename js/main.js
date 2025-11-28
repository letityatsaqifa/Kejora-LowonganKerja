(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 300) {
    //         $('.sticky-top').css('top', '0px');
    //     } else {
    //         $('.sticky-top').css('top', '100px');
    //     }
    // });
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{ items:1 },
            768:{ items:2 },
            992:{ items:3 }
        }
    });

    // ============================================
    // 🔥 SCRIPT KHUSUS MENU MOBILE (SLIDE KANAN)
    // ============================================
    
    // 1. Logika untuk menutup menu saat klik area hitam (backdrop)
    $(document).on('click', function (e) {
        // Jika klik di luar .navbar-collapse dan menu sedang terbuka
        if ($(e.target).closest('.navbar-collapse').length === 0 && $('.navbar-collapse').hasClass('show') && $(e.target).closest('.navbar-toggler').length === 0) {
            $('.navbar-collapse').collapse('hide'); // Tutup menu pakai fungsi Bootstrap
        }
    });

    // 2. Logika tombol Close (X) buatan CSS tadi
    // Karena tombol X itu pseudo-element (::after), kita deteksi klik di pojok kanan atas
    $('.navbar-collapse').click(function(e) {
        var width = $(this).width();
        var x = e.pageX - $(this).offset().left;
        var y = e.pageY - $(this).offset().top;
        
        // Jika klik di area pojok kanan atas (area tombol X)
        if (x > (width - 50) && y < 50) { 
            $(this).collapse('hide');
        }
    });

    // 3. Sidebar Admin (Code Kakak yang lama)
    var sidebarToggle = document.getElementById('sidebarToggle');
    if(sidebarToggle){
        sidebarToggle.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('open');
        });

        document.addEventListener('click', function(e) {
            const sidebar = document.querySelector('.sidebar');
            const toggle = document.getElementById('sidebarToggle');
            
            if (!sidebar.contains(e.target) && !toggle.contains(e.target) && window.innerWidth < 992) {
                sidebar.classList.remove('open');
            }
        });
    }

})(jQuery);

// Script buat buka tutup sidebar di HP
document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('open');
});

// Klik di luar sidebar buat nutup (Opsional tapi bagus)
document.addEventListener('click', function(e) {
    const sidebar = document.querySelector('.sidebar');
    const toggle = document.getElementById('sidebarToggle');
    
    if (!sidebar.contains(e.target) && !toggle.contains(e.target) && window.innerWidth < 992) {
        sidebar.classList.remove('open');
    }
});