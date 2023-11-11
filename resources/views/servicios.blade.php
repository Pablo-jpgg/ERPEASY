<!DOCTYPE html>
<html>
<head>
    <title>Servicios de Maquinados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
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
        section {
            padding: 20px;
            margin: 20px;
        }
        .services {
            display: flex;
            justify-content: space-around;
        }
        .service {
            text-align: center;
            padding: 20px;
            margin: 10px;
            background-color: #f9f9f9;
        }
        img {
            max-width: 100%;
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

    <section id="mayoreo">
        <div class="services">
            <div class="service">
                <h2>Mayoreo</h2>
                <p>Ofrecemos productos a gran escala con descuentos especiales para clientes que desean comprar al por mayor.</p>
            </div>
            <div class="service">
                <h2>Menudeo</h2>
                <p>Venta de productos a pequeña escala para clientes individuales o minoristas.</p>
            </div>
        </div>
    </section>

    <section id="cotizacion">
        <div class="services">
            <div class="service">
                <h2>Cotización</h2>
                <p>Realizamos cotizaciones detalladas y personalizadas para satisfacer las necesidades de tu proyecto de maquinados.</p>
            </div>
            <div class="service">
                <h2>Servicio 1</h2>
                <p>Texto del Servicio 1 inventado.</p>
            </div>
        </div>
    </section>

    <section id="servicio2">
        <div class="services">
            <div class="service">
                <h2>Servicio 2</h2>
                <p>Texto del Servicio 2 inventado.</p>
            </div>
        </div>
    </section>
</body>
</html>
