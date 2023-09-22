<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $companies= [
            ['id'=>'01'],
                ['name'=>'Envios Iveloz'],
                ['campus'=>'Almacen Envios Iveloz'],
        ];

        Company::insert($companies);

    }
}
