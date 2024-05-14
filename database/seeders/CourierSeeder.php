<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courier::create([
            "name" => "courier",
            "email" => "courier@courier.com",
            "password" => Hash::make("courier"),
            "address" => "aaa aaaa aaa",
            "mobile" => "123-123-123",
            "company_id" => 1
        ]);
        Courier::create([
            "name" => "user",
            "email" => "user@user.com",
            "password" => Hash::make("user"),
            "address" => "aaa aaaa aaa",
            "mobile" => "321-321-321",
            "company_id" => 1
        ]);
        Courier::create([
            "name" => "aaa",
            "email" => "aaa@aaa.com",
            "password" => Hash::make("aaa"),
            "address" => "aaa aaaa aaa",
            "mobile" => "456-456-456",
            "company_id" => 1
        ]);


        Courier::create([
            "name" => "courier",
            "email" => "cou@cou.com",
            "password" => Hash::make("cou"),
            "address" => "aaa aaaa aaa",
            "mobile" => "123-123-123",
            "company_id" => 2
        ]);
        Courier::create([
            "name" => "user",
            "email" => "us@us.com",
            "password" => Hash::make("us"),
            "address" => "aaa aaaa aaa",
            "mobile" => "321-321-321",
            "company_id" => 2
        ]);
        Courier::create([
            "name" => "aaa",
            "email" => "bbb@bbb.com",
            "password" => Hash::make("bbb"),
            "address" => "aaa aaaa aaa",
            "mobile" => "456-456-456",
            "company_id" => 2
        ]);
    }
}
