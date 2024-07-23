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
    protected $allowedFields    = [];

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
    public function getLaporan($id=null, $m=null, $lokasi=null){
        if($m != null){
            return $this->select('alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id')->join('alat', 'alat.id=laporan.id_alat', 'left')->where('MONTH(laporan.tanggal_periksa)', $m)->findAll();
        }
        return $this->select('alat.nama, laporan.tanggal_periksa, laporan.jumlah_baik, laporan.jumlah_buruk, (laporan.jumlah_baik + laporan.jumlah_buruk) AS total_input, alat.jumlah, lokasi.nama_lokasi, laporan.catatan')->join('lokasi', 'alat.lokasi = lokasi.id')->join('laporan', 'alat.id=laporan.id_alat', 'left')->where('IF(laporan.tanggal_periksa IS NOT NULL, MONTH(laporan.tanggal_periksa)=1, 1)')->findAll();
    }
}
