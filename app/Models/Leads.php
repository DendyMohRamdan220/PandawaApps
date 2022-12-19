<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;
    protected $table = "leads";
    protected $primaryKey = "id";
    protected $fillable = [
        'id,',
        'leads_name',
        'leads_email',
        'office_phone',
        'status',
        'next_follow_up',
        'company_name',
        'website',
        'mobile_phone',
        'city',
        'state',
        'country',
        'postal_code',
        'address'
    ];
    protected $dates = ['created_at'];
}
