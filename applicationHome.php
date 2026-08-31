<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dreizack — Applications</title>
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
<style>
  .app-card:hover .app-arrow { background-color: #FFCC29; }
  .app-card:hover .app-arrow svg { color: #00482D; transform: translate(2px,-2px); }
  .app-card:hover .app-img { transform: scale(1.06); }
</style>
</head>
<body class="bg-[#FAFAF7] font-body">

<!-- ============ APPLICATIONS ============ -->
<section class="relative">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Applications</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Where the tie-plate system goes to work
      </h2>
      <p class="text-[#3d4a44] text-[15.5px] leading-relaxed">
        One system, engineered to hold its line across every vertical element on site —
        from core walls to the smallest column.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">

      <!-- Card: Shear Walls -->
      <a href="./application-shear-walls.html" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/app-shear-walls.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1076/700/560';"
               alt="Shear wall formwork application" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Shear Walls</h3>
        </div>
      </a>

      <!-- Card: Retaining Walls -->
      <a href="./application-retaining-walls.html" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/app-retaining-walls.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1080/700/560';"
               alt="Retaining wall formwork application" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Retaining Walls</h3>
        </div>
      </a>

      <!-- Card: Lift-core Walls -->
      <a href="./application-lift-core-walls.html" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/app-lift-core-walls.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1078/700/560';"
               alt="Lift-core wall formwork application" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Lift-Core Walls</h3>
        </div>
      </a>

      <!-- Card: Rectangular / Round Columns -->
      <a href="./application-columns.html" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/app-columns.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1082/700/560';"
               alt="Rectangular and round column formwork application" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Rectangular / Round Columns</h3>
        </div>
      </a>

      <!-- Card: Staircase -->
      <a href="./application-staircase.html" class="app-card group block">
        <div class="relative aspect-[4/3] overflow-hidden">
          <img src="./assets/app-staircase.jpg"
               onerror="this.onerror=null;this.src='https://picsum.photos/id/1084/700/560';"
               alt="Staircase formwork application" class="app-img w-full h-full object-cover transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-dreizack-dark/70 via-dreizack-dark/0 to-transparent"></div>
          <div class="app-arrow absolute bottom-0 right-0 w-12 h-12 bg-dreizack-green flex items-center justify-center transition-colors duration-200">
            <svg class="w-5 h-5 text-white transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
          </div>
        </div>
        <div class="pt-4 flex items-center justify-between border-b border-dreizack-dark/10 pb-4">
          <h3 class="font-heading font-bold text-dreizack-dark text-[17px]">Staircase</h3>
        </div>
      </a>

    </div>
  </div>
</section>

</body>
</html>