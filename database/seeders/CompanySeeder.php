<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            "name" => "company",
            "email" => "company@company.com",
            "password" => Hash::make("company"),
        ]);
        Company::create([
            "name" => "user",
            "email" => "user@user.com",
            "password" => Hash::make("user"),
        ]);
    }
}
