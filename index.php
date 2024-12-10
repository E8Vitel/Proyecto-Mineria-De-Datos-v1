<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio</title>
</head>
<body>
    <?php include 'nav.php'; ?>

    <header class="bg-primary text-white text-center py-5">
        <div class="container" data-aos="fade-down">
            <h1><span class="material-symbols-outlined">school</span> Bienvenido a la Plataforma de Aprendizaje</h1>
            <p class="lead">Explora, aprende y pon a prueba tus conocimientos en programación y minería de datos.</p>
        </div>
    </header>

    <div class="container my-5">
        <section class="mb-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <h2><span class="material-symbols-outlined">info</span> Introducción</h2>
                    <p>Bienvenido a nuestra plataforma de aprendizaje interactivo, donde podrás explorar y aprender de manera práctica sobre diversos temas de programación y análisis de datos. Nuestro objetivo es ofrecerte una experiencia educativa divertida y eficaz, con herramientas y recursos diseñados para mejorar tus habilidades técnicas.</p>
                </div>
            </div>
        </section>

        <section class="mb-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6">
                    <h2><span class="material-symbols-outlined">insights</span> Minería de Datos</h2>
                    <p>La minería de datos es el proceso de descubrir patrones y conocimientos útiles a partir de grandes volúmenes de datos. Utilizando diversas técnicas estadísticas, de aprendizaje automático y de inteligencia artificial, la minería de datos permite transformar datos crudos en información valiosa para la toma de decisiones empresariales y la predicción de tendencias.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/que-es-el-data-mining-y-cual-es-su-objetivo.webp" class="img rounded img-mineria" alt="Minería de Datos">
                </div>
            </div>
        </section>

        <section class="mb-5" data-aos="fade-right">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/D3.Js-Social.png.webp" class="img-fluid img-mineria" alt="D3.js">
                </div>
                <div class="col-md-6">
                    <h2><span class="material-symbols-outlined">bar_chart</span>Visualización de Datos</h2>
                    En nuestra plataforma, podrás interactuar con visualizaciones dinámicas que te ayudarán a comprender mejor los datos. Utilizaremos herramientas de visualización para crear gráficos interactivos que representen de forma clara y atractiva la información extraída mediante minería de datos. Estas visualizaciones permitirán realizar análisis de manera más intuitiva, ofreciendo la posibilidad de manipular los datos, observar tendencias y tomar decisiones basadas en la interpretación visual.</p>
                    <p>Los gráficos interactivos incluyen opciones para filtrar, ampliar, y explorar diferentes vistas de los datos en tiempo real. Podrás ver cómo las variaciones en los datos afectan los resultados de los gráficos y cómo se conectan con los conceptos aprendidos.</p>
                    <a href="simulacion_datos.php" class="btn btn-success"><span class="material-symbols-outlined">visibility</span> Ver Simulaciones</a>
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Plataforma de Aprendizaje. Todos los derechos reservados.</p>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
