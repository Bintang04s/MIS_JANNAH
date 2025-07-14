
// Kegiatan grid 3x3 dengan pagination
window.addEventListener('DOMContentLoaded', function() {
  const ITEMS_PER_PAGE = 9;
  const slider = document.getElementById('kegiatan-slider');
  const pagination = document.getElementById('kegiatan-pagination');
  const data = JSON.parse(document.getElementById('kegiatan-terbaru-data').textContent);
  let currentPage = 0;
  const totalPages = Math.ceil(data.length / ITEMS_PER_PAGE);

  function renderPage(pageIdx) {
    slider.innerHTML = '';
    const start = pageIdx * ITEMS_PER_PAGE;
    const end = Math.min(start + ITEMS_PER_PAGE, data.length);
    for (let i = start; i < end; i++) {
      const kegiatan = data[i];
      const card = document.createElement('div');
      card.className = 'bg-white rounded-lg shadow-lg overflow-hidden flex flex-col w-[92vw] max-w-sm md:max-w-[300px] min-w-[240px] md:min-w-[240px] h-[550px] md:h-[550px] text-[#2e9149] mx-2 md:mx-4 transition-transform duration-200 ease-in-out hover:scale-105 fade-section';
      card.innerHTML = `
        <img src="${kegiatan.img}" alt="${kegiatan.judul}" class="w-full h-48 md:h-56 object-cover">
        <div class="p-4 flex flex-col flex-1">
          <div class="flex flex-row items-center justify-between mb-2 w-full">
            <span class="inline-block bg-[#2e9149] text-white text-xs font-semibold uppercase px-3 py-1 rounded-full">${kegiatan.kategori}</span>
            <span class="flex items-center text-xs text-gray-400">
              <svg xmlns='http://www.w3.org/2000/svg' class='w-4 h-4 mr-1' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z'/></svg>
              <span>${kegiatan.tanggal}</span>
            </span>
          </div>
          <h3 class="font-bold text-lg mb-2 line-clamp-2 min-h-[48px]">${kegiatan.judul}</h3>
          <p class="text-sm mb-2 min-h-[54px] text-justify">${kegiatan.deskripsi}</p>
        </div>
      `;
      slider.appendChild(card);
    }
    // Atur grid agar 3 kolom di desktop
    slider.className = 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6';
  }

  function renderPagination() {
    pagination.innerHTML = '';
    for (let i = 0; i < totalPages; i++) {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = `w-10 h-10 flex items-center justify-center font-bold border border-[#2e9149] mx-1 transition-colors duration-200 ${i === currentPage ? 'bg-[#2e9149] text-white' : 'bg-white text-[#2e9149] hover:bg-[#e6f4ea]'} rounded-md`;
      btn.textContent = i + 1;
      btn.addEventListener('click', () => {
        if (currentPage !== i) {
          currentPage = i;
          renderPage(currentPage);
          renderPagination();
        }
      });
      pagination.appendChild(btn);
    }
  }

  renderPage(currentPage);
  renderPagination();
});
