document.addEventListener("DOMContentLoaded", () => {

  // ===== HELPER FUNCTIONS =====
  function showError(input, message) {
    let error = input.nextElementSibling;
    if (!error || !error.classList.contains("input-error")) {
      error = document.createElement("p");
      error.className = "input-error text-red-500 text-sm mt-1";
      input.parentNode.appendChild(error);
    }
    error.textContent = message;
  }

  function clearError(input) {
    let error = input.nextElementSibling;
    if (error && error.classList.contains("input-error")) {
      error.remove();
    }
  }

  // ===== REGISTER FORM =====
  const registerForm = document.querySelector(".form-box.register form");
  if (registerForm) {
    registerForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const email = document.getElementById("registerEmail");
      const password = document.getElementById("registerPassword");
      const confirmPassword = document.getElementById("confirmPassword");

      let valid = true;

      [email, password, confirmPassword].forEach(clearError);

      if (!email.value.trim()) { showError(email, "Email is required."); valid = false; }
      if (!password.value) { showError(password, "Password is required."); valid = false; }
      if (!confirmPassword.value) { showError(confirmPassword, "Confirm password is required."); valid = false; }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email.value && !emailRegex.test(email.value.trim())) { showError(email, "Invalid email format."); valid = false; }

      if (password.value && confirmPassword.value && password.value !== confirmPassword.value) { showError(confirmPassword, "Passwords do not match."); valid = false; }

      if (valid) {
        registerForm.action = "auth/register_process.php";
        registerForm.method = "POST";
        registerForm.submit();
      }
    });
  }

  // ===== LOGIN FORM =====
  const loginForm = document.querySelector(".form-box.login form");
  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const email = document.getElementById("loginEmail");
      const password = document.getElementById("loginPassword");

      let valid = true;

      [email, password].forEach(clearError);

      if (!email.value.trim()) { showError(email, "Email is required."); valid = false; }
      if (!password.value) { showError(password, "Password is required."); valid = false; }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email.value && !emailRegex.test(email.value.trim())) { showError(email, "Invalid email format."); valid = false; }

      if (valid) {
        loginForm.action = "auth/login_process.php";
        loginForm.method = "POST";
        loginForm.submit();
      }
    });
  }

});
