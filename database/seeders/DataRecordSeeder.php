<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataRecord;

class DataRecordSeeder extends Seeder
{
    public function run()
    {
        DataRecord::factory()->count(50)->create();
    }
}
