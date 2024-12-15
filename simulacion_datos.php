<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Analizador de Datos CSV</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sim_datos.css">
    <style>
        .chart-container { height: 400px; margin-top: 20px; }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container">
        <h1 class="text-center mb-4 mt-5">Analizador de Datos CSV</h1>
        <h2 class="text-center text-muted mb-5">Procesamiento y Visualización de Datos</h2>

        <div class="row mb-4">
            <div class="col text-center">
                <h3>Descargar CSVs de Ejemplo</h3>
                <div class="btn-group" role="group">
                    <a href="example1.csv" class="btn btn-primary">CSV Ejemplo 1</a>
                    <a href="example2.csv" class="btn btn-success">CSV Ejemplo 2</a>
                    <a href="example3.csv" class="btn btn-info">CSV Ejemplo 3</a>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col mt-4">
                <h3>Subir Archivo CSV</h3>
                <p>(Subir datasets grandes puede provocar errores visuales)</p>
                <input type="file" id="csvFileInput" accept=".csv" class="form-control">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col mt-4">
                <h3>Datos del CSV:</h3>
                <table id="csvTable" class="table table-striped">
                    <thead>
                        <tr id="tableHeader"></tr>
                    </thead>
                    <tbody id="tableBody"></tbody>
                </table>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col text-center">
                <h3>Procesamiento de Datos</h3>
                <button id="cleanDataBtn" class="btn btn-warning me-2">Limpiar Datos</button>
                <button id="fillDataBtn" class="btn btn-danger">Rellenar Datos Vacíos</button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h3 class="text-center">Gráfico de Barras</h3>
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Gráfico de Clustering</h3>
                <div class="chart-container">
                    <canvas id="clusterChart"></canvas>
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

    <script src="js/graficos.js"></script>
</body>
