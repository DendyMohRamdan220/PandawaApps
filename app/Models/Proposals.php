<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\leads;
use App\Models\Products;

class Proposals extends Model
{
    use HasFactory;
    protected $table = "proposals";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'proposal_name', 'leads_id', 'products_id', 'valid_till', 'currency', 'select_product', 'quantity', 'unit_price', 'amount', 'total'];
    protected $dates = ['created_at'];

    public function leads()
    {
    return $this->belongsTo(leads::class);
    }

    public function products()
    {
    return $this->belongsTo(Products::class);
    }
}