<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return float|int|void
     * @throws Exception
     */

    private function random()
    {
        return random_int(1, 1000)/100;
    }

    /**
     * @throws Exception
     */
    public function run(): void
    {
        for ($i = 1; $i < 25; $i++) {
            DB::table('orders')->insert(
                [
                    'number' => $i, // Номер заказа
                    'dept' => random_int(1, 10), // Отдел
                    'name' => 'Заказ ' . $i,
                    'status' => 'готов',
                    'product_area' => $this->random(),
                    'sliding' => $this->random(), // Раздвижка
                    'blind' => $this->random(), // Глухарь
                    'impost' => random_int(1, 100), // Импост
                    'P400_02' => $this->random(),
                    'blind_angle' => $this->random(), //Глухарь углы
                    'm/n' => $this->random(), // м/с
                    'door_mono_cold' => $this->random(), // Дверь одно створка хол
                    'door_double_cold' => $this->random(),
                    'stained_glass_cold' => $this->random(),
                    'door_mono_warm' => $this->random(),
                    'door_double_warm' => $this->random(),
                    'stained_glass_warm' => $this->random(), // Витраж тёплый
                    'non-standard' => $this->random(),
                    'facade' => $this->random(),
                    'sandwich' => $this->random(),
                    'cost' => $this->random(),  // Стоимость
                    'product_area_fact' => $this->random(),
                ]
            );
        }
    }
}
