<?php

namespace Database\Seeders;

use App\Models\MotoModel;
use App\Models\Motos;
use App\Models\MotosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert some sample motos into the database
        $motos = [
            ['modelo' => 'CG 160 Fan', 'placa' => 'AAA1A11', 'ano' => 2022, 'cliente_id' => 1],
            ['modelo' => 'CG 160 Start', 'placa' => 'BBB2B22', 'ano' => 2021, 'cliente_id' => 1],
            ['modelo' => 'CB 300F Twister', 'placa' => 'CCC3C33', 'ano' => 2023, 'cliente_id' => 2],
            ['modelo' => 'Biz 125', 'placa' => 'DDD4D44', 'ano' => 2020, 'cliente_id' => 2],
            ['modelo' => 'XRE 300', 'placa' => 'EEE5E55', 'ano' => 2022, 'cliente_id' => 3],
            ['modelo' => 'Fazer 250', 'placa' => 'FFF6F66', 'ano' => 2021, 'cliente_id' => 3],
            ['modelo' => 'Factor 150', 'placa' => 'GGG7G77', 'ano' => 2020, 'cliente_id' => 4],
            ['modelo' => 'Lander 250', 'placa' => 'HHH8H88', 'ano' => 2023, 'cliente_id' => 4],
            ['modelo' => 'Titan 160', 'placa' => 'III9I99', 'ano' => 2022, 'cliente_id' => 5],
            ['modelo' => 'PCX 150', 'placa' => 'JJJ0J00', 'ano' => 2021, 'cliente_id' => 5],
            // Adicione mais modelos conforme necessário
        ];

        foreach ($motos as $moto) {
            Motos::create($moto);
        }

        $this->call(MotoSeeder::class);
    }
}
