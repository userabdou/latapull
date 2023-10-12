<?php

namespace Database\Seeders;

use App\Models\Agrement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgrementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agrement::factory(10)->create(); // Adjust the number of records as needed

    }
}
