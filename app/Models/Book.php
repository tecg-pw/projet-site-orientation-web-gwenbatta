<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ["translation"];
    protected $fillable = [
        'id'
    ];
    public function translation(): HasMany
    {
        return $this->hasMany(BookTranslation::class);
    }
}

