<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dreizack — Footer</title>
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
<body class="bg-[#FAFAF7]">

<!-- ============ FOOTER ============ -->
<footer class="bg-dreizack-dark font-body">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 pt-14 pb-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

      <!-- Brand / About -->
      <div class="sm:col-span-2 lg:col-span-2 flex flex-col gap-3">
        <a href="#" class="flex items-center gap-3 w-fit -mt-4 -mb-10">
         <img src="./assets/footerLogo2.png" alt="Dreizack logo" class="h-44 sm:h-52 w-auto shrink-0">
        </a>

        <!-- About Us -->
        <p class="text-white/65 text-[14.5px] leading-relaxed max-w-md">
          Dreizack Formwork Solutions LLP designs, manufactures, and delivers reliable formwork systems engineered for speed, safety, and precision on every project site.
        </p>

        <!-- Social links -->
        <div class="flex items-center gap-3 mt-2">
          <a href="#" aria-label="Facebook"
             class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-dreizack-green text-white transition-colors duration-200">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.06C22 6.51 17.52 2 12 2S2 6.51 2 12.06c0 5.02 3.66 9.18 8.44 9.94v-7.03H7.9v-2.91h2.54V9.84c0-2.51 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.78-1.63 1.57v1.88h2.78l-.44 2.91h-2.34V22c4.78-.76 8.44-4.92 8.44-9.94Z"/></svg>
          </a>
          <a href="#" aria-label="Instagram"
             class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-dreizack-green text-white transition-colors duration-200">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.2c3.2 0 3.58.01 4.85.07 1.17.05 1.97.24 2.43.4a4.9 4.9 0 0 1 1.77 1.15 4.9 4.9 0 0 1 1.15 1.77c.16.46.35 1.26.4 2.43.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.24 1.97-.4 2.43a4.9 4.9 0 0 1-1.15 1.77 4.9 4.9 0 0 1-1.77 1.15c-.46.16-1.26.35-2.43.4-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.97-.24-2.43-.4a4.9 4.9 0 0 1-1.77-1.15 4.9 4.9 0 0 1-1.15-1.77c-.16-.46-.35-1.26-.4-2.43C2.21 15.58 2.2 15.2 2.2 12s.01-3.58.07-4.85c.05-1.17.24-1.97.4-2.43a4.9 4.9 0 0 1 1.15-1.77 4.9 4.9 0 0 1 1.77-1.15c.46-.16 1.26-.35 2.43-.4C8.42 2.21 8.8 2.2 12 2.2Zm0 1.8c-3.15 0-3.5.01-4.73.07-1.03.05-1.6.22-1.97.36-.5.19-.85.42-1.22.79-.37.37-.6.72-.79 1.22-.14.37-.31.94-.36 1.97-.06 1.23-.07 1.58-.07 4.73s.01 3.5.07 4.73c.05 1.03.22 1.6.36 1.97.19.5.42.85.79 1.22.37.37.72.6 1.22.79.37.14.94.31 1.97.36 1.23.06 1.58.07 4.73.07s3.5-.01 4.73-.07c1.03-.05 1.6-.22 1.97-.36.5-.19.85-.42 1.22-.79.37-.37.6-.72.79-1.22.14-.37.31-.94.36-1.97.06-1.23.07-1.58.07-4.73s-.01-3.5-.07-4.73c-.05-1.03-.22-1.6-.36-1.97a3.1 3.1 0 0 0-.79-1.22 3.1 3.1 0 0 0-1.22-.79c-.37-.14-.94-.31-1.97-.36-1.23-.06-1.58-.07-4.73-.07Zm0 3.7a4.3 4.3 0 1 1 0 8.6 4.3 4.3 0 0 1 0-8.6Zm0 1.8a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Zm5.47-1.99a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn"
             class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-dreizack-green text-white transition-colors duration-200">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM3.2 8.75h3.5V21H3.2V8.75Zm6.4 0h3.36v1.68h.05c.47-.88 1.6-1.8 3.3-1.8 3.53 0 4.18 2.32 4.18 5.34V21h-3.5v-5.5c0-1.31-.02-3-1.83-3-1.83 0-2.11 1.43-2.11 2.9V21H9.6V8.75Z"/></svg>
          </a>
          <a href="#" aria-label="Twitter / X"
             class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-dreizack-green text-white transition-colors duration-200">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.9 2H22l-7.6 8.68L23.3 22h-6.9l-5.4-6.9L4.7 22H1.6l8.13-9.3L1 2h7.1l4.9 6.3L18.9 2Zm-1.2 18h1.9L7.4 4H5.4l12.3 16Z"/></svg>
          </a>
        </div>
      </div>

      <!-- Navigation -->
      <div class="flex flex-col gap-3">
        <h3 class="font-heading font-bold text-white text-[15px] tracking-wide uppercase mb-1">Navigation</h3>
        <a href="./index.php" class="text-white/65 hover:text-dreizack-gold text-[14.5px] transition-colors w-fit">Home</a>
        <a href="./aboutus.php" class="text-white/65 hover:text-dreizack-gold text-[14.5px] transition-colors w-fit">About Us</a>

        <!-- Products -->
        <div class="flex flex-col gap-2 mt-1">
          <span class="text-white/85 font-heading font-semibold text-[14.5px]">Products</span>
          <a href="./aluminiumProducts.php" class="text-white/65 hover:text-dreizack-gold text-[14px] transition-colors w-fit pl-3">Aluminium Formwork</a>
          <a href="./product-safety-screen.php" class="text-white/65 hover:text-dreizack-gold text-[14px] transition-colors w-fit pl-3">Safety Screen</a>
        </div>

        <!-- Services -->
        <div class="flex flex-col gap-2 mt-1">
          <span class="text-white/85 font-heading font-semibold text-[14.5px]">Services</span>
          <a href="./service-refurbishment-program.php" class="text-white/65 hover:text-dreizack-gold text-[14px] transition-colors w-fit pl-3">Refurbishment Program</a>
          <a href="./service-formwork-redesigning.php" class="text-white/65 hover:text-dreizack-gold text-[14px] transition-colors w-fit pl-3">Formwork Re-designing</a>
        </div>

        <a href="./contactUs.php" class="text-white/65 hover:text-dreizack-gold text-[14.5px] transition-colors w-fit mt-1">Contact Us</a>
      </div>

      <!-- Contact -->
      <div class="flex flex-col gap-3">
        <h3 class="font-heading font-bold text-white text-[15px] tracking-wide uppercase mb-1">Get In Touch</h3>

        <div>
          <p class="text-dreizack-gold text-[13px] font-semibold tracking-wide uppercase mb-1">Head Office</p>
          <p class="text-white/65 text-[14.5px] leading-relaxed">
            Dreizack Formwork Solutions LLP Gami Industrial Park, Plot No - C-39, Unit No.68, 5th floor, B1 wing, Pawne MIDC, Navi Mumbai 400710, Maharashtra, India
          </p>
        </div>

        <div class="mt-1">
          <p class="text-dreizack-gold text-[13px] font-semibold tracking-wide uppercase mb-1">Manufacturing</p>
          <p class="text-white/65 text-[14.5px] leading-relaxed">
            Gat No.1540/1419, Shelarwasti, Talawade, Chinchwad, Pune - 411062, Maharashtra, India
          </p>
        </div>

        <a href="tel:+911234567890" class="text-white/65 hover:text-dreizack-gold text-[14.5px] transition-colors w-fit">+91 9082007056</a>
        <a href="mailto:info@dreizack.com" class="text-white/65 hover:text-dreizack-gold text-[14.5px] transition-colors w-fit">project@dreizackinc.com</a>
      </div>

    </div>

    <!-- Divider -->
    <div class="border-t border-white/10 mt-12 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
      <p class="text-white/50 text-[13px]">
        &copy; 2026 Dreizack. All rights reserved.
      </p>
      <p class="text-white/50 text-[13px]">
        Created and designed by
        <span class="text-dreizack-gold font-semibold">Twinkle Media Hub Pvt Ltd</span>
      </p>
    </div>

  </div>
</footer>
</body>
</html>