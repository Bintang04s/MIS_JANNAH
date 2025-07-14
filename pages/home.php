<?php include '../includes/navbar.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="../src/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script>

</head>
<body class="bg-[#2e9149] text-white">
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
  /* Responsive fix for slider overflow */
  #kegiatan-slider, #galeri-slider {
    width: 100%;
    max-width: 100vw;
    box-sizing: border-box;
  }
</style>
    <header class="hero-gradient min-h-screen px-10 sm:px-10 md:px-20 lg:px-28 py-10 relative">
        <img src="../images/kontak.jpg" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-none: rounded-none" style="z-index:0;">
        <div class="max-w-7xl mx-auto flex items-center justify-center h-[calc(100vh-80px)]">
            <div class="text-center px-4">
                <h1 class="text-2xl sm:text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white uppercase break-words text-center max-w-xs sm:max-w-2xl mx-auto fade-section">MIS Ibtidaiyah Raudhatul Jannah</h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white max-w-3xl mx-auto fade-section">
                    Mencetak Generasi Islami yang Berprestasi
                </p>
            </div>
        </div>

    </header>
    
    <section class="py-42 bg-[#ffffff]">
        <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8">
          <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10 lg:gap-12">
            <!-- Gambar di sebelah kiri (float left on desktop) -->
            <div class="order-1 md:order-1 md:w-1/3 w-full flex justify-center md:justify-start fade-section">
              <img 
                src="../images/Penasehat_Madrasah.png" 
                alt="Kepala Madrasah" 
                class="rounded-lg shadow-xl object-cover w-full max-w-xs md:max-w-[300px] min-w-[180px] md:min-w-[240px] h-64 sm:h-72 md:h-56 xl:h-64"
              />
            </div>
            <!-- Teks di sebelah kanan -->  
            <div class="order-2 w-full text-justify fade-section">
              <h2 class="text-2xl md:text-3xl font-bold text-[#2e9149] mb-4 text-center md:text-left">Sambutan Penasehat Sekolah</h2>
              <p class="text-base md:text-lg text-[#2e9149] mb-8 mx-4 md:mx-0">(Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi MI Ibtidaiyah Raudhatul Jannah. Kami berkomitmen untuk mencetak generasi Qur'ani yang berakhlak mulia dan berprestasi di bidang akademik maupun non-akademik.)</p>
            </div>
          </div>
        </div>
    </section>

    <section class="py-12" style="background-color: #2e9149;">
        <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8">
          <h2 class="text-2xl font-bold text-center text-[#ffffff] mb-8 C">Kegiatan Terbaru</h2>
          <div class="relative flex justify-center items-center py-4 md:py-8 fade-section">
            <button id="kegiatan-prev" class="inline-flex items-center justify-center bg-white text-[#2e9149] rounded-full shadow p-2 z-10 hover:bg-emerald-100 transition absolute -left-8 md:-left-16 top-1/2 -translate-y-1/2" aria-label="Sebelumnya">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <div class="flex-1 flex justify-center items-center" style="overflow:visible;">
              <div id="kegiatan-slider" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 w-full justify-items-center"></div>
            </div>
            <button id="kegiatan-next" class="inline-flex items-center justify-center bg-white text-[#2e9149] rounded-full shadow p-2 z-10 hover:bg-emerald-100 transition absolute -right-8 md:-right-16 top-1/2 -translate-y-1/2" aria-label="Berikutnya">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
          </div>
          <div id="kegiatan-pagination" class="block md:hidden text-center mt-4 text-white font-bold text-lg fade-section"></div>
          <div class="text-center mt-8">
            <a id="btn-lihat-kegiatan" href="kegiatan.php" class="inline-block bg-white text-[#2e9149] px-6 py-3 rounded-lg shadow w-full max-w-xs">Lihat Semua Kegiatan</a>
          </div>
          
          <script type="application/json" id="kegiatan-terbaru-data">
          <?php
          include_once __DIR__ . '/../includes/data_kegiatan.php';
          echo json_encode($data_kegiatan);
          ?>
          </script>
          <script src="../src/js/kegiatan.js"></script>

        </div>                            
    </section>

    <section class="py-12 bg-gray-50">
      <div class="max-w-6xl mx-auto px-2 sm:px-4 md:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-center text-[#2e9149] mb-8 fade-section ">Galeri Kami</h2>
        <div class="relative flex justify-center items-center py-4 md:py-8 fade-section">
          <button id="galeri-prev" class="inline-flex items-center justify-center bg-white text-[#2e9149] rounded-full shadow p-2 z-10 hover:bg-emerald-100 transition absolute -left-8 md:-left-16 top-1/2 -translate-y-1/2" aria-label="Sebelumnya">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
          </button>
          <div class="flex-1 flex justify-center items-center" style="overflow:visible;">
            <div id="galeri-slider" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 w-full justify-items-center"></div>
          </div>
          <button id="galeri-next" class="inline-flex items-center justify-center bg-white text-[#2e9149] rounded-full shadow p-2 z-10 hover:bg-emerald-100 transition absolute -right-8 md:-right-16 top-1/2 -translate-y-1/2" aria-label="Berikutnya">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          </button>
        </div>
        <div id="galeri-pagination" class="block md:hidden text-center mt-4 text-[#2e9149] font-bold text-lg"></div>
      <style>
        @media (max-width: 640px) {
          #kegiatan-slider .card-kegiatan, #galeri-slider .card-galeri {
            min-width: 0 !important;
            max-width: 100% !important;
          }
        }
      </style>
        <script type="application/json" id="galeri-data">
        <?php
          include_once __DIR__ . '/../includes/data_galeri.php';
          echo json_encode($data_galeri);
        ?>
        </script>
        <script src="../src/js/galeri.js"></script>
<script>
// Tambahkan fade-section ke setiap card kegiatan dan galeri setelah data dimuat
document.addEventListener('DOMContentLoaded', function() {
  // Untuk kegiatan
  const kegiatanSlider = document.getElementById('kegiatan-slider');
  if (kegiatanSlider) {
    const observer = new MutationObserver(() => {
      kegiatanSlider.querySelectorAll('.card-kegiatan').forEach(card => {
        card.classList.add('fade-section');
      });
    });
    observer.observe(kegiatanSlider, { childList: true, subtree: true });
  }
  // Untuk galeri
  const galeriSlider = document.getElementById('galeri-slider');
  if (galeriSlider) {
    const observer2 = new MutationObserver(() => {
      galeriSlider.querySelectorAll('.card-galeri').forEach(card => {
        card.classList.add('fade-section');
      });
    });
    observer2.observe(galeriSlider, { childList: true, subtree: true });
  }
});
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