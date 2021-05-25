<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VaclocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaclocation1 = new \App\Models\Vaclocation;
        $vaclocation1->zip = '4040';
        $vaclocation1->city = 'Linz';
        $vaclocation1->address = 'Landgutstraße 20';
        $vaclocation1->save();

        $vaclocation2 = new \App\Models\Vaclocation;
        $vaclocation2->zip = '4050';
        $vaclocation2->city = 'Traun';
        $vaclocation2->address = 'Linzerstraße 25';
        $vaclocation2->save();

        $vaclocation3 = new \App\Models\Vaclocation;
        $vaclocation3->zip = '4060';
        $vaclocation3->city = 'Leonding';
        $vaclocation3->address = 'Traunerstraße 20';
        $vaclocation3->save();

        $vaclocation4 = new \App\Models\Vaclocation;
        $vaclocation4->zip = '4232';
        $vaclocation4->city = 'Hagenberg';
        $vaclocation4->address = 'Softwarepark 5';
        $vaclocation4->save();
    }
}
