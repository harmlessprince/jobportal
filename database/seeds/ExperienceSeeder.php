<?php

use App\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [['experience' => 'No Experience/Less Than 1 Year'], ['experience' => '1 year']];
        
        $count = 19;

        for ($i = 2; $i <= $count; $i++) {

            array_push($datas, ['experience' => $i . ' years']);
        }

        $datas = array_merge($datas, [['experience'  => 'More than 20 years']]);

        foreach ($datas as $data) {
            Experience::updateorCreate($data);
        }
        
    }
}
