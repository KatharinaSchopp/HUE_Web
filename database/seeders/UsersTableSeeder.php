<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new \App\Models\User;
        $user1->username = 'KSchopp';
        $user1->email = 'k.schopp@test.at';
        $user1->password = bcrypt('test');
        $user1->firstname = 'Katharina';
        $user1->lastname = 'Schopp';
        $user1->gender = 'female';
        $user1->phonenumber = '+436803287581';
        $user1->socialSecurityNumber = '4567180899';
        $user1->birthday = new DateTime();
        $user1->vaccinated = true;
        $user1->admin = true;

        $vacc = \App\Models\Vaccination::find(1);
        $user1->vaccination()->associate($vacc);

        $user1->save();

        $user2 = new \App\Models\User;
        $user2->username = 'Tester1';
        $user2->email = 'test@test.at';
        $user2->password = bcrypt('test');
        $user2->firstname = 'Tester';
        $user2->lastname = 'Testington';
        $user2->gender = 'male';
        $user2->phonenumber = '+43650782137812';
        $user2->socialSecurityNumber = '1234010199';
        $user2->birthday = new DateTime();
        $user2->vaccinated = false;
        $user2->admin = false;
        $user2->save();

        $user3 = new \App\Models\User;
        $user3->username = 'pers1';
        $user3->email = 'pers@test.at';
        $user3->password = bcrypt('test');
        $user3->firstname = 'Person';
        $user3->lastname = 'Pers';
        $user3->gender = 'male';
        $user3->phonenumber = '+43650643262';
        $user3->socialSecurityNumber = '1864010199';
        $user3->birthday = new DateTime();
        $user3->vaccinated = false;
        $user3->admin = false;
        $user3->save();

        $user4 = new \App\Models\User;
        $user4->username = 'TerranceH';
        $user4->email = 'ter@test.at';
        $user4->password = bcrypt('test');
        $user4->firstname = 'Terrance';
        $user4->lastname = 'Hill';
        $user4->gender = 'male';
        $user4->phonenumber = '+43660754763';
        $user4->socialSecurityNumber = '1634010199';
        $user4->birthday = new DateTime();
        $user4->vaccinated = false;
        $user4->admin = false;

        $vacc = \App\Models\Vaccination::find(5);
        $user4->vaccination()->associate($vacc);

        $user4->save();

        $user5 = new \App\Models\User;
        $user5->username = 'JaneD';
        $user5->email = 'jd@test.at';
        $user5->password = bcrypt('test');
        $user5->firstname = 'Jane';
        $user5->lastname = 'Doe';
        $user5->gender = 'female';
        $user5->phonenumber = '+43676373734';
        $user5->socialSecurityNumber = '9563010199';
        $user5->birthday = new DateTime();
        $user5->vaccinated = false;
        $user5->admin = false;

        $vacc = \App\Models\Vaccination::find(1);
        $user5->vaccination()->associate($vacc);

        $user5->save();

        $user6 = new \App\Models\User;
        $user6->username = 'ElsaFr';
        $user6->email = 'elsa@test.at';
        $user6->password = bcrypt('test');
        $user6->firstname = 'Elsa';
        $user6->lastname = 'Frozen';
        $user6->gender = 'female';
        $user6->phonenumber = '+436603456272';
        $user6->socialSecurityNumber = '1723010199';
        $user6->birthday = new DateTime();
        $user6->vaccinated = false;
        $user6->admin = false;

        $vacc = \App\Models\Vaccination::find(1);
        $user6->vaccination()->associate($vacc);

        $user6->save();
    }
}
