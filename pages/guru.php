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
                    <h3 class="text-xl font-bold text-gray-800 fade-section uppercase">Sri Komarla S.pd</h3>
                    <!-- <p class="text-primary fade-section">Wali Kelas 6</p> -->
                </div>
                    
                <div class="text-center fade-section">
                    <div class="relative group mb-6 overflow-hidden rounded-xl">
                        <img src="../images/Guru/Bunga.gif   " alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                            <div class="flex space-x-4">
                                 <a href="https://sites.google.com/view/bungaultihamutmainahsh/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 fade-section">BUNGA ULTIHA MUTMAINAH, S.H.</h3>
                    <!-- <p class="text-primary fade-section">Wali Kelas 3B</p> -->
                </div>
                    
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bu_Enah.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/bahan-ajar-pancasila-new/materi-pelajaran" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section uppercase"> Enah </h3>
                        <!-- <p class="text-primary fade-section">Wali Kelas 2</p> -->
                    </div>
                                       
                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Bu_Mariam.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/kelasbumariam/home?authuser=0" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section uppercase">Mariam, S.Pd.I </h3>
                        <!-- <p class="text-primary fade-section">Suhunya Sekolah</p> -->
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
                        <h3 class="text-xl font-bold text-gray-800 fade-section uppercase">Hendra Yudistiara, S.Pd.I </h3>
                        <!-- <p class="text-primary fade-section">Suhunya Sekolah</p> -->
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
                        <h3 class="text-xl font-bold text-gray-800 fade-section uppercase">Erica Lusiana Dewi, S.M</h3>
                        <!-- <p class="text-primary fade-section">Suhunya Sekolah</p> -->
                    </div>

                    <div class="text-center fade-section">
                        <div class="relative group mb-6 overflow-hidden rounded-xl">
                            <img src="../images/Guru/Siti_Hasanah.gif" alt="Guru" class="w-full h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105 fade-section">
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-500 rounded-xl flex items-center justify-center">
                                <div class="flex space-x-4">
                                    <a href="https://sites.google.com/view/sitihasanahspdi/halaman-muka" class="text-white hover:text-primary-300 transition duration-300">
                                        <i class="ri-pages-line text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 fade-section uppercase">Siti Aminah, S.Pd.I </h3>
                        <!-- <p class="text-primary fade-section">Suhunya Sekolah</p> -->
                    </div>                    
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
            

            </div>

        <!-- Modul Google Slides Grid 3x3 dengan Pagination -->
        <?php
        $modul_slides = [
            [
                'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQiK1X8E6x1epIxxCjxT76Jz_JGM9s6KyGLWqB6o6PLwQzww10BLjou3i6BKetFkg/pubembed?start=false&loop=false&delayms=3000',
                'title' => 'Modul 1'
            ],
            // Tambahkan link modul lain di sini (total 9+ untuk tes pagination)
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vSWm6-f3awkU3Rh5sxQaarpgIL2VxGEjTgmE09liKraU4vzQ_RqqGBbhHX50Odn3g/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 2'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTG2VzksmGb4QA6ugvoMr-k-AF6Ju1GsonfEt4GPY9h5KU0jd2HvXZTONGBFkrQvQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 3'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRHiuG4SuqBH27NVQSZLf5SCmjN7ZjKdQ_n01lb33IS_FGEEGJ44eRhuPECdf-nyQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 4'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQp4Awpw2ufX7bJeCpEppyPxrhaP3fxKG7OJjVmM6zS7BIPojfvqbq8CpvqGpr5xg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 5'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vR25uev8-v3q3VjkS1MadqEkxtPLINFtkJl-oHMNqf2jEgh4EudCgi360O4MkHXSA/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 6'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRYnaDvC1Zb12QiW8hrjRuArxiyWTNNwQ9p0RjLIV0Fn8z_cFnL781tM8vl5cAMxA/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 7'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRTNDe1ZG0XfVHgmerjOfGfonjypUpuj2Tpsa_Dpi1A9mMRitBZ0rs1djqoKFYZ1g/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 8'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vR1ClorO45Bj9BKsftXzpdDITQHa8clUlXArkT15JDoEtH7BYSvDPk8aM3h2YRoNg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 9'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQS8d91Hj90OMex0Ka-eEewR566foLk5vZwZBsiWT-Wq9IAxRj3lZEN1CSXQRoOOg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 10'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQ5r-mObA1wZiAs68Q3CaJyIaJfotxIkG52IZ3tpLS4d4ECARsoTsltPpvD2AK1tw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 11'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRtL2CgEgSgInKThTWd4lwfOqbmZoRmk64mPhG76Cwqct2sxQ3BK2MGN4CpNHrRTw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 12'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTwTnObLgHcEwX4ZI4_g4oA2QmhkxQFQmz3Dhk5_s5wLr9BCm4b89iUAUp3HIvCew/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 13'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTmoPQPDKZbZdwyYI3plDNhPhrDlwERYNqdMT33yGX_SBNsiUcTUG9pso6PoLcRmg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 14'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQqvwAYxq4mpFkW3sPrwVF2P6cL7F8HXOqqapVNCXkv-48W6n-W_Q2g0wL-58UHcw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 15'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQxkIykZKayeazK4z6xKXG57U1GGDp4Pl5_a_Tt88N_BckOpwPWfqeXvmLZpORBxA/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 16'],                   
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQOcDOK2fW_b9Ri9vzlnHy6IMg_OWz0oECwcZR-nnb54cyz4SC7rKHugD8CuLNa_g/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 17'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vR6D43wNy1vkbZ5N2h5f0hALhmRWZfdNM4zexGsxWLr7wihf8NeJMby39lj7VDRdA/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 18'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQtWZlVzTe3vzAO-U-VwhCqtI7c1bcP0oD_rIRdMaU0CoABlxiGHRhYsSc9cHzpsw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 19'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQ_R59q-sGosKpRbaYIH5pdTJMH-i1x3pqH3PgNKoeSnBzAdExAS7zkbCGVJdc83Q/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 20'],        
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vStcLPeIASYVzmZ3R2M4eXRKcySjm4KjAFZ5m6yASUwfShZvUaYtBML8RFOdyynxA/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 21'],                   
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTIWQMM1YPOxV6_IaLiqWwzLiUABi88_njZABcWED9R7A9-z_MveibzcX5_QmmaZg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 22'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTQeInqS2vwIY3L36f3lHS2rPw-tluxgZ6sXAllItrDPkUwjnuDsg3u7tOwlS0O5Q/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 23'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRsHw-Jw2oNOdDSq-EyGNwalI1_NE_TjrTbA0vIQ_VJqAfueUWXfJvAzFa3rGOuDQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 24'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRfuDiy0wb4VEPBIVpDe-Ayju7s39tcPHgjk55APXDvshNFk2JRJt9W2-cs3HjW0w/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 25'],       
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vT2LAjHn8p0LEp2J5s6D3ZfWUI7ASxnHGP7dIRX8gO5ynbSkIBraRio9tXUbwWPXQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 26'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRkWX_2467rc9ZaAipyR0OY6kCFKYpolqnavBZvQbpVb7-QAg3u3kCra8umBKSwxQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 27'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRqnojpjjqbmZTYHLMBxf0bpggzmUgQwzs1BNCLz21m16UN7blHErI9HhmoJi05dw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 28'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vT9svAn75LYYMdUcW97PHz3Oqude1KAr2chH_QyFG-dzNfe1ABfrnBOCckA-gCKGQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 29'],        
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTrnic9kWIkZ2x_1crbDMbiK6pqkbvVAbzdYZ5cWZ1GTcPnclCmkLE9mVOzQdyq-g/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 30'],                   
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTCmh46A2IefGkVifgkfKTkN2Z8IdIDHiaoBBwUN-7Ccvvx6g2NU30ifLhXSavrxw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 31'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQItfpU5hwdSehQ67YssyXePd6SVtSOxKM-tPPcvB8BivRiQzLoGDcQYOANQqnAlg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 32'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vQv5YMW5lOg-UeFWzu0rV7T4W9NgSjdAjNDcRGPvNA2_qEFj6TfzqlZXoRPziMyDg/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 33'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vTL0w7WifkPI6Te38VlT4F1KyqypcVLYgc2WnyFUvhJPvRYUt5xuuq03O1CgCDkBw/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 34'],      
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRyNkErkoitEyV9DT9om58kcUy2tJkJJ4OsYTnQbc3ANp3QmLYnV86UR5WAOTY6FQ/pubembed?start=false&loop=false&delayms=3000', 'title' => 'Modul 35'],
            [ 'src' => 'https://docs.google.com/presentation/d/e/2PACX-1vRjb6IbdmjKNaO102Qjg-XiHOdErenyeMUeEDwqpaqtJdGvqmQOweCJL3LouDWOHA/pubembed?start=false&loop=false&delayms=300', 'title' => 'Modul 36'],   
        ];
        ?>
        <div class="max-w-7xl mx-auto mt-16 mb-8">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">Modul Pembelajaran</h3>
                <p class="text-gray-600">Materi pembelajaran interaktif untuk siswa</p>
            </div>
            <div id="modul-slides-pagination" class="flex justify-center mt-8 mb-8 space-x-2"></div>
            <div id="modul-slides-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
            <!-- Modal Fullscreen PPT -->
            <div id="ppt-modal" class="fixed inset-0 bg-black bg-opacity-80 z-[9999] hidden flex-col items-center justify-center">
                <button id="ppt-modal-close" class="absolute top-4 right-4 text-white text-3xl font-bold bg-black bg-opacity-40 rounded-full w-12 h-12 flex items-center justify-center hover:bg-opacity-70 transition">&times;</button>
                <div class="w-full h-full flex items-center justify-center p-0 m-0">
                    <iframe id="ppt-modal-iframe" src="" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" class="w-full h-full bg-white"></iframe>
                </div>
            </div>
        </div>
        <script>
        const modulSlides = <?php echo json_encode($modul_slides); ?>;
        const MODULS_PER_PAGE = 9;
        let modulPage = 0;
        function renderModulGrid(page) {
            const grid = document.getElementById('modul-slides-grid');
            grid.innerHTML = '';
            const start = page * MODULS_PER_PAGE;
            const end = Math.min(start + MODULS_PER_PAGE, modulSlides.length);
            for (let i = start; i < end; i++) {
                const modul = modulSlides[i];
                const card = document.createElement('div');
                card.className = 'bg-white rounded-xl shadow-lg overflow-hidden flex flex-col items-center';
                card.innerHTML = `
                    <div class="w-full aspect-video flex items-center justify-center bg-gray-100 cursor-pointer group relative">
                        <iframe src="${modul.src}" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" class="w-full h-60 md:h-64 lg:h-72 ${window.innerWidth < 768 ? 'pointer-events-none' : ''} group-hover:ring-2 group-hover:ring-primary"></iframe>
                        <div class="absolute inset-0 block md:hidden cursor-pointer"></div>
                    </div>
                    <div class="p-4 w-full text-center">
                        <h4 class="font-bold text-primary text-lg mb-1">${modul.title}</h4>
                    </div>
                `;
                // Modal fullscreen on mobile
                const pptDiv = card.querySelector('div');
                pptDiv.addEventListener('click', function(e) {
                    if (window.innerWidth < 768) {
                        e.preventDefault();
                        const modal = document.getElementById('ppt-modal');
                        const modalIframe = document.getElementById('ppt-modal-iframe');
                        modalIframe.src = modul.src;
                        modal.classList.remove('hidden');
                        document.body.classList.add('overflow-hidden');
                    }
                });
                grid.appendChild(card);
            }
        }
        // Modal close handler
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('ppt-modal');
            const closeBtn = document.getElementById('ppt-modal-close');
            closeBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.getElementById('ppt-modal-iframe').src = '';
                document.body.classList.remove('overflow-hidden');
            });
            // Close modal on click outside iframe
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    document.getElementById('ppt-modal-iframe').src = '';
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
        // Tambah style untuk modal agar benar-benar fullscreen landscape di mobile
        const style = document.createElement('style');
        style.innerHTML = `
        #ppt-modal { display: flex; }
        #ppt-modal.hidden { display: none; }
        @media (max-width: 767px) {
            #ppt-modal { padding: 0 !important; }
            #ppt-modal .w-full, #ppt-modal .h-full { max-width: 100vw !important; max-height: 100vh !important; }
            #ppt-modal-iframe {
                width: 100vw !important;
                height: 100vh !important;
                min-width: 100vw !important;
                min-height: 100vh !important;
                max-width: 100vw !important;
                max-height: 100vh !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                background: #fff;
            }
            #ppt-modal .p-0, #ppt-modal .m-0 { padding: 0 !important; margin: 0 !important; }
        }
        `;
        document.head.appendChild(style);
        function renderModulPagination() {
            const pag = document.getElementById('modul-slides-pagination');
            pag.innerHTML = '';
            const total = Math.ceil(modulSlides.length / MODULS_PER_PAGE);
            for (let i = 0; i < total; i++) {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = `w-10 h-10 flex items-center justify-center font-bold border border-[#2e9149] mx-1 transition-colors duration-200 ${i === modulPage ? 'bg-[#2e9149] text-white' : 'bg-white text-[#2e9149] hover:bg-[#e6f4ea]'} rounded-md`;
                btn.textContent = i + 1;
                btn.addEventListener('click', () => {
                    if (modulPage !== i) {
                        modulPage = i;
                        renderModulGrid(modulPage);
                        renderModulPagination();
                    }
                });
                pag.appendChild(btn);
            }
        }
        renderModulGrid(modulPage);
        renderModulPagination();
        // Fade-section removed from modul cards to fix pagination bug
        </script>
        </section>

  
</body>
   <?php include '../includes/footer.php'; ?>