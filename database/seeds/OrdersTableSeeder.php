<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 1; $i < 100; $i++) {
            DB::table('orders')->insert(
                [
                    'number' => $i,
                    'dept' => random_int(1, 10),
                    'name' => 'Заказ ' . $i,
                    'status' => 'готов',
                    'sliding' => random_int(1, 50),
                    'blind' => random_int(1, 50),
                    'impost' => random_int(1, 50),
                    'P400/02' => random_int(1, 50),
                    'blind_angle' => random_int(1, 50),
                    'm/n' => random_int(1, 50),
                    'door_mono_cold' => random_int(1, 50),
                    'door_double_cold' => random_int(1, 50),
                    'stained_glass_cold' => random_int(1, 50),
                    'door_mono_warm' => random_int(1, 50),
                    'door_double_warm' => random_int(1, 50),
                    'stained_glass_warm' => random_int(1, 50),
                    'non-standard' => random_int(1, 50),
                    'facade' => random_int(1, 50),
                    'sandwich' => random_int(1, 50),
                    //'cost' => random_int(1, 50),
                    'product_area' => random_int(1, 50),
                ]
            );
        }
    }
}
