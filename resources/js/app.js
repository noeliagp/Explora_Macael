import './bootstrap';
function togglePassword() {
    const passwordField = document.getElementById('password');
    const showPasswordButton = document.querySelector('.show-password');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPasswordButton.textContent = '🔒';
    } else {
        passwordField.type = 'password';
        showPasswordButton.textContent = '👀';
    }
}