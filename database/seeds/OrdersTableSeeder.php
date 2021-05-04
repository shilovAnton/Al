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
                    'product_area' => random_int(1, 50),
                ]
            );
        }
    }
}
