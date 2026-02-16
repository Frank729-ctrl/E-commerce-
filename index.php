<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Snave Army</title>
  <meta name="description" content="Buy, swap, and pay for iPhones and accessories in installments. QuaBuy Ghana makes premium gadgets affordable." />


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
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
        /* Custom scrollbar hiding */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        html {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
    <?php include 'includes/navbar.php'?>

        <section class="relative bg-gradient-to-br from-primary via-primary-dark to-[#0950c0] text-white overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1556740714-a8395b3a74dd?w=1200')] bg-cover bg-center opacity-10"></div>
                
                <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-28 lg:py-40">
                    <div class="max-w-3xl">
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-tight tracking-tight mb-8">
                            Buy Now,<br class="sm:hidden"> Pay Small-Small
                        </h1>
                        <p class="text-xl sm:text-2xl mb-10 text-blue-100 font-light">
                            Phones • Cars • Electronics • up to 12 months installment
                        </p>

                        <div class="flex flex-col sm:flex-row gap-5">
                            <a href="#products" class="btn-primary text-center text-lg">Browse Products</a>
                            <a href="#how" class="bg-white/10 backdrop-blur-sm border border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:bg-white/20 transition-all text-center text-lg">How It Works</a>
                        </div>

                        <div class="mt-12 flex items-center gap-8 text-sm opacity-90">
                            <div>✓ No hidden fees</div>
                            <div>✓ Fast approval</div>
                            <div>✓ Nationwide delivery</div>
                        </div>
                    </div>
                </div>
            </section>

  <!-- Products -->
 <!-- Products / Main Categories -->
<section id="products" class="py-20 md:py-28 bg-gradient-to-b from-neutral-50 to-white">
  <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
    
    <!-- Section heading - centered and punchy -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
        Main Categories
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Quality products you want today — with flexible small-small payments that fit your budget
      </p>
    </div>

    <!-- Cards container - centered with flex -->
    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-8 md:gap-12">
      
      <!-- Card 1 -->
      <div class="w-full sm:w-5/12 lg:w-4/12 bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
        <div class="h-64 bg-gradient-to-br from-blue-50 to-blue-100 relative flex items-center justify-center p-8">
          <img 
            src="assets/iphone.png" 
            alt="Smartphones & Electronics" 
            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
          />
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
            Electronics
          </h3>
          <p class="text-primary text-2xl font-extrabold mb-2">
            From GHS 450 / month
          </p>
          <p class="text-gray-600 text-lg">
            Latest smartphones, laptops, earbuds & gadgets
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="w-full sm:w-5/12 lg:w-4/12 bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
        <div class="h-64 bg-gradient-to-br from-slate-50 to-slate-100 relative flex items-center justify-center p-8">
          <img 
            src="assets/watch.png" 
            alt="Vehicles & Cars" 
            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105"
          />
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
            Vehicles
          </h3>
          <p class="text-primary text-2xl font-extrabold mb-2">
            From GHS 1,800 / month
          </p>
          <p class="text-gray-600 text-lg">
            EVs, Saloons, SUVs, Manuals & Automatics
          </p>
        </div>
      </div>

    </div>

    <!-- Optional: hint at more categories coming -->
    <div class="text-center mt-16">
      <p class="text-gray-500 text-lg">
        More categories coming soon • Laptops • Home Appliances • Generators • ...
      </p>
    </div>

  </div>
</section>

  <!-- Services -->
  <section id="services" class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4">
      <h3 class="text-3xl font-bold text-center mb-12">Our Services</h3>
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="p-6 rounded-xl bg-gray-50">
          <h4 class="font-semibold mb-2">Installment Sales</h4>
          <p>Pay over 3–9 months with ease.</p>
        </div>
        <div class="p-6 rounded-xl bg-gray-50">
          <h4 class="font-semibold mb-2">Swap & Trade-In</h4>
          <p>Exchange old devices for new ones.</p>
        </div>
        <div class="p-6 rounded-xl bg-gray-50">
          <h4 class="font-semibold mb-2">Repairs</h4>
          <p>Professional iPhone repairs.</p>
        </div>
        <div class="p-6 rounded-xl bg-gray-50">
          <h4 class="font-semibold mb-2">Accessories</h4>
          <p>Chargers, cases, AirPods & more.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-blue-600 text-white text-center py-16">
    <h3 class="text-3xl font-bold mb-4">Ready to Own an iPhone?</h3>
    <p class="mb-6">Start paying small-small today.</p>
    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold">Contact Us</a>
  </section>

  <!-- footer -->
   <?php include 'includes/footer.php'?>
   
</body>
</html>