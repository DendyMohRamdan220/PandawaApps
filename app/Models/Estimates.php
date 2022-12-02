<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Products;

class Estimates extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ['id', 'estimate_number',	'valid_till', 'currency', 'users_id', 'products_id', 'quantity', 'unit_price', 'amount', 'total', 'status'];
    protected $dates = ['created_at'];

    public function client()
    {
    return $this->belongsTo(Client::class);
    }

    public function products()
    {
    return $this->belongsTo(Products::class);
    }
}