<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() //Add 60 fake data to table records
    {
        \App\Models\Record::factory(60)->create();
    }
}
