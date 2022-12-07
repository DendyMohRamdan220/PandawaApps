<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;
use App\Models\User;
use App\Http\Controllers\ProjectController;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','taskname','project_id','user_id','startdate','duedate','status'];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}