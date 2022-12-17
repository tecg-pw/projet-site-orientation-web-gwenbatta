<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ["translation"];
    protected $fillable = [
        'id', 'people_id'
    ];

    public function translation(): HasMany
    {
        return $this->hasMany(TestimonialTranslation::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }
}
