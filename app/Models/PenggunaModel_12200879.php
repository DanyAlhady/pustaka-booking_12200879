<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel_12200879 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200879';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

/**
 * method untuk cek login dari tabel pengguna
 * berdasarkan nama dan password
 * @var String $user
 * @var String pass
 */
public function cekLogin($user, $pass){
    return $this->where('nama', $user)
                ->where('password', md5($pass))->first();
    }
    
}
