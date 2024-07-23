document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('barchart2');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [{
        label: 'Tahun 2024',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: 'rgba(22, 79, 99, 0.2)', // Warna dengan transparansi
        borderColor: 'rgba(22, 79, 99, 1)', // Warna tanpa transparansi
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});

