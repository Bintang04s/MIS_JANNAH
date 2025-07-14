<!DOCTYPE html>
<html lang="id">
<head>
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
  <?php include '../includes/navbar.php'; ?>
    <!-- Navigation Section -->
    <header class="hero-gradient min-h-screen px-4 sm:px-10 md:px-20 lg:px-28 py-5 relative">
        <!-- Banner Image -->
        <img src="../images/Banner_Guru.jpg" alt="Banner Guru" class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-events-none rounded-none" style="z-index:0;">
        <!-- Hero Content -->
        <div class="max-w-7xl mx-auto flex items-center justify-center h-[calc(100vh-80px)] relative" style="z-index:1;">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white fade-section">GURU KAMI</h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white max-w-3xl mx-auto fade-section">
                    Guru-guru kami adalah pembimbing terbaik dalam menanamkan iman, ilmu, dan akhlak mulia pada setiap siswa.   
                </p>
            </div>
        </div>
    </header>

        <section class="bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 md:px-10">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary mb-4">GURU KAMI</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Tenaga pendidik profesional yang mendidik dengan hati di MIS Raudhatul Jannah
                    </p>
                    <div class="w-20 h-1 bg-primary mx-auto mt-4"></div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Guru 1 -->
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Sri Komarla.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section">Sri Komarla S.pd</h3>
                        <p class="text-primary fade-section">Wali Kelas 6</p>
                    </div>
                    
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bunga.gif   " alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section">BUNGA ULTIHA MUTMAINAH, S.H.</h3>
                        <p class="text-primary fade-section">Wali Kelas 3B</p>
                    </div>
                    
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bu_Enah.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section"> Enah.S.PD</h3>
                        <p class="text-primary fade-section">Wali Kelas 2</p>
                    </div>
                                       
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bu_Mariam.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section">Sri Komarla (macan)</h3>
                        <p class="text-primary fade-section">Suhunya Sekolah</p>
                    </div>
                                      
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Hendra_Yudistiara.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section">Sri Komarla (macan)</h3>
                        <p class="text-primary fade-section">Suhunya Sekolah</p>
                    </div>
                                       
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bu_Erika.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/hendra-yudistiara/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section">Sri Komarla (macan)</h3>
                        <p class="text-primary fade-section">Suhunya Sekolah</p>
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
    threshold: 0.45
  });
  fadeSections.forEach(section => {
    observer.observe(section);
  });
});
</script>
                    </div>

                </div>
        </section>

  

   <?php include '../includes/footer.php'; ?>