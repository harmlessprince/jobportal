<?php

use App\Authority;
use Illuminate\Database\Seeder;

class AuthoritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['authority' => 'student'],
            ['authority' => 'admin'],
            ['authority' => 'company']
        ];

        foreach ($datas as $data ) {
            Authority::updateOrCreate($data);
        }
    }
}
