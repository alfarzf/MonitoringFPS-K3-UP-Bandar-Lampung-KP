<?= $this->extend('template/template_admin')?>
<?= $this->section('content')?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kelola Data Alat</h1>
  </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
      
        <div class="card-table table">
          <h6>Data Alat Kesiapan Fire Protection System</h6>
          
          <div class="filter-container">
            <div id="filter_div">
              <label for="bulan-filter">Waktu: </label>
              <select id="bulan-filter">
                <option value="">Januari</option>
                <option value="">Februari</option>
                <option value="">Maret</option>
                <option value="">April</option>
                <option value="">Mei</option>
                <option value="">Juni</option>
                <option value="">Juli</option>
                <option value="">Agustus</option>
                <option value="">September</option>
                <option value="">Oktober</option>
                <option value="">November</option>
                <option value="">Desember</option>
              </select>
            
              <div id="filter_div">
                <label for="lokasi-filter">Lokasi: </label>
                <select id="lokasi-filter">
                  <option value="">Kantor UP BL</option>
                  <option value="">PLTD/G Tarahan</option>
                  <option value="">PLTD Teluk Betung</option>
                  <option value="">PLTD Tegineneng</option>
                  <option value="">PLTA Way Besai</option>
                  <option value="">PLTA Batu Tegi</option>
                </select>
              </div>
            </div>
          </div>

          <div class="btn-container">
            <button type="button" class="btn btn-primary btn-smaller" data-bs-toggle="modal" data-bs-target="#modalTambahAlat">
              Tambah Alat
            </button>
          </div>
  
          <table>
            <tr class="header1">
              <td rowspan="2">No.</td>
              <td rowspan="2">Aspek</td>
              <th colspan="6">Kondisi Alat Kantor UP dan ULPL Mei 2024</th>
              <td rowspan="2">Total</td>
              <td rowspan="2">Aksi</td>
            </tr>
            <tr class="header2">
              <th>Kantor UP</th>
              <th>PLTD/G Tarahan</th>
              <th>PLTD Teluk Betung</th>
              <th>PLTD Tegineneng</th>
              <th>PLTA Way Besai</th>
              <th>PLTA Batu Tegi</th>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Peralatan Sistem Fire Fighting</td>
            </tr>
            <tr>
              <td colspan="2">Peralatan Sistem Manual Fire Protection</td>
              <td colspan="22"></td>
            </tr>
            <tr>
              <td>1.</td>
              <td>APAT</td>
              <td>0</td>
              <td>4</td>
              <td>2</td>
              <td>6</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>APAR/APAB</td>
              <td>20</td>
              <td>39</td>
              <td>42</td>
              <td>47</td>
              <td>49</td>
              <td>26</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Box Hydrant Outdoor</td>
              <td>3</td>
              <td>7</td>
              <td>7</td>
              <td>6</td>
              <td>3</td>
              <td>5</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Box Hydrant Indoor</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>2</td>
              <td>11</td>
              <td></td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td colspan="2">Peralatan Sistem Fire Pump</td>
              <td colspan="22"></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Jockey Pump</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>6.</td>
              <td>ELectric Pump</td>
              <td>0</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Emergency Diesel Pump</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>8.</td>
              <td>Emergency Sea Water Pump</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Portable Pump</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td colspan="2">Automation Protection</td>
              <td colspan="22"></td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Sprinkle System</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Gas Sppression system (CO2/Clean Agent)</td>
              <td>3</td>
              <td>12</td>
              <td>0</td>
              <td>1</td>
              <td>61</td>
              <td>10</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Foam System</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>3</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>13.</td>
              <td>Water Spray/Water Mist</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>87</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Chemical Dust Suppression</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>6</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>15.</td>
              <td>Fire Prevention System (Sergi)</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td colspan="2">Alarm and Detection System</td>
              <td colspan="22"></td>
            </tr>
            <tr>
              <td>16.</td>
              <td>Panel Alarm System</td>
              <td>5</td>
              <td>0</td>
              <td>0</td>
              <td>17</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>17.</td>
              <td>Heat Detector</td>
              <td>5</td>
              <td>0</td>
              <td>0</td>
              <td>17</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>18.</td>
              <td>Smoke Detector</td>
              <td>34</td>
              <td>7</td>
              <td>10</td>
              <td>9</td>
              <td>93</td>
              <td>10</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>19.</td>
              <td>Flame Detector</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>36</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>20.</td>
              <td>Gas Detector</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>21.</td>
              <td>Vaccum Dust Collector</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>22.</td>
              <td>Vaccum Truck</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>23.</td>
              <td>Fire Truck (Mobil Damkar)</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>24.</td>
              <td>Self-Contain Breathing Apparatus (SCBA)</td>
              <td>4</td>
              <td>2</td>
              <td>3</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>25.</td>
              <td>Ambulance</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Sarana Penyelamatan Jiwa</td>
            </tr>
            <tr>
              <td>26.</td>
              <td>Pintu Kebakaran</td>
              <td>0</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>3</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>27.</td>
              <td>Tangga Kebakaran</td>
              <td>0</td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>28.</td>
              <td>Tempat Berhimpun/ Assembly Point</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>1</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>29.</td>
              <td>Lampu Penerangan Darurat</td>
              <td>0</td>
              <td>4</td>
              <td>0</td>
              <td>3</td>
              <td>8</td>
              <td>15</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>30.</td>
              <td>Tanda Petunjuk Arah Jalan Keluar</td>
              <td>3</td>
              <td>15</td>
              <td>30</td>
              <td>2</td>
              <td>14</td>
              <td>19</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>31.</td>
              <td>Pressurized Fan</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>32.</td>
              <td>Smoke Extract Fan dan Intake Fan</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>33.</td>
              <td>Air Handling Unit (AHU)</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>3</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td>34.</td>
              <td>Fire Damper</td>
              <td>2</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
            <tr>
              <td class="nama-aspek" colspan="25" bgcolor="#3EC1F3">Kesiapan Personil Tanggap Darurat</td>
            </tr>
            <tr>
              <td>35.</td>
              <td>Kesiapan Personil</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>0</td>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditAlat"><i
                    class="fas fa-edit"></i></button>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapusAlat"><i
                    class="fas fa-trash-alt"></i></button>
                </button>
              </td>
            </tr>
          </table>
        </div>
      
      </div>
    </section>

<!-- Modal Tambah Alat -->
<div class="modal fade" id="modalTambahAlat" tabindex="-1" aria-labelledby="modalTambahAlatLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahAlatLabel">Tambah Alat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                  <div class="col-md-15 mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" id="inama_alat" placeholder="">
                  </div>
                      <div class="col-md-3 mb-3">
                        <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                        <input type="text" class="form-control" id="total_alat">
                      </div>
                    
                  <div class="col-md-6 mb-3">
                    <label for="inputlokasi" class="form-label">Lokasi</label>
                    <select id="inputlokasi" class="form-control">
                      <option selected>Pilih</option>
                      <option value="">Kantor UP BL</option>
                      <option value="">PLTD/G Tarahan</option>
                      <option value="">PLTD Teluk Betung</option>
                      <option value="">PLTD Tegineneng</option>
                      <option value="">PLTA Way Besai</option>
                      <option value="">PLTA Batu Tegi</option>
                    </select>
                  </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Data yang dimasukan adalah benar 
                    </label>
                  </div>
                </div>
                <div class="btn-container btn-smaller">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Alat -->
    <div class="modal fade" id="modalEditAlat" tabindex="-1" aria-labelledby="modalEditAlatLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEditAlatLabel">Edit Data Alat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
    
          <div class="modal-body">
            <div class="form-input-data">
              <form class="container-fluid">
                <div class="col-md-15 mb-3">
                  <label for="nama_alat" class="form-label">Nama Alat</label>
                  <input type="text" class="form-control" id="inama_alat" placeholder="">
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="kondisi_baik" class="form-label">Kondisi Baik</label>
                    <input type="text" class="form-control" id="kondisi_baik">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="kondisi_buruk" class="form-label">Kondisi Rusak</label>
                    <input type="text" class="form-control" id="kondisi_buruk">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="total_alat" class="form-label">Total Alat Keseluruhan</label>
                    <input type="text" class="form-control" id="total_alat">
                  </div>
                </div>
    
                <div class="col-md-6 mb-3">
                  <label for="inputlokasi" class="form-label">Lokasi</label>
                  <select id="inputlokasi" class="form-control">
                    <option selected>Pilih</option>
                    <option value="">Kantor UP BL</option>
                    <option value="">PLTD/G Tarahan</option>
                    <option value="">PLTD Teluk Betung</option>
                    <option value="">PLTD Tegineneng</option>
                    <option value="">PLTA Way Besai</option>
                    <option value="">PLTA Batu Tegi</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Data yang dimasukan adalah benar
                    </label>
                  </div>
                </div>
                <div class="btn-container btn-smaller">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Hapus Data Alat -->
    <div class="modal fade" id="modalHapusAlat" tabindex="-1" aria-labelledby="modalHapusAlatLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalHapusAlat">Hapus Data Alat</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
                  <div class="modal-body">
                    <p>Anda yakin menghapus alat ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Iya</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                  </div>
                </div>
                
          </div>
    </div>

<?= $this->endSection() ?>
  <!-- </main>End #main -->
