<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\MasterData\ConfigPayment;


class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_payment = [
            [
              'fee' => '150000',
              'vat' => '20',
              'created_at' => now(),
              'updated_at' => now(),
            ]
        ];

        ConfigPayment::insert($config_payment);
    }
}
