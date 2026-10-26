<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aluminium Formwork Rental — Dreizack</title>
  <meta name="description" content="Explore aluminium formwork rental solutions for construction projects. Discuss your project requirements and rental needs with Dreizack.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: {
      colors: { dreizack: { dark:'#00482D', green:'#02B056', lime:'#A8CF45', yellow:'#FFF212', gold:'#FFCC29', orange:'#F58634' } },
      fontFamily: { heading:['Raleway','sans-serif'], body:['Bahnschrift','Raleway','sans-serif'] }
    }}};
  </script>
  <style>
    html { scroll-behavior:smooth; }
    body { font-family:Bahnschrift, Raleway, sans-serif; }
    #scrollProgress { position:fixed;top:0;left:0;height:3px;width:100%;background:#FFCC29;transform:scaleX(0);transform-origin:0 50%;z-index:100;pointer-events:none; }
    .hero-zoom { animation:heroZoom 9s ease-out both; }
    @keyframes heroZoom { from { transform:scale(1.12) } to { transform:scale(1) } }
    .hero-rise { animation:heroRise .9s cubic-bezier(.2,.7,.2,1) both; animation-delay:var(--hd,0ms); }
    @keyframes heroRise { from {opacity:0;transform:translateY(24px)} to {opacity:1;transform:none} }
    .js-anim .reveal { opacity:0;translate:0 28px;transition:opacity .7s cubic-bezier(.2,.7,.2,1) var(--d,0ms),translate .7s cubic-bezier(.2,.7,.2,1) var(--d,0ms),scale .7s cubic-bezier(.2,.7,.2,1) var(--d,0ms); }
    .js-anim .reveal.from-left { translate:-36px 0; }
    .js-anim .reveal.from-right { translate:36px 0; }
    .js-anim .reveal.in { opacity:1;translate:0 0;scale:1; }
    .icon-pop { transition:transform .35s cubic-bezier(.3,1.6,.5,1); }
    .group:hover .icon-pop { transform:scale(1.08); }
    @media(prefers-reduced-motion:reduce) { *,*::before,*::after {scroll-behavior:auto!important;animation:none!important;transition:none!important}.js-anim .reveal{opacity:1!important;translate:none!important;scale:1!important} }
  </style>
</head>
<body class="font-body bg-[#FAFAF7] text-[#20352B]">
  <?php include "./navbar.php"; ?>

  <!-- HERO -->
  <section class="relative overflow-hidden bg-dreizack-dark">
    <div class="absolute inset-0 overflow-hidden">
      <img src="./assets/service-aluminium-rental-hero.jpg" alt="Aluminium formwork system at a construction site" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=2000&q=85';" class="hero-zoom h-full w-full object-cover opacity-35">
      <div class="absolute inset-0 bg-gradient-to-r from-dreizack-dark via-dreizack-dark/85 to-dreizack-dark/35"></div>
    </div>
    <div class="relative mx-auto max-w-[1240px] px-6 py-20 sm:px-8 lg:py-32">
      <nav class="hero-rise mb-6 flex flex-wrap items-center gap-2 font-heading text-[13.5px] font-semibold text-white/60" style="--hd:100ms">
        <a href="./index.php" class="transition-colors hover:text-dreizack-gold">Home</a><span>/</span><span>Services</span><span>/</span><span class="text-dreizack-gold">Aluminium Formwork Rental</span>
      </nav>
      <p class="hero-rise mb-4 font-heading text-[13px] font-bold uppercase tracking-[.14em] text-dreizack-gold" style="--hd:220ms">Construction Formwork Solutions</p>
      <h1 class="hero-rise mb-6 max-w-3xl font-heading text-[36px] font-extrabold leading-[1.08] text-white sm:text-[52px] lg:text-[60px]" style="--hd:340ms">Aluminium Formwork Rental</h1>
      <p class="hero-rise mb-9 max-w-2xl text-[16px] leading-relaxed text-white/75 sm:text-[17px]" style="--hd:480ms">Flexible aluminium formwork rental options for construction teams. Find a practical formwork solution aligned with your project scope, schedule and site requirements.</p>
      <div class="hero-rise flex flex-wrap gap-4" style="--hd:640ms">
        <a href="#enquire" class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-br from-dreizack-green to-dreizack-lime px-7 py-3.5 font-heading text-[14.5px] font-bold text-white shadow-lg transition-all duration-200 hover:-translate-y-0.5 hover:brightness-105">Enquire About Rental <span aria-hidden="true">↗</span></a>
        <a href="#process" class="inline-flex items-center rounded-lg border border-white/30 px-7 py-3.5 font-heading text-[14.5px] font-bold text-white transition-colors hover:bg-white/10">How It Works</a>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section>
    <div class="mx-auto grid max-w-[1240px] grid-cols-1 items-center gap-12 px-6 py-16 sm:px-8 lg:grid-cols-2 lg:gap-16 lg:py-24">
      <div class="ov-text">
        <p class="mb-3 font-heading text-[13px] font-bold uppercase tracking-wide text-dreizack-green">Overview</p>
        <h2 class="mb-5 font-heading text-[28px] font-extrabold leading-tight text-dreizack-dark sm:text-[34px]">The right formwork for your next pour.</h2>
        <p class="mb-4 text-[15px] leading-relaxed text-[#5a655f]">Renting aluminium formwork can help construction teams access a formwork system for the duration of a project without purchasing every component outright. The right rental arrangement depends on your drawings, construction sequence, quantities and required dates.</p>
        <p class="mb-8 text-[15px] leading-relaxed text-[#5a655f]">Share your project details with our team so the formwork requirements, availability and rental terms can be discussed before planning your site schedule.</p>
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-4">
          <div><p class="font-heading text-[28px] font-extrabold text-dreizack-dark">01</p><p class="text-[13px] text-[#5a655f]">Share Plans</p></div>
          <div><p class="font-heading text-[28px] font-extrabold text-dreizack-dark">02</p><p class="text-[13px] text-[#5a655f]">Assess Needs</p></div>
          <div><p class="font-heading text-[28px] font-extrabold text-dreizack-dark">03</p><p class="text-[13px] text-[#5a655f]">Plan Rental</p></div>
          <div><p class="font-heading text-[28px] font-extrabold text-dreizack-dark">04</p><p class="text-[13px] text-[#5a655f]">Coordinate</p></div>
        </div>
      </div>
      <div class="ov-img relative aspect-[4/3] overflow-hidden rounded-2xl bg-[#e8eee8]">
        <img src="./assets/Formwork and Rebar on Site.png" alt="Aluminium formwork panels ready for a construction project" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1200&q=85';" class="h-full w-full object-cover">
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="bg-[#f7f8f6]">
    <div class="mx-auto max-w-[1240px] px-6 py-16 sm:px-8 lg:py-24">
      <div class="sec-head mb-12 max-w-2xl lg:mb-14"><p class="mb-3 font-heading text-[13px] font-bold uppercase tracking-wide text-dreizack-green">Rental Support</p><h2 class="font-heading text-[28px] font-extrabold leading-tight text-dreizack-dark sm:text-[34px]">Support for each stage of your formwork planning</h2></div>
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V4h16v16M4 9h16M9 4v16M15 4v16"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Project-Based Requirements</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Discuss your building type, project drawings, floor cycle and estimated quantities to help define the rental requirement.</p></article>
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Rental Duration Planning</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Share your planned start date, expected usage period and construction milestones so rental timelines can be reviewed.</p></article>
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 7h18v13H3zM7 7V4h10v3M7 12h10M7 16h6"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Panel & Component Planning</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Identify the panels and compatible accessories required for the proposed system, subject to assessment and availability.</p></article>
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 7h18M5 7l1 13h12l1-13M9 7V4h6v3"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Dispatch Coordination</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Coordinate the proposed dispatch plan and delivery requirements with the project schedule and agreed rental terms.</p></article>
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 5h16v14H4zM8 9h8M8 13h5"/><path d="m15 16 2 2 4-4"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Clear Rental Terms</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Review the quotation, rental period, transport, deposit and other applicable terms before confirming the order.</p></article>
        <article class="feat-card group rounded-2xl border border-dreizack-dark/10 bg-white p-7 transition-all duration-300 hover:-translate-y-1.5 hover:border-dreizack-green/40 hover:shadow-xl"><div class="icon-pop mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-dreizack-dark text-dreizack-gold transition-colors group-hover:bg-dreizack-green"><svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 5 6v5c0 4.4 3 8.4 7 10 4-1.6 7-5.6 7-10V6z"/><path d="m9 12 2 2 4-4"/></svg></div><h3 class="mb-2.5 font-heading text-[17px] font-bold text-dreizack-dark">Return & Close-Out Planning</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Discuss return logistics, condition checks and close-out requirements as part of the rental arrangement.</p></article>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process">
    <div class="mx-auto max-w-[1240px] px-6 py-16 sm:px-8 lg:py-24">
      <div class="sec-head mb-12 max-w-2xl lg:mb-14"><p class="mb-3 font-heading text-[13px] font-bold uppercase tracking-wide text-dreizack-green">Our Process</p><h2 class="font-heading text-[28px] font-extrabold leading-tight text-dreizack-dark sm:text-[34px]">From project enquiry to rental coordination</h2></div>
      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <div class="step-card rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6] p-6"><p class="mb-4 font-heading text-[14px] font-extrabold text-dreizack-green">STEP 01</p><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Tell Us About Your Project</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Share your site location, project type, drawings and target dates.</p></div>
        <div class="step-card rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6] p-6"><p class="mb-4 font-heading text-[14px] font-extrabold text-dreizack-green">STEP 02</p><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Review Requirements</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Discuss expected quantities, components, rental period and availability.</p></div>
        <div class="step-card rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6] p-6"><p class="mb-4 font-heading text-[14px] font-extrabold text-dreizack-green">STEP 03</p><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Review the Quotation</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Confirm pricing, delivery arrangements and applicable rental conditions.</p></div>
        <div class="step-card rounded-2xl border border-dreizack-dark/10 bg-[#f7f8f6] p-6"><p class="mb-4 font-heading text-[14px] font-extrabold text-dreizack-green">STEP 04</p><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Coordinate the Rental</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Align the agreed dispatch and return plan with your project timeline.</p></div>
      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section class="bg-[#f7f8f6]">
    <div class="mx-auto grid max-w-[1240px] grid-cols-1 items-center gap-12 px-6 py-16 sm:px-8 lg:grid-cols-2 lg:gap-20 lg:py-24">
      <div class="benefit-img order-2 aspect-[4/3] overflow-hidden rounded-2xl bg-[#e8eee8] lg:order-1"><img src="./assets/alumframe1.jpg" alt="Formwork installation at a building construction site" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1503387762-592052de9b6a?auto=format&fit=crop&w=1200&q=85';" class="h-full w-full object-cover" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1503387762-592052de9b6a?auto=format&fit=crop&w=1200&q=85';"></div>
      <div class="benefit-text order-1 lg:order-2">
        <p class="mb-3 font-heading text-[13px] font-bold uppercase tracking-wide text-dreizack-green">Why Consider Rental?</p>
        <h2 class="mb-6 font-heading text-[28px] font-extrabold leading-tight text-dreizack-dark sm:text-[34px]">A flexible approach to project equipment</h2>
        <div class="benefit-list space-y-5">
          <div class="flex gap-4"><div class="icon-pop flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-dreizack-dark text-dreizack-gold">✓</div><div><h3 class="mb-1 font-heading text-[16px] font-bold text-dreizack-dark">Avoid an upfront purchase where suitable</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Rental may help match equipment use to a project's duration rather than purchasing the full system.</p></div></div>
          <div class="flex gap-4"><div class="icon-pop flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-dreizack-dark text-dreizack-gold">↗</div><div><h3 class="mb-1 font-heading text-[16px] font-bold text-dreizack-dark">Plan around your construction schedule</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Discuss timing and quantities early to help coordinate equipment requirements with site milestones.</p></div></div>
          <div class="flex gap-4"><div class="icon-pop flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-dreizack-dark text-dreizack-gold">▦</div><div><h3 class="mb-1 font-heading text-[16px] font-bold text-dreizack-dark">Discuss project-specific quantities</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Review the panels and accessories needed for your proposed formwork layout before confirming the rental.</p></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="enquire" class="bg-dreizack-dark">
    <div class="cta-inner mx-auto flex max-w-[1240px] flex-col items-start justify-between gap-8 px-6 py-16 sm:px-8 lg:flex-row lg:items-center lg:py-20">
      <div><h2 class="mb-2 font-heading text-[26px] font-extrabold leading-tight text-white sm:text-[32px]">Planning a project with aluminium formwork?</h2><p class="max-w-2xl text-[15px] leading-relaxed text-white/65">Tell us about your project, required quantities and timeline to discuss rental availability and terms.</p></div>
      <!-- Replace the # below with your actual contact page, email, or enquiry form URL. -->
      <a href="./contact.php" class="inline-flex shrink-0 items-center gap-2 rounded-lg bg-gradient-to-br from-dreizack-green to-dreizack-lime px-7 py-3.5 font-heading text-[14.5px] font-bold text-white shadow-lg transition-all duration-200 hover:-translate-y-0.5 hover:brightness-105">Request a Rental Quote <span aria-hidden="true">↗</span></a>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="mx-auto max-w-[1240px] px-6 py-16 sm:px-8 lg:py-24">
      <div class="sec-head mb-12 max-w-2xl lg:mb-14"><p class="mb-3 font-heading text-[13px] font-bold uppercase tracking-wide text-dreizack-green">Rental Enquiry Checklist</p><h2 class="font-heading text-[28px] font-extrabold leading-tight text-dreizack-dark sm:text-[34px]">What should you prepare?</h2></div>
      <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <div class="scope-card rounded-2xl border border-dreizack-dark/10 bg-white p-6"><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Project drawings & building details</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Share available structural or formwork drawings, building type, floor details and site location.</p></div>
        <div class="scope-card rounded-2xl border border-dreizack-dark/10 bg-white p-6"><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Estimated quantities</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Provide the approximate area, number of floors, panel quantities or component list, if available.</p></div>
        <div class="scope-card rounded-2xl border border-dreizack-dark/10 bg-white p-6"><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Rental dates & duration</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Mention when equipment is required, expected usage duration and any phased delivery dates.</p></div>
        <div class="scope-card rounded-2xl border border-dreizack-dark/10 bg-white p-6"><h3 class="mb-2 font-heading text-[17px] font-bold text-dreizack-dark">Delivery & return details</h3><p class="text-[14px] leading-relaxed text-[#5a655f]">Discuss site access, unloading arrangements, transport responsibilities and expected return logistics.</p></div>
      </div>
      <p class="mt-6 text-[12px] leading-relaxed text-[#69756e]">Rental availability, system suitability, quantities, delivery and commercial terms are subject to project review and confirmation.</p>
    </div>
  </section>

  <?php include './footer.php'; ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      const all = (selector, root = document) => [...root.querySelectorAll(selector)];
      const bar = document.createElement('div'); bar.id = 'scrollProgress'; document.body.appendChild(bar);
      const onScroll = () => { const h = document.documentElement.scrollHeight - window.innerHeight; bar.style.transform = `scaleX(${h > 0 ? window.scrollY / h : 0})`; };
      window.addEventListener('scroll', onScroll, { passive: true }); onScroll();
      if (reduce || !('IntersectionObserver' in window)) return;
      document.documentElement.classList.add('js-anim');
      const reveal = (elements, extra = '', step = 90) => elements.forEach((el, i) => { el.classList.add('reveal'); extra.split(' ').filter(Boolean).forEach(c => el.classList.add(c)); el.style.setProperty('--d', `${i * step}ms`); });
      all('.sec-head').forEach(h => reveal([...h.children], '', 110));
      const ovText = document.querySelector('.ov-text'); if (ovText) reveal([...ovText.children], '', 100);
      const ovImg = document.querySelector('.ov-img'); if (ovImg) reveal([ovImg], 'from-right');
      const bImg = document.querySelector('.benefit-img'); if (bImg) reveal([bImg], 'from-left');
      const bText = document.querySelector('.benefit-text'); if (bText) reveal([...bText.children, ...all('.benefit-list > div', bText)], '', 100);
      const group = (selector, step) => { const parents = new Map(); all(selector).forEach(el => { if (!parents.has(el.parentElement)) parents.set(el.parentElement, []); parents.get(el.parentElement).push(el); }); parents.forEach(list => reveal(list, '', step)); };
      group('.feat-card', 100); group('.step-card', 120); group('.scope-card', 100);
      const cta = document.querySelector('.cta-inner'); if (cta) reveal([...cta.children], '', 140);
      const observer = new IntersectionObserver(entries => entries.forEach(entry => { if (!entry.isIntersecting) return; const el = entry.target; el.classList.add('in'); observer.unobserve(el); const delay = parseFloat(el.style.getPropertyValue('--d')) || 0; window.setTimeout(() => { el.classList.remove('reveal','from-left','from-right','in'); el.style.removeProperty('--d'); }, delay + 850); }), { threshold: .15, rootMargin: '0px 0px -8% 0px' });
      all('.reveal').forEach(el => observer.observe(el));
    });
  </script>
</body>
</html>
