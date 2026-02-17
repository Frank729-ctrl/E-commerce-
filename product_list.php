<?php include 'products.php';?>

<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Snave Army | Product Listing</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                "DEFAULT": "0.5rem",
                "lg": "0.75rem",
                "xl": "1rem",
                "full": "9999px"
            },
        },
    },
}
</script>
<style>
body { font-family: 'Inter', sans-serif; }
.sidebar-scrollbar::-webkit-scrollbar { width: 5px; }
.sidebar-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
.line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111318] antialiased font-display">
<?php include 'includes/navbar.php'?>

<div class="relative flex min-h-screen flex-col">
<main class="mx-auto flex w-full max-w-[1440px] grow gap-8 px-6 md:px-10 lg:px-20 py-8">

<!-- Sidebar / Filter Panel -->
<aside class="hidden lg:flex w-64 flex-col gap-6 sticky top-24 h-[calc(100vh-8rem)]">
  <form method="GET" action="products.php" class="flex flex-col gap-6 sidebar-scrollbar overflow-y-auto pr-2">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-bold">Filters</h3>
        <!-- Clear all button -->
        <a href="products.php" class="text-xs font-semibold text-primary hover:underline">Clear all</a>
    </div>

    <!-- Categories -->
    <div class="flex flex-col gap-3">
        <p class="text-xs font-bold uppercase tracking-wider text-gray-400">Categories</p>
        <div class="flex flex-col gap-1">
            <label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition">
                <input type="radio" name="category" value="Electronics" class="mr-2"
                  <?= (isset($_GET['category']) && $_GET['category']=='Electronics') ? 'checked' : '' ?>>
                <span class="material-symbols-outlined text-xl">memory</span>
                <span class="text-sm">Electronics</span>
            </label>

            <label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition">
                <input type="radio" name="category" value="Phones" class="mr-2"
                  <?= (isset($_GET['category']) && $_GET['category']=='Phones') ? 'checked' : '' ?>>
                <span class="material-symbols-outlined text-xl">smartphone</span>
                <span class="text-sm">Phones</span>
            </label>

            <label class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600 cursor-pointer transition">
                <input type="radio" name="category" value="Cars" class="mr-2"
                  <?= (isset($_GET['category']) && $_GET['category']=='Cars') ? 'checked' : '' ?>>
                <span class="material-symbols-outlined text-xl">directions_car</span>
                <span class="text-sm">Cars</span>
            </label>
        </div>
    </div>

    <!-- Subcategories -->
    <div class="border-t border-gray-200 pt-6">
        <details class="group" open>
            <summary class="flex cursor-pointer items-center justify-between text-sm font-bold list-none">
                Subcategories
                <span class="material-symbols-outlined text-gray-400 transition-transform group-open:rotate-180">expand_more</span>
            </summary>
            <div class="mt-4 flex flex-col gap-2 text-gray-600">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="subcat[]" value="Smartphones"
                      <?= (isset($_GET['subcat']) && in_array('Smartphones', $_GET['subcat'])) ? 'checked' : '' ?>>
                    Smartphones
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="subcat[]" value="Laptops"
                      <?= (isset($_GET['subcat']) && in_array('Laptops', $_GET['subcat'])) ? 'checked' : '' ?>>
                    Laptops
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="subcat[]" value="Audio Gear"
                      <?= (isset($_GET['subcat']) && in_array('Audio Gear', $_GET['subcat'])) ? 'checked' : '' ?>>
                    Audio Gear
                </label>
            </div>
        </details>
    </div>

    <!-- Price Range -->
    <div class="border-t border-gray-200 pt-6">
        <details class="group" open>
            <summary class="flex cursor-pointer items-center justify-between text-sm font-bold list-none">
                Price Range
                <span class="material-symbols-outlined text-gray-400 transition-transform group-open:rotate-180">expand_more</span>
            </summary>
            <div class="mt-4 flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <input type="number" name="min_price" placeholder="Min"
                      value="<?= htmlspecialchars($_GET['min_price'] ?? '') ?>" class="w-full rounded-lg border-gray-200 py-1.5 pl-5 pr-2 text-sm focus:ring-primary/20">
                    <span class="text-gray-400">-</span>
                    <input type="number" name="max_price" placeholder="Max"
                      value="<?= htmlspecialchars($_GET['max_price'] ?? '') ?>" class="w-full rounded-lg border-gray-200 py-1.5 pl-5 pr-2 text-sm focus:ring-primary/20">
                </div>
            </div>
        </details>
    </div>

    <button type="submit" class="w-full rounded-lg bg-primary text-white py-2 font-semibold hover:bg-primary/90 transition">Apply Filters</button>
  </form>
</aside>

<!-- Products -->
<div class="flex flex-1 flex-col gap-6">

<!-- Header -->
<div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
    <div>
        <nav class="flex items-center gap-2 text-xs font-medium text-gray-400 mb-2">
            <a href="#" class="hover:text-primary transition">Home</a>
            <span class="material-symbols-outlined text-xs leading-none">chevron_right</span>
            <span class="text-gray-900">All Products</span>
        </nav>
        <h1 class="text-3xl font-black tracking-tight">Browse Snave Army Collection</h1>
        <p class="mt-1 text-sm text-gray-500">Showing 1,240 items</p>
    </div>
    <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
            <span class="material-symbols-outlined text-lg">sort</span>
            Sort: Featured
        </button>
        <button class="lg:hidden flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-white transition">
            <span class="material-symbols-outlined text-lg">tune</span> Filters
        </button>
    </div>
</div>

<!-- Active Filters -->
<div class="flex flex-wrap items-center gap-2">
    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mr-2">Active:</span>

    <?php
    $hasActiveFilters = false;

    // Category filter
    if(!empty($_GET['category'])) {
        $hasActiveFilters = true;
        echo '<div class="flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">';
        echo htmlspecialchars($_GET['category']);
        echo ' <a href="products.php" class="material-symbols-outlined text-sm leading-none">close</a>';
        echo '</div>';
    }

    // Price range filter
    $min_price = $_GET['min_price'] ?? '';
    $max_price = $_GET['max_price'] ?? '';
    if($min_price !== '' || $max_price !== '') {
        $hasActiveFilters = true;
        echo '<div class="flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">';
        echo '$' . ($min_price !== '' ? number_format($min_price) : '0') . 
             ' - $' . ($max_price !== '' ? number_format($max_price) : '∞');
        echo ' <a href="products.php" class="material-symbols-outlined text-sm leading-none">close</a>';
        echo '</div>';
    }

    // Subcategories (if you pass them via GET as an array, e.g., ?subcat[]=Smartphones)
    if(!empty($_GET['subcat']) && is_array($_GET['subcat'])) {
        $hasActiveFilters = true;
        foreach($_GET['subcat'] as $sub) {
            echo '<div class="flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">';
            echo htmlspecialchars($sub);
            echo ' <a href="products.php" class="material-symbols-outlined text-sm leading-none">close</a>';
            echo '</div>';
        }
    }

    // Only show "Clear All" if any filter is active
    if($hasActiveFilters) {
        echo '<a href="products.php" class="text-xs font-bold text-gray-400 hover:text-primary transition ml-2">Clear All</a>';
    }
    ?>
</div>


<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
<?php foreach($products as $prod): ?>
<div class="group relative flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition-all hover:shadow-xl hover:-translate-y-1">
    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
        <img src="<?= htmlspecialchars($prod['image']) ?>" alt="<?= htmlspecialchars($prod['title']) ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110"/>
        <?php if(!empty($prod['badge'])): ?>
        <div class="absolute left-3 top-3">
            <span class="rounded bg-primary px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-white"><?= htmlspecialchars($prod['badge']) ?></span>
        </div>
        <?php endif; ?>
        <div class="absolute right-3 top-3 flex flex-col gap-2">
            <button class="flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 backdrop-blur shadow hover:text-red-500 transition">
                <span class="material-symbols-outlined text-xl">favorite</span>
            </button>
        </div>
    </div>
    <div class="flex flex-col p-5">
        <span class="text-[10px] font-bold uppercase tracking-widest text-primary mb-1"><?= htmlspecialchars($prod['category']) ?></span>
        <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary transition"><?= htmlspecialchars($prod['title']) ?></h3>
        <div class="mt-4 flex items-center justify-between">
            <p class="text-xl font-black text-gray-900">$<?= number_format($prod['price'],2) ?></p>
            <button class="rounded-lg bg-primary px-3 py-2 text-sm font-bold text-white hover:bg-primary/90 transition flex items-center gap-1">
                <span class="material-symbols-outlined text-lg">add_shopping_cart</span> Add
            </button>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>

<!-- Pagination -->
<div class="mt-8 flex flex-col items-center justify-between gap-4 border-t border-gray-200 py-6 sm:flex-row">
    <p class="text-sm text-gray-500">Page 1 of 42</p>
    <div class="flex items-center gap-2">
        <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-400 hover:text-primary disabled:opacity-50" disabled>
            <span class="material-symbols-outlined">chevron_left</span>
        </button>
        <button class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-sm font-bold text-white">1</button>
        <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-700 hover:border-primary hover:text-primary transition">2</button>
        <span class="px-2 text-gray-400">...</span>
        <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm font-bold text-gray-700 hover:border-primary hover:text-primary transition">42</button>
        <button class="flex h-10 w-10 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:border-primary hover:text-primary transition">
            <span class="material-symbols-outlined">chevron_right</span>
        </button>
    </div>
</div>

</div>
</main>

<?php include 'includes/footer.php';?>
</div>
</body>
</html>
