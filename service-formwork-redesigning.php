<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formwork Re-designing — Dreizack</title>

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

<!-- ============ ANIMATIONS (CSS) ============ -->
<style>
  /* Scroll progress bar */
  #scrollProgress {
    position: fixed; top: 0; left: 0; height: 3px; width: 100%;
    background: #FFCC29;
    transform-origin: 0 50%; transform: scaleX(0);
    z-index: 60; pointer-events: none;
  }

  /* Hero: background eases in, text rises in one after another on page load.
     (Rise is applied to wrappers, not the buttons, so button hover lift keeps working.) */
  .hero-zoom { animation: heroZoom 9s ease-out both; }
  @keyframes heroZoom { from { transform: scale(1.12); } to { transform: scale(1); } }
  .hero-rise { animation: heroRise .9s cubic-bezier(.2,.7,.2,1) both; animation-delay: var(--hd, 0ms); }
  @keyframes heroRise { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: none; } }

  /* Scroll reveals (uses `translate`/`scale` so Tailwind hover transforms are untouched) */
  .js-anim .reveal {
    opacity: 0;
    translate: 0 28px;
    transition: opacity .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms),
                translate .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms),
                scale .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms);
  }
  .js-anim .reveal.from-left  { translate: -36px 0; }
  .js-anim .reveal.from-right { translate: 36px 0; }
  .js-anim .reveal.pop        { translate: 0 14px; scale: .9; }
  .js-anim .reveal.in { opacity: 1; translate: 0 0; scale: 1; }

  /* Icons: small pop after their card lands */
  .js-anim .icon-pop { scale: .6; transition: scale .5s cubic-bezier(.3,1.6,.5,1) calc(var(--d, 0ms) + 250ms); }
  .js-anim .in .icon-pop { scale: 1; }

  /* Respect "reduce motion" */
  @media (prefers-reduced-motion: reduce) {
    .hero-zoom, .hero-rise { animation: none; }
    .js-anim .reveal, .js-anim .icon-pop {
      opacity: 1 !important; translate: none !important; scale: 1 !important; transition: none !important;
    }
  }
</style>
</head>

<body class="font-body bg-[#FAFAF7]">

<?php include "./navbar.php"; ?>

<!-- ============ HERO ============ -->
<section class="relative overflow-hidden bg-dreizack-dark">
  <div class="absolute inset-0 overflow-hidden">
    <img src="./assets/redesignFreame.jpg"
         onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/1600/900';"
         alt="Formwork re-designing service"
         class="hero-zoom w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-gradient-to-r from-dreizack-dark via-dreizack-dark/85 to-dreizack-dark/40"></div>
  </div>

  <div class="relative max-w-[1240px] mx-auto px-6 sm:px-8 pt-20 pb-24 lg:pt-28 lg:pb-32">
    <nav class="hero-rise flex items-center gap-2 text-[13.5px] font-heading font-semibold text-white/60 mb-6" style="--hd:100ms">
      <a href="./index.php" class="hover:text-dreizack-gold transition-colors">Home</a>
      <span>/</span>
      <span class="text-white/40">Services</span>
      <span>/</span>
      <span class="text-dreizack-gold">Formwork Re-designing</span>
    </nav>

    <p class="hero-rise text-dreizack-gold text-[13px] font-heading font-bold tracking-wide uppercase mb-4" style="--hd:220ms">
      Service
    </p>

    <h1 class="hero-rise font-heading font-extrabold text-white text-[36px] sm:text-[52px] leading-[1.08] max-w-3xl mb-6" style="--hd:340ms">
      Formwork Re-designing
    </h1>

    <p class="hero-rise text-white/75 text-[16px] sm:text-[17px] leading-relaxed max-w-xl mb-9" style="--hd:480ms">
      Re-engineer existing formwork layouts to suit changing project requirements,
      improve usability and create a more efficient path from design to site execution.
    </p>

    <div class="hero-rise flex flex-wrap items-center gap-4" style="--hd:640ms">
      <a href="#enquire"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                bg-gradient-to-br from-dreizack-green to-dreizack-lime
                shadow-[0_6px_16px_-6px_rgba(2,176,86,0.5)]
                hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(2,176,86,0.6)]
                hover:brightness-105 transition-all duration-200">
        Discuss Your Project
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </a>

      <a href="#process"
         class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                border border-white/30 hover:bg-white/10 transition-colors duration-200">
        View the Process
      </a>
    </div>
  </div>
</section>

<!-- ============ OVERVIEW ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <div class="ov-text">
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
          Overview
        </p>

        <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15] mb-5">
          Existing formwork. Re-engineered for the project.
        </h2>

        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-4">
          Formwork requirements can change as project geometry, floor plans,
          construction sequences and site conditions evolve. Re-designing provides
          a structured way to adapt an existing system instead of starting from zero.
        </p>

        <p class="text-[#5a655f] text-[15px] leading-relaxed mb-8">
          Our approach focuses on understanding the current formwork inventory,
          identifying the required changes and developing a practical configuration
          that can be taken forward for project execution.
        </p>

        <div class="ov-stats grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">01</p>
            <p class="text-[#5a655f] text-[13px]">Review</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">02</p>
            <p class="text-[#5a655f] text-[13px]">Analyse</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">03</p>
            <p class="text-[#5a655f] text-[13px]">Re-design</p>
          </div>
          <div>
            <p class="font-heading font-extrabold text-dreizack-dark text-[28px]">04</p>
            <p class="text-[#5a655f] text-[13px]">Implement</p>
          </div>
        </div>
      </div>

      <div class="ov-img relative aspect-[4/3] rounded-2xl overflow-hidden">
        <img src="./assets/redesignFreame5.avif"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1078/800/600';"
             alt="Formwork redesigning"
             class="w-full h-full object-cover">
      </div>

    </div>
  </div>
</section>

<!-- ============ SERVICE FEATURES ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="sec-head max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        What We Do
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        Engineering support for smarter formwork adaptation
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19 19 4"></path>
            <path d="m6 6 12 12"></path>
            <path d="M4 4h5v5"></path>
            <path d="M15 15h5v5"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Existing System Review
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Review available panels, components and existing layouts to understand
          what can be retained, modified or reconfigured.
        </p>
      </div>

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="8"></circle>
            <path d="M12 8v4l3 2"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Requirement Analysis
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Translate project geometry and construction requirements into practical
          formwork design considerations.
        </p>
      </div>

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 19 19 5"></path>
            <path d="M7 5h12v12"></path>
            <path d="M5 5v14h14"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Layout Re-design
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Develop revised layouts around the required geometry, sequence and
          available formwork components.
        </p>
      </div>

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 17h16"></path>
            <path d="M4 7h16"></path>
            <path d="M8 3v18"></path>
            <path d="M16 3v18"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Panel Optimisation
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Look for opportunities to organise panel sizes and configurations for
          practical handling and repeat use.
        </p>
      </div>

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 18 18 4"></path>
            <path d="m14 4 4 4"></path>
            <path d="M5 19h5"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Modification Planning
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Identify areas where existing components may need modification or
          additional elements to meet the revised design.
        </p>
      </div>

      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <div class="icon-pop w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3 5 6v5c0 4.4 3 8.4 7 10 4-1.6 7-5.6 7-10V6z"></path>
            <path d="m9 12 2 2 4-4"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5">
          Design Review
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Review the proposed configuration before it moves toward fabrication,
          modification or site implementation.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section id="process" class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="sec-head max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        Our Process
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        From existing layout to revised formwork design
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">

      <div class="step-card relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 01</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Review
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Understand the existing system, drawings, components and project inputs.
        </p>
      </div>

      <div class="step-card relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 02</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Analyse
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Identify constraints, gaps and opportunities within the current arrangement.
        </p>
      </div>

      <div class="step-card relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 03</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Re-design
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Develop the revised configuration around the project requirements.
        </p>
      </div>

      <div class="step-card relative p-6 rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6]">
        <p class="font-heading font-extrabold text-dreizack-green text-[14px] mb-4">STEP 04</p>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2">
          Implement
        </h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Take the approved design forward for modification, preparation or site use.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ============ BENEFITS ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <div class="benefit-img relative aspect-[4/3] rounded-2xl overflow-hidden order-2 lg:order-1">
        <img src="./assets/redesignFreame.jpg"
             onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/800/600';"
             alt="Formwork design process"
             class="w-full h-full object-cover">
      </div>

      <div class="benefit-text order-1 lg:order-2">
        <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
          Why Re-design
        </p>

        <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15] mb-6">
          Adapt the system instead of rebuilding the approach
        </h2>

        <div class="benefit-list space-y-5">

          <div class="flex gap-4">
            <div class="icon-pop shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
              <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3v18"></path>
                <path d="M3 12h18"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-heading font-bold text-dreizack-dark text-[16px] mb-1">
                Better use of existing equipment
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Reconsider existing panels and components around the needs of the
                current project.
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="icon-pop shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
              <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 12h16"></path>
                <path d="m12 4 8 8-8 8"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-heading font-bold text-dreizack-dark text-[16px] mb-1">
                Practical site planning
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Consider handling, sequencing and repeat use while developing the
                revised arrangement.
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="icon-pop shrink-0 w-10 h-10 rounded-lg bg-dreizack-dark flex items-center justify-center">
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
                Project-specific adaptation
              </h3>
              <p class="text-[#5a655f] text-[14px] leading-relaxed">
                Shape the formwork configuration around the actual project rather
                than relying on a one-size-fits-all arrangement.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============ CTA ============ -->
<section id="enquire" class="relative bg-dreizack-dark">
  <div class="cta-inner max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-20 flex flex-col lg:flex-row items-center justify-between gap-8">

    <div>
      <h2 class="font-heading font-extrabold text-white text-[26px] sm:text-[32px] leading-[1.15] mb-2">
        Need to adapt your existing formwork?
      </h2>

      <p class="text-white/65 text-[15px]">
        Share your project requirements and let our team review the re-design possibilities.
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

<!-- ============ APPLICATIONS ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="sec-head max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">
        Applications
      </p>

      <h2 class="font-heading font-extrabold text-dreizack-dark text-[28px] sm:text-[34px] leading-[1.15]">
        When formwork re-designing can help
      </h2>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">

      <div class="app-item flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="icon-pop w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="1"></rect>
            <path d="M9 3v18"></path>
          </svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Changed Floor Plans</p>
      </div>

      <div class="app-item flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="icon-pop w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 20V10l16-6v16"></path>
          </svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">New Building Geometry</p>
      </div>

      <div class="app-item flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="icon-pop w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="7" y="2" width="10" height="20" rx="1"></rect>
          </svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Existing Inventory</p>
      </div>

      <div class="app-item flex flex-col items-center text-center gap-3 p-6 bg-white border border-dreizack-dark/10 rounded-2xl">
        <div class="icon-pop w-12 h-12 rounded-xl bg-dreizack-dark flex items-center justify-center">
          <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="8"></circle>
          </svg>
        </div>
        <p class="font-heading font-semibold text-dreizack-dark text-[14px]">Construction Changes</p>
      </div>

    </div>
  </div>
</section>



<?php include './footer.php'; ?>

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

  if (reduce) return;
  document.documentElement.classList.add('js-anim');

  /* 2. Choose what reveals, and in what order */
  const reveal = (els, cls = '', step = 90) =>
    els.forEach((el, i) => {
      el.classList.add('reveal');
      cls.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
      el.style.setProperty('--d', `${i * step}ms`);
    });

  // Section headings (eyebrow + title)
  $$('.sec-head').forEach(h => reveal([...h.children], '', 110));

  // Overview: text lines stagger, image from the right
  const ovText = document.querySelector('.ov-text');
  if (ovText) reveal([...ovText.children], '', 100);
  const ovImg = document.querySelector('.ov-img');
  if (ovImg) reveal([ovImg], 'from-right');

  // Why Re-design: image from the left, heading lines then each benefit in turn
  const bImg = document.querySelector('.benefit-img');
  if (bImg) reveal([bImg], 'from-left');
  const bText = document.querySelector('.benefit-text');
  if (bText) {
    const items = [...bText.children].flatMap(c => c.classList.contains('benefit-list') ? [...c.children] : [c]);
    reveal(items, '', 110);
  }

  // Grids: stagger within each group
  const group = (sel, cls, step) => {
    const groups = new Map();
    $$(sel).forEach(el => {
      if (!groups.has(el.parentElement)) groups.set(el.parentElement, []);
      groups.get(el.parentElement).push(el);
    });
    groups.forEach(list => reveal(list, cls, step));
  };
  group('.feat-card', '', 100);
  group('.step-card', '', 140);
  group('.app-item', 'pop', 100);

  // CTA banner: text, then button
  const cta = document.querySelector('.cta-inner');
  if (cta) reveal([...cta.children], '', 150);

  /* 3. Trigger on scroll; clean up afterwards so your hover styles take over */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      el.classList.add('in');
      io.unobserve(el);
      const delay = parseFloat(el.style.getPropertyValue('--d')) || 0;
      setTimeout(() => {
        el.classList.remove('reveal', 'from-left', 'from-right', 'pop', 'in');
        el.style.removeProperty('--d');
      }, delay + 1100);
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

  $$('.reveal').forEach(el => io.observe(el));
});
</script>

</body>
</html>