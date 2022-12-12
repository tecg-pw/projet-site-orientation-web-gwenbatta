<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ["translation"];

    public function translation(): HasMany
    {
        return $this->hasMany(TagTranslation::class);
    }
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
