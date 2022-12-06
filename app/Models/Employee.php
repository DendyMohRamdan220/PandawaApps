<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";
    protected $primaryKey = "id";
    protected $fillable = [
    'id','name','email','password','department','country','mobile','gender'];

    public function task()
    {
    return $this->belongsTo(Task::class);
    }

    public function project()
    {
    return $this->belongsTo(Project::class);
    }
}
