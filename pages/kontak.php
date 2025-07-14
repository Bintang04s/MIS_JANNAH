<!doctype html>
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

  <script src="https://cdn.tailwindcss.com"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="../src/output.css" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script>

</head>
  <?php include '../includes/navbar.php'; ?>
<body class="bg-[#2e9149] text-white">
    
    <header class="hero-gradient min-h-screen px-10 sm:px-10 md:px-20 lg:px-28 py-10 relative">
        <img src="../images/kontak.jpg" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-none: rounded-none" style="z-index:0;">

        <div class="max-w-7xl mx-auto flex items-center justify-center h-[calc(100vh-80px)]">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white uppercase truncate whitespace-nowrap overflow-hidden fade-section">Kontak Kami</h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white max-w-3xl mx-auto fade-section">
                    Siap membantu kebutuhan informasi Anda. Silakan hubungi kami melalui kontak berikut
                </p>
            </div>
        </div>

    </header>

            <!-- Konten 2 Kolom: Info & Google Maps -->
        <section class="py-12 sm:py-16 px-4 sm:px-6 lg:px-8 bg-[#f5f7ff]">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-3xl sm:text-4xl font-bold text-[#2e9149] mb-3 sm:mb-4 fade-section">Kunjungi Kami</h2>
                    <div class="w-20 h-1 bg-[#2e9149] mx-auto mb-4"></div>
                    <p class="text-gray-600 max-w-2xl mx-auto text-base sm:text-lg fade-section">Kami selalu terbuka untuk kunjungan dan pertanyaan. Silakan datang ke lokasi kami atau hubungi melalui kontak berikut.</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-5xl w-full mx-auto">
                    <!-- Kolom Kiri: Info Kontak Card -->
                    <div class="flex flex-col gap-8">
                        <!-- Card: Alamat Sekolah -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex items-start fade-section">
                            <div class="bg-[#2e9149] p-3 rounded-full text-white mr-4">
                                <i class="fa-solid fa-map-location-dot text-xl"></i>
                            </div>
                            <div class="flex-1 text-justify">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Alamat Sekolah</h3>
                                <p class="text-gray-600 text-base mb-4">Jl. Bhayangkara No.I, RT.005/RW.011, Paku Jaya, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15326</p>
                                <a 
                                    href="https://maps.app.goo.gl/yCCb7sWjQmcfjtFr6" 
                                    target="_blank"
                                    class="inline-flex items-center bg-[#2e9149] rounded-lg px-4 py-2 text-white hover:bg-green-600 transition-all duration-300 text-base font-medium shadow-sm"
                                >
                                    <i class="fa-solid fa-route mr-2"></i>
                                    Buka di Maps
                                </a>
                            </div>
                        </div>
                        <!-- Card: Telepon & Email -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex items-start fade-section">
                            <div class="bg-[#2e9149] p-3 rounded-full text-white mr-4">
                                <i class="fa-solid fa-phone text-xl"></i>
                            </div>
                            <div class="flex-1 text-justify">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Telepon & Email</h3>
                                <p class="text-gray-600 text-base mb-4">081387017219 (Wandi)<br>raudhatuljannahm@gmail.com</p>
                                <div class="flex flex-wrap gap-3">
                                    <a 
                                        href="tel:081387017219" 
                                        class="inline-flex items-center bg-[#2e9149] rounded-lg px-4 py-2 text-white hover:bg-green-600 transition-all duration-300 text-base font-medium shadow-sm"
                                    >
                                        <i class="fa-brands fa-whatsapp mr-2"></i>
                                        <span>Whatsapp</span>
                                    </a>
                                    <a 
                                        href="mailto:info@miraudhatuljannah.sch.id" 
                                        class="inline-flex items-center bg-[#2e9149] rounded-lg px-4 py-2 text-white hover:bg-green-600 transition-all duration-300 text-base font-medium shadow-sm"
                                    >
                                        <i class="fa-solid fa-envelope mr-2"></i>
                                        Email
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Jam Operasional -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex items-start fade-section">
                            <div class="bg-[#2e9149] p-3 rounded-full text-white mr-4">
                                <i class="fa-solid fa-clock text-xl"></i>
                            </div>
                            <div class="flex-1 text-justify">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Jam Operasional</h3>
                                <p class="text-gray-600 text-base mb-1">Senin - Sabtu: 07.15 - 17.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <!-- Kolom Kanan: Google Maps -->
                    <div class="bg-white rounded-xl shadow-xl overflow-hidden flex items-stretch fade-section">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.242858989909!2d106.67352371081579!3d-6.231681561001781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbd2ad81cf6d%3A0xc61128154af7d9a!2sMI.%20RAUDHATUL%20JANNAH!5e0!3m2!1sid!2sid!4v1751728697208!5m2!1sid!2sid"
                            width="100%"
                            height="500" 
                            style="border:0; min-height:500px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            class="w-full h-full rounded-xl"
                        ></iframe>
                    </div>
                </div>
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
    threshold: 0.45
  });
  fadeSections.forEach(section => {
    observer.observe(section);
  });
});
</script>

</body>
<?php include '../includes/footer.php'; ?>
</html>