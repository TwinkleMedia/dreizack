<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Refurbishment Program — Dreizack</title>

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

<?php include "./navbar.php"; ?>

<!-- ============ HERO ============ -->
<section class="relative overflow-hidden bg-dreizack-dark">
  <div class="absolute inset-0">
    <img src="./assets/service-refurbishment-hero.jpg"
         onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/1600/900';"
         alt="Formwork refurbishment service"
         class="w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-r from-dreizack-dark via-dreizack-dark/85 to-dreizack-dark/40"></div>
  </div>

  <div class="relative max-w-[1240px] mx-auto px-6 sm:px-8 pt-20 pb-24 lg:pt-28 lg:pb-32">
    <nav class="flex items-center gap-2 text-[13.5px] font-heading font-semibold text-white/60 mb-6">
      <a href="./index.php" class="hover:text-dreizack-gold transition-colors">Home</a>
      <span>/</span>
      <span class="text-white/40">Services</span>
      <span>/</span>
      <span class="text-dreizack-gold">Refurbishment Program</span>
    </nav>

    <p class="text-dreizack-gold text-[13px] font-heading font-bold tracking-wide uppercase mb-4">
      Service
    </p>

    <h1 class="font-heading font-extrabold text-white text-[36px] sm:text-[52px] leading-[1.08] max-w-3xl mb-6">
      Refurbishment Program
    </h1>

    <p class="text-white/75 text-[16px] sm:text-[17px] leading-relaxed max-w-xl mb-9">
      Extend the working life of your formwork with a structured refurbishment
      program focused on inspection, restoration, repair and reliable reuse.
    </p>

    <div class="flex flex-wrap items-center gap-4">
      <a href="#enquire"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                bg-gradient-to-br from-dreizack-green to-dreizack-lime
                shadow-[0_6px_16px_-6px_rgba(2,176,86,0.5)]
                hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(2,176,86,0.6)]
                hover:brightness-105 transition-all duration-200">
        Enquire Now
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </a>

      <a href="#process"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                border border-white/30 hover:bg-white/10 transition-colors duration-200">
        Explore the Process
      </a>
    </div>
  </div>
</section>

<!-- ============ OVERVIEW ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <div>
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
          Overview
        </p>

        <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15] mb-5">
          Restore. Reuse. Perform.
        </h2>

        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-4">
          A refurbishment program gives used formwork a structured path back to
          productive service. Panels and components can be inspected, cleaned,
          repaired and prepared for reuse according to their condition and
          project requirements.
        </p>

        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-8">
          The objective is simple: preserve usable equipment, address wear before
          it becomes a larger issue and maintain consistent formwork performance
          across repeated projects.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">01</p>
            <p class="text-[#5a655f] text-[13px]">Inspect</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">02</p>
            <p class="text-[#5a655f] text-[13px]">Restore</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">03</p>
            <p class="text-[#5a655f] text-[13px]">Repair</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">04</p>
            <p class="text-[#5a655f] text-[13px]">Reuse</p>
          </div>
        </div>
      </div>

      <div class="relative aspect-[4/3] rounded-2xl overflow-hidden">
        <img src="./assets/service-refurbishment-overview.jpg"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1078/800/600';"
             alt="Formwork refurbishment"
             class="w-full h-full object-cover">
      </div>

    </div>
  </div>
</section>

<!-- ============ SERVICE FEATURES ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        What We Do
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        A practical refurbishment workflow
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Card 1 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="7"></circle>
            <path d="m20 20-4-4"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Condition Inspection
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Components are reviewed to identify wear, damage, deformation and parts
          that require attention before reuse.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 7h16"></path>
            <path d="M6 7v12h12V7"></path>
            <path d="M9 7V4h6v3"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Cleaning & Preparation
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Used components are cleaned and prepared so their condition can be
          properly assessed and restoration work can be carried out.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L4 17v3h3l5.3-5.3a4 4 0 0 0 5.4-5.4l-2.2 2.2-2.8-2.8z"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Repair & Restoration
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Suitable panels and components can be repaired or restored to return
          them to useful service.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3v18"></path>
            <path d="M3 12h18"></path>
            <path d="m5 5 14 14"></path>
            <path d="m19 5-14 14"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Component Replacement
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Worn or unsuitable supporting components can be identified for
          replacement as part of the refurbishment assessment.
        </p>
      </div>

      <!-- Card 5 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 12a8 8 0 0 1 13.7-5.6L20 8"></path>
            <path d="M20 4v4h-4"></path>
            <path d="M20 12a8 8 0 0 1-13.7 5.6L4 16"></path>
            <path d="M4 20v-4h4"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Reuse Planning
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Refurbished equipment can be assessed and organised for subsequent
          project use based on its condition and requirements.
        </p>
      </div>

      <!-- Card 6 -->
      <div class="group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3 5 6v5c0 4.4 3 8.4 7 10 4-1.6 7-5.6 7-10V6z"></path>
            <path d="m9 12 2 2 4-4"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Quality Review
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Completed refurbishment is reviewed before the equipment is considered
          ready for its next intended application.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section id="process" class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        Our Process
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        From used equipment to ready-to-use formwork
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

      <div class="relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 01</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Inspect
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Review the condition of panels and associated components.
        </p>
      </div>

      <div class="relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 02</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Assess
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Separate items requiring cleaning, repair, replacement or further review.
        </p>
      </div>

      <div class="relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 03</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Refurbish
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Carry out the required restoration and component work.
        </p>
      </div>

      <div class="relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 04</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Reuse
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Prepare suitable equipment for its next project application.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ============ BENEFITS ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <div class="relative aspect-[4/3] rounded-2xl overflow-hidden order-2 lg:order-1">
        <img src="./assets/service-refurbishment-process.jpg"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/800/600';"
             alt="Refurbishment work"
             class="w-full h-full object-cover">
      </div>

      <div class="order-1 lg:order-2">
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
          Why Refurbish
        </p>

        <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15] mb-6">
          Make more value from the equipment you already have
        </h2>

        <div class="space-y-5">

          <div class="flex gap-4">
            <div class="shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
              <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3v18"></path>
                <path d="M3 12h18"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-heading font-bold text-dreizack-dark text-[16px] mb-1">
                Extend usable life
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Address wear and damage so suitable equipment can continue serving
                future projects.
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
              <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 12h16"></path>
                <path d="m12 4 8 8-8 8"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-heading font-bold text-dreizack-dark text-[16px] mb-1">
                Reduce avoidable replacement
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Identify what can be restored before deciding that equipment needs
                to be replaced.
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
              <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 3v18"></path>
                <path d="M18 3v18"></path>
                <path d="M3 8h18"></path>
                <path d="M3 16h18"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-heading font-bold text-dreizack-dark text-[16px] mb-1">
                Support repeat use
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Keep suitable components in circulation and organised for future
                construction requirements.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ FAQ / SUITABILITY ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        Program Scope
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        What can be assessed?
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

      <div class="p-6 border border-dreizack-dark/10 rounded-2xl bg-white">
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Aluminium panels
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Panels can be assessed for condition, cleanliness, damage, deformation
          and suitability for refurbishment.
        </p>
      </div>

      <div class="p-6 border border-dreizack-dark/10 rounded-2xl bg-white">
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Pins, wedges & accessories
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Associated components can be reviewed alongside the main formwork system.
        </p>
      </div>

      <div class="p-6 border border-dreizack-dark/10 rounded-2xl bg-white">
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Damaged components
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Items showing wear or damage can be identified for repair, replacement
          or further technical assessment.
        </p>
      </div>

      <div class="p-6 border border-dreizack-dark/10 rounded-2xl bg-white">
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Existing formwork inventory
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Existing equipment can be reviewed as a complete inventory to determine
          an appropriate refurbishment path.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ============ CTA ============ -->
<section id="enquire" class="relative bg-dreizack-dark">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8">

    <div>
      <h2 class="font-heading font-extrabold text-white text-[26px] sm:text-[32px] leading-[1.15] mb-2">
        Ready to assess your existing formwork?
      </h2>

      <p class="text-white/65 text-[15px]">
        Talk to our team about a refurbishment assessment for your equipment.
      </p>
    </div>

    <a href="#"
       class="shrink-0 inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
              bg-gradient-to-br from-dreizack-green to-dreizack-lime
              shadow-[0_6px_16px_-6px_rgba(2,176,86,0.5)]
              hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(2,176,86,0.6)]
              hover:brightness-105 transition-all duration-200">
      Request a Consultation
      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
           stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="7" y1="17" x2="17" y2="7"></line>
        <polyline points="7 7 17 7 17 17"></polyline>
      </svg>
    </a>

  </div>
</section>

<?php include './footer.php'; ?>

</body>
</html>
