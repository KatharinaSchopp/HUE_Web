<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

class VaccinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacc1 = new \App\Models\Vaccination;
        $vacc1->date = new DateTime('2021-04-11');
        $vacc1->maxCapacity = 50;
        $vacc1->startTimeslot = new DateTime('2021-04-11T06:00');
        $vacc1->endTimeslot = new DateTime('2021-04-11T21:00');

        $vaclocation = \App\Models\Vaclocation::find(3);
        $vacc1->vaclocation()->associate($vaclocation);

        $vacc1->save();

        $vacc2 = new \App\Models\Vaccination;
        $vacc2->date = new DateTime('2021-05-01');
        $vacc2->maxCapacity = 80;
        $vacc2->startTimeslot = new DateTime('2021-05-01T07:00');
        $vacc2->endTimeslot = new DateTime('2021-05-01T18:00');

        $vaclocation = \App\Models\Vaclocation::find(4);
        $vacc2->vaclocation()->associate($vaclocation);

        $vacc2->save();

        $vacc3 = new \App\Models\Vaccination;
        $vacc3->date = new DateTime('2021-05-01');
        $vacc3->maxCapacity = 80;
        $vacc3->startTimeslot = new DateTime('2021-05-01T07:00');
        $vacc3->endTimeslot = new DateTime('2021-05-01T18:00');

        $vaclocation = \App\Models\Vaclocation::find(3);
        $vacc3->vaclocation()->associate($vaclocation);

        $vacc3->save();

        $vacc4 = new \App\Models\Vaccination;
        $vacc4->date = new DateTime('2021-06-01');
        $vacc4->maxCapacity = 80;
        $vacc4->startTimeslot = new DateTime('2021-06-01T07:00');
        $vacc4->endTimeslot = new DateTime('2021-06-01T18:00');

        $vaclocation = \App\Models\Vaclocation::find(1);
        $vacc4->vaclocation()->associate($vaclocation);

        $vacc4->save();

        $vacc5 = new \App\Models\Vaccination;
        $vacc5->date = new DateTime('2021-05-14');
        $vacc5->maxCapacity = 80;
        $vacc5->startTimeslot = new DateTime('2021-05-14T07:00');
        $vacc5->endTimeslot = new DateTime('2021-05-14T18:00');

        $vaclocation = \App\Models\Vaclocation::find(4);
        $vacc5->vaclocation()->associate($vaclocation);

        $vacc5->save();

        $vacc6 = new \App\Models\Vaccination;
        $vacc6->date = new DateTime('2021-05-17');
        $vacc6->maxCapacity = 80;
        $vacc6->startTimeslot = new DateTime('2021-05-17T07:00');
        $vacc6->endTimeslot = new DateTime('2021-05-17T18:00');

        $vaclocation = \App\Models\Vaclocation::find(3);
        $vacc6->vaclocation()->associate($vaclocation);

        $vacc6->save();

        $vacc7 = new \App\Models\Vaccination;
        $vacc7->date = new DateTime('2021-05-22');
        $vacc7->maxCapacity = 80;
        $vacc7->startTimeslot = new DateTime('2021-05-22T07:00');
        $vacc7->endTimeslot = new DateTime('2021-05-22T18:00');

        $vaclocation = \App\Models\Vaclocation::find(1);
        $vacc7->vaclocation()->associate($vaclocation);

        $vacc7->save();

        $vacc8 = new \App\Models\Vaccination;
        $vacc8->date = new DateTime('2021-05-30');
        $vacc8->maxCapacity = 80;
        $vacc8->startTimeslot = new DateTime('2021-05-30T07:00');
        $vacc8->endTimeslot = new DateTime('2021-05-30T18:00');

        $vaclocation = \App\Models\Vaclocation::find(2);
        $vacc8->vaclocation()->associate($vaclocation);

        $vacc8->save();
    }
}
