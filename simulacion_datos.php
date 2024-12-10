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
    <link rel="stylesheet" href="css/sim_datos.css">
    <title>Ejercicios</title>
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container my-5">
        <h2>Gráficos Interactivos con Chart.js</h2>
        <p>Ejemplo de gráficos de barras, dispersión, pastel y líneas creados con datos generados.</p>

        <!-- Gráfico de Barras -->
        <div class="mt-5">
            <h3>Gráfico de Barras</h3>
            <canvas id="barChart" width="400" height="200"></canvas>
            <button id="randomizeBarChart" class="btn btn-primary mt-3">Randomizar Datos</button>
        </div>

        <!-- Gráfico de Dispersión -->
        <div class="mt-5">
            <h3>Gráfico de Dispersión</h3>
            <canvas id="scatterChart" width="400" height="200"></canvas>
            <button id="randomizeScatterChart" class="btn btn-primary mt-3">Randomizar Datos</button>
        </div>

        <!-- Gráfico de Corte de Pastel -->
        <div class="mt-5">
            <h3>Gráfico de Corte de Pastel</h3>
            <canvas id="pieChart" width="400" height="200"></canvas>
            <button id="randomizePieChart" class="btn btn-primary mt-3">Randomizar Datos</button>
        </div>

        <!-- Gráfico de Líneas -->
        <div class="mt-5">
            <h3>Gráfico de Líneas</h3>
            <canvas id="lineChart" width="400" height="200"></canvas>
            <button id="randomizeLineChart" class="btn btn-primary mt-3">Randomizar Datos</button>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Script Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- Script graficos -->
    <script src="js/graficos.js"></script>
</body>
</html>
