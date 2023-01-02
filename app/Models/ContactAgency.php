<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactAgency extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contactagencies';
    protected $fillable = ['name','name_supervisor','email','message','subject','pdf','softwares','languages'];
    protected $casts = ['softwares'=>'array', 'languages'=>'array'];
}