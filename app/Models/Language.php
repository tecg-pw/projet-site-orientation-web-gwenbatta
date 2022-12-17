<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'id'
    ];
    protected $with = ["translation"];

    public function translation(): HasMany
    {
        return $this->hasMany(LanguageTranslation::class);
    }
    public function offers(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class,'language_offer','language_id','offer_id');
    }
}
