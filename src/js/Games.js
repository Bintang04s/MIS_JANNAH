window.addEventListener('DOMContentLoaded', function() {
const ITEMS_PER_SLIDE = 9;
const sliderGrid = document.getElementById('kegiatan-slider');
const sliderPagination = document.getElementById('kegiatan-pagination');
let currentSlide = 0;

// Ambil data dari tag script JSON (yang sudah diisi dari data_games.php)
const kegiatanData = JSON.parse(document.getElementById('data_games').textContent);
const totalSlides = Math.ceil(kegiatanData.length / ITEMS_PER_SLIDE);

function renderSlide(slideIdx) {
  sliderGrid.classList.add('opacity-0', 'translate-y-4');
  setTimeout(() => {
    sliderGrid.innerHTML = '';
    const start = slideIdx * ITEMS_PER_SLIDE;
    const end = start + ITEMS_PER_SLIDE;
    const items = kegiatanData.slice(start, end);
    items.forEach((item) => {
      const card = document.createElement('div');
      card.className = "card-games kegiatan-card bg-white rounded-xl shadow-lg flex flex-col overflow-hidden w-[92vw] max-w-sm md:max-w-[300px] min-w-[240px] md:min-w-[240px] h-[410px] md:h-[410px] text-[#2e9149] mx-2 md:mx-4 transition-transform duration-200 ease-in-out hover:scale-105 fade-section";
      const link = item.link ? item.link : '#';
      card.innerHTML = `
        <div class=\"img-wrapper w-full aspect-[4/3] h-48\">
          <img src=\"${item.img}\" alt=\"${item.judul}\" class=\"w-full h-full object-cover\" loading=\"lazy\">
        </div>
        <div class=\"flex-1 flex flex-col p-6\">
          <h4 class=\"text-lg font-bold text-primary-900 mb-2 text-center uppercase\">${item.judul}</h4>
          <p class=\"text-gray-600 text-center\">${item.deskripsi}</p>
          <div class=\"flex justify-center mt-4\">
            <a href=\"${link}\" target=\"_blank\" rel=\"noopener\" class=\"inline-block bg-[#2e9149] hover:bg-[#15803d] text-white font-semibold px-6 py-2 rounded-full shadow transition\">${item.button || 'Main'}</a>
          </div>
        </div>
      `;
      sliderGrid.appendChild(card);
    });
    sliderGrid.classList.remove('translate-y-4');
    sliderGrid.classList.add('opacity-100');
    setTimeout(() => {
      sliderGrid.classList.remove('opacity-0');
    }, 10);
  }, 200);
}

function renderPagination() {
  sliderPagination.innerHTML = '';
  for (let i = 0; i < totalSlides; i++) {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = `w-10 h-10 flex items-center justify-center font-bold border border-[#2e9149] mx-1 transition-colors duration-200
      ${i === currentSlide ? 'bg-[#2e9149] text-white' : 'bg-white text-[#2e9149] hover:bg-[#e6f4ea]'} rounded-md`;
    btn.textContent = i + 1;
    btn.addEventListener('click', () => {
      if (currentSlide !== i) {
        currentSlide = i;
        renderSlide(currentSlide);
        renderPagination();
      }
    });
    sliderPagination.appendChild(btn);
  }
}

sliderGrid.classList.add('grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-3', 'gap-6', 'opacity-100', 'transition-all', 'duration-500');
renderSlide(currentSlide);
renderPagination();
});
