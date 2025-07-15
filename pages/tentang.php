<?php include '../includes/navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
      .fade-section {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
        will-change: opacity, transform;
      }
      .fade-section.visible {
        opacity: 1;
        transform: translateY(0);
      }
      .fade-section.out {
        opacity: 0;
        transform: translateY(-40px);
      }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - MIS Raudhatul Jannah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2e9149',
                        'primary-light': '#4ade80',
                        'primary-dark': '#166534',
                        'primary-50': '#f0fdf4',
                        'primary-100': '#dcfce7',
                        'primary-200': '#bbf7d0',
                        'primary-300': '#86efac',
                        'primary-400': '#4ade80',
                        'primary-500': '#2e9149',
                        'primary-600': '#16a34a',
                        'primary-700': '#15803d',
                        'primary-800': '#166534',
                        'primary-900': '#14532d',
                        'primary-950': '#052e16',
                    }
                }
            }
        }
    </script>
    <style>
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(46, 145, 73, 0.9) 0%, rgba(46, 145, 73, 0.7) 100%), url('/img/mosque-bg.jpg') center/cover no-repeat;
        }
        
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.5s ease-in forwards;
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-menu.open {
            max-height: 500px;
        }

        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar.sticky {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(46, 145, 73, 0.95);
            z-index: 999;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 2rem;
            backdrop-filter: blur(10px);
        }
        
        .navbar.sticky + .hero-content {
            padding-top: 80px;
        }

        @media (max-width: 768px) {
            .navbar.sticky {
                padding: 10px 1rem;
            }
        }
    </style>
</head>

<body class="bg-primary-950 text-white">
    <!-- Navigation Section -->
    <header class="hero-gradient min-h-screen px-4 sm:px-10 md:px-20 lg:px-28 py-5 relative">
        <!-- Banner Image -->
        <img src="../images/banner.jpg" alt="Banner Kegiatan" class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-none: rounded-none" style="z-index:0;">
    
        <!-- Hero Content -->
        <div class="max-w-7xl mx-auto flex items-center justify-center h-[calc(100vh-80px)]">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white fade-section">TENTANG KAMI</h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white max-w-3xl mx-auto fade-section">
                    Mengenal lebih dekat MIS Raudhatul Jannah - Membangun Generasi Qur'ani yang Berakhlak Mulia
                </p>
            </div>
        </div>
    </header>

    <!-- About Content Section -->
    <section id="about-content" class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                <!-- Image Column -->
                <div class="lg:col-span-1 fade-section">
                    <div class="relative group">
                        <img src="../images/Sekolah_MIS.png" alt="MIS Raudhatul Jannah" class="w-full h-auto rounded-xl shadow-2xl transform group-hover:scale-105 transition duration-500">
                        <div class="absolute opacity-0 group-hover:opacity-20 rounded-xl transition duration-500"></div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="lg:col-span-2">
                    <h2 class="text-primary-900 font-bold mb-6">
                        <span class="text-5xl md:text-6xl lg:text-7xl block leading-tight fade-section">TENTANG</span>
                        <span class="text-primary-600 text-4xl md:text-5xl lg:text-6xl block leading-tight fade-section">MIS RAUDHATUL JANNAH</span>
                    </h2>                      
                    <div class="w-20 h-1 bg-primary-500 mb-8"></div>
                    
                    <div class="space-y-6 text-gray-700">
                        <p class="text-lg md:text-xl leading-relaxed text-justify fade-section">
                            MIS Raudhatul Jannah adalah madrasah ibtidaiyah swasta yang telah berdiri sejak tahun 1989. Sejak awal, madrasah ini berkomitmen untuk membentuk generasi yang beriman, berilmu, dan berakhlak mulia. Komitmen ini tercermin dalam setiap aspek pembelajaran yang diselenggarakan, menjadikan nilai-nilai keislaman sebagai landasan utama dalam membentuk karakter peserta didik.
                        </p>
                        <p class="text-lg md:text-xl leading-relaxed text-justify fade-section">
                            Didukung oleh tenaga pendidik yang profesional dan lingkungan belajar yang nyaman, MIS Raudhatul Jannah terus berinovasi dalam menciptakan proses pembelajaran yang aktif, kreatif, dan islami. Dengan pendekatan yang menyenangkan dan sesuai dengan perkembangan zaman, kami berharap setiap peserta didik dapat tumbuh menjadi pribadi yang unggul di bidang akademik maupun spiritual.
                        </p>
                    </div>
                    
                    <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-4 fade-section">
                        <a href="https://referensi.data.kemdikbud.go.id/pendidikan/npsn/60721512" target="_blank" class="block text-center p-4 bg-primary-50 rounded-lg fade-section hover:bg-primary-100 transition">
                            <div class="text-primary-600 text-3xl font-bold">60721512</div>
                            <div class="text-primary-900">NPSN</div>
                        </a>
                        <a href="https://referensi.data.kemdikbud.go.id/pendidikan/npsn/60721512" target="_blank" class="block text-center p-4 bg-primary-50 rounded-lg fade-section hover:bg-primary-100 transition">
                            <div class="text-primary-600 text-3xl font-bold">Swasta</div>
                            <div class="text-primary-900">Status</div>
                        </a>
                        <a href="https://referensi.data.kemdikbud.go.id/pendidikan/npsn/60721512" target="_blank" class="block text-center p-4 bg-primary-50 rounded-lg fade-section hover:bg-primary-100 transition">
                            <div class="text-primary-600 text-3xl font-bold">B</div>
                            <div class="text-primary-900">Akreditasi</div>
                        </a>
                        <a href="https://referensi.data.kemdikbud.go.id/pendidikan/npsn/60721512" target="_blank" class="block text-center p-4 bg-primary-50 rounded-lg fade-section hover:bg-primary-100 transition">
                            <div class="text-primary-600 text-3xl font-bold">1989</div>
                            <div class="text-primary-900">Tahun Berdiri</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="bg-primary py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-16 fade-section">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">VISI & MISI</h2>
                <p class="text-xl text-white max-w-3xl mx-auto">
                    Landasan filosofis dan arah pengembangan pendidikan di MIS Raudhatul Jannah
                </p>
                <div class="w-20 h-1 bg-primary-500 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 fade-section">
                <!-- Visi -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-eye-line text-primary-600 text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-primary-900">VISI</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed text-center">
                        "Menjadi Madrasah Ibtidaiyah terdepan dalam mencetak generasi muslim yang berakhlak mulia, beriman, bertaqwa, berilmu, dan mampu bersaing di era global dengan tetap berpegang teguh pada nilai-nilai Islam"
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-bookmark-3-line text-primary-600 text-2xl" style="font-family: 'remixicon' !important;"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-primary-900">MISI</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-primary-500 mt-1 mr-3"></i>
                            <span>Menyelenggarakan pendidikan Islam yang berkualitas dan berorientasi pada pembentukan karakter</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-primary-500 mt-1 mr-3"></i>
                            <span>Mengintegrasikan kurikulum nasional dengan pendidikan agama Islam secara komprehensif</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-primary-500 mt-1 mr-3"></i>
                            <span>Membangun lingkungan belajar yang kondusif dan Islami</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-primary-500 mt-1 mr-3"></i>
                            <span>Mengembangkan potensi siswa dalam bidang akademik, seni, dan olahraga</span>
                        </li>
                        <li class="flex items-start">
                            <i class="ri-checkbox-circle-fill text-primary-500 mt-1 mr-3"></i>
                            <span>Membentuk generasi yang berjiwa pemimpin dan peduli sosial</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- School Structure Section --
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-900 mb-4">STRUKTUR ORGANISASI</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kepemimpinan dan manajemen yang profesional untuk kemajuan pendidikan
                </p>
                <div class="w-20 h-1 bg-primary-500 mx-auto mt-4"></div>
            </div>

            !-- Organizational Chart --
            <div class="bg-primary-50 rounded-xl p-8 mb-12">
                <div class="flex flex-col items-center space-y-8">
                    -- Kepala Sekolah --
                    <div class="text-center">
                        <div class="w-32 h-32 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-user-star-line text-white text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-900">Kepala Sekolah</h3>
                        <p class="text-primary-600">Drs. Ahmad Fauzan, M.Pd.I</p>
                    </div>

                    -- Line --
                    <div class="w-0.5 h-8 bg-primary-300"></div>

                    -- Wakil Kepala Sekolah --
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-4xl">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ri-book-open-line text-white text-2xl"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-primary-900">Wakil Kepala</h4>
                            <h4 class="text-lg font-semibold text-primary-900">Bidang Kurikulum</h4>
                            <p class="text-primary-600">Siti Aminah, S.Pd.I</p>
                        </div>
                        <div class="text-center">
                            <div class="w-24 h-24 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ri-group-line text-white text-2xl"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-primary-900">Wakil Kepala</h4>
                            <h4 class="text-lg font-semibold text-primary-900">Bidang Kesiswaan</h4>
                            <p class="text-primary-600">Muhammad Ridwan, S.Pd</p>
                        </div>
                        <div class="text-center">
                            <div class="w-24 h-24 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ri-community-line text-white text-2xl"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-primary-900">Wakil Kepala</h4>
                            <h4 class="text-lg font-semibold text-primary-900">Bidang Humas</h4>
                            <p class="text-primary-600">Fatimah Zahra, S.Pd.I</p>
                        </div>
                    </div>
                </div>
            </div>

            -- Department Structure --
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all duration-300">
                    <i class="ri-graduation-cap-line text-4xl mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Koordinator Guru</h3>
                    <p class="text-sm opacity-90">Mengkoordinasi kegiatan pembelajaran dan pengembangan kurikulum</p>
                </div>
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all duration-300">
                    <i class="ri-shield-check-line text-4xl mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Koordinator BK</h3>
                    <p class="text-sm opacity-90">Membimbing dan mengarahkan perkembangan siswa secara holistik</p>
                </div>
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all duration-300">
                    <i class="ri-file-list-line text-4xl mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Tata Usaha</h3>
                    <p class="text-sm opacity-90">Mengelola administrasi dan keuangan sekolah dengan profesional</p>
                </div>
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl p-6 text-white text-center hover:transform hover:scale-105 transition-all duration-300">
                    <i class="ri-tools-line text-4xl mb-4"></i>
                    <h3 class="text-lg font-bold mb-2">Sarana Prasarana</h3>
                    <p class="text-sm opacity-90">Memelihara dan mengembangkan fasilitas sekolah yang memadai</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-10 fade-section">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-900 mb-4">FASILITAS SEKOLAH</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Fasilitas lengkap untuk mendukung kegiatan belajar mengajar yang optimal
                </p>
                <div class="w-20 h-1 bg-primary-500 mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Facility 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-home-4-line text-primary-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-900 text-center mb-3">Ruang Kelas</h3>
                        <p class="text-gray-600 text-center">Ruang kelas yang nyaman dengan kapasitas 25-30 siswa</p>
                    </div>
                </div>

                <!-- Facility 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-book-2-line text-primary-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-900 text-center mb-3">Perpustakaan</h3>
                        <p class="text-gray-600 text-center">Sistem perpustakaan digital dengan koleksi buku yang lengkap dan dapat diakses secara online</p>
                    </div>
                </div>

                <!-- Facility 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="ri-football-line text-primary-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-900 text-center mb-3">Lapangan Olahraga</h3>
                        <p class="text-gray-600 text-center">Lapangan serbaguna untuk kegiatan olahraga dan upacara</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>

</script>
      </div>
    </section>

<script>
// Intersection Observer untuk animasi scroll masuk/keluar viewport
document.addEventListener('DOMContentLoaded', function() {
  const fadeSections = document.querySelectorAll('.fade-section');
  const observer = new window.IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        entry.target.classList.remove('out');
      } else {
        entry.target.classList.remove('visible');
        entry.target.classList.add('out');
      }
    });
  }, {
    threshold: 0.65
  });
  fadeSections.forEach(section => {
    observer.observe(section);
  });
});
</script>
</body>
   <?php include '../includes/footer.php'; ?>
</html>