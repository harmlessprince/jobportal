<?php

use App\Availability;
use Illuminate\Database\Seeder;

class AvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
            ['availability' => 'immediately'],
            ['availability' => '1 week'],
            ['availability' => '2 weeks'],
            ['availability' => '3 weeks'],
            ['availability' => '1 month'],
            ['availability' => '2 months'],
            ['availability' => '3 Months']
        ];

        foreach ($datas as $data){
            Availability::updateorCreate($data);
        } 
        
    }
}
