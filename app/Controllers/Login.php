<?php

namespace App\Controllers;

class Login extends BaseController{

    public function cekLogin(){
        $Email = $this->request->getPost('Email');
        $Sandi = $this->request->getPost('Sandi');
        return view('halaman/beranda', ['Email'=>$Email, 'Sandi'=>$Sandi]);
    }

}