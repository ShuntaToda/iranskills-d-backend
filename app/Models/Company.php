<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasFactory;

    public function get_orders()
    {
        return $this->hasManyThrough(Order::class, Courier::class, "company_id", "courier_id")->get();
    }
}
