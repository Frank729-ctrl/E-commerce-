<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>About Us | Snave Army - Premium Electronics &amp; Vehicles</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-white text-[#111318] antialiased">
    <!-- Top Navigation Bar -->
    <?php include __DIR__ . '/includes/navbar.php';?>


    <main>
    <!-- Section 1: Hero Section -->
    <section class="relative pt-24 pb-32 px-6 overflow-hidden">
    <div class="max-w-4xl mx-auto text-center space-y-8">
    <div class="inline-flex items-center px-3 py-1 rounded-full bg-primary/5 border border-primary/10 text-primary text-xs font-bold tracking-widest uppercase">
                        Excellence Defined
                    </div>
    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter text-[#111318] leading-[1.1]">
                        Designed for Simplicity. <br/>
    <span class="text-gray-400">Delivered with Trust.</span>
    </h1>
    <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed font-light">
                        Premium electronics, high-end phones, and luxury vehicles curated for those who value quality and absolute reliability above all else.
                    </p>
    <div class="pt-6">
    <button onclick="window.location.href='product_list'" class="bg-[#111318] text-white px-8 py-4 rounded-xl text-lg font-semibold hover:bg-gray-800 transition-all shadow-xl shadow-black/5 flex items-center gap-2 mx-auto">
                            Explore Our Store
                            <span class="material-symbols-outlined">arrow_forward</span>
    </button>
    </div>
    </div>
    </section>
    <!-- Section 2: About Section -->
    <section class="py-24 px-6 bg-[#f9fafb]">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
    <div class="space-y-6">
    <h2 class="text-3xl font-bold tracking-tight text-[#111318]">About Snave Army</h2>
    <p class="text-lg text-gray-600 leading-relaxed">
                            At Snave Army, we believe that luxury is found in the details. Our platform is built on the pillars of transparency and absolute reliability, providing a seamless bridge between premium products and discerning clients.
                        </p>
    <p class="text-lg text-gray-600 leading-relaxed">
                            Since our inception, we have curated a collection that speaks to sophistication. We don't just sell products; we deliver peace of mind through a meticulously vetted ecosystem of luxury electronics and high-performance vehicles.
                        </p>
    </div>
    <div class="relative aspect-square md:aspect-video rounded-3xl overflow-hidden shadow-2xl">
    <img alt="Luxury Lifestyle" class="w-full h-full object-cover" data-alt="Minimalist high-end workspace with luxury tech" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD30GmSZmtf3YvDc0-zMdtoNoR8GtW2LbjCFq50wCowC4IxH_LtoC1X-DdUYx693uTLYVOWRYVJVkpqi2yzK1rlAVwEepDvCQIMBml3s0XMxW9gnxV6FMl3DotGbPpmX4TavS0nyVD_nHRRbvCOe1uk83SQSA0B6xubU3MkO3wZwTIFx6fg5ZtlGsMprFyxpdW_K3LZE8TJu4O1AkNsYJ8nF1YA4ZRhiZWNqtUXjLfN3C8sUlS0ZIXKtTDas3avJybIw6KAVyZCafE"/>
    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
    </div>
    </div>
    </section>
    <!-- Section 3: Commitment (4 Cards) -->
    <section class="py-32 px-6">
    <div class="max-w-7xl mx-auto">
    <div class="text-center mb-20 space-y-4">
    <h2 class="text-4xl font-bold tracking-tight">Our Commitment</h2>
    <p class="text-gray-500">The core values that drive every transaction.</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
    <!-- Card 1 -->
    <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover-lift space-y-4">
    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
    <span class="material-symbols-outlined">verified</span>
    </div>
    <h3 class="text-xl font-bold">Selected Quality</h3>
    <p class="text-gray-500 text-sm leading-relaxed">Every item in our inventory undergoes a rigorous multi-point inspection to ensure it meets our elite standards.</p>
    </div>
    <!-- Card 2 -->
    <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover-lift space-y-4">
    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
    <span class="material-symbols-outlined">payments</span>
    </div>
    <h3 class="text-xl font-bold">Transparent Pricing</h3>
    <p class="text-gray-500 text-sm leading-relaxed">No hidden fees or surprises. We believe in honest, straightforward pricing that reflects true market value.</p>
    </div>
    <!-- Card 3 -->
    <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover-lift space-y-4">
    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
    <span class="material-symbols-outlined">local_shipping</span>
    </div>
    <h3 class="text-xl font-bold">Flexible Delivery</h3>
    <p class="text-gray-500 text-sm leading-relaxed">Choose the logistics path that suits your schedule, from white-glove delivery to priority shipping.</p>
    </div>
    <!-- Card 4 -->
    <div class="p-8 rounded-2xl bg-white border border-gray-100 shadow-sm hover-lift space-y-4">
    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
    <span class="material-symbols-outlined">support_agent</span>
    </div>
    <h3 class="text-xl font-bold">Reliable Support</h3>
    <p class="text-gray-500 text-sm leading-relaxed">Our dedicated team of luxury specialists is available to assist you throughout your journey with us.</p>
    </div>
    </div>
    </div>
    </section>
    <!-- Section 4: Delivery Options -->
    <section class="py-24 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-8">
    <div class="relative group overflow-hidden rounded-3xl p-12 min-h-[400px] flex flex-col justify-end text-white">
    <img alt="Logistics" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Modern logistics and shipping containers" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7PSEqD-jV8TyjNo1meGIvRCQcbkjauuQmGNFwHxYPrmQ-p1ZOTjv0sJyd4xBtXiWfEF8_dT_UWJbR9s7g6uk0LEX1aJ-f4mdDMMbaYpK6YNCFnNUvsEAzlBXvxo66zLwM0CSLquswYdw6PoMhrqQUMofOq_GHdg8pHyTQuWiJW-f42t1kEFdE7Rbuvy_kbcSwd29cbiUGRdHQUZ9fZ4mx4DlyClldIMMuAeO6LfsuOBF5pWh42booF8ZVm8gYYTvsBuRuSHD-9QI"/>
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    <div class="relative space-y-4">
    <h3 class="text-3xl font-bold">Customer-Arranged Logistics</h3>
    <p class="text-gray-200 max-w-sm">Take complete control of your acquisition. We coordinate with your preferred shipping partners for a seamless handover.</p>
    <a class="inline-flex items-center gap-2 text-sm font-semibold hover:underline" href="#">Learn more <span class="material-symbols-outlined text-xs">open_in_new</span></a>
    </div>
    </div>
    <div class="relative group overflow-hidden rounded-3xl p-12 min-h-[400px] flex flex-col justify-end text-white">
    <img alt="Pickup" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Clean minimalist pickup location or storefront" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAc83Gu7YZmoha2V3dcJP1FpP4XkduiBmrLM9Tc6axWiu8bLOzhgqM6YDsNk-9PW7Cn3L3YZntc19euZdyrqXtDSMz-0befuZpUroH0gJ2zy4tAH2k-5r0IEjPxYl7Jutkc8b2yJFR6u2gHojjhLy4BgYeJndHVmGkIgJt-pmDrOrD1M5oZDMW2ycZApb1utONhMMgbKhWL6EUCbrT-jG6ph5Q3HKZ3itsrdtMzs3ELe-53ZvKSb4JBr3JMc5icKXiYdTzpqWx_ggo"/>
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
    <div class="relative space-y-4">
    <h3 class="text-3xl font-bold">Pickup Option</h3>
    <p class="text-gray-200 max-w-sm">Experience the product first-hand. Schedule a private viewing and personal pickup at one of our secure partner locations.</p>
    <a class="inline-flex items-center gap-2 text-sm font-semibold hover:underline" href="#">View locations <span class="material-symbols-outlined text-xs">location_on</span></a>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Section 5: Vision Block -->
    <section class="py-32 px-6">
    <div class="max-w-4xl mx-auto bg-primary/5 rounded-[3rem] p-16 md:p-24 text-center border border-primary/10">
    <div class="material-symbols-outlined text-primary text-5xl mb-8">visibility</div>
    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-[#111318] mb-8 leading-tight">
                        Our vision is to build a trusted brand known for reliability, simplicity, and premium service.
                    </h2>
    <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
    </div>
    </section>
    </main>
    <!-- Footer -->
    <?php include __DIR__.'/includes/footer.php';?>
</body></html>