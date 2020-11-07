<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicants')->insert([
            'name' =>Str::random(10),
            'surname' => Str::random(10),
            'position' => Str::random(10),
            'phone'=> 1,
            'is_hired' => 2
        ]);
    }
}
