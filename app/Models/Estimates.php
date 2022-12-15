<?php

namespace App\Models;

use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimates extends Model
{
    use HasFactory;
    protected $table = "estimates";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'estimate_number',
        'valid_till',
        'currency',
        'user_id',
        'products_id',
        'quantity',
        'unit_price',
        'total',
        'status',
    ];

    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
