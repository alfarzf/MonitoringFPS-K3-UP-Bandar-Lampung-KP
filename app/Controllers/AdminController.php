<?php

namespace App\Controllers;
use App\Models\LaporanModel;
use App\Models\AlatModel;
use App\Models\PetugasModel;
use App\Models\JadwalModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Shield\Entities\User;
use \DateTime;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public $laporanModel;
    public $alatModel;
    public $petugasModel;
    public $jadwalModel;

    public function __construct(){
        $this->laporanModel = new LaporanModel();
        $this->alatModel = new AlatModel();
        $this->petugasModel = new PetugasModel();
        $this->jadwalModel = new JadwalModel();
    }
    
    public function index()
    {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12];
        $data = [
            'title' => 'Dashboard',
            'UP' => [],
            'Tarahan' => [],
            'Teluk' => [],
            'Tegi' => [],
            'Way' => [],
            'Batu' => [],
        ];
        foreach ($items as $item) {
            $data['UP'][] = $this->alatModel->getTotalRasio($item, 1);
        }
        foreach ($items as $item) {
            $data['Tarahan'][] = $this->alatModel->getTotalRasio($item, 2);
        }
        foreach ($items as $item) {
            $data['Teluk'][] = $this->alatModel->getTotalRasio($item, 3);
        }
        foreach ($items as $item) {
            $data['Tegi'][] = $this->alatModel->getTotalRasio($item, 4);
        }
        foreach ($items as $item) {
            $data['Way'][] = $this->alatModel->getTotalRasio($item, 5);
        }
        foreach ($items as $item) {
            $data['Batu'][] = $this->alatModel->getTotalRasio($item, 6);
        }
        // for ($i = 1; $i <= 6; $i++) {
        //     // dd('hitung'.$i);
        //     $fungsi='hitung'.$i;
        //     $data[$fungsi]=$this->alatModel->$fungsi(1,1);
        // }
        // $data['laporan']=$this->alatModel->hitung2(1,1);
        // dd($data);
        return view('admin/dashboard-user', $data);
    }

    public function alat()
    {
        $alat=['APAT', 'APAR/APAB', 'Box Hydrant Outdoor', 'Box Hydrant Indoor', 'Jockey Pump', 'Electric Pump', 'Emergency Diesel Pump', 'Emergency Sea Water Pump', 'Portable Pump', 'Sprinkle System', 'Gas Sppression system (CO2/Clean Agent)', 'Foam System', 'Water Spray/Water Mist', 'Chemical Dust Suppression', 'Fire Prevention System (Sergi)', 'Panel Alarm System', 'Heat Detector' , 'Smoke Detector', 'Flame Detector', 'Gas Detector', 'Vaccum Dust Collector', 'Vaccum Truck', 'Fire Truck (Mobil Damkar)', 'Self-Contain Breathing Apparatus (SCBA)', 'Ambulance', 'Pintu Kebakaran', 'Tangga Kebakaran', 'Tempat Berhimpun/ Assembly Point', 'Lampu Penerangan Darurat', 'Tanda Petunjuk Arah Jalan Keluar', 'Pressurized Fan', 'Smoke Extract Fan dan Intake Fan', 'Air Handling Unit (AHU)', 'Fire Damper', 'Kesiapan Personil'];
        // $alat=$this->alatModel->getNama();
        $data = [
            'title' => 'Data Alat',
            'laporan' => []
        ];
        // dd($this->alatModel->getAlat(null, "APAT", null));
        foreach($alat as $al){
            $data['laporan'][]=$this->alatModel->getAlat(null, $al, null);
            // dd($data[$al]);
        }
        // dd($data);
        return view('admin/kelola-data-alat', $data);
    }

    public function petugas()
    {
        $user = auth()->user();
        $userId = $user->id;
        // dd($userId);
        $data = [
            'title' => 'Data Petugas',
            'petugas' => $this->petugasModel->getPetugas()
        ];
        return view('admin/kelola-data-petugas', $data);
    }

    public function petugas_update() {
        $data = [
            'id_lokasi' => $this->request->getPost('id_lokasi') 
        ];
        $this->petugasModel->updatePetugas($data, $this->request->getPost('id_petugas'));
    return redirect()->to('admin/petugas');
    }

    public function petugas_destroy() {
        // dd($this->request->getPost('id_petugas'));
    $this->petugasModel->deletePetugas($this->request->getPost('id_petugas'));
    return redirect()->to('admin/petugas');
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal Pemeriksaan',
            'jadwal' => $this->alatModel->getJadwal(null, $m=1, null)
        ];
        if($this->request->getPost()){
            $m = $this->request->getPost('bulan');
            // dd($m);
            $data['jadwal'] = $this->alatModel->getJadwal(null, $m, null);
        }
        // dd($data['jadwal']);
        return view('admin/kelola-jadwal-pemeriksaan', $data);
    }

    public function jadwal_store(){
        $dateString = $this->request->getVar('jadwal_pemeriksaan'); // Your input date
        // dd($dateString);
        // $date = DateTime::createFromFormat('d-m-Y', $dateString);
        // dd($date);
        // $day = $date->format('d');
        $timestamp = strtotime($dateString);
        $day = date('d', $timestamp);
        // dd($day);
        if($this->request->getVar('jadwal_id')!=null){
            $data=[
                'tanggal_periksa' => $dateString
            ];
            $this->jadwalModel->updateJadwal($data, $this->request->getVar('jadwal_id'));
        }else{
            for ($i=1; $i <= 12 ; $i++) { 
                if ($i<10) {
                    $data=[
                        'nama_alat' => $this->request->getVar('nama_alat'),
                        'tanggal_periksa' => '2024'.'-0'.$i.'-'.$day
                    ];
                    $this->jadwalModel->saveJadwal($data);
                }
                else{
                    $data=[
                        'nama_alat' => $this->request->getVar('nama_alat'),
                        'tanggal_periksa' => '2024'.'-'.$i.'-'.$day
                    ];
                    $this->jadwalModel->saveJadwal($data);
                }
            }

        } return redirect()->to('/admin/jadwal');
        

    }

    public function alat_update(){
        $validation = \Config\Services::validation();

    $validation->setRules([
        'jumlah' => 'required|numeric'
    ]);
    // dd($this->request->getPost());
    if ($validation->withRequest($this->request)->run()) {
        // Form is valid, handle data processing
        // For example, save data to the database
        // Return a success message
        
        $this->alatModel->updateAlat($this->request->getVar('jumlah'), $this->request->getVar('lokasi'), $this->request->getVar('nama_alat'));
        return $this->response->setJSON(['success' => true]);
    } else {
        // Validation failed, return errors
        return $this->response->setJSON(['errors' => $validation->getErrors()]);
    }
    }
}
