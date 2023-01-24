<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'kode' => 'Admin1',
            // 'nis'    => '203910',
            'fullname'    => 'Zikri Ramdhan',
            'username' => 'Zikri',
            'password'    => Hash::make("password"),
            // 'kelas'    => 'XII-RPL',
            // 'alamat' => 'JL.BUNGA SARI',
            // 'verif'    => '',
            'role' => 'admin',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '2023-01-06',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA001',
            'nis'    => '0056378',
            'fullname'    => 'Zuanu Silamndra',
            'username' => 'Zuan',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII - RPL',
            'alamat' => 'JL. Manunggal IX No. 98',
            // 'verif'    => '',
            'role' => 'user',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '',
            'foto' => '',
        ]);
    }
}
