<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Snave Army | Product Listing</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        }
        .sidebar-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-scrollbar::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111318] antialiased font-display">
<div class="relative flex min-h-screen flex-col">
<!-- Top Navigation Bar -->
    <?php include 'includes/navbar.php'?>

<main class="mx-auto flex w-full max-w-[1440px] grow gap-8 px-6 md:px-10 lg:px-20 py-8">
<!-- Sidebar / Filter Panel -->
<aside class="hidden lg:flex w-64 flex-col gap-6 sticky top-24 h-[calc(100vh-8rem)]">
<div class="flex items-center justify-between">
<h3 class="text-lg font-bold">Filters</h3>
<button class="text-xs font-semibold text-primary hover:underline">Clear all</button>
</div>
<div class="flex flex-col gap-6 sidebar-scrollbar overflow-y-auto pr-2">
<!-- Category Filter -->
<div class="flex flex-col gap-3">
<p class="text-xs font-bold uppercase tracking-wider text-gray-400">Categories</p>
<div class="flex flex-col gap-1">
<label class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-medium cursor-pointer transition-colors">
<span class="material-symbols-outlined text-xl">grid_view</span>
<span class="text-sm">All Categories</span>
</label>
<label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition-colors">
<span class="material-symbols-outlined text-xl">memory</span>
<span class="text-sm">Electronics</span>
</label>
<label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition-colors">
<span class="material-symbols-outlined text-xl">smartphone</span>
<span class="text-sm">Phones</span>
</label>
<label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition-colors">
<span class="material-symbols-outlined text-xl">directions_car</span>
<span class="text-sm">Cars</span>
</label>
</div>
</div>
<!-- Subcategories -->
<div class="border-t border-gray-200 pt-6">
<details class="group" open="">
<summary class="flex cursor-pointer items-center justify-between list-none">
<span class="text-sm font-bold">Subcategories</span>
<span class="material-symbols-outlined text-gray-400 transition-transform group-open:rotate-180">expand_more</span>
</summary>
<div class="mt-4 flex flex-col gap-2">
<label class="flex items-center gap-2 cursor-pointer">
<input checked="" class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm text-gray-600">Smartphones</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm text-gray-600">Laptops</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm text-gray-600">Audio Gear</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm text-gray-600">SUV Models</span>
</label>
<label class="flex items-center gap-2 cursor-pointer">
<input class="rounded border-gray-300 text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm text-gray-600">Sedans</span>
</label>
</div>
</details>
</div>
<!-- Price Range -->
<div class="border-t border-gray-200 pt-6">
<details class="group" open="">
<summary class="flex cursor-pointer items-center justify-between list-none">
<span class="text-sm font-bold">Price Range</span>
<span class="material-symbols-outlined text-gray-400 transition-transform group-open:rotate-180">expand_more</span>
</summary>
<div class="mt-4 flex flex-col gap-4">
<div class="flex items-center gap-2">
<div class="relative flex-1">
<span class="absolute left-2 top-1/2 -translate-y-1/2 text-gray-400 text-xs">$</span>
<input class="w-full rounded-lg border-gray-200 py-1.5 pl-5 pr-2 text-sm focus:ring-primary/20" placeholder="Min" type="number"/>
</div>
<span class="text-gray-400">-</span>
<div class="relative flex-1">
<span class="absolute left-2 top-1/2 -translate-y-1/2 text-gray-400 text-xs">$</span>
<input class="w-full rounded-lg border-gray-200 py-1.5 pl-5 pr-2 text-sm focus:ring-primary/20" placeholder="Max" type="number"/>
</div>
</div>
<button class="w-full rounded-lg bg-gray-100 py-2 text-xs font-bold text-gray-700 hover:bg-gray-200">Apply Price</button>
</div>
</details>
</div>
<!-- Availability -->
<div class="border-t border-gray-200 pt-6">
<label class="flex cursor-pointer items-center justify-between">
<span class="text-sm font-bold">In Stock Only</span>
<div class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox" value=""/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</div>
</label>
</div>
</div>
</aside>
<!-- Product Display Area -->
<div class="flex flex-1 flex-col gap-6">
<!-- Header Actions -->
<div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
<div>
<nav class="flex items-center gap-2 text-xs font-medium text-gray-400 mb-2">
<a class="hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-xs leading-none">chevron_right</span>
<span class="text-gray-900">All Products</span>
</nav>
<h1 class="text-3xl font-black tracking-tight">Browse Snave Army Collection</h1>
<p class="mt-1 text-sm text-gray-500">Showing 1,240 items</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-colors">
<span class="material-symbols-outlined text-lg">sort</span>
                            Sort: Featured
                        </button>
<button class="lg:hidden flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-white transition-colors">
<span class="material-symbols-outlined text-lg">tune</span>
                            Filters
                        </button>
</div>
</div>
<!-- Active Filters Bar -->
<div class="flex flex-wrap items-center gap-2">
<span class="text-xs font-bold text-gray-400 uppercase tracking-widest mr-2">Active:</span>
<div class="flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                        Smartphones
                        <button class="material-symbols-outlined text-sm leading-none">close</button>
</div>
<div class="flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                        Under $2000
                        <button class="material-symbols-outlined text-sm leading-none">close</button>
</div>
<button class="text-xs font-bold text-gray-400 hover:text-primary transition-colors">Clear All</button>
</div>
<!-- Product Grid -->
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
<!-- Product Card 1 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Pro Max Laptop" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="High-end sleek silver laptop display" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1M96Dlroo_O4liB4KMxhKHvA79AYET9HvMtcC_n_f6h7xGIFUuoM8RfRgeOO3FGpNvDgQ0Vl2f6a4UXCDbG1NpR4iENIf4bIH7BaoxVaZi8CX3RuQ4qdcT3Ln6eax6PFLWBqbBMpSnvJ7EJ0wG9FnyXCGJuNXSCWklEUyHsqN-zT8orTsDvT_55_6tqOTtKomJZL20Iu2ZayHhYIaUA90eVU_njbNRiSn3ozTnxBC6f7eUSFVBbtBTKwH-PQGYAzuOMZ9d3qh2E4"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
<div class="absolute left-3 top-3">
<span class="rounded bg-primary px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-white">New Release</span>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Electronics</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Snave EliteBook Pro X1</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Ultimate performance with the new military-grade processor and titanium chassis.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$2,499.00</p>
<button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                    Add
                                </button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Modern Smartphone" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Close up of a luxury modern smartphone" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvbq5ouwK1BrZdbjV1dlvfOFlHfqSs5m58CiRVnyl0X0m7CBo4rS-txOPG35AYna-ec2HEUuUzI1MprF_PTjAD673kykqxTHNTrh3dsMQiDcQwkTh94uhnqkL0jeacXe7p0bQXvsS8kKikrgHzuf7CjCZdxDVEfVyLjba-FaqUjfCF9V6uj1D2KASSvavGqQR3fFVgngwj_lTQwAksm5Ioa7_61b04UdsaGresukZD0or7e6_Syx4XSTphhX9vF0xLXnPzPgy1IME"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Phones</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Snave Phone 15 Stealth</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Advanced encrypted communication features in a sleek obsidian finish.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$1,299.00</p>
<button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                    Add
                                </button>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Luxury SUV" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Matte black luxury armored SUV in studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhbzoNmALH1DY3gl6Nw1-kg6yfYMhQjXmdjeyRUPBr7kkzo1dZT1slg62sl2-gyHJ6xMgOduSeqkejIccwCs4OUG68lMDgV9skY2qK1qp5U_0YyUVfjcYuz1FQDL7I6wC-zdCg4sYoSHAoMacaHJBfe7tmKvP2W3qWnV9PoTb5pbZNtjdsLSwECKhoul_QL0mRen4HbbnDBFuCFYqIJO8Q_8SACkuEpnfOcl9QRVUWg7bZycZlN24pLlJGa1E3LVBZdCjexKos4bI"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
<div class="absolute left-3 top-3">
<span class="rounded bg-green-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-white">Pre-order</span>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Cars</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Snave Guardian SUV</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Full ballistic protection with luxury interior and silent electric drive.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$85,000.00</p>
<button class="rounded-lg bg-gray-900 px-3 py-2 text-sm font-bold text-white hover:bg-black transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">info</span>
                                    Inquire
                                </button>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Tablet Device" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Modern tablet with digital pencil on desk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBu0k7crU7KUCw6TFsfVUFlNzkO21UzfvcUMUaO9qvSe4Po1_wgI99Hsg-Wk10VeN_5yLhJ3inZxNdyQoHl3NMbD0HNh1NX2pMYaJFM-F9M82RdGVASGQTTGlyCutf2vS_tiOdWr0yGgVIE8uXz6gzdTG8jCVvukGwrXSVO8Yp3nuX8FQWew1FKSPBEWPxyjJW2LzO6sV_k94YZ3n2b6WQHvHAniNbRItbbAtXomaYW9dTghNkYgYjzpH7YVn93AZHCqhO7NJftBUM"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Electronics</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Snave Tab 10 Air</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Ultrathin workstation tablet for field operations and creative workflows.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$899.00</p>
<button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                    Add
                                </button>
</div>
</div>
</div>
<!-- Product Card 5 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Headphones" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Premium wireless headphones on stand" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiBxUm-qm0FJhG7drBh_KeRFY7R4ipAro4JKnSikwFN8w3Jf0ggIcwwoEZCmi9g7BozXL4Z4IkcAw9Zp07oUeGRrT-3WEolROHqdirfuUDv71eoOGqIan7F4MFvvkhQEEm-w9R988VMeM2Mkw_A1VzEvbuUqCFMdJGPaKIibwSSUEXdaTYroNlfuDzbEOYg7cEIg7rJomCn3eGTqiS3L-dyMocipRJ--VnbP8u_jzHJgcZcSy1a0qsrOVTGl0Ng35yXuJEcm7bc-s"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Accessories</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Acoustic Shield Pro</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Industry-leading noise cancellation for absolute focus in any environment.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$449.00</p>
<button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                    Add
                                </button>
</div>
</div>
</div>
<!-- Product Card 6 -->
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#dbdfe6] bg-white transition-all hover:shadow-xl hover:-translate-y-1">
<div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
<img alt="Keyboard" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Mechanical backlit keyboard for gaming" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeBlisM0xUuapWRidvAeBduu__hxJSpZv7XHh2kZaFSu-e2AFdy3v2m3xBf1BPTGHY5FjIRwDgUnpMUEObagB9_4vmligGmUk8uc8B66czKLDXoPb-daWvzSSjwU73_6zwwy8b8Pzd8kxR6MAaOVaiwNDVbrp_6emdh-l2JbcisfwcHshf4qXjSHCfkqlb8nLwV_OVDRPXKscCuWTeJ-qb2-AlGx_DwV0gfczyVV5tWKU1-xlQV4JomQcO_XRuR3jnZJ2yVA4P7PY"/>
<div class="absolute right-3 top-3 flex flex-col gap-2">
<button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
</button>
</div>
</div>
<div class="flex flex-col p-5">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1">Accessories</span>
<h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition-colors">Tactical Mechanical Deck</h3>
<p class="mt-1 line-clamp-2 text-sm text-gray-500">Low-latency tactical keyboard with programmable macro keys and RGB.</p>
<div class="mt-4 flex items-center justify-between">
<p class="text-xl font-black text-gray-900">$189.00</p>
<button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition-colors flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                                    Add
                                </button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-8 flex flex-col items-center justify-between gap-4 border-t border-gray-200 py-6 sm:flex-row">
<p class="text-sm text-gray-500">Page 1 of 42</p>
<div class="flex items-center gap-2">
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-primary disabled:opacity-50" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-sm font-bold text-white">1</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-700 hover:border-primary hover:text-primary transition-colors">2</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-700 hover:border-primary hover:text-primary transition-colors">3</button>
<span class="px-2 text-gray-400">...</span>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-700 hover:border-primary hover:text-primary transition-colors">42</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:border-primary hover:text-primary transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php include 'includes/footer.php';?>
</div>
</body></html>