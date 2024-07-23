<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Dashboard'
        ];
        return view('petugas/laporan-kondisi-alat', $data);
    }
    
    public function Barang()
    {
        $data=[
            'title' => 'Data Barang'
        ];
        return view('admin/data-barang', $data);
    }

    public function Petugas()
    {
        $data=[
            'title' => 'Data Petugas'
        ];
        return view('admin/data-petugas', $data);
    }

    public function Jadwal()
    {
        $data=[
            'title' => 'Jadwal Pemeriksaan'
        ];
        return view('admin/jadwal-pemeriksaan', $data);
    }
}
