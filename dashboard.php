<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /sign_in.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Snave Army | Premium Dashboard</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet"/>

<script>
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#1152d4",
        "background-light": "#f6f6f8",
        "background-dark": "#101622",
        charcoal: "#111318",
        "soft-gray": "#616f89"
      },
      fontFamily: {
        display: ["Inter", "sans-serif"]
      },
      boxShadow: {
        premium: "0 4px 20px -2px rgba(0,0,0,0.05), 0 2px 10px -1px rgba(0,0,0,0.03)"
      }
    }
  }
}
</script>

<style>
body { font-family: 'Inter', sans-serif; }

.material-symbols-outlined {
  font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
}

.active-nav {
  background-color: rgba(17,82,212,0.08);
  color:#1152d4;
}

.hide-scrollbar::-webkit-scrollbar { display:none; }
.hide-scrollbar { scrollbar-width:none; -ms-overflow-style:none; }
</style>
</head>

<body class="bg-background-light dark:bg-background-dark text-charcoal font-display">

<?php include 'includes/navbar.php'; ?>

<div class="flex min-h-screen">

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


    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-72 pt-24">

        <div class="px-6 max-w-7xl mx-auto space-y-8">

            <!-- Stats -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Total Orders -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-premium border border-gray-100 dark:border-gray-700">
                
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-blue-50 dark:bg-blue-900/20 text-primary rounded-lg">
                    <span class="material-symbols-outlined text-[22px]">inventory_2</span>
                    </div>
                    <span class="text-green-500 text-xs font-bold flex items-center bg-green-50 dark:bg-green-900/20 px-2 py-1 rounded-full">
                    +2.5%
                    </span>
                </div>

                <p class="text-soft-gray text-sm font-medium">Total Orders</p>
                <h3 class="text-3xl font-extrabold text-charcoal dark:text-white mt-1">12</h3>
                <p class="text-[11px] text-soft-gray mt-2">All time purchases</p>

                </div>


                <!-- WhatsApp Requests -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-premium border border-gray-100 dark:border-gray-700">
                
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-primary text-white rounded-lg">
                    <span class="material-symbols-outlined text-[22px]">chat_bubble</span>
                    </div>
                    <span class="text-primary text-xs font-bold flex items-center bg-primary/10 px-2 py-1 rounded-full">
                    Active
                    </span>
                </div>

                <p class="text-soft-gray text-sm font-medium">WhatsApp Requests</p>
                <h3 class="text-3xl font-extrabold text-charcoal dark:text-white mt-1">4</h3>
                <p class="text-[11px] text-primary font-bold mt-2">2 Pending Response</p>

                </div>


                <!-- Saved Items -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-premium border border-gray-100 dark:border-gray-700">
                
                <div class="flex justify-between items-start mb-4">
                    <div class="p-2 bg-pink-50 dark:bg-pink-900/20 text-pink-500 rounded-lg">
                    <span class="material-symbols-outlined text-[22px]">favorite</span>
                    </div>
                    <span class="text-soft-gray text-xs font-bold flex items-center bg-gray-50 dark:bg-gray-700 px-2 py-1 rounded-full">
                    +12 new
                    </span>
                </div>

                <p class="text-soft-gray text-sm font-medium">Saved Items</p>
                <h3 class="text-3xl font-extrabold text-charcoal dark:text-white mt-1">28</h3>
                <p class="text-[11px] text-soft-gray mt-2">In your wishlist</p>

                </div>

            </section>

            <!-- Table -->
            <section class="bg-white dark:bg-gray-800 rounded-xl shadow-premium border border-gray-100 dark:border-gray-700 overflow-hidden">

                <div class="px-6 py-5 border-b border-gray-100 dark:border-gray-700 flex justify-between">
                    <h4 class="font-bold">Recent Requests</h4>
                    <button class="text-primary text-sm font-semibold">View All</button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">

                        <thead class="bg-gray-50 dark:bg-gray-900 text-soft-gray text-xs uppercase">
                            <tr>
                                <th class="px-6 py-3">Product</th>
                                <th class="px-6 py-3">Date</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3 text-right">Action</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100 dark:divide-gray-700">

                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="px-6 py-4">Nike Air Max 270</td>
                                <td class="px-6 py-4">Oct 24, 2023</td>
                                <td class="px-6 py-4 text-primary font-semibold">Processing</td>
                                <td class="px-6 py-4 text-right">
                                <button class="bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg text-xs font-semibold">View</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </main>

</div>

</body>
</html>
