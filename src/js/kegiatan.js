// Kegiatan slider logic for home.php
(function(){
  const data = JSON.parse(document.getElementById('kegiatan-terbaru-data').textContent);
  const slider = document.getElementById('kegiatan-slider');
  const prevBtn = document.getElementById('kegiatan-prev');
  const nextBtn = document.getElementById('kegiatan-next');
  let current = 0;
  const cardsPerView = () => window.innerWidth < 768 ? 1 : 3;

  function render(direction = null) {
    // Add slide-out animation if direction is given
    if (direction) {
      slider.classList.remove('slide-in-left', 'slide-in-right');
      slider.classList.add(direction === 'left' ? 'slide-out-left' : 'slide-out-right');
      setTimeout(() => {
        slider.classList.remove('slide-out-left', 'slide-out-right');
        updateContent(direction);
      }, 250);
    } else {
      updateContent();
    }
  }

  function updateContent(direction = null) {
    slider.innerHTML = '';
    let start = current;
    let end = Math.min(current + cardsPerView(), data.length);
    for(let i=start; i<end; i++) {
      const kegiatan = data[i];
      const card = document.createElement('div');
      card.className = 'bg-white rounded-lg shadow-lg overflow-hidden flex flex-col w-[92vw] max-w-sm md:max-w-[300px] min-w-[240px] md:min-w-[240px] h-[550px] md:h-[550px] text-[#2e9149] mx-2 md:mx-4 transition-transform duration-200 ease-in-out hover:scale-105';
      card.innerHTML = `
        <img src="${kegiatan.img}" alt="${kegiatan.judul}" class="w-full h-48 md:h-56 object-cover">
        <div class="p-4 flex flex-col flex-1">
          <div class="flex flex-row items-center justify-between mb-2">
            <span class="inline-block bg-[#2e9149] text-white text-xs font-semibold uppercase px-3 py-1 rounded-full">${kegiatan.kategori}</span>
            <span class="flex items-center text-xs text-gray-400 ml-2">
              <svg xmlns='http://www.w3.org/2000/svg' class='w-4 h-4 mr-1' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z'/></svg>
              ${kegiatan.tanggal}
            </span>
          </div>
          <h3 class="font-bold text-lg mb-2 line-clamp-2 min-h-[48px] uppercase">${kegiatan.judul}</h3>
          <p class="text-sm mb-2 min-h-[54px] text-justify">${kegiatan.deskripsi}</p>
        </div>
      `;
      slider.appendChild(card);
    }
    // Add slide-in animation if direction is given
    if (direction) {
      slider.classList.add(direction === 'left' ? 'slide-in-left' : 'slide-in-right');
      setTimeout(() => {
        slider.classList.remove('slide-in-left', 'slide-in-right');
      }, 250);
    }
    updateButtons();
    // Show pagination number in mobile
    const pagination = document.getElementById('kegiatan-pagination');
    if(window.innerWidth < 768 && pagination) {
      pagination.textContent = (current+1) + ' / ' + data.length;
    } else if(pagination) {
      pagination.textContent = '';
    }
  }

  function updateButtons() {
    if(window.innerWidth < 768) {
      prevBtn.style.display = 'none';
      nextBtn.style.display = 'none';
    } else {
      prevBtn.style.display = (current > 0) ? 'inline-flex' : 'none';
      nextBtn.style.display = (current + cardsPerView() < data.length) ? 'inline-flex' : 'none';
    }
  }

  prevBtn.addEventListener('click', function() {
    if(current > 0) {
      current -= cardsPerView();
      if(current < 0) current = 0;
      render('right'); // slide right when going to previous
    }
  });
  nextBtn.addEventListener('click', function() {
    if((current + cardsPerView()) < data.length) {
      current += cardsPerView();
      render('left'); // slide left when going to next
    }
  });

  window.addEventListener('resize', function() {
    current = 0;
    render();
  });

  // Swipe/drag support for mobile
  let startX = null;
  let isDragging = false;
  let threshold = 50; // minimal swipe distance in px

  slider.addEventListener('touchstart', function(e) {
    if(window.innerWidth >= 768) return;
    isDragging = true;
    startX = e.touches[0].clientX;
  });
  slider.addEventListener('touchmove', function(e) {
    if(!isDragging || window.innerWidth >= 768) return;
    // prevent scroll
    e.preventDefault();
  }, {passive: false});
  slider.addEventListener('touchend', function(e) {
    if(!isDragging || window.innerWidth >= 768) return;
    let endX = e.changedTouches[0].clientX;
    let diff = endX - startX;
    if(diff > threshold && current > 0) {
      current--;
      render('right');
    } else if(diff < -threshold && current < data.length-1) {
      current++;
      render('left');
    }
    isDragging = false;
    startX = null;
  });

  render();

  // Add CSS for slide animation
  const style = document.createElement('style');
  style.innerHTML = `
    #kegiatan-slider.slide-in-left {
      animation: slideInLeft 0.25s;
    }
    #kegiatan-slider.slide-in-right {
      animation: slideInRight 0.25s;
    }
    #kegiatan-slider.slide-out-left {
      animation: slideOutLeft 0.25s;
    }
    #kegiatan-slider.slide-out-right {
      animation: slideOutRight 0.25s;
    }
    @keyframes slideInLeft {
      from { transform: translateX(60px); opacity: 0.5; }
      to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideInRight {
      from { transform: translateX(-60px); opacity: 0.5; }
      to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOutLeft {
      from { transform: translateX(0); opacity: 1; }
      to { transform: translateX(-60px); opacity: 0.5; }
    }
    @keyframes slideOutRight {
      from { transform: translateX(0); opacity: 1; }
      to { transform: translateX(60px); opacity: 0.5; }
    }
  `;
  document.head.appendChild(style);
})();
