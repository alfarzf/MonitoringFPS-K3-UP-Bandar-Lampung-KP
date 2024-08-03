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
    protected $allowedFields    = ['id', 'nama'];

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

    public function updateAlat($data, $id){
        $this->update($id, $data);
    }

    public function getLaporan($id=null, $m, $lokasi){
        // if($m != null){
        //     return $this->select('alat.id, alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'laporan.id_lokasi = lokasi.id')->join('alat', 'alat.id=laporan.id_alat', 'left')->where('MONTH(laporan.tanggal_periksa)', $m)->findAll();
        // }
        if($id != null){
            return $this->select('alat.id AS ID Alat, laporan.id AS ID Laporan, alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'laporan.id_lokasi = lokasi.id')->join('alat', 'alat.id=laporan.id_alat', 'left')->where('laporan.id', $id)->orderBy('alat.id', 'ASC')->findAll();
        }
        return $this->select('alat.id AS ID Alat, alat.nama, laporan.id AS ID Laporan, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, lokasi.nama_lokasi, laporan.catatan')->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) ='.$m.') AND laporan.id_lokasi ='. $lokasi, 'left')->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')->orderBy('alat.id', 'ASC')->findAll();
    }

    public function getDataLaporan($nama=null, $m=null, $lokasi=null){
        if($nama != null && $m != null){
            return $this->select('
            alat.nama, 
            laporan.tanggal_periksa, 
            laporan.jumlah_baik, 
            laporan.jumlah_buruk,
            (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input,
            lokasi.nama_lokasi, 
            laporan.catatan, UPPER(MONTHNAME(laporan.tanggal_periksa)) AS month_name')
        ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) ='.$m.')', 'left')
        ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
        ->where('alat.nama', $nama)->findAll();
        }
        return $this->select('alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'laporan.id_lokasi = lokasi.id')->join('laporan', 'alat.id=laporan.id_alat', 'left')->where('IF(laporan.tanggal_periksa IS NOT NULL, MONTH(laporan.tanggal_periksa)=1, 1) AND laporan.id_lokasi=1')->findAll();
    }

    public function getAlat($id=null, $nama=null, $lokasi=null){
        if($id != null){
            return $this->select('alat.*')->where('alat.id', $id)->findAll();
        }
        if($nama != null){
            return $this->select('alat.*')->where('alat.nama', $nama)->findAll();
        }
        return $this->select('alat.*')->orderBy('alat.id', 'ASC')->findAll();
    }

    public function getNama(){
        return $this->distinct()
                    ->select('nama')
                    ->findAll();
    }
    public function getRasio($data, $m, $lokasi, $rasio){
        return $this->select("
        CASE 
            WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN $rasio 
            ELSE ROUND((SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*".$rasio.", 2) 
        END AS rasio
    ")
    ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
    ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
    ->where('laporan.id_lokasi', $lokasi)
    ->whereIn('alat.nama', $data)
    ->findAll();
    }

    public function getTotalRasio($m, $lokasi)
    {
        // Define the subqueries
        $subqueries = [];

        // Subquery 1
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 15
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*15 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
            ->whereIn('alat.nama', ['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor'])
            ->getCompiledSelect();

        // Subquery 2
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 30
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*30 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
            ->whereIn('alat.nama', ['Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump'])
            ->getCompiledSelect();

        // Subquery 3
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 15 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*15 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
            ->whereIn('alat.nama', ['Sprinkle System', 'Gas Suppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)'])
            ->getCompiledSelect();

        // Subquery 4
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 15 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*15 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
            ->whereIn('alat.nama', ['Panel Alarm System', 'Heat Detector', 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance'])
            ->getCompiledSelect();

        // Subquery 5
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 10 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*10 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
            ->whereIn('alat.nama', ['Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper'])
            ->getCompiledSelect();

        // Subquery 6
        $subqueries[] = $this->db->table('alat')
            ->select("
                CASE 
                    WHEN SUM(laporan.jumlah_baik + laporan.jumlah_buruk) = 0 THEN 15 
                    ELSE (SUM(laporan.jumlah_baik) / SUM(laporan.jumlah_baik + laporan.jumlah_buruk))*15 
                END AS rasio
            ")
            
            ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
            ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')
            ->where('laporan.id_lokasi', $lokasi)
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

    public function getJadwal($m=null, $lokasi=null){
        return $this->select('alat.nama, laporan.*, lokasi.nama_lokasi, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input')
        ->join('laporan', 'laporan.id_alat = alat.id AND (laporan.tanggal_periksa IS NULL OR MONTH(laporan.tanggal_periksa) = '.$m.')', 'left')
        ->join('lokasi', 'laporan.id_lokasi = lokasi.id', 'left')->where('(laporan.id_lokasi IS NULL OR laporan.id_lokasi = '.$lokasi.')')
        ->findAll();
    }
}
