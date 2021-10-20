<?php

namespace App\Controllers;
use Config\Services;

class SelamatDatang extends BaseController {
    public function hal_awal(){
        return 'halo saya belajar ci4';
    }

    public function beranda_login()
    {
        return view('halaman/login', [
            'vd' => $this->session->getFlashdata('validator'),
            'Email' => $this->session->get('Email'),
            'Sandi' => $this->session->get('Sandi'),
            'Error' => $this->session->getFlashdata('Error')
        ]);
    }

    public function daftar_member()
    {
        return view('halaman/daftar_member');
    }

    public function hal_beranda()
    {
        return view('halaman/beranda', [
        'Email'=> $this->session->get('Email'), 
        'Sandi'=> $this->session->get('Sandi')
    ]);
    }
}