<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'DANY ALHADY',
            'password' => md5('12200879')
            ],
            [
                'nama' => 'admin',
            'password' => md5('12345')
            ],
            [
                'nama' => '12200879',
            'password' => md5('DANY ALHADY')
            ]
        ];
        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
