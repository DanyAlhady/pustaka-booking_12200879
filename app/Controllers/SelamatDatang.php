<?php

namespace App\Controllers;

class SelamatDatang extends BaseController {
    public function hal_awal(){
        return 'halo saya belajar ci4';
    }

    public function beranda_login()
    {
        return view( name:'halaman/login');
    }

    public function daftar_member()
    {
        return view( name:'halaman/daftar_member');
    }
}