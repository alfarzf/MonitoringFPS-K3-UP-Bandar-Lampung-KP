<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
</div><!-- End Page Title -->


<div class="container">
<div class="card-table table">
<h6> Monitoring Kesiapan Fire Protection System (FPS) dan Personil PT PLN NP UP Bandar Lampung dan Unit Pembangkit Tahun 2024</h6>

<table class="tabel-dashboard">
  <tr>
    <th>No.</th>
    <th>Unit Pembangkit</th>
    <th>Januari (%)</th>
    <th>Februari (%)</th>
    <th>Maret (%)</th>
    <th>April (%)</th>
    <th>Mei (%)</th>
    <th>Juni (%)</th>
    <th>Juli (%)</th>
    <th>Agustus (%)</th>
    <th>September (%)</th>
    <th>Oktober (%)</th>
    <th>November (%)</th>
    <th>Desember (%)</th>
  </tr>
      <tr>
        <td>1</td>
        <td>Kantor UP BL</td>
        <?php foreach($UP as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
      </tr>
      <tr>
        <td>2</td>
        <td>PLTD/G Tarahan</td>
        <?php foreach($Tarahan as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
      </tr>
      <tr>
        <td>3</td>
        <td>PLTD Teluk Betung</td>
        <?php foreach($Teluk as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
      </tr>
      <tr>
          <td>4</td>
          <td>PLTD Tegineneng</td>
          <?php foreach($Tegi as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
      </tr>
      <tr>
          <td>5</td>
          <td>PLTA Way Besai</td>
          <?php foreach($Way as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
       </tr>
      <tr>
        <td>6</td>
        <td>PLTA Batu Tegi</td>
        <?php foreach($Batu as $up){?>
          <td><?= $up ?? 0 ?></td>
        <?php } ?>
      </tr>
      <tr>
      <th colspan="2">Rata-Rata Kesiapan FPS & Personil</th>
        <?php for($i=0; $i<12; $i++){?>
        <th><?= $rata = round(($UP[$i]+$Tarahan[$i]+$Teluk[$i]+$Tegi[$i]+$Way[$i]+$Batu[$i])/6, 2) ?></th>
        <?php } ?>
        <!-- <th>95.8</th>
        <th>95.5</th>
        <th>97.6</th>
        <th>97.6</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th>
          <th>0</th> -->
      </tr>

    </table>
  </div>
</div>

  <div class="card chart">
    <h6>Persentase Monitoring Keseiapan Fire Protection System
    </h6>
    <canvas id="barchart"></canvas>
  </div>

  <br>
  <br>
  
    <div class="card chart">
      <h6>Rata-Rata Kesiapan Alat Fire Protection System (FPS) dan Personil PT PLN NP UP Bandar Lampung
      </h6>
      <canvas id="barchart3"></canvas>
    </div>
  
<script>
  var UP = <?= json_encode($UP) ?>;
  var Tarahan = <?= json_encode($Tarahan) ?>;
  var Teluk = <?= json_encode($Teluk) ?>;
  var Tegi = <?= json_encode($Tegi) ?>;
  var Way = <?= json_encode($Way) ?>;
  var Batu = <?= json_encode($Batu) ?>;
    document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('barchart');

  new Chart(ctx, {
    
    type: 'bar',
    data: {
      labels: ['Kantor UP BL', 'PLTD/G Tarahan', 'PLTD Teluk Betung', 'PLTD Teginenang', 'PLTA Way Besai', 'PLTA Batu Tegi'],
      datasets: [
        {
          label: 'Januari',
          data: [UP[0], Tarahan[0], Teluk[0], Tegi[0], Way[0], Batu[0]],
          backgroundColor: 'rgba(22, 79, 99, 0.2)',
          borderColor: 'rgba(22, 79, 99, 1)',
          borderWidth: 1
        },
        {
          label: 'Februari',
          data: [UP[1], Tarahan[1], Teluk[1], Tegi[1], Way[1], Batu[1]],
          backgroundColor: 'rgba(60, 186, 159, 0.2)',
          borderColor: 'rgba(60, 186, 159, 1)',
          borderWidth: 1
        },
        {
          label: 'Maret',
          data: [UP[2], Tarahan[2], Teluk[2], Tegi[2], Way[2], Batu[2]],
          backgroundColor: 'rgba(255, 206, 86, 0.2)',
          borderColor: 'rgba(255, 206, 86, 1)',
          borderWidth: 1
        },
        {
          label: 'April',
          data: [UP[3], Tarahan[3], Teluk[3], Tegi[3], Way[3], Batu[3]],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        },
        {
          label: 'Mei',
          data: [UP[4], Tarahan[4], Teluk[4], Tegi[4], Way[4], Batu[4]],
          backgroundColor: 'rgba(122, 196, 242, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'Juni',
          data: [UP[5], Tarahan[5], Teluk[5], Tegi[5], Way[5], Batu[5]],
          backgroundColor: 'rgba(255, 99, 71, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'Juli',
          data: [UP[6], Tarahan[6], Teluk[6], Tegi[6], Way[6], Batu[6]],
          backgroundColor: 'rgba(144, 238, 144, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'Agustus',
          data: [UP[7], Tarahan[7], Teluk[7], Tegi[7], Way[7], Batu[7]],
          backgroundColor: 'rgba(123, 200, 88, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'September',
          data: [UP[8], Tarahan[8], Teluk[8], Tegi[8], Way[8], Batu[8]],
          backgroundColor: 'rgba(255, 64, 64, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'Oktober',
          data: [UP[9], Tarahan[9], Teluk[9], Tegi[9], Way[9], Batu[9]],
          backgroundColor: 'rgba(67, 134, 245, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'November',
          data: [UP[10], Tarahan[10], Teluk[10], Tegi[10], Way[10], Batu[10]],
          backgroundColor: 'rgba(32, 78, 123, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
        {
          label: 'Desember',
          data: [UP[11], Tarahan[11], Teluk[11], Tegi[11], Way[11], Batu[11]],
          backgroundColor: 'rgba(243, 156, 18, 0.2)',
          borderColor: 'rgba(153, 102, 255, 1)',
          borderWidth: 1
        },
 
      ]
    },
    options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
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
</script>
<script>
  UP = UP.map(Number);
  Tarahan = Tarahan.map(Number);
  Teluk = Teluk.map(Number);
  Tegi =Tegi.map(Number);
  Way = Way.map(Number);
  Batu = Batu.map(Number);

  let array = [];
  for (let i = 0; i < 12; i++) {
    let number = ((UP[i]??=0) + (Tarahan[i]??=0) + (Teluk[i]??=0) + (Tegi[i]??=0) + (Way[i]??=0) + (Batu[i]??=0))/6 ;
    let formatted = number.toFixed(2);
    array.push(formatted); // Adds numbers 0 to 9 to the array
  }

  // var jan = (UP[0] + Tarahan[0] + Teluk[0] + Tegi[0] + Way[0] + Batu[0])/6;
  console.log(array);
  document.addEventListener('DOMContentLoaded', function() {
  const ctx = document.getElementById('barchart3');
  
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [{
        label: 'Tahun 2024',
        data: array,
        backgroundColor: 'rgba(22, 79, 99, 0.2)', // Warna dengan transparansi
        borderColor: 'rgba(22, 79, 99, 1)', // Warna tanpa transparansi
        borderWidth: 1
      }]
    },
    options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
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
</script>
    <?= $this->endSection() ?>