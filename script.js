 tailwind.config = {
    theme: {
      extend: {
        colors: {
          dreizack: {
            dark: "#00482D",
            green: "#02B056",
            lime: "#A8CF45",
            yellow: "#FFF212",
            gold: "#FFCC29",
            orange: "#F58634",
          },
        },
        fontFamily: {
          heading: ["Raleway", "sans-serif"],
          body: ["Bahnschrift", "Raleway", "sans-serif"],
        },
      },
    },
  };



  const track = document.getElementById('carouselTrack');
  const slides = track.children;
  const totalSlides = slides.length;
  const dotsWrap = document.getElementById('dots');
  const dots = dotsWrap.querySelectorAll('.dot');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
 
  let current = 0;
  let autoSlide;
  const AUTO_DELAY = 4000;
 
  function goTo(index) {
    current = (index + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => {
      d.classList.toggle('bg-white', i === current);
      d.classList.toggle('scale-125', i === current);
      d.classList.toggle('bg-white/60', i !== current);
    });
  }
 
  function nextSlide() { goTo(current + 1); }
  function prevSlide() { goTo(current - 1); }
 
  function startAuto() {
    autoSlide = setInterval(nextSlide, AUTO_DELAY);
  }
  function resetAuto() {
    clearInterval(autoSlide);
    startAuto();
  }
 
  nextBtn.addEventListener('click', () => { nextSlide(); resetAuto(); });
  prevBtn.addEventListener('click', () => { prevSlide(); resetAuto(); });
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      goTo(parseInt(dot.dataset.index));
      resetAuto();
    });
  });
 
  goTo(0);
  startAuto();