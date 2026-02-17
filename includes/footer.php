<!-- Footer -->
<footer id="contact" class="bg-gray-900 text-gray-300 py-16">
  <div class="max-w-7xl mx-auto px-6 md:px-8 lg:px-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 lg:gap-12">

      <!-- Column 1: Brand + Description -->
      <div>
        <div class="flex items-center gap-3 mb-4">
          <h4 class="text-2xl font-bold text-white tracking-tight">Snave Army</h4>
        </div>
        <p class="text-gray-400 leading-relaxed mb-4">
          Premium gadgets, vehicles, and electronics — made affordable with flexible small-small payments.
        </p>
        <p class="text-sm text-gray-500">
          Kumasi & Accra • Nationwide delivery
        </p>
      </div>

      <!-- Column 2: Quick Links -->
      <div>
        <h4 class="text-lg font-bold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2 text-gray-400">
          <li><a href="/index.php" class="hover:text-primary transition-colors">Home</a></li>
          <li><a href="#products" class="hover:text-primary transition-colors">Shop</a></li>
          <li><a href="/how-it-works" class="hover:text-primary transition-colors">How It Works</a></li>
          <li><a href="/about.php" class="hover:text-primary transition-colors">About Us</a></li>
          <li><a href="/contact" class="hover:text-primary transition-colors">Contact</a></li>
        </ul>
      </div>

      <!-- Column 3: Contact -->
      <div>
        <h4 class="text-lg font-bold text-white mb-4">Get in Touch</h4>
        <ul class="space-y-4 text-gray-400">
          <li class="flex items-start gap-3">
            <span class="material-symbols-outlined text-primary mt-0.5">call</span>
            <div>
              <p>+233 123 456 789</p>
              <p class="text-sm text-gray-500">Mon–Sat: 8AM–6PM</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <span class="material-symbols-outlined text-primary mt-0.5">location_on</span>
            <p>Accra & Kumasi, Ghana</p>
          </li>
          <li class="flex items-start gap-3">
            <span class="material-symbols-outlined text-primary mt-0.5">mail</span>
            <p>support@snavearmy.com</p>
          </li>
        </ul>
      </div>

      <!-- Column 4: Newsletter + Social -->
      <div>
        <h4 class="text-lg font-bold text-white mb-4">Stay Updated</h4>
        <p class="text-gray-400 mb-4">Subscribe for exclusive deals & new arrivals</p>

        <form class="flex flex-col gap-3">
          <input 
            type="email" 
            placeholder="Your email address" 
            class="w-full rounded-lg bg-gray-800 border border-gray-700 px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50"
          />
          <button 
            type="submit" 
            class="bg-primary text-white font-medium px-6 py-3 rounded-lg hover:bg-primary-dark transition-colors"
          >
            Subscribe
          </button>
        </form>

        <!-- Social Icons -->
        <div class="mt-6 flex gap-4">
          <a href="https://instagram.com/snavearmy" 
             target="_blank" rel="noopener noreferrer" 
             class="hover:scale-110 transition-transform" aria-label="Instagram">
            <img src="assets/icons/instagram.svg" alt="Instagram icon" class="w-6 h-6" />
          </a>
          <a href="https://wa.me/233206286541"
             target="_blank" rel="noopener noreferrer" 
             class="hover:scale-110 transition-transform" aria-label="WhatsApp">
            <img src="assets/icons/whatsapp.svg" alt="WhatsApp icon" class="w-6 h-6" />
          </a>
          <a href="https://facebook.com/snavearmy" 
             target="_blank" rel="noopener noreferrer" 
             class="hover:scale-110 transition-transform" aria-label="Facebook">
            <img src="assets/icons/facebook.svg" alt="Facebook icon" class="w-6 h-6" />
          </a>
          <a href="https://x.com/snavearmy" 
             target="_blank" rel="noopener noreferrer" 
             class="hover:scale-110 transition-transform" aria-label="X/Twitter">
            <img src="assets/icons/x.svg" alt="X/Twitter icon" class="w-6 h-6" />
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="mt-12 pt-6 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500">
      <p>© <?php echo date('Y'); ?> Snave Army Ghana. All rights reserved.</p>
      <div class="flex flex-wrap gap-4 justify-center md:justify-end">
        <a href="/privacy" class="hover:text-gray-300 transition-colors">Privacy Policy</a>
        <a href="/terms" class="hover:text-gray-300 transition-colors">Terms of Service</a>
        <a href="/refund" class="hover:text-gray-300 transition-colors">Refund Policy</a>
      </div>
    </div>
  </div>
</footer>
