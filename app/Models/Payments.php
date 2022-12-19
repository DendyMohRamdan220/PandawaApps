<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;

class Payments extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $primaryKey = "id";
    protected $fillable = [
        'id,',
        'project_id',
        'paid_on',
        'currency',
        'total',
        'payment_gateway'
    ];

    protected $dates = ['created_at'];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }
}
