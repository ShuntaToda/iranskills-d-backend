<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "email",
        "password",
        "address",
        "mobile",
        "company_id",
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
