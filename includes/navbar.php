<?php
// navbar.php - Full reusable header for all pages

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['user_id']);
$username   = $isLoggedIn ? $_SESSION['username'] : null;
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
    
    <!-- Tailwind -->
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
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    }
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
<header class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/90 backdrop-blur-lg shadow-sm">
  <div class="w-full px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between w-full">

      <!-- Left: Logo -->
      <div class="flex items-center gap-4 lg:gap-8">
        <button 
          id="mobile-menu-btn"
          class="lg:hidden text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary rounded-lg p-2"
          aria-label="Toggle menu"
          aria-expanded="false"
        >
          <span class="material-symbols-outlined text-3xl">menu</span>
        </button>

        <a href="/index.php" class="flex items-center gap-3 group">
          <img 
            src="/assets/logo.png" 
            alt="Logo" 
            class="h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
          >
          <h1 class="text-xl md:text-2xl font-extrabold tracking-tight text-gray-900">
            Snave Army
          </h1>
        </a>
      </div>

          <!-- Center: Navigation -->
         <nav class="hidden lg:flex items-center justify-center gap-8">
              <a href="/index.php" class="text-sm font-semibold text-gray-700 hover:text-primary">Home</a>
              <a href="/index.php/#products" class="text-sm font-semibold text-gray-700 hover:text-primary">Categories</a>
              <a href="/product_list.php" class="text-sm font-semibold text-gray-700 hover:text-primary">Products</a>
              <a href="/about.php" class="text-sm font-semibold text-gray-700 hover:text-primary">About us</a>
              <a href="/dashboard.php" class="text-sm font-semibold text-gray-700 hover:text-primary">Dashboard</a>
          </nav>


      <!-- Right: Cart + User -->
      <div class="flex items-center gap-4">
        <!-- Cart -->
        <a href="/cart.php" class="relative text-gray-700 hover:text-primary p-2">
          <span class="material-symbols-outlined text-2xl">shopping_cart</span>
          <span class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-primary text-[10px] font-bold text-white">
            0
          </span>
        </a>

        <!-- User Section -->
        <?php if ($isLoggedIn): ?>
            <div class="relative group">
                <button class="flex items-center gap-2 rounded-full p-1 pr-3 hover:bg-gray-100 transition">
                    <div class="h-9 w-9 rounded-full bg-primary text-white flex items-center justify-center font-semibold">
                        <?php echo strtoupper(substr($username, 0, 1)); ?>
                    </div>
                    <span class="hidden md:inline text-sm font-medium text-gray-700">
                        <?php echo htmlspecialchars($username); ?>
                    </span>
                </button>

                <div class="absolute right-0 mt-2 w-44 bg-white border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                    <a href="/account.php" class="block px-4 py-2 text-sm hover:bg-gray-100">My Account</a>
                    <a href="/orders.php" class="block px-4 py-2 text-sm hover:bg-gray-100">Orders</a>
                    <a href="/logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        <?php else: ?>
            <div class="flex items-center gap-3">
                <a href="/sign_in.php" class="text-sm font-semibold text-gray-700 hover:text-primary">Login</a>
                <a href="/sign_in.php" class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-primary-dark transition">Sign Up</a>
            </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</header>


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
</body>
</html>