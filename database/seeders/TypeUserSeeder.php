<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = [
            [
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        TypeUser::insert($type_user);
    }
}
