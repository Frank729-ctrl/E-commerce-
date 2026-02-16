<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login / Register • Tailwind</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: { sans: ['Poppins', 'sans-serif'] },
      colors: { primary: '#7494ec', primaryDark: '#5a7ce0' }
    }
  }
}
</script>
<style>
  body {
    background: linear-gradient(90deg,#e2e2e2,#c9d6ff);
  }

  /* Hide register by default */
  .form-box.register {
    visibility: hidden;
  }

  /* ===== FORM SLIDE ===== */
  .container.active .form-box.login {
    right: 50%;
  }

  .container.active .form-box.register {
    visibility: visible;
    right: 50%;
  }

  /* ===== TOGGLE BACKGROUND ===== */
  .toggle-box::before {
    content: "";
    position: absolute;
    left: -250%;
    width: 300%;
    height: 100%;
    background: #7494ec;
    border-radius: 150px;
    z-index: 35;
    transition: 1.0s ease-in-out;
  }

  .container.active .toggle-box::before {
    left: 50%;
  }

  /* ===== TOGGLE PANELS ===== */
  .container.active .toggle-panel.toggle-left {
    left: -50%;
  }

  .container.active .toggle-panel.toggle-right {
    right: 0;
  }
</style>


</head>

<body class="min-h-screen flex flex-col font-sans">

  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex items-center justify-center w-full py-16">

  <div class="container relative w-[850px] h-[550px] bg-white rounded-[30px] shadow-2xl overflow-hidden">

    <!-- LOGIN -->
    <div class="form-box login absolute right-0 w-1/2 h-full flex items-center text-center p-10 bg-white transition-all duration-700 ease-in-out z-20">
      <form class="w-full space-y-6">
        <h1 class="text-3xl font-bold">Login</h1>

        <div class="relative">
          <input type="text" placeholder="Username"
            class="w-full p-4 bg-gray-100 rounded-lg outline-none" />
        </div>

        <div class="relative">
          <input type="password" placeholder="Password"
            class="w-full p-4 bg-gray-100 rounded-lg outline-none" />
        </div>

        <button type="submit" class="w-full h-12 bg-primary text-white rounded-lg font-semibold">
          Login
        </button>
      </form>
    </div>

    <!-- REGISTER -->
    <div class="form-box register absolute right-0 w-1/2 h-full flex items-center text-center p-10 bg-white transition-all duration-700 ease-in-out z-20 ">
      <form class="w-full space-y-6">
        <h1 class="text-3xl font-bold">Register</h1>

        <div class="relative">
          <input type="text" placeholder="Username"
            class="w-full p-4 bg-gray-100 rounded-lg outline-none" />
        </div>

        <div class="relative">
          <input type="email" placeholder="Email"
            class="w-full p-4 bg-gray-100 rounded-lg outline-none" />
        </div>

        <div class="relative">
          <input type="password" placeholder="Password"
            class="w-full p-4 bg-gray-100 rounded-lg outline-none" />
        </div>

        <button type="submit" class="w-full h-12 bg-primary text-white rounded-lg font-semibold">
          Register
        </button>
      </form>
    </div>

    <!-- TOGGLE PANEL -->
    <div class="toggle-box absolute w-full h-full z-30">

        <!-- LEFT PANEL -->
        <div class="toggle-panel toggle-left 
            absolute left-0 w-1/2 h-full 
            flex flex-col justify-center items-center 
            text-white 
            transition-all duration-700 
            z-40">
            
            <h1 class="text-2xl font-bold mb-4">Hello, Welcome!</h1>
            <p class="mb-6">Don't have an account?</p>
            <button type="button"
              class="register-btn border-2 border-white px-6 py-2 rounded-lg hover:bg-white hover:text-primary transition">
              Register
            </button>
          </div>

      <!-- RIGHT PANEL -->
        <div class="toggle-panel toggle-right 
            absolute right-[-50%] w-1/2 h-full 
            flex flex-col justify-center items-center 
            text-white 
            transition-all duration-700 
            z-40">
            
            <h1 class="text-2xl font-bold mb-4">Welcome Back!</h1>
            <p class="mb-6">Already have an account?</p>
            <button type="button"
              class="login-btn border-2 border-white px-6 py-2 rounded-lg hover:bg-white hover:text-primary transition">
              Login
            </button>
          </div>

</div>


  </div>
</main>


  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <script>
    const container = document.querySelector('.container');
    const registerBtn = document.querySelector('.register-btn');
    const loginBtn = document.querySelector('.login-btn');

    registerBtn.addEventListener('click', () => {
      container.classList.add('active');
    });

    loginBtn.addEventListener('click', () => {
      container.classList.remove('active');
    });
  </script>


</body>
</html>
