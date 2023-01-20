<?php

namespace App\Models;

use App\Mail\ContactSended;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contacts';
    protected $dispatchesEvents = [
        'created' => ContactSended::class,
    ];
    protected $fillable = ['name','firstname','email','message','subject'];
}
