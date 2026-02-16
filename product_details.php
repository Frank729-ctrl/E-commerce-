<!DOCTYPE html>
<html class="light" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Snave Army Special Edition – Snave Army</title>
  <meta name="description" content="Premium tactical-grade equipment built for performance and durability. Request yours today."/>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

  <!-- Material Symbols -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#1152d4",
            "primary-dark": "#0b4295",
            "background-light": "#f6f6f8",
            "background-dark": "#101622",
          },
          fontFamily: {
            display: ["Inter", "sans-serif"]
          },
          borderRadius: {
            DEFAULT: "0.25rem",
            lg: "0.5rem",
            xl: "0.75rem",
            "2xl": "1rem",
            full: "9999px"
          },
        },
      },
    }
  </script>

  <style>
    body { font-family: 'Inter', sans-serif; }
    .thumb-active { 
      border-color: #1152d4 !important; 
      box-shadow: 0 0 0 3px rgba(17, 82, 212, 0.2);
    }
    @media (max-width: 1023px) {
      .sticky-cta {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 50;
        background: white;
        border-top: 1px solid #e5e7eb;
        padding: 1rem;
        box-shadow: 0 -4px 10px rgba(0,0,0,0.08);
      }
      .dark .sticky-cta {
        background: #101622;
        border-top-color: #1f2937;
        box-shadow: 0 -4px 10px rgba(0,0,0,0.4);
      }
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111318] dark:text-gray-100 antialiased min-h-screen">

  <!-- Navbar -->
<?php include 'includes/navbar.php'?>

  <main class="max-w-7xl mx-auto w-full px-5 sm:px-6 lg:px-8 py-8 md:py-12">
    <!-- Breadcrumbs -->
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400 mb-6 md:mb-8">
      <a href="/" class="hover:text-primary transition-colors">Home</a>
      <span class="material-symbols-outlined text-xs">chevron_right</span>
      <a href="/catalog" class="hover:text-primary transition-colors">Catalog</a>
      <span class="material-symbols-outlined text-xs">chevron_right</span>
      <span class="font-medium text-[#111318] dark:text-white">Snave Army Special Edition</span>
    </nav>

    <div class="flex flex-col lg:flex-row gap-10 lg:gap-16">
      <!-- Image Gallery -->
      <div class="lg:w-1/2 space-y-5 lg:sticky lg:top-24 lg:self-start">
        <!-- Main Image -->
        <div class="aspect-[4/5] w-full rounded-2xl overflow-hidden bg-gray-100 dark:bg-gray-800 shadow-xl border border-gray-200 dark:border-gray-700">
          <div id="main-image" 
               class="w-full h-full bg-center bg-no-repeat bg-cover transition-transform duration-700 hover:scale-[1.03]"
               style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCBT5wVbghIbDm_iOeyXOhvsNgOBLNDsCRowxqO0lH-vQl4fyfU6NJLeljHs-H4K7zKYuKi18nkYenoKgda97x_B1Uz7GV5o84fjXCyWwZvuyQDWsNzygMmSu4YD3fU3Pv-PS-iFJDQQ-aQP2KFz_E74P4AdRoRDaDxrWzwIRX3eL-4322E6XPKjqJ2xvAWALvAg46nfBzjL8JCjO8kvtZs4P-FN0stCQP21nvNPgu-w0S5Ak8S924M7VvM5Axj2JP8ivO-iGtejZc');">
          </div>
        </div>

        <!-- Thumbnails -->
        <div class="grid grid-cols-4 gap-3 sm:gap-4">
          <button class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-primary cursor-pointer transition-all hover:opacity-90 thumb-active" 
                  data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuCBT5wVbghIbDm_iOeyXOhvsNgOBLNDsCRowxqO0lH-vQl4fyfU6NJLeljHs-H4K7zKYuKi18nkYenoKgda97x_B1Uz7GV5o84fjXCyWwZvuyQDWsNzygMmSu4YD3fU3Pv-PS-iFJDQQ-aQP2KFz_E74P4AdRoRDaDxrWzwIRX3eL-4322E6XPKjqJ2xvAWALvAg46nfBzjL8JCjO8kvtZs4P-FN0stCQP21nvNPgu-w0S5Ak8S924M7VvM5Axj2JP8ivO-iGtejZc">
            <div class="w-full h-full bg-center bg-cover" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCBT5wVbghIbDm_iOeyXOhvsNgOBLNDsCRowxqO0lH-vQl4fyfU6NJLeljHs-H4K7zKYuKi18nkYenoKgda97x_B1Uz7GV5o84fjXCyWwZvuyQDWsNzygMmSu4YD3fU3Pv-PS-iFJDQQ-aQP2KFz_E74P4AdRoRDaDxrWzwIRX3eL-4322E6XPKjqJ2xvAWALvAg46nfBzjL8JCjO8kvtZs4P-FN0stCQP21nvNPgu-w0S5Ak8S924M7VvM5Axj2JP8ivO-iGtejZc');"></div>
          </button>

          <button class="thumb-btn aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-primary/60 cursor-pointer transition-all" 
                  data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuDojMHwLZO9DvBlQiz6iYogR0em_96FhdX4Q2fFbZDnRB7k25NV_d2y6f2uqSJuclWeJNCi2wqcclvIQ8bND_zbPWFyRQ0mzgPJqcWAphBVkshcQbd1CMCz8GBUFWFzj47HaSuyaWzCuxu1kkVJWs9HpNd9zYhX0MpkjFh89xG7P2UxU2igEEmWySGgbSE0k_ziFh8HU3EhIOclrnCQQN_dM9JY9HOpDvm1FM9lV_YU2rYQwEpBMLIE7PWddz9kzfwFEj2AXNAyRk4">
            <div class="w-full h-full bg-center bg-cover" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDojMHwLZO9DvBlQiz6iYogR0em_96FhdX4Q2fFbZDnRB7k25NV_d2y6f2uqSJuclWeJNCi2wqcclvIQ8bND_zbPWFyRQ0mzgPJqcWAphBVkshcQbd1CMCz8GBUFWFzj47HaSuyaWzCuxu1kkVJWs9HpNd9zYhX0MpkjFh89xG7P2UxU2igEEmWySGgbSE0k_ziFh8HU3EhIOclrnCQQN_dM9JY9HOpDvm1FM9lV_YU2rYQwEpBMLIE7PWddz9kzfwFEj2AXNAyRk4');"></div>
          </button>

          <!-- Add more thumbnails here if you have them -->
        </div>
      </div>

      <!-- Product Details -->
      <div class="lg:w-1/2 flex flex-col">
        <div class="pb-8 border-b border-gray-200 dark:border-gray-700">
          <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-2">
            Snave Army Special Edition
          </h1>
          <p class="text-sm text-gray-500 dark:text-gray-400 uppercase font-semibold tracking-wider">
            SKU: SA-2023-V01 • Limited Collector's Release
          </p>
        </div>

        <div class="my-8">
          <div class="flex flex-wrap items-baseline gap-4">
            <span class="text-5xl font-black text-primary">$129.00</span>
            <span class="text-2xl text-gray-500 dark:text-gray-400 line-through opacity-80">$159.00</span>
            <span class="text-lg font-medium text-green-600 dark:text-green-400">Save 19%</span>
          </div>
          <p class="mt-3 text-base font-medium text-gray-700 dark:text-gray-300">
            or from ~<strong class="text-primary">GHS 450 / month</strong> • 6–12 months installment available
          </p>
        </div>

        <div class="space-y-8 mb-12">
          <div>
            <h3 class="text-lg font-bold uppercase tracking-wider text-gray-900 dark:text-white mb-4">Description</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-lg">
              Engineered for the modern veteran, the Snave Army Special Edition combines rugged tactical durability with professional urban aesthetics. Featuring weather-resistant polymers, reinforced structural stitching, and military-grade hardware, this limited-release piece is built to perform in demanding environments while delivering a sleek, minimalist profile.
            </p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex items-center gap-4 p-4 bg-gray-50 dark:bg-gray-800/40 rounded-xl">
              <span class="material-symbols-outlined text-primary text-3xl">verified</span>
              <span class="font-medium">Certified Professional Grade</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-gray-50 dark:bg-gray-800/40 rounded-xl">
              <span class="material-symbols-outlined text-primary text-3xl">package_2</span>
              <span class="font-medium">Limited Collection Release</span>
            </div>
            <div class="flex items-center gap-4 p-4 bg-gray-50 dark:bg-gray-800/40 rounded-xl">
              <span class="material-symbols-outlined text-primary text-3xl">local_shipping</span>
              <span class="font-medium">Nationwide delivery in 2–5 days</span>
            </div>
          </div>
        </div>

        <!-- Sticky CTA (mobile) + normal CTA (desktop) -->
        <div class="sticky-cta lg:static lg:mt-auto">
          <div class="space-y-4 max-w-3xl mx-auto lg:max-w-none">
            <button class="w-full bg-primary hover:bg-primary-dark text-white font-bold text-lg py-5 rounded-xl transition-all shadow-xl shadow-primary/25 flex items-center justify-center gap-3 active:scale-[0.98]">
              <span class="material-symbols-outlined text-2xl">send</span>
              REQUEST THIS ITEM
            </button>

            <div class="flex items-center justify-center gap-3 py-3 px-5 bg-gray-100 dark:bg-gray-800/60 rounded-xl text-base font-medium text-gray-700 dark:text-gray-300">
              <svg class="w-7 h-7 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
              </svg>
              Orders confirmed via WhatsApp
            </div>
          </div>
        </div>

        <!-- Trust Badges -->
        <div class="mt-12 lg:mt-16 grid grid-cols-3 gap-6 border-t border-gray-200 dark:border-gray-700 pt-10">
          <div class="text-center">
            <span class="material-symbols-outlined text-5xl text-primary mb-4 block">verified_user</span>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-600 dark:text-gray-400">Secure Payment</p>
          </div>
          <div class="text-center">
            <span class="material-symbols-outlined text-5xl text-primary mb-4 block">local_shipping</span>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-600 dark:text-gray-400">Fast Delivery</p>
          </div>
          <div class="text-center">
            <span class="material-symbols-outlined text-5xl text-primary mb-4 block">workspace_premium</span>
            <p class="text-sm font-semibold uppercase tracking-wider text-gray-600 dark:text-gray-400">Premium Quality</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabs / More Details -->
    <div class="mt-16 lg:mt-24 border-t border-gray-200 dark:border-gray-700 pt-10">
      <div class="flex gap-8 md:gap-12 border-b border-gray-200 dark:border-gray-700 mb-10 overflow-x-auto pb-1 no-scrollbar">
        <button class="pb-5 px-3 md:px-4 text-base md:text-lg font-bold border-b-4 border-primary text-primary whitespace-nowrap uppercase tracking-wider">Specifications</button>
        <button class="pb-5 px-3 md:px-4 text-base md:text-lg font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white whitespace-nowrap transition-colors uppercase tracking-wider">Materials</button>
        <button class="pb-5 px-3 md:px-4 text-base md:text-lg font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white whitespace-nowrap transition-colors uppercase tracking-wider">Care Instructions</button>
      </div>

      <div class="grid md:grid-cols-2 gap-12">
        <div class="space-y-6">
          <div class="flex justify-between py-4 border-b border-gray-100 dark:border-gray-800">
            <span class="text-base font-medium text-gray-600 dark:text-gray-400">Model Number</span>
            <span class="text-base font-bold text-gray-900 dark:text-white">SN-ARM-23</span>
          </div>
          <div class="flex justify-between py-4 border-b border-gray-100 dark:border-gray-800">
            <span class="text-base font-medium text-gray-600 dark:text-gray-400">Material</span>
            <span class="text-base font-bold text-gray-900 dark:text-white">High-Impact Nylon 600D</span>
          </div>
          <div class="flex justify-between py-4 border-b border-gray-100 dark:border-gray-800">
            <span class="text-base font-medium text-gray-600 dark:text-gray-400">Dimensions</span>
            <span class="text-base font-bold text-gray-900 dark:text-white">45 × 30 × 15 cm</span>
          </div>
          <div class="flex justify-between py-4 border-b border-gray-100 dark:border-gray-800">
            <span class="text-base font-medium text-gray-600 dark:text-gray-400">Weight</span>
            <span class="text-base font-bold text-gray-900 dark:text-white">1.2 kg</span>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-bold uppercase tracking-wider text-gray-900 dark:text-white mb-6">Key Features</h4>
          <ul class="space-y-5 text-gray-600 dark:text-gray-300 text-base">
            <li class="flex items-start gap-4">
              <span class="material-symbols-outlined text-primary text-2xl shrink-0">check_circle</span>
              Anti-abrasion exterior coating
            </li>
            <li class="flex items-start gap-4">
              <span class="material-symbols-outlined text-primary text-2xl shrink-0">check_circle</span>
              Integrated quick-release mechanisms
            </li>
            <li class="flex items-start gap-4">
              <span class="material-symbols-outlined text-primary text-2xl shrink-0">check_circle</span>
              Ergonomic weight distribution system
            </li>
            <li class="flex items-start gap-4">
              <span class="material-symbols-outlined text-primary text-2xl shrink-0">check_circle</span>
              Weather-resistant & reinforced stitching
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'?>
</div>

<!-- JavaScript for thumbnail switching -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const mainImage = document.getElementById('main-image');
    const thumbs = document.querySelectorAll('.thumb-btn');

    thumbs.forEach(thumb => {
      thumb.addEventListener('click', () => {
        const newSrc = thumb.getAttribute('data-img');
        mainImage.style.backgroundImage = `url('${newSrc}')`;

        // Active thumbnail styling
        thumbs.forEach(t => t.classList.remove('thumb-active'));
        thumb.classList.add('thumb-active');
      });
    });

    // Default active state
    thumbs[0]?.classList.add('thumb-active');
  });
</script>

</body>
</html>