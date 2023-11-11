<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acerca de Maquinados XYZ</title>
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

        p {
            text-align: justify;
            line-height: 1.6;
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
    <h1>Maquinados XYZ</h1>
</header>

<nav>
    <a href="{{ url('/principal') }}">Inicio</a>
    <a href="{{ url('/servicios') }}">Servicios</a>
    <a href="{{ url('/acerca') }}">Acerca de</a>
    <a href="{{ url('/contacto') }}">Contacto</a>
</nav>

<div class="container">
    <h2>Acerca de Maquinados XYZ</h2>
    <p>
        Maquinados XYZ es una empresa especializada en servicios de maquinado de alta precisión. Con más de 20 años de experiencia en la industria, nos hemos consolidado como líderes en la fabricación de piezas y componentes para una amplia gama de sectores, incluyendo automotriz, aeroespacial, médico, entre otros.

        Nuestro equipo altamente calificado y nuestra infraestructura avanzada nos permiten ofrecer soluciones de maquinado de vanguardia, cumpliendo con los estándares más exigentes de calidad y precisión. Nos enorgullecemos de nuestra capacidad para trabajar con una variedad de materiales, desde metales comunes hasta aleaciones de alta resistencia.

        En Maquinados XYZ, nos comprometemos a satisfacer las necesidades de nuestros clientes, proporcionando un servicio personalizado, tiempos de entrega rápidos y productos de la más alta calidad.

        No importa la complejidad del proyecto, estamos dedicados a cumplir y superar las expectativas, convirtiéndonos en su socio confiable para todas sus necesidades de maquinado.
    </p>
</div>

</body>
</html>
