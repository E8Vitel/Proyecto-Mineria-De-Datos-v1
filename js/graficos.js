    // Envolver todo en una función para manejar la verificación de librerías
    function initializeApp() {
        // Verificar dependencias
        if (typeof Papa === 'undefined') {
            console.error('Papa Parse no está cargado correctamente');
            alert('Error: No se pudo cargar la librería Papa Parse');
            return;
        }

        if (typeof Chart === 'undefined') {
            console.error('Chart.js no está cargado correctamente');
            alert('Error: No se pudo cargar la librería Chart.js');
            return;
        }

        let parsedData = [];
        const csvFileInput = document.getElementById('csvFileInput');
        const tableHeader = document.getElementById('tableHeader');
        const tableBody = document.getElementById('tableBody');
        const cleanDataBtn = document.getElementById('cleanDataBtn');
        const fillDataBtn = document.getElementById('fillDataBtn');
        const barChartCanvas = document.getElementById('barChart');
        const clusterChartCanvas = document.getElementById('clusterChart');

        // Variables globales para los gráficos
        let barChart = null;
        let clusterChart = null;


        csvFileInput.addEventListener('change', handleFileUpload);
        cleanDataBtn.addEventListener('click', cleanData);
        fillDataBtn.addEventListener('click', fillMissingData);

        function handleFileUpload(event) {
            const file = event.target.files[0];
            Papa.parse(file, {
                header: true,
                complete: function(results) {
                    parsedData = results.data;
                    displayTable(parsedData);
                    createCharts();
                },
                error: function(error) {
                    console.error('Error parsing CSV:', error);
                    alert('Error al procesar el archivo CSV');
                }
            });
        }

        function displayTable(data) {
            // Limpiar tabla existente
            tableHeader.innerHTML = '';
            tableBody.innerHTML = '';

            if (data.length === 0) return;

            // Crear encabezados
            const headers = Object.keys(data[0]);
            headers.forEach(header => {
                const th = document.createElement('th');
                th.textContent = header;
                tableHeader.appendChild(th);
            });

            // Llenar tabla
            data.forEach(row => {
                const tr = document.createElement('tr');
                headers.forEach(header => {
                    const td = document.createElement('td');
                    td.textContent = row[header];
                    tr.appendChild(td);
                });
                tableBody.appendChild(tr);
            });
        }

        function cleanData() {
            const cleanedData = parsedData.filter(row => {
                return Object.values(row).every(val => val !== '' && val !== null && val !== undefined);
            });
            parsedData = cleanedData;
            displayTable(parsedData);
            createCharts();
        }

        function fillMissingData() {
            const headers = Object.keys(parsedData[0]);
            const numericHeaders = headers.filter(header => {
                return parsedData.some(row => !isNaN(parseFloat(row[header])));
            });

            numericHeaders.forEach(header => {
                const values = parsedData.map(row => parseFloat(row[header])).filter(val => !isNaN(val));
                const mean = values.reduce((a, b) => a + b, 0) / values.length;

                parsedData = parsedData.map(row => {
                    if (row[header] === '' || row[header] === null) {
                        row[header] = mean.toFixed(2);
                    }
                    return row;
                });
            });

            displayTable(parsedData);
            createCharts();
        }

        function createCharts() {
            // Verificar si hay datos para graficar
            if (parsedData.length === 0) return;

            // Destruir gráficos existentes de manera segura
            if (barChart) {
                barChart.destroy();
                barChart = null;
            }
            if (clusterChart) {
                clusterChart.destroy();
                clusterChart = null;
            }

            // Bar Chart
            barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: {
                    labels: parsedData.map((_, index) => `Registro ${index + 1}`),
                    datasets: Object.keys(parsedData[0]).filter(header => {
                        return parsedData.some(row => !isNaN(parseFloat(row[header])));
                    }).map(header => ({
                        label: header,
                        data: parsedData.map(row => parseFloat(row[header])),
                        backgroundColor: `rgba(${Math.random()*255},${Math.random()*255},${Math.random()*255},0.6)`
                    }))
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Clustering Chart (usando K-means simulado)
            function kMeansClustering(data, k = 3) {
                const numericData = data.map(row => 
                    Object.values(row)
                        .filter(val => !isNaN(parseFloat(val)))
                        .map(parseFloat)
                );

                // Implementación simplificada de clustering
                const centroids = numericData.slice(0, k);
                return centroids.map((centroid, index) => ({
                    label: `Cluster ${index + 1}`,
                    data: numericData,
                    backgroundColor: `rgba(${Math.random()*255},${Math.random()*255},${Math.random()*255},0.6)`
                }));
            }

            clusterChart = new Chart(clusterChartCanvas, {
                type: 'scatter',
                data: {
                    datasets: kMeansClustering(parsedData)
                },
                options: {
                    scales: {
                        x: { type: 'linear', position: 'bottom' }
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        }
    }

    // Esperar a que el DOM esté completamente cargado
    document.addEventListener('DOMContentLoaded', initializeApp);