// Galeri slider logic, landscape style
(function(){
  const data = JSON.parse(document.getElementById('galeri-data').textContent);
  const slider = document.getElementById('galeri-slider');
  const prevBtn = document.getElementById('galeri-prev');
  const nextBtn = document.getElementById('galeri-next');
  let current = 0;
  const cardsPerView = () => window.innerWidth < 768 ? 1 : 3;

  function render(direction = null) {
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
      const galeri = data[i];
      // Card: gambar landscape penuh, judul di bawah card
      const wrapper = document.createElement('div');
      wrapper.className = 'flex flex-col items-center w-[92vw] max-w-sm md:max-w-[300px] min-w-[240px] md:min-w-[240px] mx-2 md:mx-4';
      const card = document.createElement('div');
      card.className = 'bg-white rounded-lg shadow-lg overflow-hidden w-full transition-transform duration-200 ease-in-out hover:scale-105';
      card.innerHTML = `
        <img src="${galeri.img}" alt="${galeri.judul}" class="w-full h-36 md:h-44 object-cover">
      `;
      wrapper.appendChild(card);
      const title = document.createElement('div');
      title.className = 'text-[#2e9149] font-bold text-base md:text-lg mt-2 text-center uppercase';
      title.textContent = galeri.judul;
      wrapper.appendChild(title);
      slider.appendChild(wrapper);
    }
    if (direction) {
      slider.classList.add(direction === 'left' ? 'slide-in-left' : 'slide-in-right');
      setTimeout(() => {
        slider.classList.remove('slide-in-left', 'slide-in-right');
      }, 250);
    }
    updateButtons();
    // Pagination for mobile
    const pagination = document.getElementById('galeri-pagination');
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
      render('right');
    }
  });
  nextBtn.addEventListener('click', function() {
    if((current + cardsPerView()) < data.length) {
      current += cardsPerView();
      render('left');
    }
  });

  window.addEventListener('resize', function() {
    current = 0;
    render();
  });

  // Swipe/drag support for mobile
  let startX = null;
  let isDragging = false;
  let threshold = 50;
  slider.addEventListener('touchstart', function(e) {
    if(window.innerWidth >= 768) return;
    isDragging = true;
    startX = e.touches[0].clientX;
  });
  slider.addEventListener('touchmove', function(e) {
    if(!isDragging || window.innerWidth >= 768) return;
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
    #galeri-slider.slide-in-left {
      animation: slideInLeft 0.25s;
    }
    #galeri-slider.slide-in-right {
      animation: slideInRight 0.25s;
    }
    #galeri-slider.slide-out-left {
      animation: slideOutLeft 0.25s;
    }
    #galeri-slider.slide-out-right {
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
