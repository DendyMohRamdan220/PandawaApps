<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = "attendances";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'user_id',
        'date',
        'clockin',
        'clockout',
        'officehours',
    ];
    
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
