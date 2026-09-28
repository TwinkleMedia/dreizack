<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aluminium Formwork — Dreizack</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
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
</script>
</head>
<body class="font-body bg-[#FAFAF7]">

<!-- Include your existing navbar.html here -->
 <?php 
 include "./navbar.php"
 ?>

<!-- ============ HERO ============ -->
<section class="relative overflow-hidden bg-dreizack-dark">
  <div class="absolute inset-0">
    <img src="./assets/product1-hero.jpg"
         onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/1600/900';"
         alt="Aluminium Formwork on site" class="w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-r from-dreizack-dark via-dreizack-dark/85 to-dreizack-dark/40"></div>
  </div>

  <div class="relative max-w-[1240px] mx-auto px-6 sm:px-8 pt-20 pb-24 lg:pt-28 lg:pb-32">
    <nav class="flex items-center gap-2 text-[13.5px] font-heading font-semibold text-white/60 mb-6">
      <a href="./index.php" class="hover:text-dreizack-gold transition-colors">Home</a>
      <span>/</span>
      <span class="text-white/40">Products</span>
      <span>/</span>
      <span class="text-dreizack-gold">Aluminium Formwork</span>
    </nav>

    <p class="text-dreizack-gold text-[13px] font-heading font-bold tracking-wide uppercase mb-4">Product</p>
    <h1 class="font-heading font-extrabold text-white text-[36px] sm:text-[52px] leading-[1.08] max-w-2xl mb-6">
      Aluminium Formwork
    </h1>
    <p class="text-white/75 text-[16px] sm:text-[17px] leading-relaxed max-w-xl mb-9">
      A lightweight, high-repetition formwork system engineered for fast-track
      construction — delivering precise, monolithic concrete structures with
      minimal labour and zero timber wastage.
    </p>

    <div class="flex flex-wrap items-center gap-4">
      <a href="#enquire"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                bg-gradient-to-br from-dreizack-green to-dreizack-lime
                shadow-[0_6px_16px_-6px_rgba(2,176,86,0.5)]
                hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(2,176,86,0.6)] hover:brightness-105
                transition-all duration-200">
        Get a Quote
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
      </a>
      <a href="./assets/aluminium-formwork-brochure.pdf"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                border border-white/30 hover:bg-white/10 transition-colors duration-200">
        Download Brochure
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12"></path><polyline points="7 10 12 15 17 10"></polyline><path d="M5 21h14"></path></svg>
      </a>
    </div>
  </div>
</section>

<!-- ============ OVERVIEW ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <div>
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Overview</p>
        <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15] mb-5">
          Built for speed. Engineered for reuse.
        </h2>
        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-4">
          Dreizack's Aluminium Formwork system replaces traditional timber and steel
          shuttering with lightweight, high-strength aluminium panels — cast and
          assembled to the exact geometry of your project.
        </p>
        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-8">
          Walls, slabs, columns, and staircases are cast as a single monolithic pour,
          cutting cycle time, labour dependency, and finishing work — while the panels
          themselves are reused hundreds of times across a project's lifecycle.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">200+</p>
            <p class="text-[#5a655f] text-[13px]">Reuse cycles</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">4–5</p>
            <p class="text-[#5a655f] text-[13px]">Day floor cycle</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">0%</p>
            <p class="text-[#5a655f] text-[13px]">Timber wastage</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">A6061</p>
            <p class="text-[#5a655f] text-[13px]">Aluminium alloy</p>
          </div>
        </div>
      </div>

      <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
        <img src="./assets/product1-overview.jpg"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1078/800/600';"
             alt="Aluminium Formwork panels" class="w-full h-full object-cover">
      </div>

    </div>
  </div>
</section>

<!-- ============ KEY FEATURES ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Key Features</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        What makes it different on site
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h9a3 3 0 0 1 0 6H8"></path><path d="M6 4v16"></path><path d="M6 13h8"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Lightweight Panels</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Easy to handle manually — no crane dependency for standard wall and slab panels.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15.5-6.36L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-15.5 6.36L3 16"></path><path d="M3 21v-5h5"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">High Repetition</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Panels hold their shape and finish across 200+ reuse cycles without warping.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3.5 2"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Faster Cycle Time</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Monolithic wall-and-slab pours cut a typical floor cycle down to 4–5 days.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="18" height="6" rx="0.5"></rect><path d="M3 3l18 18"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Zero Timber Wastage</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Fully removes plywood shuttering from site, cutting material cost and waste.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="9" r="4.5"></circle><circle cx="16" cy="15" r="4.5"></circle></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Lower Labour Need</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Simple pin-and-wedge assembly means smaller, less specialised crews.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 2l4 4-4 4"></path><path d="M21 6H8a5 5 0 0 0 0 10h1"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Superior Finish</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Smooth, plaster-free concrete surface straight off the panel.</p>
      </div>

    </div>
  </div>
</section>

<!-- ============ TECHNICAL SPECIFICATIONS ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Specifications</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        Technical details
      </h2>
    </div>

    <div class="overflow-x-auto rounded-2xl border border-dreizack-dark/10">
      <table class="w-full text-left border-collapse min-w-[560px]">
        <tbody class="divide-y divide-dreizack-dark/10">
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px] w-1/3">Material</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Aluminium Alloy A6061-T6</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Panel Thickness</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">4 mm face plate</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Panel Weight</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">~25–28 kg/m²</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Concrete Pressure Rating</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Up to 60 kN/m²</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Reuse Cycles</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">200+ pours per panel</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Surface Finish</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Fair-face, plaster-free concrete</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Applicable Elements</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Walls, slabs, columns, staircases, lift cores</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Assembly Method</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Pin & wedge, no tools required</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="text-[#8a938d] text-[13px] mt-4">*Specifications vary by project design and are engineered to site-specific drawings.</p>
  </div>
</section>

<!-- ============ APPLICATIONS ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Applications</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        Where it's used on site
      </h2>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="1"></rect><path d="M9 3v18"></path></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Shear Walls</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10l16-6v16"></path></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Retaining Walls</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2" width="10" height="20" rx="1"></rect></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Lift-Core Walls</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Columns</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Gallery</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        Aluminium Formwork on site
      </h2>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/product1-gallery-1.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/400/400';" alt="Aluminium formwork gallery 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/product1-gallery-2.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1078/400/400';" alt="Aluminium formwork gallery 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/product1-gallery-3.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/400/400';" alt="Aluminium formwork gallery 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/product1-gallery-4.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1082/400/400';" alt="Aluminium formwork gallery 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
    </div>
  </div>
</section>

<!-- ============ CTA BANNER ============ -->
<section id="enquire" class="relative bg-dreizack-dark">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8">
    <div>
      <h2 class="font-heading font-extrabold text-white text-[26px] sm:text-[32px] leading-[1.15] mb-2">
        Ready to spec Aluminium Formwork for your next project?
      </h2>
      <p class="text-white/65 text-[15px]">Get a technical consultation and a project-specific quote from our team.</p>
    </div>
    <a href="#"
       class="shrink-0 inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
              bg-gradient-to-br from-dreizack-green to-dreizack-lime
              shadow-[0_6px_16px_-6px_rgba(2,176,86,0.5)]
              hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(2,176,86,0.6)] hover:brightness-105
              transition-all duration-200">
      Request a Quote
      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
    </a>
  </div>
</section>

<!-- Include your existing footer.html here -->
<?php 
include './footer.php'
?>
</body>
</html>