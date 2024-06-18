<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css'])
   
</head>
<body>
    <div class="login-container">
        <a class="logo-container" href="/">
            <img src="https://i.ibb.co/5KDnCSF/logo-explora-macael.png" alt="logo-explora-macael" class="logo">
        </a>
        <h1>Bienvenido al panel de Gestión de Explora Macael</h1>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="password-container">
                
                <label for="password">Contraseña<button type="button" class="show-password" onclick="togglePassword()" style="width: 50px">👀</button></label>
                <input type="password" id="password" name="password" required>
                
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
            @if($errors->any())
                <div class="error-messages">
                    <ul>
                        <li>Los datos insertados son incorrectos, vuelve a intentarlo.</li>
                    </ul>
                </div>
            @endif
        </form>
    </div>
    <script>
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
    </script>
</body>
</html>
