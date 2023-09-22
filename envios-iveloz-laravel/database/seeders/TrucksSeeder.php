<?php

namespace Database\Seeders;

use App\Models\Trucks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrucksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $trucks= [
            ['id'=>'01'],
                ['name'=>'Envios Iveloz'],
                ['campus'=>'Almacen Envios Iveloz'],
        ];

        Trucks::insert($trucks);

    }
}
