<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TaskController;

class project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','projectname','employee','deadline','client','status'];

    public function task()
    {
    return $this->belongsTo(Task::class);
    }
}
