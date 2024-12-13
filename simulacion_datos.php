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

        <div class="container mt-5">
            <h2 class="text-center">Clustering de Datos</h2>
            <p class="text-center">Utiliza el algoritmo k-means para agrupar los datos proporcionados.</p>

            <div class="text-center">
                <button id="generate-data" class="btn btn-primary mb-3">Generar Datos</button>
                <button id="cluster-data" class="btn btn-success mb-3">Realizar Clustering</button>
            </div>

            <canvas id="clusteringChart" width="300" height="300"></canvas>
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
    <script>
        // Generar datos ficticios
    let rawData = [];
    const generateRandomData = () => {
        rawData = Array.from({ length: 50 }, () => ({
            x: Math.random() * 100,
            y: Math.random() * 100
        }));
        alert('Datos generados exitosamente. ¡Presiona "Realizar Clustering" para continuar!');
        resetChart();
    };

    // Implementar k-means
    const kMeans = (data, k) => {
        const centroids = Array.from({ length: k }, () => ({
            x: Math.random() * 100,
            y: Math.random() * 100
        }));

        let clusters = [];
        let hasConverged = false;

        while (!hasConverged) {
            clusters = data.map(point => {
                const distances = centroids.map(centroid =>
                    Math.sqrt(Math.pow(point.x - centroid.x, 2) + Math.pow(point.y - centroid.y, 2))
                );
                return { ...point, cluster: distances.indexOf(Math.min(...distances)) };
            });

            const newCentroids = centroids.map((_, clusterIndex) => {
                const clusterPoints = clusters.filter(point => point.cluster === clusterIndex);
                const meanX = clusterPoints.reduce((sum, point) => sum + point.x, 0) / clusterPoints.length;
                const meanY = clusterPoints.reduce((sum, point) => sum + point.y, 0) / clusterPoints.length;
                return { x: meanX, y: meanY };
            });

            hasConverged = JSON.stringify(centroids) === JSON.stringify(newCentroids);
            centroids.splice(0, centroids.length, ...newCentroids);
        }

        return clusters;
    };

    // Visualizar clustering
    let clusteringChart;
    const displayClustering = (clusters) => {
        const colors = ['red', 'blue', 'green', 'purple', 'orange'];
        const datasets = Array.from({ length: 3 }, (_, clusterIndex) => ({
            label: `Cluster ${clusterIndex + 1}`,
            data: clusters.filter(point => point.cluster === clusterIndex).map(point => ({ x: point.x, y: point.y })),
            backgroundColor: colors[clusterIndex],
            pointRadius: 5
        }));

        const ctx = document.getElementById('clusteringChart').getContext('2d');
        clusteringChart = new Chart(ctx, {
            type: 'scatter',
            data: { datasets },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Resultados del Clustering (k-means)'
                    }
                },
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom',
                        title: {
                            display: true,
                            text: 'X'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Y'
                        }
                    }
                }
            }
        });
    };

    const resetChart = () => {
        if (clusteringChart) {
            clusteringChart.destroy();
        }
    };

    document.getElementById('generate-data').addEventListener('click', generateRandomData);
    document.getElementById('cluster-data').addEventListener('click', () => {
        if (!rawData.length) {
            alert('Primero debes generar los datos.');
            return;
        }

        const clusters = kMeans(rawData, 3);
        displayClustering(clusters);
    });
    </script>
</body>
</html>
