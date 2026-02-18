<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Your Cart | Snave Army Premium Tactical Gear</title>
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
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <?php include __DIR__.'/includes/navbar.php';?>

<!-- SIDEBAR -->
<aside class="w-72 bg-white dark:bg-background-dark border-r border-gray-100 dark:border-gray-800 flex flex-col fixed h-full z-20 pt-20">


<nav class="flex-1 px-4 space-y-2">

<a class="flex items-center gap-3 px-4 py-3 active-nav rounded-lg transition-all" href="dashboard.php">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-semibold">Overview</span>
</a>

<a class="flex items-center gap-3 px-4 py-3 text-soft-gray hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">package_2</span>
<span class="text-sm font-semibold">My Orders</span>
</a>

<a class="flex items-center gap-3 px-4 py-3 text-soft-gray hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-sm font-semibold">My Requests</span>
</a>

<a class="flex items-center gap-3 px-4 py-3 text-soft-gray hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">bookmark</span>
<span class="text-sm font-semibold">Saved Items</span>
</a>

<a class="flex items-center gap-3 px-4 py-3 text-soft-gray hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all" href="cart.php">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-sm font-semibold">Cart</span>
</a>

<div class="pt-8 pb-4">
<p class="px-4 text-[10px] font-bold text-soft-gray uppercase tracking-widest">Account</p>
</div>

<a class="flex items-center gap-3 px-4 py-3 text-soft-gray hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-semibold">Settings</span>
</a>

<!-- Logout button – placed at the bottom of the sidebar -->
    <a 
      href="/auth/logout.php" 
      class="flex items-center gap-3 px-4 py-3 mt-4 text-red-600 hover:bg-red-50 dark:hover:bg-red-950/30 dark:text-red-400 rounded-lg transition-all font-semibold"
    >
      <span class="material-symbols-outlined">logout</span>
      <span class="text-sm">Log out</span>
    </a>

</nav>
</aside>

    <main class="max-w-7xl mx-auto px-6 lg:px-20 py-12">

<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<!-- Left Column: Cart Items -->
<div class="lg:col-span-8">
<div class="flex items-baseline justify-between mb-8">
<h2 class="text-4xl font-black tracking-tight">Shopping Cart</h2>
<span class="text-gray-500 text-sm font-medium">2 Items</span>
</div>
<div class="space-y-1">
<!-- Item 1 -->
<div class="group flex flex-col sm:flex-row items-start sm:items-center gap-6 py-8 border-b border-gray-100 last:border-0">
<div class="w-full sm:w-32 aspect-square rounded-xl bg-gray-100 overflow-hidden shrink-0">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Premium tactical jacket in matte black finish" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgsbLHjM9k3nPiVWW2lqBf-lCebaMefGbZy_0IZePpB-MxnQGsRcamm2aLfe8eGm4TUiNWg7P6Zghksob4fMd1qzmwexKmsoQIdqraWDBKsxbPZGz4ViTvAnJ-unfGm5qKXzHNa1IAcR6TRldKDElQNVm7E30A4PnuW5_v0LbyuaIPD7ue8rzsOlD7iAVD9DXobAPER8ItxIVbML0DX4q5oPZYggAeYpX7iIFtSDCYujO_ZOtAGS_N4IHERiTxa-O1kwpo63a6Sp8')"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-gray-900 leading-snug">Elite Tactical Field Jacket</h3>
<p class="text-gray-500 text-sm mt-1 flex gap-4">
<span>Size: <b class="text-gray-900">L</b></span>
<span>Color: <b class="text-gray-900">Stealth Black</b></span>
</p>
</div>
<button class="text-gray-300 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="mt-6 flex items-center justify-between">
<div class="flex items-center border border-gray-200 rounded-lg p-1 bg-white">
<button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 rounded text-gray-500">-</button>
<span class="w-10 text-center font-bold text-sm">1</span>
<button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 rounded text-gray-500">+</button>
</div>
<span class="text-lg font-black text-primary">$249.00</span>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="group flex flex-col sm:flex-row items-start sm:items-center gap-6 py-8 border-b border-gray-100 last:border-0">
<div class="w-full sm:w-32 aspect-square rounded-xl bg-gray-100 overflow-hidden shrink-0">
<div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-110" data-alt="Combat specialized cargo pants in olive drab color" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA25DLrEQygiA31Twgkpzfn0XCJBvSVRLPa-5Jmeldr3rrxPQMZKjNtxPytQ71gCEdn48dkQ5wPBz4KVAwEErSSYW2qhV_VPJDSxgY7kFm8YHb9vDVD8b4N9rTfy7qlQFU1iy-X3N3dwCJs2vKL-cMSZLBXKvIXqqPi7W8h66wiEUsN25rdjbuUG29YtR56XWg5fGzOWwHn-_Ro0X_AyF4jxDD9pqQMk3zYy-S5FjA3E6cogZJsx1JDUB5tPXpkEntgHi5sfjk-Bd0')"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-gray-900 leading-snug">Commando Gen.II Cargo Pants</h3>
<p class="text-gray-500 text-sm mt-1 flex gap-4">
<span>Size: <b class="text-gray-900">34</b></span>
<span>Color: <b class="text-gray-900">Olive Drab</b></span>
</p>
</div>
<button class="text-gray-300 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="mt-6 flex items-center justify-between">
<div class="flex items-center border border-gray-200 rounded-lg p-1 bg-white">
<button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 rounded text-gray-500">-</button>
<span class="w-10 text-center font-bold text-sm">2</span>
<button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 rounded text-gray-500">+</button>
</div>
<div class="text-right">
<span class="block text-xs text-gray-400 line-through">$258.00</span>
<span class="text-lg font-black text-primary">$129.00</span>
</div>
</div>
</div>
</div>
</div>
<div class="mt-12 flex flex-col sm:flex-row items-center gap-6 py-6 px-8 bg-blue-50 rounded-2xl">
<div class="bg-primary/10 p-3 rounded-full text-primary">
<span class="material-symbols-outlined text-3xl">verified_user</span>
</div>
<div>
<h4 class="font-bold text-gray-900">Premium Membership Active</h4>
<p class="text-sm text-gray-600">You're saving 15% on tactical gear as a Snave Vanguard member.</p>
</div>
</div>
</div>
<!-- Right Column: Summary -->
<div class="lg:col-span-4">
<div class="sticky top-32 bg-white rounded-2xl border border-gray-100 p-8 shadow-sm">
<h3 class="text-xl font-bold mb-6">Order Summary</h3>
<div class="space-y-4 mb-8">
<div class="flex justify-between text-gray-500 font-medium">
<span>Subtotal</span>
<span class="text-gray-900">$507.00</span>
</div>
<div class="flex justify-between text-gray-500 font-medium">
<span>Vanguard Discount</span>
<span class="text-green-600">-$76.05</span>
</div>
<div class="flex justify-between text-gray-500 font-medium">
<span>Shipping</span>
<span class="text-gray-900">Free</span>
</div>
<div class="h-px bg-gray-100 my-4"></div>
<div class="flex justify-between items-end">
<span class="text-lg font-bold">Total Amount</span>
<span class="text-3xl font-black tracking-tight text-gray-900 leading-none">$430.95</span>
</div>
</div>
<div class="space-y-4">
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl flex items-center justify-center gap-3 transition-all transform active:scale-[0.98] shadow-lg shadow-primary/20">
<svg class="size-6" fill="currentColor" viewbox="0 0 24 24">
<path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.185-.573c.948.517 2.011.788 3.144.788 3.18 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.766-5.766-5.766zm3.446 8.212c-.149.423-.748.766-1.049.814-.271.043-.618.061-1.002-.061-.247-.079-.564-.191-1.256-.479-1.341-.555-2.204-1.921-2.271-2.011-.067-.09-.545-.726-.545-1.383 0-.656.344-.979.467-1.114.123-.135.27-.169.359-.169.09 0 .18 0 .258.006.084.004.197-.032.308.236.112.27.382.934.416 1.001.033.067.056.146.011.236-.045.09-.067.146-.135.225-.067.079-.142.176-.203.236-.067.068-.138.141-.06.275.078.134.348.573.746.927.514.457.948.599 1.083.666.134.067.213.056.292-.034.079-.09.337-.393.427-.528.09-.134.18-.112.304-.067.123.045.787.371.921.439.135.067.225.101.258.157.034.056.034.326-.115.749zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.66 1.438 5.168L2 22l4.957-1.3c1.465.807 3.14 1.272 4.925 1.272 5.523 0 10-4.477 10-10S17.523 2 12 2z"></path>
</svg>
                            Request via WhatsApp
                        </button>
<a class="w-full flex items-center justify-center py-2 text-gray-500 font-semibold hover:text-primary transition-colors gap-2 text-sm group" href="#">
                            Continue Shopping
                            <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
</a>
</div>
<div class="mt-8 pt-8 border-t border-gray-100 space-y-4">
<div class="flex items-center gap-3 text-xs text-gray-500 font-medium">
<span class="material-symbols-outlined text-primary text-lg">verified</span>
<span>Secure Order Inquiry via WhatsApp</span>
</div>
<div class="flex items-center gap-3 text-xs text-gray-500 font-medium">
<span class="material-symbols-outlined text-primary text-lg">support_agent</span>
<span>Direct Admin Support Available</span>
</div>
<div class="flex items-center gap-3 text-xs text-gray-500 font-medium">
<span class="material-symbols-outlined text-primary text-lg">lock</span>
<span>Encrypted Communication</span>
</div>
</div>
</div>
</div>
</div>
</main>
</body>
</html>