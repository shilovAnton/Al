<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $job_price = [
        'Раздвижка' => 135,
        'Глухарь' => 90,
        'Импост' => 45,
        'P400/02' => 180,
        'Глухарь углы' => 120,
        'м/с' => 115,
        'дверь хол. 1 ств.' => 300,
        'дверь хол. 2 ств.' => 450,
        'Витраж холодный' => 180,
        'Тёплая 1 ств.' => 350,
        'Тёплая 2 ств.' => 500,
        'Витраж тёплый' => 375,
        'Не стандарт' => 600,
        'Фасад' => 150,
        'Сэндвич' => 35,
    ];

    private $price_of_work;

    public function run()
    {
        foreach ($this->job_price as $key => $value) {
            DB::table('prices')->insert(
                [
                    'job_name' => $key,
                    'price_of_work' => $value,
                ]
            );
        }
    }
}
