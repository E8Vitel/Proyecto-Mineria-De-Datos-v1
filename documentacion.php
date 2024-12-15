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
    <link rel="stylesheet" href="css/docs.css">
    <title>Documentación</title>
    <style>
        .section-title {
        margin-top: 30px;
        color:rgb(7, 71, 139);
        }
        .card-body {
        background-color: #f8f9fa;
        }
        .card-header {
        background-color: rgb(7, 71, 139);
        color: white;
        }
        .card-footer {
        background-color: #f8f9fa;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include 'nav.php';?>
    <div class="container mt-5">
        
        <!-- Introducción a la minería de datos -->
        <section id="introduccion">
        <h1 class="section-title">¿Qué es la Minería de Datos?</h1>
        <div class="card mb-4">
            <div class="card-header">
            Introducción a la Minería de Datos
            </div>
            <div class="card-body">
            <p>La <strong>Minería de Datos</strong> es el proceso de descubrir patrones y conocimientos útiles en grandes volúmenes de datos. Se utiliza en áreas como la predicción de tendencias, clasificación de información y análisis de comportamiento.</p>
            <p>Las técnicas utilizadas incluyen algoritmos de aprendizaje automático, análisis estadístico y bases de datos.</p>
            </div>
        </div>

        <h2 class="section-title">Conceptos Clave en Minería de Datos</h2>
        <ul>
            <li><strong>Data Mining</strong>: Proceso de explorar grandes conjuntos de datos para descubrir patrones significativos.</li>
            <li><strong>Clasificación</strong>: Asignar una categoría a un conjunto de datos basado en características.</li>
            <li><strong>Clustering</strong>: Agrupar datos similares en categorías o "clusters".</li>
            <li><strong>Regresión</strong>: Predecir un valor numérico continuo basado en un conjunto de datos de entrenamiento.</li>
            <li><strong>Asociación</strong>: Identificación de patrones de co-ocurrencia entre elementos de un conjunto de datos.</li>
        </ul>
        </section>

        <!-- Herramientas de Minería de Datos -->
        <section id="herramientas">
        <h1 class="section-title">Herramientas Populares de Minería de Datos</h1>

        <div class="card mb-4">
            <div class="card-header">
                Orange Data Mining
            </div>
            <div class="card-body">
                <p><strong>Orange</strong> es una herramienta de código abierto para análisis de datos que facilita la minería de datos, aprendizaje automático y visualización de datos.</p>
                <ul>
                    <li>Interfaz gráfica amigable para usuarios sin experiencia en programación.</li>
                    <li>Amplia variedad de algoritmos de aprendizaje automático.</li>
                    <li>Integración con Python para usuarios avanzados.</li>
                </ul>
            </div>
        </div>

        <h2 class="section-title">Comparativa de diferentes Herramientas</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Característica</th>
                <th>Orange</th>
                <th>KNIME</th>
                <th>RapidMiner</th>
                <th>Weka</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Código Abierto</td>
                <td>Sí</td>
                <td>Sí</td>
                <td>Parcialmente</td>
                <td>Sí</td>
            </tr>
            <tr>
                <td>Facilidad de Uso</td>
                <td>Muy fácil</td>
                <td>Moderada</td>
                <td>Moderada</td>
                <td>Moderada</td>
            </tr>
            <tr>
                <td>Interfaz Gráfica</td>
                <td>Sí</td>
                <td>Sí</td>
                <td>Sí</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Lenguaje</td>
                <td>Python, Visual</td>
                <td>Java</td>
                <td>Java, Visual</td>
                <td>Java</td>
            </tr>
            <tr>
                <td>Propósito Principal</td>
                <td>Análisis visual de datos</td>
                <td>Análisis de datos y modelado</td>
                <td>Modelado predictivo</td>
                <td>Análisis estadístico</td>
            </tr>
            </tbody>
        </table>
        </section>
        <h1 class="section-title">Recursos Externos</h1>
        <div class="ps-5 pt-4 pe-5 pb-1" style="background-color: #f8f9fa; border: 1px solid rgb(199, 199, 199); border-radius: 15px">
            <!-- Recursos Externos -->
            <section id="recursos">
            <h2>Bases de Datos Públicas (Datasets)</h2>
            <ul>
                <li><a href="https://www.kaggle.com/datasets" target="_blank">Kaggle</a></li>
                <li><a href="https://archive.ics.uci.edu/ml/index.php" target="_blank">UCI Machine Learning Repository</a></li>
                <li><a href="https://www.openml.org" target="_blank">OpenML</a></li>
            </ul>

            <h2 class="mt-5">Tutoriales y Artículos</h2>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=HXjnDIgGDuI&list=PLmNPvQr9Tf-ZSDLwOzxpvY-HrE0yv-8Fy" target="_blank">Tutorial de Orange Data Mining</a></li>
                <li><a href="https://www.kdnuggets.com" target="_blank">Artículos sobre Minería de Datos</a></li>
            </ul>
            </section>

            <!-- Videos -->
            <section id="demostracion">
            <h2 class="mt-5">Videos Explicativos</h2>

            <div class="container mt-3">
                <!-- Contenedor de los videos -->
                <div class="row justify-content-center">
                    <!-- Video Clasificación -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/f4QhPmWNzP0?si=94T2sjriRF0cboBf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body text-center">
                                <label for="video1">Clasificación</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Redes Neuronales -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/zvln81OCja4?si=K-A0n8N-PHRhxH8K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body text-center">
                                <label for="video2">Redes Neuronales</label>
                            </div>
                        </div>
                    </div>

                    <!-- Video Regresión Logística -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/-Ha6tVIM7xc?si=VXDTUjUjl_uTVcMz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body text-center">
                                <label for="video3">Regresión Logística</label>
                            </div>
                        </div>
                    </div>

                    <!-- Video Arboles de Clasificación -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/8JMH0LqFGCg?si=Rbp8SCgGvUdLIC_b" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body text-center">
                                <label for="video4">Arboles de Clasificación</label>
                            </div>
                        </div>
                    </div>

                    <!-- Video k-Means Clusters -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/gJX2jR0-PTY?si=mj54p7xDKEFAR6zj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="card-body text-center">
                                <label for="video5">k-Means Clusters</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">Ejemplo de gráfico interactivo</h2>
        <canvas class="mt-3 mb-5" id="myChart"></canvas>
    </div>
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    // Datos para el gráfico de barras
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico: barras
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre'], // Etiquetas del eje X
            datasets: [{
                label: 'Ventas Mensuales - Celulares',
                data: [12, 19, 3, 5, 2, 3, 8, 10, 4], // Datos para las barras
                backgroundColor: 'rgba(34, 98, 216, 0.2)', // Color de fondo
                borderColor: 'rgb(99, 154, 255)', // Color del borde
                borderWidth: 1
            }, {
                label: 'Ventas Mensuales - Computadores',
                data: [15, 8, 5, 7, 12, 6, 9, 4, 10], // Datos para otro conjunto
                backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color de fondo diferente
                borderColor: 'rgb(255, 99, 132)', // Color de borde diferente
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top', // Posición de la leyenda
                },
                tooltip: {
                    enabled: true, // Habilitar tooltips
                    callbacks: {
                        // Personalizar los tooltips
                        label: function(tooltipItem) {
                            return tooltipItem.dataset.label + ': ' + tooltipItem.raw + ' unidades';
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Ventas Mensuales por Producto', // Título del gráfico
                    font: {
                        size: 18
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true, // El eje Y comienza en cero
                    ticks: {
                        stepSize: 5, // Paso para las marcas del eje Y
                    }
                }
            }
        }
    });
</script>

</body>
</html>