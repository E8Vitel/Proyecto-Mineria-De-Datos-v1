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
    <link rel="stylesheet" href="css/ejercicios.css">
    <title>Ejercicios</title>
</head>
<body style="text-align: justify;">
    <?php include 'nav.php'; ?>
    <div class="container-fluid py-5 contenedor">
        <div class="text-center mb-5" data-aos="fade-down">
            <h1 class="display-4">Ejercicios Interactivos</h1>
            <p class="text-muted">Explora y aprende mediante quizes y simulaciones interactivas.</p>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h3 class="card-title">Quiz Interactivo</h3>
                        <p class="card-text">Pon a prueba tus conocimientos con nuestros quizes dinámicos.</p>
                        <a href="php/quiz.php" class="btn btn-primary">¡Iniciar Quiz!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h3 class="card-title">Simulación de Datos</h3>
                        <p class="card-text">Interactúa con los datos en tiempo real y explora patrones visuales.</p>
                        <a href="simulacion_datos.php" class="btn btn-success"><span class="material-symbols-outlined">visibility</span> Ver Simulaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
