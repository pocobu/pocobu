<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin'
            ],
            [
                'id'    => 2,
                'title' => 'Mahasiswa'
            ],
            [
                'id'    => 3,
                'title' => 'Admin UKM'
            ],
        ];

        Role::insert($roles);
    }
}
