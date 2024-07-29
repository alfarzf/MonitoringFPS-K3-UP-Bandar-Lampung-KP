document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('barchart3');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [{
        label: 'Tahun 2024',
        data: [98.0, 92.3, 97.8, 100.0, 90.6, 98,8],
        backgroundColor: 'rgba(22, 79, 99, 0.2)', // Warna dengan transparansi
        borderColor: 'rgba(22, 79, 99, 1)', // Warna tanpa transparansi
        borderWidth: 1
      }]
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