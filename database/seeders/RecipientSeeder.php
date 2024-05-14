<?php

namespace Database\Seeders;

use App\Models\Recipient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipient::create([
            "name" => "recipient",
            "position" => "recipient position",
            "address" => "recipient address",
            "mobile" => "000-000-000",
        ]);
        Recipient::create([
            "name" => "user",
            "position" => "user position",
            "address" => "user address",
            "mobile" => "000-000-000",
        ]);
        Recipient::create([
            "name" => "aaa",
            "position" => "aaa position",
            "address" => "aaa address",
            "mobile" => "000-000-000",
        ]);
    }
}
