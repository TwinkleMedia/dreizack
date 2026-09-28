<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dreizack — Navbar</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="./script.js"></script>
</head>
<body class="font-body bg-[#FAFAF7] min-h-screen">

<!-- ============ NAVBAR ============ -->
<header class="sticky top-0 z-50 h-[76px] bg-white/85 backdrop-blur-md backdrop-saturate-150 border-b border-dreizack-dark/10">
  <div class="max-w-[1240px] h-full mx-auto px-4 sm:px-7 flex items-center justify-between gap-6 relative">

    <!-- Logo -->
    <a href="./index.php" class="flex items-center gap-3 shrink-0" aria-label="Dreizack home">
      <img src="./assets/Dreizack  Logo TM.png" alt="Dreizack logo" class="h-36 w-auto shrink-0">
    </a>

    <!-- Desktop nav (centered) -->
    <nav class="hidden md:flex items-center gap-1 absolute left-1/2 -translate-x-1/2">
      <a href="./index.php" class="relative font-heading font-semibold text-[15px] text-dreizack-dark px-4 py-2.5 rounded-lg hover:bg-dreizack-green/10 transition-colors
                 after:content-[''] after:absolute after:left-4 after:right-4 after:bottom-1.5 after:h-0.5 after:rounded-full
                 after:bg-gradient-to-r after:from-dreizack-green after:to-dreizack-gold after:scale-x-100 after:origin-left">
        Home
      </a>
      <a href="./aboutus.php" class="relative font-heading font-semibold text-[15px] text-[#1A2420] px-4 py-2.5 rounded-lg hover:text-dreizack-dark hover:bg-dreizack-green/10 transition-colors group">
        About Us
        <span class="absolute left-4 right-4 bottom-1.5 h-0.5 rounded-full bg-gradient-to-r from-dreizack-green to-dreizack-gold scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>
      </a>

      <!-- Products (dropdown) -->
      <div class="relative group">
        <button class="relative flex items-center gap-1 font-heading font-semibold text-[15px] text-[#1A2420] px-4 py-2.5 rounded-lg hover:text-dreizack-dark hover:bg-dreizack-green/10 transition-colors">
          Products
          <svg class="w-3.5 h-3.5 mt-[1px] transition-transform duration-200 group-hover:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          <span class="absolute left-4 right-4 bottom-1.5 h-0.5 rounded-full bg-gradient-to-r from-dreizack-green to-dreizack-gold scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>
        </button>
        <!-- Dropdown panel -->
        <div class="absolute top-full left-1/2 -translate-x-1/2 pt-3 opacity-0 invisible translate-y-1
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                    transition-all duration-200 ease-out">
          <div class="w-60 bg-white rounded-xl border border-dreizack-dark/10 shadow-[0_18px_36px_-14px_rgba(0,72,45,0.28)] overflow-hidden py-2">
            <a href="./aluminiumProducts.php" class="flex items-center justify-between px-4 py-3 font-heading font-semibold text-[14.5px] text-[#1A2420] hover:bg-dreizack-green/10 hover:text-dreizack-green transition-colors">
              Aluminium Formwork
              <span class="text-dreizack-orange font-bold">→</span>
            </a>
            <a href="./product-safety-screen.php" class="flex items-center justify-between px-4 py-3 font-heading font-semibold text-[14.5px] text-[#1A2420] hover:bg-dreizack-green/10 hover:text-dreizack-green transition-colors">
              Safety Screen
              <span class="text-dreizack-orange font-bold">→</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Services (dropdown) -->
      <div class="relative group">
        <button class="relative flex items-center gap-1 font-heading font-semibold text-[15px] text-[#1A2420] px-4 py-2.5 rounded-lg hover:text-dreizack-dark hover:bg-dreizack-green/10 transition-colors">
          Services
          <svg class="w-3.5 h-3.5 mt-[1px] transition-transform duration-200 group-hover:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
          <span class="absolute left-4 right-4 bottom-1.5 h-0.5 rounded-full bg-gradient-to-r from-dreizack-green to-dreizack-gold scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>
        </button>
        <!-- Dropdown panel -->
        <div class="absolute top-full left-1/2 -translate-x-1/2 pt-3 opacity-0 invisible translate-y-1
                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                    transition-all duration-200 ease-out">
          <div class="w-64 bg-white rounded-xl border border-dreizack-dark/10 shadow-[0_18px_36px_-14px_rgba(0,72,45,0.28)] overflow-hidden py-2">
            <a href="./service-refurbishment-program.php" class="flex items-center justify-between px-4 py-3 font-heading font-semibold text-[14.5px] text-[#1A2420] hover:bg-dreizack-green/10 hover:text-dreizack-green transition-colors">
              Refurbishment Program
              <span class="text-dreizack-orange font-bold">→</span>
            </a>
            <a href="./service-formwork-redesigning.php" class="flex items-center justify-between px-4 py-3 font-heading font-semibold text-[14.5px] text-[#1A2420] hover:bg-dreizack-green/10 hover:text-dreizack-green transition-colors">
              Formwork Re-designing
              <span class="text-dreizack-orange font-bold">→</span>
            </a>
          </div>
        </div>
      </div>

      <a href="./contactUs.php" class="relative font-heading font-semibold text-[15px] text-[#1A2420] px-4 py-2.5 rounded-lg hover:text-dreizack-dark hover:bg-dreizack-green/10 transition-colors group">
        Contact Us
        <span class="absolute left-4 right-4 bottom-1.5 h-0.5 rounded-full bg-gradient-to-r from-dreizack-green to-dreizack-gold scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></span>
      </a>
    </nav>

    <!-- CTA (right) -->
    <a href="./contactUs.php" class="hidden md:inline-block font-heading font-bold text-[14.5px] text-white px-6 py-2.5 rounded-lg whitespace-nowrap
               bg-gradient-to-br from-dreizack-dark to-dreizack-green
               shadow-[0_6px_16px_-6px_rgba(0,72,45,0.45)]
               hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(0,72,45,0.55)] hover:brightness-105
               transition-all duration-200">
      Get a Quote
    </a>

    <!-- Burger button -->
    <button id="burgerBtn" aria-label="Toggle menu" aria-expanded="false"
      class="md:hidden w-11 h-11 flex flex-col items-center justify-center gap-[5px] rounded-lg hover:bg-dreizack-dark/5">
      <span id="bar1" class="w-[22px] h-[2.5px] bg-dreizack-dark rounded-full transition-transform duration-300"></span>
      <span id="bar2" class="w-[22px] h-[2.5px] bg-dreizack-dark rounded-full transition-opacity duration-300"></span>
      <span id="bar3" class="w-[22px] h-[2.5px] bg-dreizack-dark rounded-full transition-transform duration-300"></span>
    </button>
  </div>

  <!-- Mobile menu -->
  <div id="mobileMenu" class="md:hidden max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out
              bg-white border-b border-dreizack-dark/10 shadow-[0_18px_30px_-18px_rgba(0,72,45,0.25)]">
    <nav class="flex flex-col px-5 pb-6 pt-2">
      <a href="#" class="flex items-center justify-between font-heading font-semibold text-[16.5px] text-[#1A2420] py-4 border-b border-dreizack-dark/10 hover:text-dreizack-green">
        Home <span class="text-dreizack-orange font-bold">→</span>
      </a>
      <a href="#" class="flex items-center justify-between font-heading font-semibold text-[16.5px] text-[#1A2420] py-4 border-b border-dreizack-dark/10 hover:text-dreizack-green">
        About Us <span class="text-dreizack-orange font-bold">→</span>
      </a>

      <!-- Products (accordion) -->
      <div class="border-b border-dreizack-dark/10">
        <button class="mobile-accordion-btn w-full flex items-center justify-between font-heading font-semibold text-[16.5px] text-[#1A2420] py-4 hover:text-dreizack-green">
          Products
          <svg class="mobile-accordion-chevron w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="mobile-accordion-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <a href="./aluminiumProducts.php" class="flex items-center justify-between font-heading font-medium text-[15px] text-[#1A2420]/80 py-3 pl-4 hover:text-dreizack-green">
            Aluminium Formwork <span class="text-dreizack-orange font-bold">→</span>
          </a>
          <a href="./product-safety-screen.php" class="flex items-center justify-between font-heading font-medium text-[15px] text-[#1A2420]/80 py-3 pl-4 pb-4 hover:text-dreizack-green">
            Safety Screen <span class="text-dreizack-orange font-bold">→</span>
          </a>
        </div>
      </div>

      <!-- Services (accordion) -->
      <div class="border-b border-dreizack-dark/10">
        <button class="mobile-accordion-btn w-full flex items-center justify-between font-heading font-semibold text-[16.5px] text-[#1A2420] py-4 hover:text-dreizack-green">
          Services
          <svg class="mobile-accordion-chevron w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="mobile-accordion-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <a href="./service-refurbishment-program.php" class="flex items-center justify-between font-heading font-medium text-[15px] text-[#1A2420]/80 py-3 pl-4 hover:text-dreizack-green">
            Refurbishment Program <span class="text-dreizack-orange font-bold">→</span>
          </a>
          <a href="./service-formwork-redesigning.php" class="flex items-center justify-between font-heading font-medium text-[15px] text-[#1A2420]/80 py-3 pl-4 pb-4 hover:text-dreizack-green">
            Formwork Re-designing <span class="text-dreizack-orange font-bold">→</span>
          </a>
        </div>
      </div>

      <a href="./contactUs.php" class="flex items-center justify-between font-heading font-semibold text-[16.5px] text-[#1A2420] py-4 hover:text-dreizack-green">
        Contact Us <span class="text-dreizack-orange font-bold">→</span>
      </a>
      <a href="./contactUs.php" class="mt-4 text-center font-heading font-bold text-[15px] text-white py-3.5 rounded-lg bg-gradient-to-br from-dreizack-dark to-dreizack-green">
        Get a Quote
      </a>
    </nav>
  </div>
</header>

<script>
  const burgerBtn = document.getElementById('burgerBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const bar3 = document.getElementById('bar3');

  let open = false;
  burgerBtn.addEventListener('click', () => {
    open = !open;
    burgerBtn.setAttribute('aria-expanded', open);

    if (open) {
      mobileMenu.classList.remove('max-h-0', 'opacity-0');
      mobileMenu.classList.add('max-h-[640px]', 'opacity-100');
      bar1.classList.add('translate-y-[7.5px]', 'rotate-45');
      bar2.classList.add('opacity-0');
      bar3.classList.add('-translate-y-[7.5px]', '-rotate-45');
    } else {
      mobileMenu.classList.add('max-h-0', 'opacity-0');
      mobileMenu.classList.remove('max-h-[640px]', 'opacity-100');
      bar1.classList.remove('translate-y-[7.5px]', 'rotate-45');
      bar2.classList.remove('opacity-0');
      bar3.classList.remove('-translate-y-[7.5px]', '-rotate-45');
    }
  });

  mobileMenu.querySelectorAll('nav > a').forEach(a => {
    a.addEventListener('click', () => {
      open = false;
      burgerBtn.setAttribute('aria-expanded', 'false');
      mobileMenu.classList.add('max-h-0', 'opacity-0');
      mobileMenu.classList.remove('max-h-[640px]', 'opacity-100');
      bar1.classList.remove('translate-y-[7.5px]', 'rotate-45');
      bar2.classList.remove('opacity-0');
      bar3.classList.remove('-translate-y-[7.5px]', '-rotate-45');
    });
  });

  // Mobile accordions (Products / Services)
  document.querySelectorAll('.mobile-accordion-btn').forEach(btn => {
    const panel = btn.nextElementSibling;
    const chevron = btn.querySelector('.mobile-accordion-chevron');
    btn.addEventListener('click', () => {
      const isOpen = panel.classList.contains('max-h-[300px]');
      document.querySelectorAll('.mobile-accordion-panel').forEach(p => {
        p.classList.remove('max-h-[300px]');
      });
      document.querySelectorAll('.mobile-accordion-chevron').forEach(c => {
        c.classList.remove('rotate-180');
      });
      if (!isOpen) {
        panel.classList.add('max-h-[300px]');
        chevron.classList.add('rotate-180');
      }
    });
  });
</script>

</body>
</html>