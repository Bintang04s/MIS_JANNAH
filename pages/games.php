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
  <link href="../src/output.css" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script>
  <title>MI Raudhatul Jannah - Games</title>

</head>
  <?php include '../includes/navbar.php'; ?>
<body class="bg-[#2e9149] text-white">
    
    <header class="hero-gradient min-h-screen px-10 sm:px-10 md:px-20 lg:px-28 py-10 relative">
        <img src="../images/kontak.jpg" alt="Banner Home" class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-none: rounded-none" style="z-index:0;">

        <div class="max-w-7xl mx-auto flex items-center justify-center h-[calc(100vh-80px)]">
            <div class="text-center px-4">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 text-white uppercase truncate whitespace-nowrap overflow-hidden fade-section">Games</h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white max-w-3xl mx-auto fade-section">
                    Bermain sambil belajar dengan berbagai permainan edukatif yang menyenangkan
                </p>
            </div>
        </div>

    </header>

    <section class="py-12" style="background-color: #ffffff;">
        <div class="max-w-6xl mx-auto px-4">
          <div class="flex items-center justify-between mb-8 w-full px-2 md:px-0">
            <h2 class="text-2xl font-bold text-[#2e9149] fade-section">Games</h2>
            <div id="kegiatan-pagination" class="flex space-x-2"></div>
          </div>
          <div class="relative flex justify-center items-center py-4 md:py-8">
            <div class="flex-1 flex justify-center items-center" style="overflow:visible;">
              <div id="kegiatan-slider"></div>
            </div>
          </div>
        <script type="application/json" id="data_games">
            <?php
            include_once __DIR__ . '/../includes/data_games.php';
            $data_games_fixed = array_map(function($item) {
            if (isset($item['img']) && strpos($item['img'], '../') === false) {
                $item['img'] = '../' . $item['img'];
            }
            return $item;
            }, $data_games);
            echo json_encode($data_games_fixed);
            ?>
        </script>
        <script src="../src/js/Games.js"></script>
        </div>                            
    </section>

<script>
// Tambahkan fade-section ke setiap card games setelah data dimuat
document.addEventListener('DOMContentLoaded', function() {
  const gamesSlider = document.getElementById('kegiatan-slider');
  if (gamesSlider) {
    const observer = new MutationObserver(() => {
      gamesSlider.querySelectorAll('.card-games').forEach(card => {
        card.classList.add('fade-section');
      });
    });
    observer.observe(gamesSlider, { childList: true, subtree: true });
  }
});
</script>

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