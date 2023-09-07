<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->create([
            "name" => "Netcommerce",
        ]);
        Company::factory()->create([
            "name" => "Continental",
        ]);
        Company::factory()->create([
            "name" => "Flex",
        ]);
        Company::factory()->create([
            "name" => "Intel",
        ]);
        Company::factory()->create([
            "name" => "IBM",
        ]);
    }
}
