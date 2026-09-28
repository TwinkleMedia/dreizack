<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Safety Screen — Dreizack</title>
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
</
<!-- ============ HERO ============ -->
<section class="relative overflow-hidden bg-dreizack-dark">
  <div class="absolute inset-0">
    <img src="./assets/safety-screen.jpg"
         onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/1600/900';"
         alt="Safety Screen on site" class="w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-r from-dreizack-dark via-dreizack-dark/85 to-dreizack-dark/40"></div>
  </div>

  <div class="relative max-w-[1240px] mx-auto px-6 sm:px-8 pt-20 pb-24 lg:pt-28 lg:pb-32">
    <nav class="flex items-center gap-2 text-[13.5px] font-heading font-semibold text-white/60 mb-6">
      <a href="./index.php" class="hover:text-dreizack-gold transition-colors">Home</a>
      <span>/</span>
      <span class="text-white/40">Products</span>
      <span>/</span>
      <span class="text-dreizack-gold">Safety Screen</span>
    </nav>

    <p class="text-dreizack-gold text-[13px] font-heading font-bold tracking-wide uppercase mb-4">Product</p>
    <h1 class="font-heading font-extrabold text-white text-[36px] sm:text-[52px] leading-[1.08] max-w-2xl mb-6">
      Safety Screen
    </h1>
    <p class="text-white/75 text-[16px] sm:text-[17px] leading-relaxed max-w-xl mb-9">
      A perimeter protection system engineered to shield workers, materials, and
      the public from falling debris — climbing floor by floor alongside your
      building's progress.
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
      <a href="./assets/safety-screen-brochure.pdf"
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
          A perimeter that rises with your building
        </h2>
        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-4">
          Dreizack's Safety Screen system is a modular, self-climbing debris
          protection system anchored to the building's structure. It encloses the
          working floor and the floor below, containing falling material and
          shielding workers from wind and weather exposure at height.
        </p>
        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-8">
          Panels are raised using a simple pulley or crane-assisted lift as each
          floor is completed, keeping the site perimeter fully protected without
          rebuilding scaffolding at every level.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">2</p>
            <p class="text-[#5a655f] text-[13px]">Floors covered</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">100+</p>
            <p class="text-[#5a655f] text-[13px]">Reuse cycles</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">&lt;1 hr</p>
            <p class="text-[#5a655f] text-[13px]">Per-floor climb time</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">IS 875</p>
            <p class="text-[#5a655f] text-[13px]">Wind load compliant</p>
          </div>
        </div>
      </div>

      <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
        <img src="./assets/safety-screen.jpg"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1082/800/600';"
             alt="Safety Screen system mounted on building perimeter" class="w-full h-full object-cover">
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
        Built to protect, engineered to climb
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 3 6v6c0 5 3.8 9 9 10 5.2-1 9-5 9-10V6l-9-4Z"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Debris Containment</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Fully encloses the working perimeter, stopping falling material before it reaches the ground.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 2l4 4-4 4"></path><path d="M21 6H8a5 5 0 0 0 0 10h1"></path><path d="M7 22l-4-4 4-4"></path><path d="M3 18h13a5 5 0 0 0 0-10h-1"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Self-Climbing System</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Anchored brackets let the screen be lifted floor-to-floor without dismantling.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15.5-6.36L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-15.5 6.36L3 16"></path><path d="M3 21v-5h5"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Reusable Structure</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Galvanised steel frame and mesh panels are rated for 100+ project cycles.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3c4 3 6 6 6 10a6 6 0 0 1-12 0c0-4 2-7 6-10Z"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Wind & Weather Rated</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Mesh and frame design tested to hold under high wind loads per IS 875 guidelines.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="9" r="4.5"></circle><circle cx="16" cy="15" r="4.5"></circle></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Minimal Crew to Operate</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Lifting and re-anchoring each level needs only a small trained team.</p>
      </div>

      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 6-10 7L2 6"></path></svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">Compliance Ready</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">Meets statutory site-safety requirements for high-rise perimeter protection.</p>
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
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px] w-1/3">Frame Material</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Hot-dip galvanised MS steel</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Screen Material</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">HDPE debris mesh / perforated steel sheet</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Standard Panel Height</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Covers 2 floors (~6–7 m)</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Climbing Mechanism</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Manual pulley or crane-assisted lift</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Wind Load Rating</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Compliant with IS 875 (Part 3)</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Anchoring</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">Cast-in bracket / slab anchor points</td>
          </tr>
          <tr class="bg-[#f7f8f6]">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Reuse Cycles</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">100+ project cycles</td>
          </tr>
          <tr class="bg-white">
            <td class="px-6 py-4 font-heading font-semibold text-dreizack-dark text-[14.5px]">Suitable For</td>
            <td class="px-6 py-4 text-[#5a655f] text-[14.5px]">High-rise residential, commercial & institutional sites</td>
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
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21V10l6 4V10l6 4V10l6 4v7Z"></path></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">High-Rise Buildings</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2" width="10" height="20" rx="1"></rect></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Lift-Core & Stair Zones</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="1"></rect><path d="M9 3v18"></path></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Building Perimeter</p>
      </div>
      <div class="flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10l16-6v16"></path></svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Sites Near Public Areas</p>
      </div>
    </div>
  </div>
</section>


<!-- ============ CTA BANNER ============ -->
<section id="enquire" class="relative bg-dreizack-dark">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8">
    <div>
      <h2 class="font-heading font-extrabold text-white text-[26px] sm:text-[32px] leading-[1.15] mb-2">
        Ready to spec Safety Screen for your next project?
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

<!-- ============ GALLERY ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Gallery</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        Safety Screen on site
      </h2>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/safety-screen1.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/400/400';" alt="Safety Screen gallery 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/safety-screen2.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1082/400/400';" alt="Safety Screen gallery 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/safety-screen3.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1084/400/400';" alt="Safety Screen gallery 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
      <div class="aspect-square rounded-xl overflow-hidden">
        <img src="./assets/safety-screen4.jpg" onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/400/400';" alt="Safety Screen gallery 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
      </div>
    </div>
  </div>
</section>


<!-- Include your existing footer.html here -->
<?php 
include "./footer.php"
?>
</body>
</html>