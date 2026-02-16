<?php
// navbar.php - Full reusable header for all pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Tailwind + your custom config -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-dark": "#0b5cb5",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2632",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "md": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    <style>
        html {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-900 antialiased font-display">

<!-- ============================================= -->
<!--               FULL NAVBAR / HEADER            -->
<!-- ============================================= -->
<header class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/90 backdrop-blur-lg shadow-sm">
  <div class="mx-auto max-w-[1440px] px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 md:h-18 items-center justify-between">

      <!-- Logo + Mobile Hamburger -->
      <div class="flex items-center gap-4 lg:gap-8">
        <button 
          id="mobile-menu-btn"
          class="lg:hidden text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary rounded-lg p-2"
          aria-label="Toggle menu"
          aria-expanded="false"
        >
          <span class="material-symbols-outlined text-3xl">menu</span>
        </button>

        <a href="/" class="flex items-center gap-3 group">
          <div class="bg-primary p-2 rounded-xl text-white shadow-sm transition-transform group-hover:scale-105">
            <img src="'/assets/logo.png" alt="">
          </div>
          <h1 class="text-xl md:text-2xl font-extrabold tracking-tight text-gray-900">
            Snave Army
          </h1>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-center gap-8">
        <a href="/index.php" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors">Home</a>
        <a href="/index.php/#products" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors">Categories</a>
        <a href="/product_list.php" class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors">Products</a>
        <a href="/about.php"        class="text-sm font-semibold text-gray-700 hover:text-primary transition-colors">About us</a>
      </nav>

      <!-- Right Side: Search + Icons + Profile -->
      <div class="flex items-center gap-3 md:gap-6">
        <!-- Search (desktop) -->
        <div class="relative hidden md:block w-64 lg:w-80">
          <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl pointer-events-none">search</span>
          <input 
            type="search" 
            placeholder="Search products, brands..." 
            class="w-full rounded-full bg-gray-100/80 border border-gray-200 pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary/50 transition-all"
          />
        </div>

        <!-- Mobile search icon -->
        <button class="md:hidden text-gray-700 hover:text-primary transition-colors p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Search">
          <span class="material-symbols-outlined text-2xl">search</span>
        </button>

        <!-- Cart -->
        <a href="/cart" class="relative text-gray-700 hover:text-primary transition-colors p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Shopping cart">
          <span class="material-symbols-outlined text-2xl">shopping_cart</span>
          <span class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-primary text-[10px] font-bold text-white">
            0
          </span>
        </a>

        <!-- Notifications -->
        <button class="relative text-gray-700 hover:text-primary transition-colors p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Notifications">
          <span class="material-symbols-outlined text-2xl">notifications</span>
          <span class="absolute -top-1 -right-1 h-3 w-3 rounded-full bg-red-500"></span>
        </button>

        <!-- User Profile (Frank) -->
        <a href="/account" class="flex items-center gap-2 rounded-full p-1 pr-2 hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-primary" aria-label="Account">
          <div 
            class="h-9 w-9 rounded-full bg-cover bg-center border-2 border-white shadow-sm"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAOMGxqfRoS1XMt2azQD5wtirGPQr7dbx1O9ZQfpYCYgAG_8hNyoB9PDPQ68zVRw9Zs-kgFoihSbevSqMX4fTGE8brGclQ_Ao_Lmh0g-K3Sx2Q1IYyPfvVEzMNczxcwS7hO6Labxn7I9y0lvyyunDiwJ_6leJctoTWjs1bMYSJXMOpeF5oDzHUob814lw-f3yx-EOnZyi1PinPZxcVeE1TtmMDM-a0dk0uDrjvGzHgYo8W_m4O3rif0H9Y0KEPrRU5iUC6le3-DCzU');"
          ></div>
          <span class="hidden md:inline text-sm font-medium text-gray-700">Frank</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200 shadow-lg">
    <nav class="flex flex-col px-5 py-6 gap-5 text-base">
      <a href="/electronics" class="font-medium text-gray-800 hover:text-primary py-2">Electronics</a>
      <a href="/phones"      class="font-medium text-gray-800 hover:text-primary py-2">Phones</a>
      <a href="/cars"        class="font-medium text-gray-800 hover:text-primary py-2">Cars</a>
      <a href="/accessories" class="font-medium text-gray-800 hover:text-primary py-2">Accessories</a>
      <hr class="my-3 border-gray-200">
      <a href="/account"     class="font-medium text-gray-800 hover:text-primary py-2">My Account</a>
      <a href="/cart"        class="font-medium text-gray-800 hover:text-primary py-2">Cart</a>
      <a href="/orders"      class="font-medium text-gray-800 hover:text-primary py-2">Orders</a>
    </nav>
  </div>
</header>

<!-- Mobile menu toggle script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    
    if (btn && menu) {
      btn.addEventListener('click', function() {
        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
        menu.classList.toggle('hidden');
        btn.setAttribute('aria-expanded', !isExpanded);
        btn.querySelector('span').textContent = isExpanded ? 'menu' : 'close';
      });
    }
  });
</script>

<!-- ============================================= -->
<!--   End of navbar.php - content goes after this   -->
<!-- ============================================= -->