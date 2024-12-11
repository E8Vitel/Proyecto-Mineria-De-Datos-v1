// Función para generar datos aleatorios
function getRandomData(count, min, max) {
  return Array.from({ length: count }, () => Math.floor(Math.random() * (max - min + 1)) + min);
}

// Datos para el gráfico de barras
const barData = {
  labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
  datasets: [{
      label: 'Ventas (en miles)',
      data: getRandomData(5, 10, 100),
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
  }]
};

// Gráfico de Barras
const barChart = new Chart(document.getElementById('barChart'), {
  type: 'bar',
  data: barData,
  options: {
      responsive: true,
      scales: {
          y: {
              beginAtZero: true
          }
      }
  }
});

// Datos para el gráfico de corte de pastel
const pieData = {
  labels: ['Manzanas', 'Bananas', 'Cerezas', 'Uvas'],
  datasets: [{
      label: 'Frutas',
      data: getRandomData(4, 10, 50),
      backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
      borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
      borderWidth: 1
  }]
};

// Gráfico de Corte de Pastel (Pie)
const pieChart = new Chart(document.getElementById('pieChart'), {
  type: 'pie',
  data: pieData,
  options: {
      responsive: true
  }
});

// Datos para el gráfico de líneas (con todos los meses)
const lineData = {
  labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
  datasets: [{
      label: 'Temperaturas (°C)',
      data: getRandomData(12, -5, 30),
      fill: false,
      borderColor: 'rgba(75, 192, 192, 1)',
      tension: 0.1
  }]
};

// Gráfico de Líneas
const lineChart = new Chart(document.getElementById('lineChart'), {
  type: 'line',
  data: lineData,
  options: {
      responsive: true,
      scales: {
          y: {
              beginAtZero: true
          }
      }
  }
});

// Funciones para randomizar los datos de cada gráfico
document.getElementById('randomizeBarChart').addEventListener('click', function() {
  barChart.data.datasets[0].data = getRandomData(5, 10, 100);
  barChart.update();
});

document.getElementById('randomizePieChart').addEventListener('click', function() {
  pieChart.data.datasets[0].data = getRandomData(4, 10, 50);
  pieChart.update();
});

document.getElementById('randomizeLineChart').addEventListener('click', function() {
  lineChart.data.datasets[0].data = getRandomData(12, -5, 30);
  lineChart.update();
});