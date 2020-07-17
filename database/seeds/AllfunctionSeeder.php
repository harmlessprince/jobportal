<?php

use App\Allfunction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllfunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['function' => 'Accounting, Auditing & Finance'],
            ['function' => 'Admin & Office'],
            ['function' => 'Building & Architecture'],
            ['function' => 'Community & Social Services'],
            ['function' => 'Consulting & Strategy'],
            ['function' => 'Creative & Design'],
            ['function' => 'Customer Service & Support'],
            ['function' => 'Driver & Transport Services'],
            ['function' => 'Engineering & Technology'],
            ['function' => 'Estate Agents & Property Management'],
            ['function' => 'Farming & Agriculture'],
            ['function' => 'Health & Safety'],
            ['function' => 'Food Services & Catering'],
            ['function' => 'Hospitality & Leisure'],
            ['function' => 'Human Resources'],
            ['function' => 'Legal Services'],
            ['function' => 'Management & Business Development'],
            ['function' => 'Marketing & Communications'],
            ['function' => 'Medical & Pharmaceutical'],
            ['function' => 'Product & Project Management'],
            ['function' => 'Supply Chain & Procurement'],
            ['function' => 'Software & Data'],
            ['function' => 'Trades & Services'],
            ['function' => 'Quality Control & Assurance'],
            ['function' => 'Supply Chain & Procurement'],
            ['function' => 'Research, Teaching & Training'],
            ['function' => 'Supply Chain & Procurement'],
           
        ];


        foreach ($datas as $data) {
            Allfunction::updateOrCreate($data);
        }
       
    }
}
