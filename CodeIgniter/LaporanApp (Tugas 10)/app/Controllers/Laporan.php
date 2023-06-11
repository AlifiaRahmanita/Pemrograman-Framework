<?php

namespace App\Controllers;

use App\Controllers\BaseController;


use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $Laporan;
    public function __construct()
    {
        $this->Laporan = new LaporanModel();
    }


    public function index()
    {
        $data['data_laporan'] = $this->Laporan->getLaporan();
        return view("laporan/index", $data);
        
    }
}
