document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('barchart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Kantor UP BL', 'PLTD/G Tarahan', 'PLTD Teluk Betung', 'PLTD Teginenang', 'PLTA Way Besai', 'PLTA Batu Tegi'],
      datasets: [
        {
          label: 'Januari',
          data: [98.0, 92.3, 97.8, 100.0, 90.6, 98,8],
          backgroundColor: 'rgba(22, 79, 99, 0.2)',
          borderColor: 'rgba(22, 79, 99, 1)',
          borderWidth: 1
        },
        {
          label: 'Februari',
          data: [98.0, 92.3, 97.0, 98.2, 90.6, 98.6],
          backgroundColor: 'rgba(60, 186, 159, 0.2)',
          borderColor: 'rgba(60, 186, 159, 1)',
          borderWidth: 1
        },
        {
          label: 'Maret',
          data: [98.0, 90.8, 97.0, 98.2, 90.6, 98.6],
          backgroundColor: 'rgba(255, 206, 86, 0.2)',
          borderColor: 'rgba(255, 206, 86, 1)',
          borderWidth: 1
        },
        {
          label: 'April',
          data: [98.7, 98.7, 97.8, 100.0, 96.9, 98.9],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        },
        {
          label: 'Mei',
          data: [98.9, 98.7, 97.8, 100.0, 96.9, 98.9],
          backgroundColor: 'rgba(153, 102, 255, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
 
      ]
    },
    options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: false,
              min: 80,
              ticks: {
                callback: function(value) {
                  return value + '%';
                }
              }
            }
          }
        }
      });
});


