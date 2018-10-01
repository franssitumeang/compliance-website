<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class SuryaController extends AppController
{
    public function pengajuanDokumen()
    {
        $title = "Pengajuan Dokumen";
        $this->set('title', $title);
    }

    public function tambahDokumen()
    {
        $title = "Tambah Dokumen";
        $this->set('title', $title);
    }

    public function profilPerusahaan()
    {
        $title = "Profil Perusahaan";
        $this->set('title', $title);
    }

    public function peraturanPerusahaan()
    {
        $title = "Peraturan Perusahaan";
        $this->set('title', $title);
    }

}