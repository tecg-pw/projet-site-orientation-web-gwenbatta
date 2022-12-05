<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'people';

    //protected $with = ["translation","courses"];
    protected $with = ["translation"];

    protected $fillable = [
        'id'
    ];

    public function translation(): HasMany
    {
        return $this->hasMany(PersonTranslation::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_person', 'people_id', 'course_id');
    }
}

