<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Products;

class Estimates extends Model
{
    use HasFactory;
    protected $table = "estimates";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'estimate_number',	'valid_till', 'currency', 'users_id', 'products_id', 'quantity', 'price', 'total', 'status'];
    protected $dates = ['created_at'];

    public function client()
    {
    return $this->belongsTo(User::class);
    }

    public function products()
    {
    return $this->belongsTo(Products::class);
    }
}