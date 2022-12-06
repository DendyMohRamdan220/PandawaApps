<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;
use App\Models\Employee;
use App\Http\Controllers\ProjectController;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','taskname','project_id','employee_id','startdate','duedate','status'];

    public function project()
    {
    return $this->belongsTo(Project::class);
    }

    public function employee()
    {
    return $this->belongsTo(Employee::class);
    }
}