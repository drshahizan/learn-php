// Password Strength Analyzer
function checkPasswordStrength() {
  const passwordInput = document.getElementById('passwordInput');
  const strengthIndicator = document.querySelector('.indicator');
  const text = document.querySelector('.text');

  const password = passwordInput.value;

  // Check for weak password
  if (password.match(/[a-z]/) && password.length <= 3) {
    strengthIndicator.classList.remove('medium');
    strengthIndicator.classList.remove('strong');
    strengthIndicator.classList.add('weak');
    text.textContent = 'Weak';
  }
  // Check for medium password
  else if (password.match(/\d+/) && password.length >= 6) {
    strengthIndicator.classList.remove('weak');
    strengthIndicator.classList.remove('strong');
    strengthIndicator.classList.add('medium');
    text.textContent = 'Medium';
  }
  // Check for strong password
  else if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) && password.length >= 6) {
    strengthIndicator.classList.remove('weak');
    strengthIndicator.classList.remove('medium');
    strengthIndicator.classList.add('strong');
    text.textContent = 'Strong';
  }
  // Default case for invalid password
  else {
    strengthIndicator.classList.remove('medium');
    strengthIndicator.classList.remove('strong');
    strengthIndicator.classList.add('weak');
    text.textContent = 'Invalid Password';
  }
}

// Show/Hide Password
function togglePasswordVisibility() {
  const passwordInput = document.getElementById('passwordInput');
  const showBtn = document.querySelector('.showBtn');

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showBtn.textContent = 'HIDE';
  } else {
    passwordInput.type = 'password';
    showBtn.textContent = 'SHOW';
  }
}
