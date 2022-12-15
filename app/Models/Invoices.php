<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;

class Invoices extends Model
{
    use HasFactory;
    protected $table = "invoices";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'invoice_number',
        'invoice_date',
        'due_date',
        'currency',
        'choose_client',
        'project_id',
        'shipping_address',
        'quantity',
        'unit_price',
        'total'
    ];

    protected $dates = ['created_at'];

    public function client()
    {
    return $this->belongsTo(User::class);
    }

    public function project()
    {
    return $this->belongsTo(Project::class);
    }
}
