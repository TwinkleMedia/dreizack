<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dreizack</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<script src="./script.js"></script>

<!-- ============ ANIMATIONS (CSS) ============ -->
<style>
  /* Scroll progress bar */
  #scrollProgress {
    position: fixed; top: 0; left: 0; height: 3px; width: 100%;
    background: #f5b800; /* swap for your dreizack-gold */
    transform-origin: 0 50%; transform: scaleX(0);
    z-index: 60; pointer-events: none;
  }

  /* Hero: slow push-in on the active slide */
  #carouselTrack img { transform: scale(1); will-change: transform; }
  #carouselTrack img.is-active { animation: heroPush 6.5s ease-out forwards; }
  @keyframes heroPush { from { transform: scale(1); } to { transform: scale(1.08); } }

  /* Scroll reveals (uses `translate` so hover transforms are untouched) */
  .js-anim .reveal {
    opacity: 0;
    translate: 0 28px;
    transition: opacity .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms),
                translate .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms);
  }
  .js-anim .reveal.from-left  { translate: -36px 0; }
  .js-anim .reveal.from-right { translate: 36px 0; }
  .js-anim .reveal.pop        { translate: 0 14px; scale: .85; transition-property: opacity, translate, scale; }
  .js-anim .reveal.in { opacity: 1; translate: 0 0; scale: 1; }

  /* About: green offset block slides out from behind the photo */
  .js-anim .about-block { translate: 20px 20px; opacity: 0; transition: translate .9s cubic-bezier(.2,.7,.2,1) .25s, opacity .6s ease .25s; }
  .js-anim .about-block.in { translate: 0 0; opacity: 1; }

  /* Process: arrows fade in, final badge pulses */
  .js-anim .flow-arrow { opacity: 0; transition: opacity .4s ease var(--d, 0ms); }
  .js-anim .flow-arrow.in { opacity: 1; }
  .pulse-ring { animation: pulseRing 2.2s ease-out infinite; }
  @keyframes pulseRing {
    0%   { box-shadow: 0 0 0 0 rgba(245,184,0,.55); }
    70%  { box-shadow: 0 0 0 14px rgba(245,184,0,0); }
    100% { box-shadow: 0 0 0 0 rgba(245,184,0,0); }
  }

  /* Respect "reduce motion" */
  @media (prefers-reduced-motion: reduce) {
    #carouselTrack img.is-active, .pulse-ring { animation: none; }
    .js-anim .reveal, .js-anim .about-block, .js-anim .flow-arrow {
      opacity: 1 !important; translate: none !important; scale: 1 !important; transition: none !important;
    }
  }
</style>
</head>
<body class="font-body bg-[#FAFAF7] min-h-screen">
    <?php 
    include "./navbar.php"
     ?>

     
<!-- ============ HERO IMAGE CAROUSEL ============ -->
<section class="relative w-full h-[240px] sm:h-[380px] md:h-[500px] lg:h-[620px] overflow-hidden">
 
  <div id="carouselTrack" class="flex h-full w-full transition-transform duration-700 ease-in-out">
    <img src="./assets/banner1.webp" alt="" class="w-full h-full object-cover flex-shrink-0">
    <img src="./assets/banner2.webp" alt="" class="w-full h-full object-cover flex-shrink-0">
    <img src="./assets/banner3.jpg" alt="" class="w-full h-full object-cover flex-shrink-0">
    <img src="./assets/banner4.jpg" alt="" class="w-full h-full object-cover flex-shrink-0">
  </div>
 
  <!-- prev / next -->
  <button id="prevBtn" aria-label="Previous slide"
    class="hidden sm:flex absolute left-3 md:left-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-11 md:h-11 items-center justify-center rounded-full bg-white/70 hover:bg-white text-dreizack-dark backdrop-blur-sm shadow-md transition-colors">
    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
  </button>
  <button id="nextBtn" aria-label="Next slide"
    class="hidden sm:flex absolute right-3 md:right-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-11 md:h-11 items-center justify-center rounded-full bg-white/70 hover:bg-white text-dreizack-dark backdrop-blur-sm shadow-md transition-colors">
    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
  </button>
 
  <!-- dots -->
  <div id="dots" class="absolute bottom-3 md:bottom-5 left-1/2 -translate-x-1/2 flex gap-2 z-10">
    <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white transition-all scale-125" data-index="0" aria-label="Go to slide 1"></button>
    <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="1" aria-label="Go to slide 2"></button>
    <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="2" aria-label="Go to slide 3"></button>
    <button class="dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/60 hover:bg-white transition-all" data-index="3" aria-label="Go to slide 4"></button>
  </div>
</section>

<!-- ============ ABOUT / FLAGSHIP PRODUCT ============ -->
<!-- ============ ABOUT US ============ -->

<section id="about" class="relative overflow-hidden">

  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">


<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">

  <!-- Image side -->
  <div class="lg:col-span-5 relative">

    <!-- Offset structural background block -->
    <div
      class="absolute -top-5 -left-5 w-full h-full bg-dreizack-green hidden sm:block"
      aria-hidden="true">
    </div>

    <div class="relative aspect-[4/5] w-full overflow-hidden shadow-xl">

      <img
        src="./assets/banner1.webp"
        onerror="this.onerror=null;this.src='https://picsum.photos/id/1073/900/1100';"
        alt="MDFS aluminium formwork manufacturing system"
        class="w-full h-full object-cover">

      <!-- Corner accent tag -->
      <div class="absolute bottom-0 left-0 bg-dreizack-dark px-5 py-3 flex items-center gap-2">

        <span
          class="w-2 h-2 bg-dreizack-gold"
          aria-hidden="true">
        </span>

        <span
          class="text-white text-[13px] font-heading font-semibold tracking-wide uppercase">
         Dreizack Aluminium Formwork
        </span>

      </div>

    </div>

  </div>


  <!-- Content side -->
  <div class="lg:col-span-7">

    <!-- Small Heading -->
    <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
      About Dreizack Formwork Solutions
    </p>


    <!-- Main Heading -->
    <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] lg:text-[46px] leading-[1.1] mb-6 max-w-xl">
      Technical Advantage in Modern Construction
    </h2>


    <!-- Description -->
    <div class="space-y-4 max-w-xl text-[#3d4a44] text-[15.5px] leading-relaxed">

      <p>
       Dreizack Formwork Solutions (DFS), based in Mumbai and established in April 2017, provides innovative and reliable solutions for the construction industry. With over 18 years of expertise in Monolithic, Modular and Climbing Formwork Systems, as well as Scaffoldings, we deliver efficient solutions for modern RCC structures.
      </p>

      <p>
       DFS works closely with leading technology and manufacturing partners to provide engineered, cost-effective, and high-quality formwork solutions. Through strong collaboration and technical expertise, we aim to support the advancement of modern civil engineering and construction practices.
      </p>

      

     

    </div>


    <!-- Feature Strip -->
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 border-t border-dreizack-dark/10">

      <!-- Feature 1 -->
      <div class="py-5 sm:pr-6 sm:border-r border-dreizack-dark/10 border-b sm:border-b-0">

        <p class="font-heading font-bold text-dreizack-dark text-[15px] mb-1">
          18+ Years Experience
        </p>

        <p class="text-[#5a655f] text-[13.5px] leading-relaxed">
          Extensive expertise across multiple formwork and construction systems.
        </p>

      </div>


      <!-- Feature 2 -->
      <div class="py-5 sm:px-6 sm:border-r border-dreizack-dark/10 border-b sm:border-b-0">

        <p class="font-heading font-bold text-dreizack-dark text-[15px] mb-1">
          Engineered Solutions
        </p>

        <p class="text-[#5a655f] text-[13.5px] leading-relaxed">
          Cost-effective and technically advanced solutions for modern construction.
        </p>

      </div>


      <!-- Feature 3 -->
      <div class="py-5 sm:pl-6">

        <p class="font-heading font-bold text-dreizack-dark text-[15px] mb-1">
          Trusted Partnerships
        </p>

        <p class="text-[#5a655f] text-[13.5px] leading-relaxed">
          Strong collaboration with technology and manufacturing partners.
        </p>

      </div>

    </div>

  </div>

</div>

  </div>

</section>




<!-- ============ WHY CHOOSE US ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
 
    <div class="max-w-xl mb-14 lg:mb-16">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Why Choose Us</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1]">
        Built on precision, backed by people who show up
      </h2>
    </div>
 
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-14 lg:gap-x-14 lg:gap-y-16">
 
      <!-- Manufacturing Excellence -->
      <div class="why-card flex flex-col">
        <div class="relative w-16 h-16 mb-6">
          <div class="why-offset absolute -top-2 -left-2 w-16 h-16 bg-dreizack-green" aria-hidden="true"></div>
          <div class="relative w-16 h-16 bg-dreizack-dark flex items-center justify-center">
            <svg class="w-7 h-7 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 21V10l6 4V10l6 4V10l6 4v7Z"></path>
              <path d="M3 21h18"></path>
              <circle cx="18" cy="6" r="2"></circle>
            </svg>
          </div>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[19px] mb-2.5">Manufacturing Excellence</h3>
        <p class="text-[#5a655f] text-[14.5px] leading-relaxed max-w-sm">
          Backed by advanced machinery and stringent quality controls, our production facilities
          are designed to deliver high-precision, durable, and reliable formwork systems that meet
          global standards.
        </p>
      </div>
 
      <!-- End-to-End Support -->
      <div class="why-card flex flex-col">
        <div class="relative w-16 h-16 mb-6">
          <div class="why-offset absolute -top-2 -left-2 w-16 h-16 bg-dreizack-gold" aria-hidden="true"></div>
          <div class="relative w-16 h-16 bg-dreizack-dark flex items-center justify-center">
            <svg class="w-7 h-7 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 12h.01"></path>
              <path d="M12 12h.01"></path>
              <path d="M16 12h.01"></path>
              <path d="M21 12a9 9 0 1 1-4.2-7.6"></path>
              <path d="M21 3v6h-6"></path>
            </svg>
          </div>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[19px] mb-2.5">End-to-End Support</h3>
        <p class="text-[#5a655f] text-[14.5px] leading-relaxed max-w-sm">
          From initial design consultation to on-site technical assistance and post-sales
          coordination, we partner with you at every stage of the project — ensuring smooth
          execution and complete peace of mind.
        </p>
      </div>
 
      <!-- Experienced Team -->
      <div class="why-card flex flex-col">
        <div class="relative w-16 h-16 mb-6">
          <div class="why-offset absolute -top-2 -left-2 w-16 h-16 bg-dreizack-lime" aria-hidden="true"></div>
          <div class="relative w-16 h-16 bg-dreizack-dark flex items-center justify-center">
            <svg class="w-7 h-7 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="8" r="3.2"></circle>
              <path d="M3.5 20c0-3.3 2.5-6 6-6s6 2.7 6 6"></path>
              <circle cx="17" cy="8.5" r="2.6"></circle>
              <path d="M15.5 12.2c2.6.3 4.5 2.4 4.5 5.8"></path>
            </svg>
          </div>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[19px] mb-2.5">Experienced Team</h3>
        <p class="text-[#5a655f] text-[14.5px] leading-relaxed max-w-sm">
          Our team consists of seasoned industry veterans who bring deep expertise, practical
          insight, and a solution-oriented mindset to every project.
        </p>
      </div>
 
      <!-- Long Lifecycle -->
      <div class="why-card flex flex-col">
        <div class="relative w-16 h-16 mb-6">
          <div class="why-offset absolute -top-2 -left-2 w-16 h-16 bg-dreizack-orange" aria-hidden="true"></div>
          <div class="relative w-16 h-16 bg-dreizack-dark flex items-center justify-center">
            <svg class="w-7 h-7 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 2l4 4-4 4"></path>
              <path d="M21 6H8a5 5 0 0 0 0 10h1"></path>
              <path d="M7 22l-4-4 4-4"></path>
              <path d="M3 18h13a5 5 0 0 0 0-10h-1"></path>
            </svg>
          </div>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[19px] mb-2.5">Long Lifecycle</h3>
        <p class="text-[#5a655f] text-[14.5px] leading-relaxed max-w-sm">
          MDFS formwork systems are engineered for reusability and built to last. With a
          high-quality finish and robust build, our products ensure lower long-term costs and
          better construction outcomes.
        </p>
      </div>
 
    </div>
  </div>
</section>

<!-- ============ PRODUCTS ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Products</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Engineered systems built for the site
      </h2>
      <p class="text-[#3d4a44] text-[15.5px] leading-relaxed">
        Two core products, engineered to hold their line across every vertical
        element on site — from core walls to the smallest column.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-10">

      <!-- Card: Aluminium Formwork -->
      <a href="./aluminiumProducts.php" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/alumframe.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/700/560';"
               alt="Aluminium Formwork product" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Aluminium Formwork</h3>
        </div>
      </a>

      <!-- Card: Safety Screen -->
      <a href="./product-safety-screen.php" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/safety-screen.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/700/560';"
               alt="Safety Screen product" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Safety Screen</h3>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Services</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Support that goes beyond the system
      </h2>
      <p class="text-[#3d4a44] text-[15.5px] leading-relaxed">
        From extending the life of your existing formwork to reshaping it
        for a new project, our team stays involved long after installation.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-10">

      <!-- Card: Refurbishment Program -->
      <a href="./service-refurbishment-program.php" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/service1.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/700/560';"
               alt="Refurbishment Program service" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Refurbishment Program</h3>
        </div>
      </a>

      <!-- Card: Formwork Re-designing -->
      <a href="./service-formwork-redesigning.php" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/redesignFreame1.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/700/560';"
               alt="Formwork Re-designing service" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Formwork Re-designing</h3>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ============ MANUFACTURING PROCESS ============ -->
<section class="relative bg-dreizack-dark">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
 
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center mb-14 lg:mb-20">
 
      <div class="lg:col-span-6">
        <p class="text-dreizack-gold text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Manufacturing Process</p>
        <h2 class="font-heading font-extrabold text-white text-[32px] sm:text-[40px] leading-[1.1] max-w-lg">
          From raw aluminium to a dispatch-ready panel
        </h2>
      </div>
 
      <div class="lg:col-span-6 relative">
        <div class="absolute -top-4 -right-4 w-full h-full bg-dreizack-gold hidden sm:block" aria-hidden="true"></div>
        <div class="relative aspect-[16/10] w-full overflow-hidden shadow-xl">
          <img
            src="./assets/process.png"
            onerror="this.onerror=null;this.src='https://picsum.photos/id/1050/900/560';"
            alt="Dreizack manufacturing facility producing aluminium formwork panels"
            class="w-full h-full object-cover">
        </div>
      </div>
 
    </div>
 
    <!-- Step flow -->
    <div class="flex flex-wrap lg:flex-nowrap items-start justify-center gap-y-10">
 
      <!-- 1 Raw Material -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">01</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Raw Material</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 2 Cutting -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">02</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Cutting</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 3 Multi Punching -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">03</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Multi Punching</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 4 Multi Milling -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">04</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Multi Milling</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 5 Robotic Welding & FSW -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">05</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Robotic Welding &amp; FSW</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 6 Lacquering -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">06</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Lacquering</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 7 Washing -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">07</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Washing</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 8 QR Scanning -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-white/10 border border-white/20 flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-gold text-[18px]">08</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">QR Scanning</p>
      </div>
 
      <div class="hidden lg:flex items-center pt-6 px-1">
        <svg class="w-5 h-5 text-dreizack-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>
      </div>
 
      <!-- 9 Dispatch -->
      <div class="step flex flex-col items-center text-center w-[110px] sm:w-[120px]">
        <div class="step-badge w-14 h-14 bg-dreizack-gold flex items-center justify-center transition-colors duration-200">
          <span class="font-heading font-extrabold text-dreizack-dark text-[18px]">09</span>
        </div>
        <p class="mt-3 text-white text-[13.5px] font-heading font-semibold leading-snug">Dispatch</p>
      </div>
 
    </div>
 
    <!-- Mobile / tablet: simple wrapped grid note -->
    <p class="lg:hidden text-white/40 text-[12.5px] text-center mt-10">
      9-stage process — raw material through to dispatch
    </p>
 
  </div>
</section>

<!-- ============ PROJECTS / CASE STUDIES ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
 
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12 lg:mb-14">
      <div class="max-w-xl">
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Our Work</p>
        <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
          Projects built on the Dreizack system
        </h2>
        <p class="text-[#3d4a44] text-[15.5px] leading-relaxed">
          A look at where our tie-plate and panel systems have gone to work — across residential
          towers, commercial builds, and infrastructure sites.
        </p>
      </div>
      <a href="./projects.html" class="shrink-0 inline-flex items-center gap-2 text-dreizack-dark font-heading font-bold text-[14px] hover:text-dreizack-green transition-colors w-fit">
        View all projects
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>
 
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
 
      <!-- Project 1 -->
      <a href="./project-skyline-residency.html" class="proj-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/project-01.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1041/700/560';"
               alt="Skyline Residency Towers project" class="proj-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/75 via-dreizack-dark/0 to-transparent"></div>
          <div class="absolute top-0 left-0 bg-dreizack-dark/90 px-4 py-2">
            <span class="text-white text-[12.5px] font-heading font-semibold tracking-wide">G+42 Residential Tower</span>
          </div>
          <div class="proj-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-1">Skyline Residency</h3>
          <p class="text-[#5a655f] text-[13.5px]">Pune, Maharashtra · Shear walls, columns</p>
        </div>
      </a>
 
      <!-- Project 2 -->
      <a href="./project-riverfront-business-park.html" class="proj-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/project-02.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1048/700/560';"
               alt="Riverfront Business Park project" class="proj-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/75 via-dreizack-dark/0 to-transparent"></div>
          <div class="absolute top-0 left-0 bg-dreizack-dark/90 px-4 py-2">
            <span class="text-white text-[12.5px] font-heading font-semibold tracking-wide">Commercial Complex</span>
          </div>
          <div class="proj-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-1">Riverfront Business Park</h3>
          <p class="text-[#5a655f] text-[13.5px]">Navi Mumbai, Maharashtra · Lift-core walls, retaining walls</p>
        </div>
      </a>
 
      <!-- Project 3 -->
      <a href="./project-metro-viaduct.html" class="proj-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/project-03.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1069/700/560';"
               alt="Metro viaduct infrastructure project" class="proj-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/75 via-dreizack-dark/0 to-transparent"></div>
          <div class="absolute top-0 left-0 bg-dreizack-dark/90 px-4 py-2">
            <span class="text-white text-[12.5px] font-heading font-semibold tracking-wide">Infrastructure</span>
          </div>
          <div class="proj-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-1">Metro Viaduct Extension</h3>
          <p class="text-[#5a655f] text-[13.5px]">Pune, Maharashtra · Columns, staircase</p>
        </div>
      </a>
 
    </div>
  </div>
</section> 


<!-- ============ FEATURES ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
 
    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Features</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Engineered into every panel, before it reaches site
      </h2>
    </div>
 
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10 lg:gap-x-10 lg:gap-y-12">
 
      <!-- Higher number of repetitions -->
      <div class="feat-card border-t-2 border-dreizack-green pt-5">
        <div class="feat-icon w-12 h-12 bg-dreizack-dark flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-dreizack-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 12a9 9 0 0 1 15.5-6.36L21 8"></path>
            <path d="M21 3v5h-5"></path>
            <path d="M21 12a9 9 0 0 1-15.5 6.36L3 16"></path>
            <path d="M3 21v-5h5"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">Higher number of repetitions</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Panels built to be reused pour after pour without losing shape or finish.
        </p>
      </div>
 
      <!-- Faster construction -->
      <div class="feat-card border-t-2 border-dreizack-green pt-5">
        <div class="feat-icon w-12 h-12 bg-dreizack-dark flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-dreizack-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 7v5l3.5 2"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">Faster construction</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Quicker assembly and strike times shorten the cycle on every floor.
        </p>
      </div>
 
      <!-- Saving on labour costs and expenses -->
      <div class="feat-card border-t-2 border-dreizack-green pt-5">
        <div class="feat-icon w-12 h-12 bg-dreizack-dark flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-dreizack-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="8" cy="9" r="4.5"></circle>
            <circle cx="16" cy="15" r="4.5"></circle>
            <path d="M8 9v0M16 15v0"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">Saving on labour costs and expenses</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          A smaller crew handles more area, cutting site labour spend.
        </p>
      </div>
 
      <!-- No wooden wastage -->
      <div class="feat-card border-t-2 border-dreizack-green pt-5">
        <div class="feat-icon w-12 h-12 bg-dreizack-dark flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-dreizack-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="9" width="18" height="6" rx="0.5"></rect>
            <path d="M3 3l18 18"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">No wooden wastage</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Reusable aluminium panels remove timber shuttering from the site entirely.
        </p>
      </div>
 
      <!-- Low investment -->
      <div class="feat-card border-t-2 border-dreizack-green pt-5">
        <div class="feat-icon w-12 h-12 bg-dreizack-dark flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-dreizack-gold transition-colors duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 4h9a3 3 0 0 1 0 6H8"></path>
            <path d="M6 4v16"></path>
            <path d="M6 13h8"></path>
            <path d="M6 20l3-3"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">Low investment</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          A lean upfront cost that pays back quickly across repeat use.
        </p>
      </div>
 
    </div>
  </div>
</section>


<?php 

include "./footer.php"
?>

<script> 


(function () {
  const track = document.getElementById('carouselTrack');
  if (!track) return;

  const slides = track.children;
  const totalSlides = slides.length;
  const dotsWrap = document.getElementById('dots');
  const dots = dotsWrap ? dotsWrap.querySelectorAll('.dot') : [];
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

  if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetAuto(); });
  if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetAuto(); });
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      goTo(parseInt(dot.dataset.index));
      resetAuto();
    });
  });

  goTo(0);
  startAuto();
})();
</script>

<!-- ============ ANIMATIONS (JS) ============ -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const $$ = (s, r = document) => [...r.querySelectorAll(s)];

  /* 1. Scroll progress bar */
  const bar = document.createElement('div');
  bar.id = 'scrollProgress';
  document.body.appendChild(bar);
  const onScroll = () => {
    const h = document.documentElement.scrollHeight - innerHeight;
    bar.style.transform = `scaleX(${h > 0 ? scrollY / h : 0})`;
  };
  addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* 2. Hero push-in synced to the carousel */
  const track = document.getElementById('carouselTrack');
  if (track && !reduce) {
    const imgs = [...track.children];
    const sync = () => {
      const m = /translateX\(-?([\d.]+)%\)/.exec(track.style.transform || '');
      const idx = m ? Math.round(parseFloat(m[1]) / 100) : 0;
      imgs.forEach((img, i) => {
        if (i === idx) { img.classList.remove('is-active'); void img.offsetWidth; img.classList.add('is-active'); }
        else img.classList.remove('is-active');
      });
    };
    new MutationObserver(sync).observe(track, { attributes: true, attributeFilter: ['style'] });
    sync();
  }

  if (reduce) return;
  document.documentElement.classList.add('js-anim');

  /* 3. Choose what reveals, and in what order */
  const reveal = (els, cls = '', step = 90) =>
    els.forEach((el, i) => {
      el.classList.add('reveal');
      cls.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
      el.style.setProperty('--d', `${i * step}ms`);
    });

  // About: photo from left, text staggered, offset block slides out
  const about = document.getElementById('about');
  if (about) {
    const img = about.querySelector('.lg\\:col-span-5');
    const txt = about.querySelector('.lg\\:col-span-7');
    if (img) reveal([img], 'from-left');
    if (txt) {
      const strip = txt.querySelector('.mt-10');
      reveal([...txt.children].filter(c => c !== strip), '', 110);
      if (strip) reveal([...strip.children], '', 120);
    }
    const block = about.querySelector('.bg-dreizack-green.absolute');
    if (block) block.classList.add('about-block');
  }

  // Card groups: stagger within each grid
  ['.why-card', '.app-card', '.proj-card', '.feat-card'].forEach(sel => {
    const groups = new Map();
    $$(sel).forEach(el => {
      if (!groups.has(el.parentElement)) groups.set(el.parentElement, []);
      groups.get(el.parentElement).push(el);
    });
    groups.forEach(list => reveal(list, '', 110));
  });

  // Manufacturing process: steps appear in sequence with arrows
  const firstStep = document.querySelector('.step');
  if (firstStep) {
    const flow = firstStep.parentElement;
    [...flow.children].forEach((el, i) => {
      if (el.classList.contains('step')) reveal([el], 'pop');
      else el.classList.add('flow-arrow');
      el.style.setProperty('--d', `${i * 130}ms`);
    });
    const last = flow.querySelector('.step:last-child .step-badge');
    if (last) last.classList.add('pulse-ring');
    const procImg = flow.closest('section')?.querySelector('.lg\\:col-span-6.relative');
    if (procImg) reveal([procImg], 'from-right');
  }

  /* 4. Trigger on scroll; clean up afterwards so your hover styles take over */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      el.classList.add('in');
      io.unobserve(el);
      const delay = parseFloat(el.style.getPropertyValue('--d')) || 0;
      setTimeout(() => {
        el.classList.remove('reveal', 'from-left', 'from-right', 'pop', 'flow-arrow', 'about-block', 'in');
        el.style.removeProperty('--d');
      }, delay + 1100);
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

  $$('.reveal, .flow-arrow, .about-block').forEach(el => io.observe(el));
});
</script>

</body>
</html>