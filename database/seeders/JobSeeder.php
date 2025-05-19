<?php

namespace Database\Seeders;

use App\Models\Jobapi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Jobapi::create([
                'title' => 'Job ' . Str::random(5),
                'description' => 'Description for job ' . Str::random(20),
                'salary' => rand(30000, 120000),
                'location' => 'Location ' . Str::random(6),
            ]);
        }
    }
}
