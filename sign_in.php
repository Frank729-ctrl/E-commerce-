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

/* ===== FORM BOXES ===== */
.form-box.login,
.form-box.register {
  position: absolute;
  top: 0;
  width: 50%;
  height: 100%;
  padding: 2.5rem;
  background: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: transform 0.7s ease-in-out, opacity 0.7s ease-in-out;
  z-index: 50;
}

/* Hide register by default */
.form-box.register {
  transform: translateX(100%);
  pointer-events: none;
  opacity: 0;
}

/* Login moves left when container active */
.container.active .form-box.login {
  transform: translateX(-100%);
  pointer-events: none;
  opacity: 0;
}

/* Register comes into view when active */
.container.active .form-box.register {
  transform: translateX(0);
  pointer-events: auto;
  opacity: 1;
}

/* ===== TOGGLE BACKGROUND ===== */
.toggle-box {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 40;
  overflow: hidden;
}

.toggle-box::before {
  content: "";
  position: absolute;
  left: 0;
  width: 200%;
  height: 100%;
  background: #7494ec;
  border-radius: 150px;
  z-index: -1; /* behind panels */
  transition: transform 0.7s ease-in-out;
  transform: translateX(0);
}

.container.active .toggle-box::before {
  transform: translateX(-50%);
}

/* ===== TOGGLE PANELS ===== */
.toggle-panel {
  position: absolute;
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  transition: transform 0.7s ease-in-out;
  z-index: 45;
}

.toggle-panel.toggle-left {
  left: 0;
}

.toggle-panel.toggle-right {
  right: 0;
}

.container.active .toggle-panel.toggle-left {
  transform: translateX(-100%);
}

.container.active .toggle-panel.toggle-right {
  transform: translateX(-100%);
}

/* ===== TOGGLE BUTTONS ===== */
.register-btn,
.login-btn {
  cursor: pointer;
  z-index: 60; /* above everything */
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
                <form id="loginForm" action="auth/login_process.php" method="POST" class="w-full space-y-4" novalidate>
                  <h1 class="text-3xl font-bold">Login</h1>

                  <div class="relative">
                      <input type="email" id="loginEmail" name="email" placeholder="Email"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <div class="relative">
                      <input type="password" id="loginPassword" name="password" placeholder="Password"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <div id="loginMessage" class="text-sm text-red-500 h-5">
                      <?php
                      if (isset($_SESSION['error'])) {
                          echo $_SESSION['error'];
                          unset($_SESSION['error']);
                      }
                      ?>
                  </div>

                  <button type="submit" class="w-full h-12 bg-primary text-white rounded-lg font-semibold">
                      Login
                  </button>
                </form>
          </div>

          
         <!-- REGISTER -->
          <div class="form-box register absolute right-0 w-1/2 h-full flex items-center text-center p-10 bg-white transition-all duration-700 ease-in-out z-20">
              <form id="registerForm" action="auth/register_process.php" method="POST" class="w-full space-y-4" novalidate>
                  <h1 class="text-3xl font-bold">Register</h1>

                  <!-- Full Name -->
                  <div class="relative">
                      <input type="text" id="registerName" name="name" placeholder="Full Name"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <!-- Email -->
                  <div class="relative">
                      <input type="email" id="registerEmail" name="email" placeholder="Email"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <!-- Password -->
                  <div class="relative">
                      <input type="password" id="registerPassword" name="password" placeholder="Password"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <!-- Confirm Password -->
                  <div class="relative">
                      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"
                            class="w-full p-4 bg-gray-100 rounded-lg outline-none" required />
                  </div>

                  <!-- Message container -->
                  <div id="registerMessage" class="text-sm text-red-500 h-5">
                      <?php
                      if (isset($_SESSION['register_error'])) {
                          echo $_SESSION['register_error'];
                          unset($_SESSION['register_error']);
                      }
                      if (isset($_SESSION['register_success'])) {
                          echo "<span class='text-green-500'>{$_SESSION['register_success']}</span>";
                          unset($_SESSION['register_success']);
                      }
                      ?>
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
      <script src="assets/js/auth.js"></script>


</body>
</html>
