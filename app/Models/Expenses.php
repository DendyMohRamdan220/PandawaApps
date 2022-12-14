<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;
use App\Models\User;

class Expenses extends Model
{
    use HasFactory;
    protected $table = "expenses";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'item_name', 'currency', 'unit_price',	'purchase_date', 'employee_id', 'project_id', 'purchase_from'];
    protected $dates = ['created_at'];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class);
    }
}
