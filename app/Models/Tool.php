<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ["courses"];
    protected $fillable = [
        'name', 'slug' , 'link', 'excerpt'
    ];
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
