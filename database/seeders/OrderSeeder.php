<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            "name" => "order",
            "courier_id" => 1,
            "recipient_id" => 1,
            "status" => "delivering",
            "location" => "in car",
        ]);
        Order::create([
            "name" => "aaa",
            "courier_id" => 1,
            "recipient_id" => 2,
            "status" => "bbb",
            "location" => "ccc",
        ]);
        Order::create([
            "name" => "order",
            "courier_id" => 2,
            "recipient_id" => 1,
            "status" => "delivering",
            "location" => "in car",
        ]);
        Order::create([
            "name" => "order",
            "courier_id" => 4,
            "recipient_id" => 1,
            "status" => "delivering",
            "location" => "in car",
        ]);
        Order::create([
            "name" => "aaa",
            "courier_id" => 4,
            "recipient_id" => 2,
            "status" => "bbb",
            "location" => "ccc",
        ]);
        Order::create([
            "name" => "order",
            "courier_id" => 4,
            "recipient_id" => 1,
            "status" => "delivering",
            "location" => "in car",
        ]);
    }
}
