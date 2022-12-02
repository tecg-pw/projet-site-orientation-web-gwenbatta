<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id'
    ];

    public function translation(): HasMany
    {
        return $this->hasMany(CoordinateTranslation::class);
    }
}
