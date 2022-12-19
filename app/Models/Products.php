<?php

namespace App\Models;

use App\Models\Estimates;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'price',
        'produk_kategori',
        'produk_sub_kategori',
    ];

    protected $dates = ['created_at'];

    public function estimates()
    {
    return $this->hasMany(Estimates::class);
    }
}
