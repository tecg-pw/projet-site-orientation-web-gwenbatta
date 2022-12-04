<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Glossary extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id'
    ];
    protected $with = ["translation"];

    public function translation(): HasMany
    {
        return $this->hasMany(GlossaryTranslation::class);
    }
}
