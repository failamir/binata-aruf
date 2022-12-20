<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                  => 1,
                'name'                => 'Admin',
                'email'               => 'admin@admin.com',
                'password'            => bcrypt('password'),
                'remember_token'      => null,
                'approved'            => 1,
                'umur'                => '',
                'nama_panggilan'      => '',
                'tempt_tanggal_lahir' => '',
                'alamat_asal'         => '',
                'domisili'            => '',
                'pekerjaan'           => '',
                'suku'                => '',
                'warna_kulit'         => '',
                'nomor'               => '',
                'no_wa'               => '',
                'akun_instagram'      => '',
                'akun_facebook'       => '',
                'telegram'            => '',
                'twiter'              => '',
                'tik_tok'             => '',
                'web'                 => '',
            ],
        ];

        User::insert($users);
    }
}
