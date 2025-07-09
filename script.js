document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var email = document.getElementById('emailaddress').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmpassword').value;

    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');
    var confirmPasswordError = document.getElementById('confirmPasswordError');

    if (!email.includes('@')) {
        emailError.textContent = 'Email must contain @ symbol.';
        return false; 
    } else {
        emailError.textContent = '';
    }

    if (password.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters long.';
        return false; 
    } else {
        passwordError.textContent = '';
    }

    if (password !== confirmPassword) {
        confirmPasswordError.textContent = 'Passwords do not match.';
        return false; 
    } else {
        confirmPasswordError.textContent = '';
    }

    alert('Form submitted successfully!');
});
