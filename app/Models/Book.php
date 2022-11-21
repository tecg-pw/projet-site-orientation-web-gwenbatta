<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'slug' , 'excerpt', 'description', 'gallery'
    ];
    protected $with = ["courses"];
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
