<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Maquinados XYZ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .contact-info div {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }
        nav {
            background-color: #444;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }
        nav a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<header>
    <h1>Contacto - Maquinados XYZ</h1>
</header>

<nav>
    <a href="{{ url('/principal') }}">Inicio</a>
    <a href="{{ url('/servicios') }}">Servicios</a>
    <a href="{{ url('/acerca') }}">Acerca de</a>
    <a href="{{ url('/contacto') }}">Contacto</a>
</nav>

<div class="container">
    <div class="contact-info">
        <div>
            <h2>Dirección</h2>
            <p>Calle Maquinados, No. 123</p>
            <p>Ciudad Industrial</p>
            <p>CP: 56789</p>
        </div>
        <div>
            <h2>Teléfono</h2>
            <p>Oficina: +1 234 567 8901</p>
            <p>Celular: +1 987 654 3210</p>
        </div>
        <div>
            <h2>Correo Electrónico</h2>
            <p>info@maquinadosxyz.com</p>
            <p>ventas@maquinadosxyz.com</p>
        </div>
    </div>
</div>

</body>
</html>
