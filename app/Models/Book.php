<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ["translation","course"];
    protected $fillable = [
        'id'
    ];
    public function translation(): HasMany
    {
        return $this->hasMany(BookTranslation::class);
    }

    public function course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class,'book_course','book_id', 'course_id');
    }
}

