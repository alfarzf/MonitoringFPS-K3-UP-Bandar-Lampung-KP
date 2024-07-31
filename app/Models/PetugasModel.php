<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'id_lokasi'];

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

    public function getPetugas($id=null) {
        if($id != null){
            return $this->select('users.id, users.nama, users.username, users.id_lokasi, lokasi.nama_lokasi')->join('lokasi' ,'lokasi.id = users.id_lokasi')->where('users.id', $id)->findAll();
        }
        return $this->select('users.id, users.nama, users.username, users.id_lokasi, lokasi.nama_lokasi')->join('lokasi' ,'lokasi.id = users.id_lokasi')->findAll();
    }

    public function updatePetugas($data, $id){
        $this->update($id, $data);
    }

    public function deletePetugas($id){
        return $this->delete($id);
    }
}
