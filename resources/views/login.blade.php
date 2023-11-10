<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Estilos para el formulario de inicio de sesión */
        .login-form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .login-form label {
            font-weight: bold;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Iniciar sesión</h2>

<form action="{{ url('/principal') }}" method="get" class="login-form">
    @csrf <!-- Añade el token CSRF para protección -->
    <label for="usuario">Usuario:</label><br>
    <input type="text" id="usuario" name="usuario"><br><br>

    <label for="contrasena">Contraseña:</label><br>
    <input type="password" id="contrasena" name="contrasena"><br><br>

    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
