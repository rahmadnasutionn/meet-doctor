<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consultation = [
            [
               'name' => 'Jantung Sesak',
               'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Consultation::insert($consultation);
    }
}
