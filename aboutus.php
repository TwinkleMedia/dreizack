<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About Us</title>
<script src="https://cdn.tailwindcss.com"></script>

<!-- ============ ANIMATIONS (CSS) ============ -->
<style>
  /* Scroll progress bar */
  #scrollProgress {
    position: fixed; top: 0; left: 0; height: 3px; width: 100%;
    background: #f5b800; /* swap for your dreizack-gold */
    transform-origin: 0 50%; transform: scaleX(0);
    z-index: 60; pointer-events: none;
  }

  /* Hero: title and breadcrumb rise in on page load; overlay fades from lighter to final tone */
  .hero-rise { animation: heroRise .9s cubic-bezier(.2,.7,.2,1) both; animation-delay: var(--hd, 0ms); }
  @keyframes heroRise { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: none; } }
  .hero-overlay { animation: heroOverlay 1.2s ease-out both; }
  @keyframes heroOverlay { from { opacity: 0; } to { opacity: 1; } }
  .hero-bar { transform-origin: 50% 50%; animation: heroBar .8s cubic-bezier(.2,.7,.2,1) .55s both; }
  @keyframes heroBar { from { transform: scaleX(0); } to { transform: scaleX(1); } }

  /* Scroll reveals (uses `translate` so Tailwind hover transforms are untouched) */
  .js-anim .reveal {
    opacity: 0;
    translate: 0 28px;
    transition: opacity .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms),
                translate .7s cubic-bezier(.2,.7,.2,1) var(--d, 0ms);
  }
  .js-anim .reveal.from-left  { translate: -36px 0; }
  .js-anim .reveal.from-right { translate: 36px 0; }
  .js-anim .reveal.in { opacity: 1; translate: 0 0; }

  /* About: green offset block slides out from behind the photo */
  .js-anim .about-block { translate: 20px 20px; opacity: 0; transition: translate .9s cubic-bezier(.2,.7,.2,1) .25s, opacity .6s ease .25s; }
  .js-anim .about-block.in { translate: 0 0; opacity: 1; }

  /* Respect "reduce motion" */
  @media (prefers-reduced-motion: reduce) {
    .hero-rise, .hero-overlay, .hero-bar { animation: none; }
    .js-anim .reveal, .js-anim .about-block {
      opacity: 1 !important; translate: none !important; transition: none !important;
    }
  }
</style>
</head>
<body class="bg-white">

<?php 
include "./navbar.php"
?>

  <!-- Hero Section -->
  <section
    class="relative w-full min-h-[220px] sm:min-h-[280px] md:min-h-[320px] lg:min-h-[360px] flex items-center justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('https://images.unsplash.com/photo-1541976590-713941681591?q=80&w=1920&auto=format&fit=crop');"
  >
    <!-- Dark overlay -->
    <div class="hero-overlay absolute inset-0 bg-slate-900/60"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-4 sm:px-6">
      <h1 class="hero-rise text-white font-extrabold tracking-wide text-3xl sm:text-4xl md:text-5xl" style="--hd:150ms">
        About Us
      </h1>

      <div class="hero-bar mx-auto mt-3 h-[3px] w-14 bg-dreizack-gold" aria-hidden="true"></div>

      <div class="hero-rise mt-3 sm:mt-4 flex items-center justify-center gap-2 text-sm sm:text-base text-white/90" style="--hd:400ms">
        <a href="#" class="flex items-center gap-1.5 hover:text-white transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
            <path d="M11.47 3.84a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.06l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.69Z" />
            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
          </svg>
          <span>Home</span>
        </a>
        <span class="text-white/60">/</span>
        <span>About-Us</span>
      </div>
    </div>
  </section>


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


<!-- ============ WHY US ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-14 lg:mb-16">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Why Us?</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1]">
        Built on precision, backed by people who show up
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-6">

      <!-- Manufacturing Excellence -->
      <div class="why-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">01</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 21V10l6 4V10l6 4V10l6 4v7Z"></path>
            <path d="M3 21h18"></path>
            <circle cx="18" cy="6" r="2"></circle>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17.5px] mb-2.5 leading-snug">Manufacturing Excellence</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Backed by advanced machinery and stringent quality controls, our production facilities
          deliver high-precision, durable, and reliable formwork systems that meet global standards.
        </p>
      </div>

      <!-- End-to-End Support -->
      <div class="why-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">02</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 12h.01"></path>
            <path d="M12 12h.01"></path>
            <path d="M16 12h.01"></path>
            <path d="M21 12a9 9 0 1 1-4.2-7.6"></path>
            <path d="M21 3v6h-6"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17.5px] mb-2.5 leading-snug">End-to-End Support</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          From design consultation to on-site technical assistance and post-sales coordination,
          we partner with you at every stage — ensuring smooth execution and peace of mind.
        </p>
      </div>

      <!-- Experienced Team -->
      <div class="why-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">03</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="8" r="3.2"></circle>
            <path d="M3.5 20c0-3.3 2.5-6 6-6s6 2.7 6 6"></path>
            <circle cx="17" cy="8.5" r="2.6"></circle>
            <path d="M15.5 12.2c2.6.3 4.5 2.4 4.5 5.8"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17.5px] mb-2.5 leading-snug">Experienced Team</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Seasoned industry veterans bring deep expertise, practical insight, and a
          solution-oriented mindset to every project.
        </p>
      </div>

      <!-- Long Lifecycle -->
      <div class="why-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">04</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 2l4 4-4 4"></path>
            <path d="M21 6H8a5 5 0 0 0 0 10h1"></path>
            <path d="M7 22l-4-4 4-4"></path>
            <path d="M3 18h13a5 5 0 0 0 0-10h-1"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17.5px] mb-2.5 leading-snug">Long Lifecycle</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Engineered for reusability and built to last. High-quality finish and robust build
          ensure lower long-term costs and better outcomes.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- ============ FEATURES ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Features</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Engineered into every panel, before it reaches site
      </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-6">

      <!-- Higher number of repetitions -->
      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">01</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 12a9 9 0 0 1 15.5-6.36L21 8"></path>
            <path d="M21 3v5h-5"></path>
            <path d="M21 12a9 9 0 0 1-15.5 6.36L3 16"></path>
            <path d="M3 21v-5h5"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5 leading-snug">Higher number of repetitions</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Panels built to be reused pour after pour without losing shape or finish.
        </p>
      </div>

      <!-- Faster construction -->
      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">02</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 7v5l3.5 2"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5 leading-snug">Faster construction</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Quicker assembly and strike times shorten the cycle on every floor.
        </p>
      </div>

      <!-- Saving on labour costs and expenses -->
      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">03</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="8" cy="9" r="4.5"></circle>
            <circle cx="16" cy="15" r="4.5"></circle>
            <path d="M8 9v0M16 15v0"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5 leading-snug">Saving on labour costs and expenses</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          A smaller crew handles more area, cutting site labour spend.
        </p>
      </div>

      <!-- No wooden wastage -->
      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">04</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="9" width="18" height="6" rx="0.5"></rect>
            <path d="M3 3l18 18"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5 leading-snug">No wooden wastage</h3>
        <p class="text-[#5a655f] text-[14px] leading-relaxed">
          Reusable aluminium panels remove timber shuttering from the site entirely.
        </p>
      </div>

      <!-- Low investment -->
      <div class="feat-card group relative flex flex-col p-7 bg-white border border-dreizack-dark/10 rounded-2xl
                  hover:border-dreizack-green/40 hover:shadow-[0_20px_40px_-20px_rgba(0,72,45,0.25)]
                  hover:-translate-y-1.5 transition-all duration-300">
        <span class="absolute top-6 right-7 font-heading font-extrabold text-[13px] text-dreizack-dark/15 group-hover:text-dreizack-green/30 transition-colors">05</span>
        <div class="w-14 h-14 mb-6 rounded-xl bg-dreizack-dark flex items-center justify-center
                    group-hover:bg-dreizack-green transition-colors duration-300">
          <svg class="w-6 h-6 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 4h9a3 3 0 0 1 0 6H8"></path>
            <path d="M6 4v16"></path>
            <path d="M6 13h8"></path>
            <path d="M6 20l3-3"></path>
          </svg>
        </div>
        <h3 class="font-heading font-bold text-dreizack-dark text-[17px] mb-2.5 leading-snug">Low investment</h3>
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
  ['.why-card', '.feat-card'].forEach(sel => {
    const groups = new Map();
    $$(sel).forEach(el => {
      if (!groups.has(el.parentElement)) groups.set(el.parentElement, []);
      groups.get(el.parentElement).push(el);
    });
    groups.forEach(list => reveal(list, '', 110));
  });

  /* 3. Trigger on scroll; clean up afterwards so your hover styles take over */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      el.classList.add('in');
      io.unobserve(el);
      const delay = parseFloat(el.style.getPropertyValue('--d')) || 0;
      setTimeout(() => {
        el.classList.remove('reveal', 'from-left', 'from-right', 'about-block', 'in');
        el.style.removeProperty('--d');
      }, delay + 1100);
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

  $$('.reveal, .about-block').forEach(el => io.observe(el));
});
</script>

</body>
</html>
