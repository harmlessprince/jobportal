<?php

use App\Allindustry;
use Illuminate\Database\Seeder;

class AllindustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['industry' => 'Construction'],
            ['industry' => 'Education'],
            ['industry' => 'Energy & Utilities'],
            ['industry' => 'Enforcement & Security'],
            ['industry' => 'Healthcare'],
            ['industry' => 'Hospitality & Hotel'],
            ['industry' => 'IT & Telecoms'],
            ['industry' => 'Entertainment & Events & Sports'],
            ['industry' => 'Law & Compliance'],
            ['industry' => 'Manufacturing & Warehousing'],
            ['industry' => 'Mining, Energy & Metals'],
            ['industry' => 'Real Estate'],
            ['industry' => 'Recruitment'],
            ['industry' => 'Retail, Fashion & FMCG'],
            ['industry' => 'NGO, NPO and Charity'],
            ['industry' => 'Advertising, Media & Communication'],
            ['industry' => 'Agriculture, Fishery & Forestry'],
            ['industry' => 'Automative & Aviation'],
            ['industry' => 'Banking, Finance & Insurance']
        ];


        foreach ($datas as $data) {
            Allindustry::updateOrCreate($data);
        }
    }
}
