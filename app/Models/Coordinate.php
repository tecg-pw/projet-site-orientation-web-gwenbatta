<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'organization', 'employee_name', 'employee_firstname' , 'phone', 'job', 'mail'
    ];
}
