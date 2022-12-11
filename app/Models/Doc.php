<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doc extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ["translation","courses"];
    protected $fillable = [
        'id'
    ];

    public function translation(): HasMany
    {
        return $this->hasMany(DocTranslation::class);
    }

        public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_doc','doc_id', 'course_id');
    }
}
