<?php

namespace App\Controllers;
use App\Models\PenggunaModel_12200879;
use CodeIgniter\Model;
use Config\Services;

class Login extends BaseController{

    public function cekLogin(){
        $Email = $this->request->getPost('Email');
        $Sandi = $this->request->getPost('Sandi');

        $v = $this->validate([
            'Email' => 'required',
            'Sandi' => 'required'
        ], [
            'Email' =>[
                'required' => 'Email tidak boleh kosong'
            ],
            'Sandi' =>[
                'required' => 'Sandi tidak boleh kosong'
            ]
        ]);

        $this->session->set('Email', $Email);
        $this->session->set('Sandi', $Sandi);

        if( $v == false ){
            $this->session->setFlashdata('validator', $this->validator);
            return redirect()->to('/login');
        }else{

            $vl = (new PenggunaModel_12200879())->cekLogin($Email, $Sandi);

            if($vl == null){
                return redirect()->to('/login')->with('Error', 'User dan Sandi salah');
            }else{
                $this->session->set('sudahLogin', true);
                return redirect()->to('/beranda');
            }
        }
    }

    public function beranda(){

    }
}