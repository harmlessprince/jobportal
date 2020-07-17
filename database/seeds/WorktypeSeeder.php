<?php

use App\Worktype;
use Illuminate\Database\Seeder;

class WorktypeSeeder extends Seeder
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
            ['work_type'    =>  'part-time'],
            ['work_type'    =>  'full-time'],
            ['work_type'    =>  'remote'],
        ];

        foreach($datas as $data){
            Worktype::updateorCreate($data);
        }
    }
}
