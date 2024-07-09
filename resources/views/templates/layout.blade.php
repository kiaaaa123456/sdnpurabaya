<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>SDN PURABAYA</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/swiper.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('template') }}/css/images/.png">
    <style>
        .bg-gray {
            background-color: rgb(249, 249, 248);
            padding: 20px;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .text-container {
            padding: 20px;
        }

        .text-container h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .text-container p {
            margin: 10px 0;
        }

        .split {
            display: flex;
        }

        .area-1,
        .area-2 {
            flex: 1;
        }

        .element-item img {
            transition: transform 0.3s ease-in-out;
        }

        .element-item:hover img {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html">
                <img src="{{ asset('template') }}/images/logo.png" alt="alternative"
                    style="width: 80px; height: auto; border-radius: 50%;">
            </a>


            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Desi</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="h1-large">SDN PURABAYA</h1>
                        <p style="color: white">Penerimaan Peserta Didik Baru SDN PURABAYA 2024/2025</p>
                        <a class="btn-solid-lg" href="https://bit.ly/ppdb-sdnpurabaya" target="_blank">Daftar</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->

        <!-- Image Background -->
        <img src="{{ asset('template') }}/images/sd.jpg" alt="Sekolah" id="image-background"
            style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: -1;">
        <!-- end of image background -->
    </header>
    <!-- end of header -->
    <!-- end of header -->


    <!-- Introduction -->
    <div id="introduction" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Profile SDN Purabaya</h2>
                    <p class="p-heading">SDN Purabaya berkomitmen untuk memberikan pendidikan berkualitas tinggi dengan
                        memperhatikan perkembangan holistik siswa. Kami percaya bahwa setiap anak memiliki potensi unik
                        yang harus dikembangkan dengan baik.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <!-- Menggunakan ikon lightbulb -->
                            <span class="fas fa-lightbulb"></span>

                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Visi</h4>
                            <div class="card-text">VISI - Terwujudnya Peserta Didik Yang Beriman, Berkarakter, Cerdas
                                dan Mandiri.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-bullseye"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Misi</h4>
                            <div class="card-text">1.Menciptakan pelajar yang mempunyai kesungguhan dalam
                                beriman kepada Allah SWT. <br>
                                2. MENUMBUHKAN KARAKTER peserta didik yang mencerminkan profil
                                pelajar pancasila yang diterapkan dalam prilaku sehari hari.<br>
                                3. MENANAMKAN ILMU
                                PENGETAHUAN peserta didik yang MEMILIKI wawasan global DAN KEBINEKAAN <br>
                                4. MENJADIKAN
                                peserta didik yang mampu berinisiatif, percaya diri tanpa bantuan orang lain.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon">
                            <span class="fas fa-flag-checkered"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Tujuan</h4>
                            <div class="card-text">1.Terbentuknya peserta didik yang taat dan tepat waktu melaksanakan
                                ibadah. <br>
                                2. Menghasilkan peserta didik yang mempunyai rasa kepedulian sosial yang tinggi. <br>
                                3. Memiliki prestasi pembelajaran dan kemampuan literasi serta numerasi. <br>
                                4. Menghasilkan peserta didik yang mandiri dalam menyelesaikan persoalan.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->

    <div class="split" id="about">
        <div class="area-1">
            <img src="{{ asset('template') }}/images/fotbar.jpg" alt="Foto Baru" style="width: 100%; height: 100%;">
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
        <div class="area-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Text Container -->
                        <div class="text-container">
                            {{-- <h2>Profile Sekolah SDN Purabaya</h2> --}}
                            <p>SDN Purabaya berada di desa Purabaya Kecamatan Leles Kabupaten Cianjur, Letak Sekolah
                                berada di lingkungan pemukiman warga yang mayoritas bermata pencaharian sebagai petani
                                DAN penghasil gula aren. Sekolah dekat dengan pusat pemerintahan desa purabaya dan
                                dilalui jalan raya kecamatan serta di kelilingi berbagai jenis pepohonan yang menjadikan
                                suasana atau udara sejuk. Sdn Purabaya juga berdekatan dengan 2 pesantren, Pendidikan
                                Usia Dini (PAUD). DAN JUGA BERDEKATAN DENGAN TEMPAT WISATA SUMBER AIR PANAS</p>
                        </div><!-- end of text-container -->
                        <!-- end of text container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of area-2 -->
    </div>


    <!-- Services 1 -->
    <div id="prestasi" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container" style="width: 100%; height: 80%; overflow: hidden;">
                        <img class="img-fluid" src="{{ asset('template') }}/images/nari.jpg" alt="alternative"
                            style="width: 100%; height: 100%;">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Kreasi Seni Tarian</h2>
                        <p>SDN PURABAYA menjadi juara 1 lomba Kreasi Seni Tarian TK Kecamatan Leles, dan melaju ke TK
                            Kabupaten.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of services 1 -->


    <!-- Services 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('template') }}/images/nyanyisolo.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Nyanyi Solo</h2>
                        <p>SDN PURABAYA meraih juara 1 Lomba nyanyi solo TK Kecamatan, dan melaju ke TK Kabupaten.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services 2 -->


    <!-- Services 3 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" style="width: 80%; height: 100%"
                            src="{{ asset('template') }}/images/pantomim.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Pantomim</h2>
                        <p>SDN PURABAYA meraih juara 1 lomba Pantomim TK Kecamatan, dan melaju ke TK Kabupaten</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of services 3 -->


    <!-- Projects -->
    <div id="kegiatan" class="filter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Kegiatan Sekolah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter=".business">UPACARA BENDERA</button>
                        <button class="button" data-filter=".eskul">EKSTRAKURIKULER</button>
                        <button class="button" data-filter=".pramuka">PRAMUKA</button>
                        <button class="button" data-filter=".software">PEMBIASAAN</button>
                    </div>
                    <div class="grid">
                        <div class="element-item business" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/upacara2.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item business" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/upacara.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item business" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/upacara3.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item eskul" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/olahraga2.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item eskul" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/olahraga.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item eskul" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/olahraga1.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item eskul" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/olahraga3.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item eskul" style="cursor: pointer">
                            <img class="img-fluid h-4" src="{{ asset('template') }}/images/kesenian.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka1.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka11.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka12.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka6.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka5.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item pramuka" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/pramuka4.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item software" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/keagamaan.jpg"
                                alt="alternative">
                        </div>
                        <div class="element-item software" style="cursor: pointer">
                            <img class="img-fluid" src="{{ asset('template') }}/images/senam.jpg" alt="alternative">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image"
                                        src="{{ asset('template') }}/images/kepalasekolah.jpg" alt="alternative">
                                    <div class="testimonial-author">Usep S.Pd</div>
                                    <div class="testimonial-position">Kepala Sekolah</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas6.jpg"
                                        alt="">
                                    <div class="testimonial-author">Aep Hidayat S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 3</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas5.jpg"
                                        alt="Ust. Fauzi Ahmad Sidiq">
                                    <div class="testimonial-author">Lina Marlina S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 5</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas4.jpg"
                                        alt="Ust. Ahmad Nabil">
                                    <div class="testimonial-author">Usep S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 4</div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas3.jpg"
                                        alt="Ust. Ahmad Nabil">
                                    <div class="testimonial-author">Nanang Hidayat S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 6</div>
                                </div>
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas2.jpg"
                                        alt="Ust. Ahmad Nabil">
                                    <div class="testimonial-author">Masropah S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 2</div>
                                </div>
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/kelas1.jpg"
                                        alt="Ust. Ahmad Nabil">
                                    <div class="testimonial-author">Dadah Julia S.Pd</div>
                                    <div class="testimonial-position">Guru Kelas 1</div>
                                </div>
                                <div class="swiper-slide">
                                    <img class="testimonial-image" src="{{ asset('template') }}/images/penjas.jpg"
                                        alt="Ust. Ahmad Nabil">
                                    <div class="testimonial-author">Hudman Sayuti S.Pd</div>
                                    <div class="testimonial-position">Guru Olahraga</div>
                                </div>

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Statistics -->
    {{-- <div class="counter bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="3"
                                class="purecounter">1</div>
                            <div class="counter-info">Guru</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="120"
                                data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Siswa Siswi</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="3"
                                class="purecounter">1</div>
                            <div class="counter-info">Good Reviews</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="1" data-purecounter-end="100" data-purecounter-duration="3"
                                class="purecounter">1</div>
                            <div class="counter-info">Akreditas</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter --> --}}
    <!-- end of statistics -->

    <!-- Footer -->
    <div id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <p class="p-small"><strong>SDN PURABAYA</strong> merupakah sekolah negeri terakreditasi B
                                yang berada di Desa Purabaya, Kec. Leles, Kab. Cianjur, Jawa Barat</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Hubungi Kami</h6>
                            <a href="https://maps.app.goo.gl/aV3kN7egvx1LR1hCA" target="_blank">
                                <p><strong>Alamat: J2XC+79W, Purabaya, Kec. Leles, Kabupaten Cianjur, Jawa Barat
                                        43273</strong></p>
                            </a>
                            <ul class="list-unstyled li-space-lg p-small">
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                </a>
                            </span>
                            <p class="p-small">Klik icon di atas, untuk menanyakan informasi lebih lanjut</p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2024 SD Negeri Purabaya Powered By | FreshGradu</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row --> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
    {{-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var iso = new Isotope('.grid', {
                itemSelector: '.element-item',
                layoutMode: 'fitRows'
            });

            var filtersElem = document.querySelector('.filters-button-group');
            filtersElem.addEventListener('click', function(event) {
                if (!event.target.matches('button')) {
                    return;
                }
                var filterValue = event.target.getAttribute('data-filter');
                iso.arrange({
                    filter: filterValue
                });

                // Tambahkan kelas is-checked pada tombol yang diklik
                filtersElem.querySelector('.is-checked').classList.remove('is-checked');
                event.target.classList.add('is-checked');
            });

            // Inisialisasi filter dengan tombol pertama
            iso.arrange({
                filter: '.business'
            });
        });
    </script>


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('template') }}/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{ asset('template') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('template') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('template') }}/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('template') }}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{ asset('template') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
