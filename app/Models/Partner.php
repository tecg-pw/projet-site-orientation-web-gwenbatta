<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'slug' , 'mail', 'logo', 'adresse', 'locality', 'description', 'site_link', 'link_facebook','link_linkedin','link_instagram','members'
    ];
}