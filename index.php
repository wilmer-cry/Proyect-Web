<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Agrega aquí tus enlaces a hojas de estilo y otros recursos -->
</head>
<body>

    <!-- Navbar -->
    <nav>
    <img src="ruta_del_logo.png" alt="Logo de la empresa" class="logos">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Carrito</a></li>
    </ul>
</nav>


    <section class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/ttu.jpg" class="d-block w-100" alt="Imagen del Carousel">
                <div class="carousel-caption d-none d-md-block">
                    <h3>NEXUS</h3>
                    <p>Tu visión, nuestra misión: Resultados excepcionales.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section id="sobreNosotros">
        <div>
            <h3>¿Quienes Somos?</h3>
            <p>
            En un mundo donde la seguridad y la conectividad son vitales, 
            somos tu respuesta completa en Nexus GT. Nuestra
             experiencia en sistemas de seguridad brinda paz al resguardar 
             lo que más valoras. Establecemos una red robusta y protegida, 
             con puntos estratégicos y cortafuegos confiables para tus datos. 
             Más allá de lo técnico, nuestra maestría en diseño gráfico y 
             fotografía amplifica tu presencia visual. Además, ofrecemos 
             mantenimiento integral para servidores y dispositivos, asegurando
              un funcionamiento sin interrupciones. 
            En Nexus GT, elevamos tus metas con soluciones que superan expectativas.
            </p>
        </div>
    </section>


    <!-- Contenido de la página de inicio -->
    <div class="container mt-5" data-interval="1000">
        <div id="logoCarousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <img src="src/hik.png" class="logo" alt="Logo Marca 1">
                        <img src="src/netgate.png" class="logo" alt="Logo Marca 2">
                        <img src="src/syn.png" class="logo" alt="Logo Marca 3">
                        <img src="src/ubiquiti.png" class="logo" alt="Logo Marca 4">
                        <img src="src/daua.png" class="logo" alt="Logo Marca 4">
                    
                    </div>
                </div>
                <!-- Agrega más elementos carousel-item para más grupos de logos -->
            </div>
        </div>
        <p class="text-center mt-3">
            Confiamos en las marcas más destacadas para garantizar tu satisfacción total.
        </p>
    </div>



    <header>
        <h1>Bienvenido a nuestra Tienda en Línea</h1>
        <p>Explora nuestra selección de productos de alta calidad.</p>
    </header>

    <section>
        <h2>Productos Destacados</h2>
        <!-- Aquí puedes mostrar una lista de productos destacados con imágenes y enlaces -->
    </section>

    <section>
        <h2>Ofertas Especiales</h2>
        <!-- Aquí puedes mostrar las ofertas especiales con imágenes y enlaces -->
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Tienda en Línea. Todos los derechos reservados.</p>
    </footer>

     <!-- Enlaces a scripts de Bootstrap y otros recursos -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="ruta_de_tu_js"></script>
</body>
</html>
