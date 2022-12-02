<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;

class Expenses extends Model
{
    use HasFactory;
    protected $table = "invoices";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'item_name', 'currency', 'unit_price',	'purchase_date', 'select_employee', 'project_id', 'purchase_from'];
    protected $dates = ['created_at'];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }
}