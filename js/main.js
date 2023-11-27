function checkPasswordMatch() {
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm_password").value;
  const passwordMatch = document.getElementById("password_match");

  if (password === confirmPassword) {
    passwordMatch.innerHTML = "Passwords match!";
  } else {
    passwordMatch.innerHTML = "Passwords do not match!";
  }
}
