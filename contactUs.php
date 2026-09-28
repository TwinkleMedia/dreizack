<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <?php 
include "./navbar.php"
?>

  <!-- Hero Section -->
  <section
    class="relative w-full min-h-[220px] sm:min-h-[280px] md:min-h-[320px] lg:min-h-[360px] flex items-center justify-center bg-cover bg-center bg-no-repeat"
    style="background-image: url('https://images.unsplash.com/photo-1541976590-713941681591?q=80&w=1920&auto=format&fit=crop');"
  >
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-slate-900/60"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-4 sm:px-6">
      <h1 class="text-white font-extrabold tracking-wide text-3xl sm:text-4xl md:text-5xl">
       Contact Us
      </h1>

      <div class="mt-3 sm:mt-4 flex items-center justify-center gap-2 text-sm sm:text-base text-white/90">
        <a href="#" class="flex items-center gap-1.5 hover:text-white transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 sm:w-5 sm:h-5">
            <path d="M11.47 3.84a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.06l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.69Z" />
            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
          </svg>
          <span>Home</span>
        </a>
        <span class="text-white/60">/</span>
        <span>Contact Us</span>
      </div>
    </div>
  </section>


  <!-- ============ CONTACT US ============ -->
<section class="relative bg-[#f7f8f6]">
  <div class="max-w-[1240px] mx-auto px-6 sm:px-8 py-16 lg:py-24">

    <div class="max-w-xl mb-12 lg:mb-14">
      <p class="text-dreizack-green text-[13px] font-heading font-bold tracking-wide uppercase mb-3">Contact Us</p>
      <h2 class="font-heading font-extrabold text-dreizack-dark text-[32px] sm:text-[40px] leading-[1.1] mb-4">
        Let's talk about your project
      </h2>
      <p class="text-[#3d4a44] text-[15.5px] leading-relaxed">
        Reach out for a quote, technical query, or site consultation — our team
        typically responds within one business day.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-10">

      <!-- LEFT: Contact form -->
      <div class="lg:col-span-3 bg-white border border-dreizack-dark/10 rounded-2xl p-7 sm:p-9">
        <form class="grid grid-cols-1 sm:grid-cols-2 gap-5" onsubmit="return false;">

          <div class="flex flex-col gap-2">
            <label for="cf-name" class="font-heading font-semibold text-[13.5px] text-dreizack-dark">Full Name</label>
            <input type="text" id="cf-name" name="name" placeholder="Your name" required
              class="w-full px-4 py-3 rounded-lg border border-dreizack-dark/15 text-[14.5px] text-dreizack-dark placeholder:text-dreizack-dark/40
                     focus:outline-none focus:ring-2 focus:ring-dreizack-green/40 focus:border-dreizack-green transition-colors">
          </div>

          <div class="flex flex-col gap-2">
            <label for="cf-phone" class="font-heading font-semibold text-[13.5px] text-dreizack-dark">Phone Number</label>
            <input type="tel" id="cf-phone" name="phone" placeholder="+91 00000 00000" required
              class="w-full px-4 py-3 rounded-lg border border-dreizack-dark/15 text-[14.5px] text-dreizack-dark placeholder:text-dreizack-dark/40
                     focus:outline-none focus:ring-2 focus:ring-dreizack-green/40 focus:border-dreizack-green transition-colors">
          </div>

          <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="cf-email" class="font-heading font-semibold text-[13.5px] text-dreizack-dark">Email Address</label>
            <input type="email" id="cf-email" name="email" placeholder="you@company.com" required
              class="w-full px-4 py-3 rounded-lg border border-dreizack-dark/15 text-[14.5px] text-dreizack-dark placeholder:text-dreizack-dark/40
                     focus:outline-none focus:ring-2 focus:ring-dreizack-green/40 focus:border-dreizack-green transition-colors">
          </div>

          <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="cf-subject" class="font-heading font-semibold text-[13.5px] text-dreizack-dark">Subject</label>
            <select id="cf-subject" name="subject"
              class="w-full px-4 py-3 rounded-lg border border-dreizack-dark/15 text-[14.5px] text-dreizack-dark bg-white
                     focus:outline-none focus:ring-2 focus:ring-dreizack-green/40 focus:border-dreizack-green transition-colors">
              <option value="">Select an option</option>
              <option value="quote">Request a Quote</option>
              <option value="product">Product Enquiry</option>
              <option value="service">Refurbishment / Re-designing</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="flex flex-col gap-2 sm:col-span-2">
            <label for="cf-message" class="font-heading font-semibold text-[13.5px] text-dreizack-dark">Message</label>
            <textarea id="cf-message" name="message" rows="5" placeholder="Tell us about your project..." required
              class="w-full px-4 py-3 rounded-lg border border-dreizack-dark/15 text-[14.5px] text-dreizack-dark placeholder:text-dreizack-dark/40 resize-none
                     focus:outline-none focus:ring-2 focus:ring-dreizack-green/40 focus:border-dreizack-green transition-colors"></textarea>
          </div>

          <div class="sm:col-span-2">
            <button type="submit"
              class="inline-flex items-center gap-2 font-heading font-bold text-[14.5px] text-white px-7 py-3.5 rounded-lg
                     bg-gradient-to-br from-dreizack-dark to-dreizack-green
                     shadow-[0_6px_16px_-6px_rgba(0,72,45,0.45)]
                     hover:-translate-y-0.5 hover:shadow-[0_10px_22px_-6px_rgba(0,72,45,0.55)] hover:brightness-105
                     transition-all duration-200">
              Send Message
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
            </button>
          </div>

        </form>
      </div>

      <!-- RIGHT: Contact info -->
      <div class="lg:col-span-2 flex flex-col gap-5">

        <!-- Phone -->
        <div class="flex items-start gap-4 bg-white border border-dreizack-dark/10 rounded-2xl p-6">
          <div class="w-12 h-12 shrink-0 rounded-xl bg-dreizack-dark flex items-center justify-center">
            <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-heading font-bold text-dreizack-dark text-[15.5px] mb-1">Call Us</h3>
            <a href="tel:+910000000000" class="block text-[#5a655f] text-[14px] hover:text-dreizack-green transition-colors">+91 9082007056</a>
          </div>
        </div>

        <!-- Email -->
        <div class="flex items-start gap-4 bg-white border border-dreizack-dark/10 rounded-2xl p-6">
          <div class="w-12 h-12 shrink-0 rounded-xl bg-dreizack-dark flex items-center justify-center">
            <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="4" width="20" height="16" rx="2"></rect>
              <path d="m22 6-10 7L2 6"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-heading font-bold text-dreizack-dark text-[15.5px] mb-1">Email Us</h3>
            <a href="mailto:info@dreizack.com" class="block text-[#5a655f] text-[14px] hover:text-dreizack-green transition-colors">project@dreizackinc.com</a>
          </div>
        </div>

        <!-- Address -->
        <div class="flex items-start gap-4 bg-white border border-dreizack-dark/10 rounded-2xl p-6">
          <div class="w-12 h-12 shrink-0 rounded-xl bg-dreizack-dark flex items-center justify-center">
            <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div>
            <h3 class="font-heading font-bold text-dreizack-dark text-[15.5px] mb-1">Head Office</h3>
            <p class="text-[#5a655f] text-[14px] leading-relaxed">
              Dreizack Formwork Solutions LLP Gami Industrial Park, Plot No - C-39, Unit No.68, 5th floor, B1 wing, Pawne MIDC,<br>
              Navi Mumbai 400710, Maharashtra, India,
            </p>
          </div>
        </div>

        <div class="flex items-start gap-4 bg-white border border-dreizack-dark/10 rounded-2xl p-6">
          <div class="w-12 h-12 shrink-0 rounded-xl bg-dreizack-dark flex items-center justify-center">
            <svg class="w-5 h-5 text-dreizack-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div>
            <h3 class="font-heading font-bold text-dreizack-dark text-[15.5px] mb-1">Manufacturing HQ</h3>
            <p class="text-[#5a655f] text-[14px] leading-relaxed">
              Gat No.1540/1419, Shelarwasti, Talawade, Chinchwad, Pune - 411062, Maharashtra, India
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- Google Map -->
    <div class="mt-8 lg:mt-10 rounded-2xl overflow-hidden border border-dreizack-dark/10 shadow-[0_20px_40px_-24px_rgba(0,72,45,0.25)]">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6930.228828671149!2d73.07069338353288!3d19.163670897823362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bfc5718c2783%3A0xe8ac62181766ad12!2sDreizack%20Formwork%20Solutions!5e1!3m2!1sen!2sin!4v1790576560102!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>

  </div>
</section>

<?php 

include "footer.php"
?>
    
</body>
</html>