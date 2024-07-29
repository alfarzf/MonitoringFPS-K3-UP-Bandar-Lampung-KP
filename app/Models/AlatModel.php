<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $table            = 'alat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nama', 'jumlah', 'lokasi'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function saveAlat($data){
        $this->insert($data);
    }

    public function getLaporan($id=null, $m, $lokasi){
        // if($m != null){
        //     return $this->select('alat.id, alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id')->join('alat', 'alat.id=laporan.id_alat', 'left')->where('MONTH(laporan.tanggal_periksa)', $m)->findAll();
        // }
        if($id != null){
            return $this->select('laporan.id, alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id')->join('alat', 'alat.id=laporan.id_alat', 'left')->where('laporan.id', $id)->findAll();
        }
        return $this->select('alat.id, alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id', 'left')->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) ='.$m.')', 'left')->where('alat.lokasi='.$lokasi)->findAll();
    }

    public function getDataLaporan($nama=null, $m=null, $lokasi=null){
        if($nama != null && $m != null){
            return $this->select('
            alat.nama, 
            laporan.tanggal_periksa, 
            laporan.jumlah_baik, 
            laporan.jumlah_buruk,
            (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, 
            alat.jumlah, 
            lokasi.nama_lokasi, 
            laporan.catatan, UPPER(MONTHNAME(laporan.tanggal_periksa)) AS month_name')
        ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) ='.$m.')', 'left')
        ->where('alat.nama', $nama)->findAll();
        }
        return $this->select('alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id')->join('laporan', 'alat.id=laporan.id_alat', 'left')->where('IF(laporan.tanggal_periksa IS NOT NULL, MONTH(laporan.tanggal_periksa)=1, 1) AND alat.lokasi=1')->findAll();
    }

    public function getAlat($id=null, $nama=null, $lokasi=null){
        if($id != null){
            return $this->select('alat.*, lokasi.nama_lokasi')->join('lokasi', 'alat.lokasi = lokasi.id')->where('alat.id', $id)->findAll();
        }elseif($nama != null){
            return $this->select('alat.*, lokasi.nama_lokasi')->join('lokasi', 'alat.lokasi = lokasi.id')->where('alat.nama', $nama)->findAll();
        }
        elseif($lokasi != null){
            return $this->select('alat.*, lokasi.nama_lokasi')->join('lokasi', 'alat.lokasi = lokasi.id')->where('alat.lokasi', $lokasi)->findAll();
        }
        return $this->select('alat.nama, alat.jumlah, lokasi.nama_lokasi')->join('lokasi', 'alat.lokasi = lokasi.id')->findAll();
    }

    public function getTotalRasio($m, $lokasi)
    {
        // Define the subqueries
        $subqueries = [];

        // Subquery 1
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*15 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor'])
            ->getCompiledSelect();

        // Subquery 2
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*30 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump'])
            ->getCompiledSelect();

        // Subquery 3
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*15 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)'])
            ->getCompiledSelect();

        // Subquery 4
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*15 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['Panel Alarm System', 'Heat Detector', 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance'])
            ->getCompiledSelect();

        // Subquery 5
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*10 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper'])
            ->getCompiledSelect();

        // Subquery 6
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(alat.jumlah) = 0 THEN 1 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(alat.jumlah))*15 
                END AS rasio
            ")
            ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->where('alat.lokasi', $lokasi)
            ->whereIn('alat.nama', ['Kesiapan Personil'])
            ->getCompiledSelect();

        // Combine subqueries
        $combinedQuery = implode(' UNION ALL ', $subqueries);

        // Final query
        $finalQuery = "SELECT ROUND(SUM(rasio), 2) AS total_rasio FROM ({$combinedQuery}) AS combined_rasio";

        // Execute the query and get the result
        $result = $this->db->query($finalQuery)->getRow();
        return $result->total_rasio;
    }

    public function getJadwal($nama=null, $m, $lokasi)
    {
        if($nama != null){
                return $this->select('
                alat.nama,
                jadwal.tanggal_periksa as jadwal_tanggal_periksa,
                laporan.tanggal_periksa as laporan_tanggal_periksa, 
                laporan.jumlah_baik, 
                laporan.jumlah_buruk,
                (laporan.jumlah_baik + laporan.jumlah_buruk) as total_input, 
                alat.jumlah, 
                lokasi.nama_lokasi, 
                laporan.catatan')
                ->join('lokasi', 'alat.lokasi = lokasi.id', 'left')->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
                ->join('jadwal', 'jadwal.nama_alat = alat.nama AND (jadwal.tanggal_periksa IS NULL OR MONTH(jadwal.tanggal_periksa) = '.$m.')', 'left')->where('lokasi.id', $lokasi)->where('jadwal.nama_alat', $nama)
                ->findAll();
        }

        return $this->select('
        alat.nama,
        jadwal.tanggal_periksa as jadwal_tanggal_periksa,
        laporan.tanggal_periksa as laporan_tanggal_periksa, 
        laporan.jumlah_baik, 
        laporan.jumlah_buruk,
        (laporan.jumlah_baik + laporan.jumlah_buruk) as total_input, 
        alat.jumlah, 
        lokasi.nama_lokasi, 
        laporan.catatan
    ')->join('lokasi', 'alat.lokasi = lokasi.id', 'left')->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
    ->join('jadwal', 'jadwal.nama_alat = alat.nama AND (jadwal.tanggal_periksa IS NULL OR MONTH(jadwal.tanggal_periksa) = '.$m.')', 'left')->where('lokasi.id', $lokasi)
    ->findAll();
        // return $query->getResult();
    }
}
