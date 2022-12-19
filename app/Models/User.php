<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\EstimatesController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\InvoicesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'level',
        'password',
        'address',
        'mobile',
        'gender',
        'file',
        'last_seen',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function presensi()
    {
    return $this->hasMany(Absensi::class);
    }

    public function task()
    {
    return $this->hasMany(Task::class);
    }

    public function project()
    {
    return $this->hasMany(Project::class);
    }

    public function estimates()
    {
    return $this->hasMany(Estimates::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoices::class);
    }

    public function expenses()
    {
    return $this->hasMany(Expenses::class);
    }
}
