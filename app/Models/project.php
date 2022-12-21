<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'projectname',
        'user_id',
        'deadline',
        'user_id1',
        'status',
    ];

    protected $dates = ['created_at'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
