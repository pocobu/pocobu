<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Super Admin',
                'email'          => 'super.admin@admin.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Mahasiswa',
                'email'          => 'mahasiswa@mahasiswa.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Admin UKM',
                'email'          => 'adminukm@adminukm.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
